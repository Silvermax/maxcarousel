<?php
/**
 * Defines an SiteTree decorator which enables slides management 	
 * @package maxcarousel - silverstripe module for slides management and presentation
 * @link maxskitter https://github.com/Silvermax/maxcarousel/
 * @author Pali Ondras
 */

class MaxCarouselPageExtension extends DataExtension {
	
	static $db = array('notRecursiveCarousel' => 'Boolean');
	
	function Carousels() {
		return $this->owner->Documents()->filter("isCarousel", 1);
	}
	
	function updateCMSFields(FieldList $fields) {
		//$slides = new GridField('Documents', 'Carousels', $this->owner->Carousels(), GridFieldConfig_RelationEditor::create());
		
		$fields->addFieldToTab("Root.Carousel", new CheckboxField("notRecursiveCarousel",_t("Carousel.notRecursiveCarousel","Do not grab slides from parent page!")));
		
		foreach ($this->Carousels() as $carousel){
			if ($i = $carousel->Image()) {
				$fields->addFieldToTab("Root.Carousel", new LiteralField("CarouselImages","<div style='margin-bottom: 1em; border: 1px solid #ddd; text-align: center'><h2>".$carousel->Title."</h2><p><a href='/admin/pages/edit/EditForm/field/Documents/item/$carousel->ID/edit'>Change</a></p><p><img src='".$i->CarouselImageSize()->Filename."' \></p></div>"));
			}
		}	
	}
	
}

/**
 * Defines ContentController extension, generating skitter JS config and including needed JS and CSS files. 
 * Calling $CarouselsRecursive in your theme file will show up your defined Slides recursively
 * Css: carousel.styles.css is called automaticly and is basic carousel css
 * Js: all needed JS is called, if you have custom jQuery files, block module version in your mysite/_config.php file by
 * @package maxcarousel - silverstripe module for slides management and presentation
 * @link maxcarousel https://github.com/Silvermax/maxcarousel/
 * @author Pali Ondras
 */

class MaxCarouselPage_ControllerExtension extends Extension {
	
	private static $cachedSlides = null;
	
	static $carouselRequiredJSFiles =array(
		"maxcarousel/javascript/carouFredSel-6.1.0/jquery-1.8.2.min.js",
		"maxcarousel/javascript/carouFredSel-6.1.0/jquery.carouFredSel-6.1.0-packed.js",
		"maxcarousel/javascript/carouFredSel-6.1.0/helper-plugins/jquery.mousewheel.min.js",
		"maxcarousel/javascript/carouFredSel-6.1.0/helper-plugins/jquery.touchSwipe.min.js",
		"maxcarousel/javascript/carouFredSel-6.1.0/helper-plugins/jquery.ba-throttle-debounce.min.js"
	);
	
	static $carouselInitJS = 'jQuery(document).ready(function() {
		$("#Carousel").carouFredSel({
			items 		: 1,
			direction	: "up",
			auto : {
				easing		: "elastic",
				duration	: 1000,
				timeoutDuration: 2000,
				pauseOnHover: true
			}
		}).find(".slide").hover(
			function() { $(this).find("div").slideDown(); },
			function() { $(this).find("div").slideUp();	}
		);
	});';
	
	/*
	 *  is slides available, init all JS/css dependencies
	 */
	public function onAfterInit() {
		if ($this->owner->CarouselsRecursive()) {
			Requirements::themedCSS("carousel.styles","maxcarousel");
		   
			$JS = self::$carouselRequiredJSFiles;
	        
	     	foreach ($JS as $js) { Requirements::javascript($js);}     
	      	Requirements::combine_files("combined.carousel.js", $JS);
		  
		  	Requirements::customScript(self::$carouselInitJS);
		   }
	}
	
	/*
	 * return Slides, if recursive enabled, try to get parent's slides if not available on current page
	 * */
	 public function CarouselsRecursive() {		
	 	if (!is_null(self::$cachedSlides)) return self::$cachedSlides;
		
   		$page = $this->owner;
   		$slides = $this->owner->Carousels();
   		while (!$slides->exists() && $page->ParentID != 0 && !$page->notRecursiveCarousel) {
   			$page = $page->Parent();
   			$slides = $page->Carousels();
   		} 
   		
   		if ($slides->exists()) {
   			$data = new ArrayData(
	   			array(
		   			"Carousels" => $slides
		   		)
		   	);
			self::$cachedSlides = $data->renderWith('Carousel');
   		} else {
   			self::$cachedSlides = false;
   		}
   		return self::$cachedSlides;
   }
		
}

