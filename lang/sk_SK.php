<?php

/**
 * Slovak (Slovakia) language pack
 * @package maxcarousel
 * @subpackage i18n
 */

i18n::include_locale_file('maxcarousel', 'en_US');

global $lang;

if(array_key_exists('sk_SK', $lang) && is_array($lang['sk_SK'])) {
	$lang['sk_SK'] = array_merge($lang['en_US'], $lang['sk_SK']);
} else {
	$lang['sk_SK'] = $lang['en_US'];
}

$lang['sk_SK']['Carousel']['notRecursiveCarousel'] = 'Nepreberať obrázky z nadradených stránok!';
 
// EOF