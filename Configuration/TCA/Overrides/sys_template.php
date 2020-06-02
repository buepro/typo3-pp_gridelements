<?php

/*
 * This file is part of the package buepro/pp_gridelements.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

(function ($_EXTKEY) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $_EXTKEY,
        'Configuration/TypoScript/DataProcessingLibContentElement',
        'PP-Gridelements - w/DataProcessing'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $_EXTKEY,
        'Configuration/TypoScript/Pizpalue',
        'PP-Gridelements - Pizpalue'
    );
    /**
     * @deprecated since version 1.0.0, will be removed in version 2.0.0
     */
    (function ($_EXTKEY) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript',
            'PP-Gridelements - DEPRECIATED - Gridelements CEs'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Rendering',
            'PP-Gridelements - DEPRECIATED - Gridelements rendering (include as last)'
        );
    })($_EXTKEY);
})('pp_gridelements');
