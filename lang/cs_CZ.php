<?php

/**
 * Czech language pack
 * @package maxskitter
 * @subpackage i18n
 */

i18n::include_locale_file('maxskitter', 'sk_SK');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['sk_SK'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['sk_SK'];
}
/*
$lang['cs_CZ']['Skitter']['velocity'] = 'Velocity of animation';
$lang['cs_CZ']['Skitter']['interval'] = 'Interval between transitions (ms)';
$lang['cs_CZ']['Skitter']['animation'] = 'Used animation';
$lang['cs_CZ']['Skitter']['numbers'] = 'Numbers display';
$lang['cs_CZ']['Skitter']['navigation'] = 'Navigation display';
$lang['cs_CZ']['Skitter']['label'] = 'Label display';
$lang['cs_CZ']['Skitter']['easing_default'] = 'Easing default - e.g \'easeOutBack\'';
$lang['cs_CZ']['Skitter']['animateNumberOut'] = 'Animation/style number/dot';
$lang['cs_CZ']['Skitter']['animateNumberOver'] = 'Animation/style hover number/dot';
$lang['cs_CZ']['Skitter']['animateNumberActive'] = 'Animation/style active number/dot';
$lang['cs_CZ']['Skitter']['thumbs'] = 'Navigation with thumbs';
$lang['cs_CZ']['Skitter']['hideTools'] = 'Hide numbers and navigation';
$lang['cs_CZ']['Skitter']['fullscreen'] = 'Fullscreen mode';
$lang['cs_CZ']['Skitter']['dots'] = 'Navigation with dots';
$lang['cs_CZ']['Skitter']['width_label'] = 'Width label';
$lang['cs_CZ']['Skitter']['show_randomly'] = 'Randomly sliders';

$lang['cs_CZ']['Skitter']['InternalLink'] = 'Internal Link';
$lang['cs_CZ']['Skitter']['InternalLinkSelect'] = '-- select Internal Link --';
$lang['cs_CZ']['Skitter']['ExternalLink'] = 'External Link';
$lang['cs_CZ']['Skitter']['Label'] = 'Label';
$lang['cs_CZ']['Skitter']['notRecursive'] = 'Do not grab slides from parent page!';
 */
// EOF