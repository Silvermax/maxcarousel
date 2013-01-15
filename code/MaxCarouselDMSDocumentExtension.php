<?php
/**
 * @author Pali Ondras
 */

class MaxCarouselDMSDocumentExtension extends DataExtension {
	
	static $db = array(
		'isCarousel' => 'Boolean',
		'HTMLDescription' => 'HTMLText'	
	);
	
	static $has_one = array(
		'LinkTo' => 'Page'
	);
		
	function updateCMSFields(FieldList $fields) {		
	
		$info = "<p class='notice'>Check this if you uploaded image which will be used for carousel...</p>";
		
		if ($this->owner->isCarousel) {
			$info = ($i = $this->owner->Image()) ? "<p><img src='".$i->CarouselImageSize()->Filename."' /></p>" : "<p class='error'>Wrong image format or something went wrong...</p>";
			$array[] = new DropdownField("LinkToID","Link to page",Page::get()->map("ID","MenuTitle"));
			$array[] = new HtmlEditorField("HTMLDescription","Perex");
		}
		
		$array[] = new CheckboxField('isCarousel');
		$array[] = new LiteralField("CarouselImage", $info);
	
		$fields->add(FieldGroup::create(
				FieldGroup::create(
					$array
				)->addExtraClass('carousel')
		)->setName("CarouselPanel"));
	}
	
	function Image() {
		$filename = DMS::$dmsFolder . "/" . $this->owner->Folder . "/" . $this->owner->Filename;
		
		// is it in DB ?
		if (!$img =  Image::get()->filter("Filename",$filename)->First())  {
			// check if thumbnail url is a jpg )
			if (preg_match('/(.JPG|.jpg|.jpeg|.JPEG|.png|.PNG)$/',$this->owner->Filename)) {
				$img = new Image();
				$img->Filename = $filename;
				$img->Title = $this->owner->Title; 
				$img->write();
				$img = Image::get()->byID($img->ID);
			}
		} 
		return $img;
	}
	
}
