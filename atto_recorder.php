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
 * Webcam recording and uploader script for Atto sub-plugin.
 *
 * @package   atto_yukaltura
 * @copyright (C) 2019-2022 Yamaguchi University <gh-cc@mlex.cc.yamaguchi-u.ac.jp>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . '/config.php');
require_once($CFG->dirroot . '/local/yukaltura/locallib.php');

defined('MOODLE_INTERNAL') || die();

header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache');

global $USER, $SESSION, $COURSE;

$PAGE->set_context(context_system::instance());
$header  = format_string($SITE->shortname). ": " . get_string('webcam_hdr', 'local_yumymedia');

$basedirectory = '/lib/editor/atto/plugins/yukaltura';
$baseurl = $basedirectory . '/atto_selector.php';

$PAGE->set_url($baseurl);
$PAGE->set_course($COURSE);
$PAGE->set_pagetype('module_recorder');
$PAGE->set_pagelayout('embedded');
$PAGE->set_title($header);
$PAGE->set_heading($header);
$PAGE->add_body_class('mymedia-index');
$PAGE->requires->css($basedirectory . '/css/atto_yukaltura.css');
$PAGE->requires->js_call_amd('atto_yukaltura/attorecorder', 'init', null);

require_login();

echo $OUTPUT->header();

$context = context_user::instance($USER->id);

require_capability('local/yumymedia:view', $context, $USER);

$output = '';

if (local_yukaltura_get_mymedia_permission() == false) {  // When mymedia is disabled.
    $output .= get_string('permission_disable', 'local_yumymedia');
} else if (local_yukaltura_get_webcam_permission() == false) {  // When webcam recording is disabled.
    $output .= get_string('webcam_disable', 'local_yumymedia');
} else {
    $renderer = $PAGE->get_renderer('local_yumymedia');
    $output .= $renderer->create_uploader_markup('webcam', 'atto');
}

echo $output;

echo $OUTPUT->footer();
