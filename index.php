<?php require_once './assets/includes/master.class.php' ?>
<?php require_once './assets/includes/head.inc.php' ?>
<div class="notice" style="color: #ff0000; font-size: 14px; margin-top:12px;"><?=$msg ?><br></div><br>
	<form class="form" name="login" action="" method="post">
		<input name="dst" value="http://web-2.oauife.edu.ng/commercials" type="hidden">
		<input name="popup" value="true" type="hidden">
		<fieldset>
			<div class="row">
				<input class="login" name="username" placeholder="Username" value="" type="text">
				<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
				<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
			</div>
			<div class="row">
				<input class="password" name="password" placeholder="Password" type="password">
				
			</div>	


			<div class="row">
				NOTE: To log out type in your browser <br><span class="style2"><blink>http://gateway.oauife.edu.ng</blink></span><br> and click on log off
				
			</div>	


			<div class="row">
				
				
				<input value="Sign in" name="make" type="submit">
			</div>
		</fieldset>
		
	</form>	
<?php require_once './assets/includes/foot.inc.php' ?>