<?php
/**
 * Carousel config file
 * @package maxcarousel
 * @link maxcarousel https://github.com/Silvermax/maxcarousel/
 * @author Pali Ondras
 */

// Default decorators and extensions, for more info check corresponding files stored in maxskitter/code folder
DataObject::add_extension("Page", "MaxCarouselPageExtension");
Object::add_extension("Page_Controller", "MaxCarouselPage_ControllerExtension");
DataObject::add_extension("DMSDocument", "MaxCarouselDMSDocumentExtension");
DataObject::add_extension("Image", "MaxCarouselImageExtension");
// EOF
