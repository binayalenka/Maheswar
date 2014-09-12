<?php
ob_start();
class TagsController extends AppController {
	
	var $name = "Tags";
	var $helpers = array('Session','Html','Js','Form','Text','Paginator');
	var $components=array('Session','Email','Cookie','RequestHandler','Upload');
	var $uses = array('Tag','CmsPage');
	
	
	
	public function admin_add_tag() {
                  $this->layout='admin';
	}
	
	public function admin_listing_tags() {
                  $this->layout='admin';
	}
}
