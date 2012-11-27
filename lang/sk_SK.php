<?php

/**
 * Slovak (Slovakia) language pack
 * @package maxskitter
 * @subpackage i18n
 */

i18n::include_locale_file('maxskitter', 'en_US');

global $lang;

if(array_key_exists('sk_SK', $lang) && is_array($lang['sk_SK'])) {
	$lang['sk_SK'] = array_merge($lang['en_US'], $lang['sk_SK']);
} else {
	$lang['sk_SK'] = $lang['en_US'];
}

$lang['sk_SK']['Skitter']['velocity'] = 'Opakovanie animácie';
$lang['sk_SK']['Skitter']['interval'] = 'Interval medzi zmenami obrázkov (ms)';
$lang['sk_SK']['Skitter']['animation'] = 'Použitá animácia';
$lang['sk_SK']['Skitter']['animationDefault'] = '-- Prednastavená animácia --';
$lang['sk_SK']['Skitter']['numbers'] = 'Zobrazenie číselnej navigácie';
$lang['sk_SK']['Skitter']['navigation'] = 'Zobrazenie navigácie so šípkami (vľavo/vpravo)';
$lang['sk_SK']['Skitter']['label'] = 'Zobraziť popisok (ak je zadefinovaný)';
$lang['sk_SK']['Skitter']['easing_default'] = 'Easing efekt - napr.: easeOutBack';
$lang['sk_SK']['Skitter']['animateNumberOut'] = 'Animation/style number/dot';
$lang['sk_SK']['Skitter']['animateNumberOver'] = 'Animation/style hover number/dot';
$lang['sk_SK']['Skitter']['animateNumberActive'] = 'Animation/style active number/dot';
$lang['sk_SK']['Skitter']['thumbs'] = 'Navigácia s náhľadovými obrázkami';
$lang['sk_SK']['Skitter']['hideTools'] = 'Skryť navigáciu so šípkami i číslami/bodkami';
$lang['sk_SK']['Skitter']['fullscreen'] = 'Fullscreen mode';
$lang['sk_SK']['Skitter']['dots'] = 'Namiesto čísiel použiť bodky v navigácii';
$lang['sk_SK']['Skitter']['width_label'] = 'Šírka popisku - napr.: 100px';
$lang['sk_SK']['Skitter']['show_randomly'] = 'Zobraziť obrázky v náhodnom poradí';

$lang['sk_SK']['Skitter']['InternalLink'] = 'Interný odkaz';
$lang['sk_SK']['Skitter']['InternalLinkSelect'] = '-- vyberte Interný odkaz --';
$lang['sk_SK']['Skitter']['ExternalLink'] = 'Externý odkaz';
$lang['sk_SK']['Skitter']['Label'] = 'Popisok';
$lang['sk_SK']['Skitter']['notRecursive'] = 'Nepreberať obrázky z nadradených stránok!';
 
// EOF