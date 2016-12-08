<!DOCTYPE HTML>
<html>
	<head>
		<title>Select a Professor and a Day</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
	</head>
	<body>
		<div id="wrapper">
			<main>
			<?php 
				$nameprint= file("../faculty/faculty.txt");
				$faccount = count($nameprint);
				?>
			
				
					
				<form method="post" id="hour_add" action="edit_hour_window.php">
					<select name="prof" form="hour_add">
					<?php for($i = 0; $i < $faccount; $i++){
						$hoursfile = "../faculty/".chop($nameprint[$i])."/hours.txt";
						if(file_exists($hoursfile)){ ?>
						<option value="<?php print $nameprint[$i] ?>"><?php print $nameprint[$i] ?></option>
					<?php } 
					} ?>
					</select><br/>
					
					<select name="day" form="hour_add">
						<option value="mon" selected="true">Monday</option>
						<option value="tue">Tuesday</option>
						<option value="wed">Wednesday</option>
						<option value="thu">Thursday</option>
						<option value="fri">Friday</option>
                    </select><br/>
					
					<input type="submit" id="submit_button" value="Select Day"> 
				</form>
				<form action="admin.html">
						<input type="submit" value="Go Back To Admin Page"/>
					</form>
			</main>
		</div>
	</body>
</html>