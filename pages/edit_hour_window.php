<!DOCTYPE HTML>
<html>
	<head>
		<title>Add Office Hours</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
	</head>
	<body>
		<div id="wrapper">
			<main>
				<form method="post" id="hour_add" action="edit_hours.php">
					<?php 
					$day = $_POST['day'];
					$prof = chop($_POST['prof']);
					$hoursfile = file("../faculty/$prof/hours.txt");
					for($i = 0; $i < count($hoursfile); $i++){ 
						if(chop($hoursfile[$i]) == chop($day)){ ?>
					
						<input type="radio" name="oldhours" value="<?php print $hoursfile[$i+1] ?>"><?php print $hoursfile[$i+1] ?></input><br/>
					<?php } 
					} ?>
					<input type="text" name="prof" value="<?php print $prof ?>" hidden></input>
					<input type="text" name="day" value="<?php print $day ?>" hidden></input>
					<input type="submit" id="submit_button" value="Select Window"> 
				</form>
				<form action="admin.html">
						<input type="submit" value="Go Back To Admin Page"/>
					</form>
			</main>
		</div>
	</body>
</html>
