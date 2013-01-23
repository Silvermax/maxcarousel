<?php

class MaxCarouselImageExtension extends DataExtension {

	public static $CarouselImageWidth = 620;
	public static $CarouselImageHeight = 220;
	
	function generateCarouselImageSize(GD $gd) {
		return $gd->croppedResize(self::$CarouselImageWidth,self::$CarouselImageHeight);
	}
	
	function CarouselImageSize() {
		return $this->owner->getFormattedImage('CarouselImageSize');
	}	

}

