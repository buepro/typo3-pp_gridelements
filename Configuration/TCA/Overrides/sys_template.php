<?php

defined('TYPO3_MODE') || die();

(function ($_EXTKEY) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $_EXTKEY,
        'Configuration/TypoScript/DataProcessingLibContentElement',
        'PP-Gridelements w/DataProcessing'
    );
    /**
     * @deprecated since version 11.1.2, will be removed in version 12.0.0
     */
    (function ($_EXTKEY) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript',
            'PP-Gridelements DEPRECIATED - Gridelements CEs'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript/Rendering',
            'PP-Gridelements DEPRECIATED - Gridelements rendering (include as last)'
        );
    })($_EXTKEY);
})('pp_gridelements');