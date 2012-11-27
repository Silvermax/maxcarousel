<?php

/**
 * GB language pack
 * @package maxskitter
 * @subpackage i18n
 */

i18n::include_locale_file('maxskitter', 'en_US');

global $lang;

if(array_key_exists('en_GB', $lang) && is_array($lang['en_GB'])) {
	$lang['en_GB'] = array_merge($lang['en_US'], $lang['en_GB']);
} else {
	$lang['en_GB'] = $lang['en_US'];
}
/*
$lang['en_GB']['Skitter']['velocity'] = 'Velocity of animation';
$lang['en_GB']['Skitter']['interval'] = 'Interval between transitions (ms)';
$lang['en_GB']['Skitter']['animation'] = 'Used animation';
$lang['en_GB']['Skitter']['numbers'] = 'Numbers display';
$lang['en_GB']['Skitter']['navigation'] = 'Navigation display';
$lang['en_GB']['Skitter']['label'] = 'Label display';
$lang['en_GB']['Skitter']['easing_default'] = 'Easing default - e.g \'easeOutBack\'';
$lang['en_GB']['Skitter']['animateNumberOut'] = 'Animation/style number/dot';
$lang['en_GB']['Skitter']['animateNumberOver'] = 'Animation/style hover number/dot';
$lang['en_GB']['Skitter']['animateNumberActive'] = 'Animation/style active number/dot';
$lang['en_GB']['Skitter']['thumbs'] = 'Navigation with thumbs';
$lang['en_GB']['Skitter']['hideTools'] = 'Hide numbers and navigation';
$lang['en_GB']['Skitter']['fullscreen'] = 'Fullscreen mode';
$lang['en_GB']['Skitter']['dots'] = 'Navigation with dots';
$lang['en_GB']['Skitter']['width_label'] = 'Width label';
$lang['en_GB']['Skitter']['show_randomly'] = 'Randomly sliders';

$lang['en_GB']['Skitter']['InternalLink'] = 'Internal Link';
$lang['en_GB']['Skitter']['InternalLinkSelect'] = '-- select Internal Link --';
$lang['en_GB']['Skitter']['ExternalLink'] = 'External Link';
$lang['en_GB']['Skitter']['Label'] = 'Label';
$lang['en_GB']['Skitter']['notRecursive'] = 'Do not grab slides from parent page!';
 */
// EOF