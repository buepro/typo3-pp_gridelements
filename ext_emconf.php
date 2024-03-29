<?php

/*
 * This file is part of the composer package buepro/typo3-pp-gridelements.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Gridelements elements',
    'description'      => 'Provides content elements powered by gridelements and bootstrap. Available elements: container, columns, tabs, accordion, tile unit and card.',
    'category'         => 'misc',
    'version'          => '1.2.0-dev',
    'state'            => 'stable',
    'clearCacheOnLoad' => 1,
    'author'           => 'Roman Büchler',
    'author_email'     => 'rb@buechler.pro',
    'constraints'      => [
        'depends'   => [
            'typo3'         => '10.4.11-10.4.99',
            'gridelements'  => '10.0.0-10.99.99',
            'vhs'           => '6.0.0-6.99.99',
        ],
        'conflicts' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Buepro\\PpGridelements\\' => 'Classes'
        ],
    ],
];
