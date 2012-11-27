<?php

/**
 * German language pack
 * @package maxskitter
 * @subpackage i18n
 */

i18n::include_locale_file('maxskitter', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}
/*
$lang['de_DE']['Skitter']['velocity'] = 'Velocity of animation';
$lang['de_DE']['Skitter']['interval'] = 'Interval between transitions (ms)';
$lang['de_DE']['Skitter']['animation'] = 'Used animation';
$lang['de_DE']['Skitter']['numbers'] = 'Numbers display';
$lang['de_DE']['Skitter']['navigation'] = 'Navigation display';
$lang['de_DE']['Skitter']['label'] = 'Label display';
$lang['de_DE']['Skitter']['easing_default'] = 'Easing default - e.g \'easeOutBack\'';
$lang['de_DE']['Skitter']['animateNumberOut'] = 'Animation/style number/dot';
$lang['de_DE']['Skitter']['animateNumberOver'] = 'Animation/style hover number/dot';
$lang['de_DE']['Skitter']['animateNumberActive'] = 'Animation/style active number/dot';
$lang['de_DE']['Skitter']['thumbs'] = 'Navigation with thumbs';
$lang['de_DE']['Skitter']['hideTools'] = 'Hide numbers and navigation';
$lang['de_DE']['Skitter']['fullscreen'] = 'Fullscreen mode';
$lang['de_DE']['Skitter']['dots'] = 'Navigation with dots';
$lang['de_DE']['Skitter']['width_label'] = 'Width label';
$lang['de_DE']['Skitter']['show_randomly'] = 'Randomly sliders';

$lang['de_DE']['Skitter']['InternalLink'] = 'Internal Link';
$lang['de_DE']['Skitter']['InternalLinkSelect'] = '-- select Internal Link --';
$lang['de_DE']['Skitter']['ExternalLink'] = 'External Link';
$lang['de_DE']['Skitter']['Label'] = 'Label';
$lang['de_DE']['Skitter']['notRecursive'] = 'Do not grab slides from parent page!';
 */
// EOF