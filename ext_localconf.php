<?php

defined('TYPO3_MODE') || die();

(function () {

    /**
     * Add pageTS
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:pp_gridelements/Configuration/TsConfig/Page.tsconfig"'
    );

    /**
     * Register icons for gridelements
     */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $icons = ['ContainerFixed', 'Container', 'Columns2', 'Columns3', 'Columns4', 'Tabs', 'Accordion', 'TileUnit', 'Card'];
    foreach ($icons as $iconName) {
        $iconRegistry->registerIcon(
            $iconName,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:pp_gridelements/Resources/Public/Icons/' . $iconName . '.svg']
        );
    }

    /**
     * Adjust content element form in BE
     *
     * Modify flexform fields since core 8.5 via formEngine: Inject a data provider
     * between TcaFlexPrepare and TcaFlexProcess
     *
     */
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
    [\Buepro\PpGridelements\Backend\FormDataProvider\ContentFormDataProvider::class] = [
        'depends' => [
            \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexPrepare::class,
        ],
        'before' => [
            \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexProcess::class,
        ],
    ];
})();
