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
						$arrFac = file("../faculty/faculty.txt");
						$faculty = "../faculty/faculty.txt";
						file_put_contents($faculty, "");
						for($i = 0; $i < count($arrFac); $i++){
							if(chop($arrFac[$i]) == $prof){
								
							}
							else{
								file_put_contents($faculty, $arrFac[$i], FILE_APPEND);
							}
						}
						
						header("Location: admin.html");
					}
					else{
						print "not working!";
					}
				?>
			</main>
		</div>
	</body>
</html>