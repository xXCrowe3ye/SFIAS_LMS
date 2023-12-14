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
 * Strings for local_learning_analytics
 *
 * @package     local_learning_analytics
 * @copyright   Lehr- und Forschungsgebiet Ingenieurhydrologie - RWTH Aachen University
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Learning Analytics';

$string['privacy:metadata'] = 'Dieses Plugin speichert keine personenbezogenen Daten.';

$string['learning_analytics'] = 'Learning Analytics';
$string['navigationlink'] = 'Zugriffsstatistiken';

$string['subplugintype_lareport'] = 'L.A. Bericht';
$string['subplugintype_lareport_plural'] = 'L.A. Berichte';
$string['subplugintype_lalog'] = 'L.A. Log';
$string['subplugintype_lalog_plural'] = 'L.A. Logs';


$string['show_full_list'] = 'Mehr anzeigen';

// Terms also used by subplugins
$string['learners'] = 'Lernende';
$string['sessions'] = 'Sitzungen';
$string['hits'] = 'Aufrufe'; // "Aufrufe"

// Settings
$string['general_settings'] = 'Allgemeine Einstellungen';
$string['setting_status_description'] = 'Der Wert bestimmt ob das User Interface genutzt werden kann und ob ein Link im Navigationsmenü gezeigt wird. Standardmäßig, der Link im Navigationsmenü und die Seite selber sind nur aktiv, wenn das Loggen für den Kurs aktiviert ist. Diese Option kann z.B. genutzt werden um alle Kurse zu loggen, aber nur in bestimmten Kursen das User Interface anzuzeigen.';
$string['setting_status_option_show_if_enabled'] = 'Navigationslink zeigen, wenn Logging für den Kurs aktiviert ist';
$string['setting_status_option_show_courseids'] = 'Navigationslink zeigen, wenn der Kurs in course_ids (nächste Option) definiert ist';
$string['setting_status_option_show_always'] = 'Navigationslink in allen Kursen zeigen, selbst wenn das Loggen deaktiviert ist (nützlich falls Daten zuvor bereits geloggt wurden)';
$string['setting_status_option_hidelink'] = 'Navigationslink nicht anzeigen, aber die Seite selber aktivieren (wer den Link kennt, kann weiterhin die Seite nutzen)';
$string['setting_status_option_disable'] = 'Navigationslink nicht anzeigen und die Seite selber in allen Kursen deaktivieren';
$string['setting_status_course_customfield'] = 'Eintrag in den Kurseinstellungen hinzufügen, so dass die Kursinhaber selber entscheiden können';

$string['setting_course_ids_description'] = 'Diese Option kann zusammen mit der zweiten Einstellung für "status" genutzt werden um zu entscheiden in welchen Kursen das User Interface aktiviert sein soll.';

$string['dataprivacy_threshold_description'] = 'Bestimmt wie viele Datenpunkte ein Datensatz haben muss, bevor er angezeigt wird.';
$string['navigation_position_beforekey_description'] = 'Erlaubt es die Position in der Navigation anzugeben, an der der Link zur Seite erscheinen soll. Standardmäßig, wir der Link vor dem ersten "section"-Link angezeigt. Beispielwert: <code>grades</code> um den Link über den Link zu den Bewertungen anzuzeigen. Um herauszufinden, wie der "key" eines Navigationslinks ist, können die Entwicklertools des Browsers genutzt werden. Hierzu einen Rechtsklick auf den gewünschten Link machen, <em>Untersuchen</em> auswählen und dann das Attribut <code>data-key</code> des entsprechenden <code>a</code>-Elementes nutzen.';
$string['setting_student_rolenames_description'] = 'Falls die Rolle <code>student</code> nicht die passende Rolle für Studierende/Nutzer ist oder es mehrere Rollen gibt, die zutreffend sind, können hier die passenden Rollen angegeben werden. Falls mehrere Rollen zutreffen, sollte ein einzelnes Komma genutzt werden um die Rollen zu trennen. Beispiel: <code>student,customrole</code>';

$string['setting_student_enrols_groupby_description'] = 'Für die Statistik "Vorher/Parallel gehört" kann durch die Option bestimmt werden, welche Kurse zusammengefasst werden sollen. Die Auswahl dieser Option legt auch den angezeigten Namen in der Tabelle fest.';
$string['setting_dashboard_boxes'] = 'Bestimmt welche Boxen im Dashboard angezeigt werden, in welcher Reihenfolge und wie groß die Boxen sind. Die Angabe erfolgt im Format <code>reportname:breite</code>, getrennt durch Kommas. Eine Zeile hat eine maximale Breite von 12 Einheiten, anschließend wird umgebrochen. Beispiel: <code>learners:8,activities:4</code> zeigt zwei Boxen im Dashboard an, wobei die erste deutlich breiter ist als die zweite. Der Wert muss normalweise nur verändert werden, wenn weitere Subplugins genutzt werden.';

