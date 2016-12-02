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
						$prof_name = substr($_POST['first'], 0, 1)."_".$_POST['last'];
						$prof_name = substr($_POST['first'], 0, 1)."_".$_POST['last'];
						$p_name_lower = strtolower($prof_name);
						$output_folder = "../faculty/".strtolower($prof_name)."/";
						if(!file_exists($output_folder)){
							mkdir($output_folder, 0777, true);
						}
						$info = $output_folder."info.txt";
						$name = $output_folder."name.txt";
						if(file_exists("../faculty/$prof/hours.txt")){
							$hoursfile = file("../faculty/$prof/hours.txt");
							$hoursout = $output_folder."hours.txt";
							file_put_contents($hoursout, $hoursfile);
						}
						
						file_put_contents($info, $_POST['info']);
						file_put_contents($name, $_POST['first']." ".$_POST['last']);
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
						file_put_contents($faculty, $p_name_lower, FILE_APPEND);
						file_put_contents($faculty, "\r\n", FILE_APPEND);
						
						rmdir("../faculty/$prof");
						
						header("Location: admin.html");
					}
				?>
			</main>
		</div>
	</body>
</html>