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
					$parent = "../News_update/"; //is a string
                    $news1file = "/news1.txt";
                    $news2file = "/news2.txt";
                    $news3file = "/news3.txt";    
                    $updatefile = "/update.txt";
                    $extrafile ="/extra.txt";
					
				if($_POST['news'] == 'news1')
				{
					$file = "$parent$news1file";
				}
				else if($_POST['news'] == 'news2')
				{
					$file = "$parent$news2file";
				}
				else if($_POST['news'] == 'news3')
				{
					$file = "$parent$news3file";
				}
				else if($_POST['news'] == 'updatefile')
				{
					$file = "$parent$updatefile";
				}
				else if($_POST['news'] == 'extrafile')
				{
					$file = "$parent$extrafile";
				}
				
				file_put_contents($file, $_POST['text']);
				header("Location: index.php");
			?>
			</main>
		</div>
	</body>
</html>