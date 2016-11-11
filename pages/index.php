<!DOCTYPE HTML>
<html>
	<head>
		<title>Computer Science</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum:400,400i,700,700i" rel="stylesheet">
        
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="header_div"></div>
			</header>
            <br>
			<nav>
				<div id="nav_div"></div>
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
				<div id="footer_div"></div>
			</footer>
		</div>
	</body>
</html>