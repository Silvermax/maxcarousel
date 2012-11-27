<?php
/**
 * @author Pali Ondras
 */

class MaxCarouselDMSDocumentExtension extends DataExtension {
	
	static $db = array(
		'isCarousel' => 'Boolean'
	);
		
	function updateCMSFields(FieldList $fields) {		
	
		$info = "<p class='notice'>Check this if you uploaded image which will be used for carousel...</p>";
		
		if ($this->owner->isCarousel) {
			$info = ($i = $this->owner->Image()) ? "<p><img src='".$i->CarouselImageSize()->Filename."' \></p>" : "<p class='error'>Wrong image format or something went wrong...</p>";
		}
	
		$fields->add(FieldGroup::create(
				FieldGroup::create(
					new CheckboxField('isCarousel'),
					new LiteralField("CarouselImage", $info)
				)->addExtraClass('carousel')
		)->setName("CarouselPanel"));
	}
	
	function Image() {
		$filename = DMS::$dmsFolder . DIRECTORY_SEPARATOR . $this->owner->Folder . DIRECTORY_SEPARATOR . $this->owner->Filename;
		
		// is it in DB ?
		if (!$img = DataList::create("Image")->filter(array("Filename" => $filename))->First())  {
			// check if thumbnail url is a jpg )
			if (preg_match('/(.JPG|.jpg|.jpeg|.JPEG|.png|.PNG)$/',$this->owner->Filename)) {
				$img = new Image();
				$img->Filename = $filename;
				$img->Title = $this->owner->Title; 
				$img->write();
				$img = DataList::create("Image")->filter(array("ID" => $img->ID))->First();
			}
		} 
		return $img;
	}
	
}
