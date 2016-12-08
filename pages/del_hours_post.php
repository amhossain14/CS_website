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
			<main>
				<?php 
					if($_POST){
						$prof = $_POST['prof'];
						$day = $_POST['day'];
						$oldhours = $_POST['oldhours'];
						$hoursfile = file("../faculty/".$prof."/hours.txt");
						for($i = 0; $i < count($hoursfile); $i++){
							if($hoursfile[$i] == $day){
								if($hoursfile[$i+1] == $oldhours){
									$delline = $i;
								}
							}
						}
					}
					file_put_contents("../faculty/$prof/hours.txt", "");
					for($j = 0; $j < count($hoursfile); $j++){
						if($j == $delline){
							$j+=2;
						}
						else{
							file_put_contents("../faculty/$prof/hours.txt", $hoursfile[$j], FILE_APPEND);
						}
					}
					header("Location: admin.html");
				?>
			</main>
		</div>
	</body>
</html>