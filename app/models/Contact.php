<?php
namespace app\models;

class Contact{
	public $email;
    public $message;
    public $ip;
    private static $file = 'resources/log.txt';

	public function insert(){
		//TODO: also lock the file
		$fh = fopen(self::$file, 'a');
		$array = array('email'=>$this->email, 'message'=>$this->message, 'ip'=>$this->ip);
		flock($fh, LOCK_EX);//need an exclusive lock to write
		fwrite($fh, json_encode($array) . "\n");
		flock($fh, LOCK_UN);
		fclose($fh);//release the resource and the lock
	}

	public function getAll(){
		$contacts =  file(self::$file);
		$values = [];
		foreach($contacts as $contact){
			$item = new Contact();
			$array = json_decode($contact, true);
			$item->email = $array['email'];
			$item->message = $array['message'];
			$item->ip = $array['ip'];
			$values[] = $item;
		}
		return $values;
	}
}