<?php

class MaxCarouselImageExtension extends DataExtension
{

    public static $CarouselImageWidth = 620;
    public static $CarouselImageHeight = 220;
    
    public function generateCarouselImageSize($gd)
    {
        return $gd->croppedResize(self::$CarouselImageWidth, self::$CarouselImageHeight);
    }
    
    public function CarouselImageSize()
    {
        return $this->owner->getFormattedImage('CarouselImageSize');
    }
}
