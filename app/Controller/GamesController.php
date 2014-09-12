<?php
ob_start();
class GamesController extends AppController {
	
	var $name = "Games";
	var $helpers = array('Session','Html','Js','Form','Text','Paginator');
	var $components=array('Session','Email','Cookie','RequestHandler','Upload');
	var $uses = array('Game','CmsPage');
	
	
	
	public function admin_add_game() {
                  $this->layout='admin';
	}
        public function admin_games() {
                  $this->layout='admin';
	}
        public function admin_add_category() {
                  $this->layout='admin';
	}
         public function admin_edit_category() {
                  $this->layout='admin';
	}
        public function admin_categories() {
                  $this->layout='admin';
	}
	
	
}
