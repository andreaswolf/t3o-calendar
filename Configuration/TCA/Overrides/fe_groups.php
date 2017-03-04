<?php
/**
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

$labelPrefix = 'LLL:EXT:calendar/Resources/Private/Language/Database.xlf:fe_groups';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_groups',
    'tx_calendar_eventcategories',
    '',
    'after:TSconfig'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'calendar',
    'fe_groups',
    'tx_calendar_eventcategories'
);

$GLOBALS['TCA']['fe_groups']['columns']['tx_calendar_eventcategories']['label'] = $labelPrefix . '.tx_calendar_eventcategories';
