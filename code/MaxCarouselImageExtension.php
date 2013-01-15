<?php

class MaxCarouselImageExtension extends DataExtension {

	public static $CarouselImageWidth = 620;
	public static $CarouselImageHeight = 220;
	
	function generateCarouselImageSize(GD $gd) {
		return $gd->croppedResize(self::$CarouselImageWidth,self::$CarouselImageHeight);
	}
	
	function CarouselImageSize() {
		if (!$this->owner->Width) return '<img src="http://dummyimage.com/'.self::$CarouselImageWidth.'x'.self::$CarouselImageHeight.'/aaa/fff.jpg" alt="" />';
		return $this->owner->getFormattedImage('CarouselImageSize');
	}	

}