// Help
$string['help_title'] = 'Hilfe';
$string['help_take_tour'] = 'Interaktive Vorstellung starten';
$string['help_text'] = 'Auf der Seite "Zugriffsstatistiken" des Learning Analytics-Angebotes werden verschiedene Kennzahlen des Kurses dargestellt.

Die dargestellten Statistiken sind live und enthalten sowohl selber erhobenen Daten als auch Moodle-eigene Daten. Alle vom Learning Analytics-Angebot erhobenen Daten werden anonymisiert erhoben und erlauben keine Rückverfolgung zu einzelnen Nutzern.';

$string['help_faq'] = 'Häufig gestellte Fragen';

$string['help_faq_personal_data_question'] = 'Warum werden keine personalisierten Statistiken angezeigt, wie z.B. die Klicks pro Nutzer?';
$string['help_faq_personal_data_answer'] = 'Aus Datenschutzgründen erhebt das Learning Analytics-Angebot keine personalisierten Daten. Daher enthalten die meisten dargestellten Statistiken (z.B. die meist genutzten Aktivitäten) nur Information darüber wie oft eine Resource aufgerufen wurde, aber nicht von wie vielen Teilnehmer/innen.
Eine Ausnahme stellen die Statistiken zu Teilnehmer/innen und Tests/Aufgaben da, da hier auch Moodle-eigene Daten dargestellt werden.';

$string['help_faq_week_start_question'] = 'Warum entspricht die erste Woche in der Darstellung im Dashboard nicht dem tatsächlichen Vorlesungsstart?';
$string['help_faq_week_start_answer'] = 'Die Darstellung im Dashboard richtet sich nach der Einstellung "Kursbeginn" in den Kurseinstellungen. Sollte das dort vorgegebene Datum nicht dem tatsächlichen Start der Vorlesung entsprechen, wird auch die Anzeige im Dashboard nicht korrekt sein.
Der Manager des Kurses kann den Kursstart in den Kurseinstellungen (unter Allgemeines / Kursbeginn) korrigieren.';

$string['help_faq_data_storage_question'] = 'Welche Daten werden durch das Angebot gespeichert und dargestellt?';
$string['help_faq_data_storage_answer'] = 'Die dargestellten Daten stammen aus zwei Datenquellen.
Beide Quellen werden in der internen Moodle-Datenbank gespeichert.
Bei der ersten Datenquelle handelt es sich um interne Moodle-Datensätze, wie z.B. die Anzahl an Teilnehmer/innen im Kurs (linke Box im Dashboard).
Diese Datensätze lassen sich zum Teil auch auf anderen Moodle-Seiten einsehen und werden auf diesen Seiten anders visualisiert.
Bei der zweiten Datenquelle handelt es sich um Daten, die eigens für die Darstellung der Zugriffsstatistiken erhoben werden.
Alle Daten, die dafür erhoben werden, werden anonymisiert gespeichert und erlauben keine Rückverfolgung zu einzelnen Nutzern.
Konkret werden bei jedem Aufruf in Moodle folgende Daten gespeichert:';
$string['help_faq_data_storage_answer_list'] = 'Typ der Aktion (z.B. "Ressource angesehen")
Uhrzeit (sekundengenau)
Betroffener Kurs in dem die Aktion durchgeführt wurde
Betroffener Kontext (z.B. die Ressource die angesehen wurde)
Betriebssystem und Browser (z.B. "Windows 10" und "Firefox"), detaillierte Browser- oder Betriebssystemversionen werden nicht gespeichert';

$string['help_faq_privacy_threshold_question'] = 'Warum werden einige Werte als "< {$a}" angezeigt?';
$string['help_faq_privacy_threshold_answer'] = 'Aus Datenschutzgründen werden aggregierte Daten erst dargestellt, wenn mindestens {$a} Datensätze vorhanden sind.';

$string['help_faq_visibility_question'] = 'Wer kann auf die Zugriffsstatistiken zugreifen?';
$string['help_faq_visibility_answer'] = 'Um größtmögliche Transparenz zu gewährleisten, können die angezeigten Daten sowohl von den Managern/Inhabern als auch von den Teilnehmer/innen des Kurses eingesehen werden.';

