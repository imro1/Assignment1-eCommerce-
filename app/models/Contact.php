<?php
namespace app\models;

define('LOG_FILE', 'resources/log.txt');

class Contact{
	public $email;
    public $message;
    public $ip;

	public function insert(){
		//TODO: also lock the file
		$fh = fopen(LOG_FILE, 'a');
		flock($fh, LOCK_EX);//need an exclusive lock to write
		$values = json_encode($this);
		fwrite($fh, "$values\n");
		fclose($fh);//release the resource and the lock
	}

	public function getAll(){
		$contents= file(LOG_FILE);
		return $contents;
	}
}