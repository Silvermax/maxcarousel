<?php
/**
* DataObject holding Slide data. If you fill in External link, InternalLink setup will be ignored.
* You can setup per slide animation effect.
* @package maxcarousel - silverstripe module for slides management and presentation
* @link maxskitter https://github.com/Silvermax/maxcarousel/
* @author Pali Ondras
*/

class MaxCarouselItem extends DataObject
{
    public static $db = array(
        "Title" => 'Varchar(1024)', // eg. "Energy Saving Report for Year 2011, New Zealand LandCorp"
        "Description" => 'Text',
        'HTMLDescription' => 'HTMLText'
    );

    public static $has_one = array(
        'MaxCarouselImage' => 'Image',
        "InternalLink" => "SiteTree"
    );

    public static $belongs_many_many = array('Page'=>'Page');

    public function getCMSFields()
    {
        $fields = new FieldList();
        
        $fields->push(new TextField('Title', _t("MaxCarousel.Title", "Title")));
        $fields->push(new TextareaField('Description', _t("MaxCarousel.Description", "Description")));
        
        $fields->push(new HtmlEditorField("HTMLDescription", _t("MaxCarousel.HTMLDescription", "HTMLDescription")));
    
        $fields->push(new TextField('ExternalLink', _t("MaxCarousel.ExternalLink", "External Link")));
        
        $internalLink = new TreeDropdownField("InternalLinkID", _t("MaxCarousel.InternalLink", "Internal Link"), "SiteTree");
        $fields->push($internalLink);
        
        if ($this->InternalLinkID > 0) {
            $fields->push(new CheckboxField("forceToEmpty", "Remove internal LinkTo", false));
        }
    
        $fields->push(new UploadField('MaxCarouselImage'));
        
        $this->extend('updateCMSFields', $fields);
        
        return $fields;
    }
    
// Rename summaryfields
   public static $field_labels = array(
        'InternalLink.MenuTitle' => 'Internal LinkTo page',
        'ExternalLink' => 'External Link',
        'Thumbnail' => 'Image'
   );

// Tell the datagrid what fields to show in the table
   public static $summary_fields = array(
        'Title',
        'Description',
        'InternalLink.MenuTitle',
        'ExternalLink',
        'Thumbnail'
   );
  
  // this function creates the thumnail for the summary fields to use
   public function getThumbnail()
   {
       return $this->MaxCarouselImage()->CMSThumbnail();
   }

    public function onBeforeWrite()
    {
        parent::onBeforeWrite();
        
        // Prefix the URL with "http://" if no prefix is found
        if ($this->ExternalLink && (strpos($this->ExternalLink, '://') === false)) {
            $this->ExternalLink = 'http://' . $this->ExternalLink;
        }
        if (isset($_POST["forceToEmpty"]) && $_POST["forceToEmpty"]) {
            $this->InternalLinkID = 0;
        }
    }

    public function Link()
    {
        // TODO -> InternaLink + anchor Title
        if ($this->ExternalLink) {
            return $this->ExternalLink;
        }
        if ($this->InternalLinkID) {
            return $this->InternalLink()->Link();
        }
        return false;
    }
}
