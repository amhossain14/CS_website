<!DOCTYPE HTML>
<html>
	<head>
		<title>Computer Science</title>
		<script src="" type="text/javascript"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="back_logo/logow.png">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum:400,400i,700,700i" rel="stylesheet">
        
	</head>
	<body>
		<span id="wrapper">
			<header>
				<a href="faculty.html"><img  src="back_logo/winonalogo.png" ></a>
               <h1>Computer Science</h1> 
			</header>
            <br>
			<nav>
				
			</nav>
			<main>
                <?php
					$title = $_POST['title'];
					$info = $_POST['title'];
					$date = .date('Y_m_d').;
					$outFile = file("updates.txt");
					file_put_contents($outFile, $title, FILE_APPEND);
					file_put_contents($outFile, $info, FILE_APPEND);
					file_put_contents($outFile, $date, FILE_APPEND);
				?>
			</main>
			<footer>
				//saved for Amir
			</footer>
		</span>
	</body>
</html>