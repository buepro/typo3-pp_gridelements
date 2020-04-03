<?php

defined('TYPO3_MODE') || die();

(function () {
    $columnsOverrides = [];
    $columnsOverrides['frame_class']['config'] = [
        'default' => 'none',
    ];
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1'] = array_merge(
        $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1'],
        ['columnsOverrides' => $columnsOverrides]
    );
})();
