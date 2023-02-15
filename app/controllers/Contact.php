<?php
namespace app\controllers;
//if else
class Contact extends \app\core\Controller{

	public function index(){

        if(isset($_POST['action'])){
            $newContact = new \app\models\Contact();
            $newContact->email = $_POST['new_email'];
            $newContact->message = $_POST['new_message'];
            $newContact->ip = $_SERVER['REMOTE_ADDR'];
            $newContact->insert();
            header('location:/Contact/read');
        }
        else
        {
        	$this->view('Contact/index');
        }
	} 

	public function read(){
		$contact = new \app\models\Contact();
		$contents = $contact->getAll();
		$this->view('Contact/read', $contents);
	}

}