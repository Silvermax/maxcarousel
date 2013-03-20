<?php
/**
 * Carousel config file
 * @package maxcarousel
 * @link maxcarousel https://github.com/Silvermax/maxcarousel/
 * @author Pali Ondras
 */

// Default decorators and extensions, for more info check corresponding files stored in maxskitter/code folder
Page::add_extension("MaxCarouselPageExtension");
Page_Controller::add_extension("MaxCarouselPage_ControllerExtension");
Image::add_extension("MaxCarouselImageExtension");
// EOF
