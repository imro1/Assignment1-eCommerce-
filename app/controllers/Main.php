<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	//main index view
	function index(){
		$this->view('Main/index');
	}
	//abous us view
	function about_us(){
		$this->view('Main/about_us');
	}
}