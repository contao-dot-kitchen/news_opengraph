<?php

$GLOBALS['TL_DCA']['tl_news']['palettes']['__selector__'][] = 'addOGImage';
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] .= ';{opengraph_legend:hide},addOGImage';

$GLOBALS['TL_DCA']['tl_news']['subpalettes']['addOGImage'] = 'ogSRC';

$GLOBALS['TL_DCA']['tl_news']['fields']['addOGImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['addImage'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_news']['fields']['ogSRC'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'extensions'=>Config::get('validImageTypes'), 'fieldType'=>'radio', 'mandatory'=>true),
	'sql'                     => "binary(16) NULL"
);