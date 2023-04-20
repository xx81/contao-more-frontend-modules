<?php

declare(strict_types=1);

/*
 * This file is part of [xx81/contao-more-frontend-modules-bundle].
 *
 * (c) Benjamin Geiger
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['mfmimage'] = '{title_legend},name,type;{source_legend},singleSRC,imgSize,imageMargin,fullsize,overwriteMeta;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,noSearch';
$GLOBALS['TL_DCA']['tl_module']['palettes']['mfmtext'] = '{title_legend},name,type;{text_legend},text;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,noSearch';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'overwriteMeta';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['overwriteMeta'] = 'alt,imageTitle,imageUrl,caption';

$GLOBALS['TL_DCA']['tl_module']['fields']['imageMargin'] = [
    'exclude' => true,
    'inputType' => 'trbl',
    'options' => ['px', '%', 'em', 'rem'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'clr w50',
    ],
    'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['overwriteMeta'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => [
        'submitOnChange' => true,
        'tl_class' => 'w50 clr',
    ],
    'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['alt'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];
$GLOBALS['TL_DCA']['tl_module']['fields']['imageTitle'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];
$GLOBALS['TL_DCA']['tl_module']['fields']['imageUrl'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'rgxp' => 'url',
        'decodeEntities' => true,
        'maxlength' => 2048,
        'dcaPicker' => true,
        'tl_class' => 'w50',
    ],
    'sql' => ['type' => 'text', 'notnull' => false],
];
$GLOBALS['TL_DCA']['tl_module']['fields']['caption'] = [
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'allowHtml' => true,
        'tl_class' => 'w50',
    ],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];
$GLOBALS['TL_DCA']['tl_module']['fields']['fullsize'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50 m12'],
    'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['text'] = [
    'search' => true,
    'inputType' => 'textarea',
    'eval' => [
        'mandatory' => true,
        'rte' => 'tinyMCE',
        'helpwizard' => true,
    ],
    'explanation' => 'insertTags',
    'sql' => ['type' => 'text', 'notnull' => false],
];
$GLOBALS['TL_DCA']['tl_module']['fields']['noSearch'] = [
    'exclude' => true,
    'filter' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];
