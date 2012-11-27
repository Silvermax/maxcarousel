<?php

/**
 * NL language pack
 * @package maxskitter
 * @subpackage i18n
 */

i18n::include_locale_file('maxskitter', 'en_US');

global $lang;

if(array_key_exists('nl_NL', $lang) && is_array($lang['nl_NL'])) {
	$lang['nl_NL'] = array_merge($lang['en_US'], $lang['nl_NL']);
} else {
	$lang['nl_NL'] = $lang['en_US'];
}
/*
$lang['nl_NL']['Skitter']['velocity'] = 'Velocity of animation';
$lang['nl_NL']['Skitter']['interval'] = 'Interval between transitions (ms)';
$lang['nl_NL']['Skitter']['animation'] = 'Used animation';
$lang['nl_NL']['Skitter']['numbers'] = 'Numbers display';
$lang['nl_NL']['Skitter']['navigation'] = 'Navigation display';
$lang['nl_NL']['Skitter']['label'] = 'Label display';
$lang['nl_NL']['Skitter']['easing_default'] = 'Easing default - e.g \'easeOutBack\'';
$lang['nl_NL']['Skitter']['animateNumberOut'] = 'Animation/style number/dot';
$lang['nl_NL']['Skitter']['animateNumberOver'] = 'Animation/style hover number/dot';
$lang['nl_NL']['Skitter']['animateNumberActive'] = 'Animation/style active number/dot';
$lang['nl_NL']['Skitter']['thumbs'] = 'Navigation with thumbs';
$lang['nl_NL']['Skitter']['hideTools'] = 'Hide numbers and navigation';
$lang['nl_NL']['Skitter']['fullscreen'] = 'Fullscreen mode';
$lang['nl_NL']['Skitter']['dots'] = 'Navigation with dots';
$lang['nl_NL']['Skitter']['width_label'] = 'Width label';
$lang['nl_NL']['Skitter']['show_randomly'] = 'Randomly sliders';

$lang['nl_NL']['Skitter']['InternalLink'] = 'Internal Link';
$lang['nl_NL']['Skitter']['InternalLinkSelect'] = '-- select Internal Link --';
$lang['nl_NL']['Skitter']['ExternalLink'] = 'External Link';
$lang['nl_NL']['Skitter']['Label'] = 'Label';
$lang['nl_NL']['Skitter']['notRecursive'] = 'Do not grab slides from parent page!';
 */
// EOF