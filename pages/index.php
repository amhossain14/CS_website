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
				<a href="index.php" ><img  src="icon/home1.png" >Home</a>
				<a href=".html"><img  src="icon/str.png" >Student Resources</a>
				<a href="faculty.html"><img  src="icon/Programinfo.png" >Faculty</a>
				<a href="history.html"><img  src="icon/hist.png" >History</a>
                
                <a class="searchnav"><img  src="icon/search%201.png" ></a>
			</nav>
			<main>
                <div id=></div>
				<div>
					<h2>Updates</h2>
					<?php 
						$inFile = file("updates.txt");
						
						for($i = 0; $i < count($inFile); $i++){
							$compareDate = 
							if($inFile[$i] ){?>
								<?$i+=3?>
							}
							
							<h4><?$inFile[$i]?></h4>
							<?$i++;?>
							<p><?$inFile[$i]?></p>
							<?$i++;?>
							<p id="date"><?$inFile[$i]?></p>
						<?}?>
					
				</div>
				<div>
					<h2>Tutor Hours</h2>
				</div>
			</main>
			<footer>
				//saved for Amir
			</footer>
		</span>
	</body>
</html>