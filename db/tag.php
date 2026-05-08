<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Tag areas in component local_trackerdemo.
 *
 * @package     local_trackerdemo
 * @copyright   2026 Catalyst IT Australia Pty Ltd
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tagareas = [
    [
        'itemtype' => 'trackerdemo_item',
        'component' => 'local_trackerdemo',
        'collection' => 'trackerdemo',
        'searchable' => 0,
        'showstandard' => core_tag_tag::STANDARD_ONLY,
    ],
];