$string['help_faq_datapoints_question'] = 'Warum sind die Zugriffszahlen so unterschiedlich für verschiedene Typen von Materialien?';
$string['help_faq_datapoints_answer'] = 'Die dargestellten Zahlen zeigen die Anzahl an Zugriffen. Diese können je nach Materialtyp stark variieren.
So wird beim Download eines PDFs nur ein Zugriff gespeichert.
Bei einem Test, dessen Fragen auf mehrere Seiten verteilt sind, wird es dagegen zu mehreren Zugriffen bei einem einzigen Testdurchlauf kommen.';

$string['help_faq_developer_question'] = 'Wer entwickelt das Angebot und wo kann ich weitere Informationen erhalten?';
$string['help_faq_developer_answer'] = 'Die Entwicklung des Learning Analytics-Angebotes geschieht durch das Center für Lehr- und Lernservices (CLS) der RWTH Aachen University.
Die Entwicklung ist Open Source. Sie können die eingesetzten Algorithmen daher selber überprüfen. Auf den folgenden Seiten können Sie auf weitere Informationen zugreifen:';

// Tour
$string['tour_title'] = 'Learning Analytics';
$string['tour_dashboard_graph'] = 'Der Verlauf zeigt die Anzahl aller Zugriffe in der jeweiligen Woche an.

Handelt es sich um einen aktuellen Kurs, so wird der Beginn der laufenden Woche durch eine gestrichelte Linie gekennzeichnet. Zahlen der laufenden Woche werden nicht angezeigt.';
$string['tour_dashboard_boxes'] = 'Im unteren Bereich werden wichtige Kennzahlen des Kurses dargestellt.

Darüber hinaus enthält jede Box einen Link durch den weiterführende Informationen angezeigt werden können.';
$string['tour_box_learners'] = 'Die erste Anzeige gibt die Gesamtzahl an eingeschriebenen Teilnehmer/innen wieder. Unterhalb der großen Zahl, ist die Veränderung zur Vorwoche dargstellt.';
$string['tour_box_learnerslink'] = 'Durch einen Klick auf den Link werden weiterführende Informationen zu den Teilnehmer/innen angezeigt.';
$string['tour_box_hits'] = 'Diese Darstellung stellt die Anzahl an Aufrufen innerhalb der letzten 7 Tage dar. Unterhalb ist die Veränderungen du den vorherigen 7 Tagen angegeben.

Durch einen Klick auf den Link lässt sich eine Heatmap aufrufen, welche die Anzahl an Aufrufen über das gesamte Semester visualisiert.';
$string['tour_box_quiz_assign'] = 'Hier wird die Anzahl an Test-Versuchen und Aufgaben-Abgaben der letzten 7 Tage angezeigt. Unterhalb ist erneut die Veränderungen du den vorherigen 7 Tagen angegeben.

Durch einen Klick auf den Link lassen sich Details zu den Tests und Aufgaben des Kurses anzeigen.';
$string['tour_activities'] = 'Die letzte Auswertung zeigt die drei meistgenutzten Aktivitäten der letzten 7 Tage.

Durch einen Klick auf den Link lassen sich Details zu den Aktivitäten des Kurses anzeigen.';

$string['tour_more_information'] = 'Die interaktive Tour ist hiermit beendet. Wir hoffen wir konnten einen guten Überblick über die Funktionen verschaffen.

Weitere Antworten auf häufig gestellte Fragen finden Sie auf der Hilfeseite.';

$string['learning_analytics:view_statistics'] = 'Anzeige von Zugriffsstatistiken in Kursen';

// custom field
$string['customfield_category_name'] = 'Learning Analytics';
$string['customfield_category_description'] = 'Diese Kategorie wurde automatisch durch das Learning Analytics Plugin erstellt (local_learning_analytics). Sie sollten diese Kategorie nicht manuell löschen.';
$string['customfield_field_name'] = 'Zugriffsstatistiken aktivieren';
$string['customfield_field_description'] = 'Die Aktivierung fügt der Kursnavigation den Link "Zugriffsstatistiken" hinzu.';
// custom field admin information
$string['admin_customfield_info'] = 'Den Namen der Option in den Kurseinstellungen können Sie selbst ändern, indem Sie diese auf den folgenden Seiten umbenennen:';
$string['admin_customfield_category'] = 'Umbenennen der Kategorie';
$string['admin_customfield_category_hint'] = 'durch Klick auf das Stift-Symbol kann die Kategorie umbenannt werden';
$string['admin_customfield_option'] = 'Umbenennen der Option';
$string['admin_customfield_option_hint'] = 'nur der Name und die Beschreibung dürfen verändert werden';
$string['admin_customfield_no_manual_delete'] = 'Sie dürfen die Kategorie oder die Option nicht löschen. Sie dürfen sie nur umbenennen. Wenn Sie die Option entfernen möchten, ändern Sie stattdessen den obigen Status.';