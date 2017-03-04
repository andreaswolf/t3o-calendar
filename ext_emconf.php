<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple calendar',
    'description' => 'A simple calendar for typo3.org.',
    'category' => 'plugin',
    'author' => 'Andreas Wolf',
    'author_email' => 'dev@a-w.io',
    'shy' => '',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'cms' => '8.5.0-',
            'extbase' => '',
            'fluid' => '',
        ],
    ],
];
