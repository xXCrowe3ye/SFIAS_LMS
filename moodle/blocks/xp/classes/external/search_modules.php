<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External function.
 *
 * @package    block_xp
 * @copyright  2018 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_xp\external;

use block_xp\di;
use core_text;

/**
 * External function.
 *
 * @package    block_xp
 * @copyright  2018 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class search_modules extends external_api {

    /**
     * External function parameters.
     *
     * @return external_function_parameters
     */
    public static function execute_parameters() {
        return new external_function_parameters([
            'courseid' => new external_value(PARAM_INT),
            'query' => new external_value(PARAM_RAW),
        ]);
    }

    /**
     * Search modules.
     *
     * @param int $courseid The course ID.
     * @param string $query The query.
     * @return array
     */
    public static function execute($courseid, $query) {
        $params = self::validate_parameters(self::execute_parameters(), compact('courseid', 'query'));
        $courseid = $params['courseid'];
        $query = core_text::strtolower(trim($params['query']));

        // We fetch the world, but do not update the $courseid as per world::get_courseid, because
        // if we are using the plugin for the whole site, then users should be able to search in
        // any course. And if we're using the plugin per course, then they need permissions within
        // that course.
        $world = di::get('course_world_factory')->get_world($courseid);
        self::validate_context($world->get_context());
        $world->get_access_permissions()->require_manage();

        $modinfo = get_fast_modinfo($courseid);
        $courseformat = course_get_format($courseid);
        $sections = [];

        foreach ($modinfo->get_sections() as $sectionnum => $cmids) {

            $modules = [];
            foreach ($cmids as $cmid) {
                $cm = $modinfo->get_cm($cmid);
                $name = $cm->get_formatted_name();
                $comparablename = core_text::strtolower($name);

                if ($query == '*' || strpos($comparablename, $query) !== false) {
                    $modules[] = [
                        'cmid' => $cm->id,
                        'contextid' => $cm->context->id,
                        'name' => $cm->get_formatted_name()
                    ];
                }
            }

            if (!empty($modules)) {
                $sections[] = [
                    'name' => $courseformat->get_section_name($sectionnum),
                    'modules' => $modules
                ];
            }
        }

        return $sections;
    }

    /**
     * External function return values.
     *
     * @return external_value
     */
    public static function execute_returns() {
        return new external_multiple_structure(new external_single_structure([
            'name' => new external_value(PARAM_RAW, 'The section name'),
            'modules' => new external_multiple_structure(new external_single_structure([
                'cmid' => new external_value(PARAM_INT),
                'contextid' => new external_value(PARAM_INT),
                'name' => new external_value(PARAM_RAW),
            ]))
        ]));
    }

}
