<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	private static $file = 'resources/counter.txt';
	//main index view
	function index(){
		$this->view('Main/index');
	}
	//abous us view
	function about_us(){
		$this->view('Main/about_us');
	}

	public function counter(){
		if(file_exists(self)) 
		{
			$fh = fopen(self::$file, 'r');
			flock($fh, LOCK_EX);
			$counter = fread($fh, filesize(self::$file));
			flock($fh, LOCK_UN);
			fclose($fh);
		}
		else
		{
			$counter = '{"count":0}';
		}

		$updateCounter = json_decode($counter, true);
		$updateCounter['count']++;
		$counter = json_encode($updateCounter);
		echo $counter;
		$fh = fopen(self::$file, 'w');
		flock($fh, LOCK_EX);
		fwrite($fh, $counter);
		flock($fh, LOCK_UN);
		fclose($fh);
	}
}