<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
	</head>
	<body>
		<div id="wrapper">
			<?php
			if($_POST){
				$prof = chop($_POST['prof']);
				$writefile = "../faculty/$prof/hours.txt";
				if(isset($_POST['day'])){
					$day = $_POST['day'];
					file_put_contents($writefile, $day, FILE_APPEND);
					file_put_contents($writefile, " \r\n", FILE_APPEND);
				}
				if(isset($_POST['optime'])){
					$writehours = $_POST['optime'];
				}
				if(isset($_POST['cltime'])){
					$writehours.= "-".$_POST['cltime'];
					file_put_contents($writefile, $writehours, FILE_APPEND);
					file_put_contents($writefile, " \r\n", FILE_APPEND);
				}
			}
			header("Location: hours_form.php");
			?>
		</div>
	</body>
</html>