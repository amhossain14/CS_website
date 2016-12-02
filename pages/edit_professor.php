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
				<form method="post" action="edit_prof_page.php">
					<?php 
						$facdir = file("../faculty/faculty.txt"); //will put into array
						$faccount = count($facdir);   //  will count how many are there
					if($faccount > 0){
						for($i=0; $i<$faccount; $i++){?>
							<input type="radio" name="prof" value="<?php print $facdir[$i] ?>"><?php print $facdir[$i] ?></input><br/>
							
						<?php } ?>
						<input type="submit" value="Edit"/>
						<?php
						} 
						else{
							print "There are no professors on record!";
						}
						?>
					
				</form>
				<form action="admin.html">
					<input type="submit" value="Back to Admin Page">
				</form>
			</main>
		</div>
	</body>
</html>