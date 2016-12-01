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
				$nameprint= file("../faculty/faculty.txt");
				$faccount = count($nameprint);
				?>
			
				
					
				<form method="post" id="hour_add" action="hours_post.php">
					<select name="prof" form="hour_add">
					<?php for($i = 0; $i < $faccount; $i++){?>
						<option value="<?php print $nameprint[$i] ?>"><?php print $nameprint[$i] ?></option>
					<?php } ?>
					</select><br/>
					
					<select name="day" form="hour_add">
						<option value="mon" selected="true">Monday</option>
						<option value="tue">Tuesday</option>
						<option value="wed">Wednesday</option>
						<option value="thu">Thursday</option>
						<option value="fri">Friday</option>
                    </select><br/>
					
					<select name="optime" form="hour_add">
						<option value="10:00 AM" selected="true">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AM</option>
						<option value="12:00 PM">12:00 PM</option>
						<option value="12:30 PM">12:30 PM</option>
						<option value="01:00 PM">01:00 PM</option>
						<option value="01:30 PM">01:30 PM</option>
						<option value="02:00 PM">02:00 PM</option>
						<option value="02:30 PM">02:30 PM</option>
						<option value="03:00 PM">03:00 PM</option>
						<option value="03:30 PM">03:30 PM</option>
						<option value="04:00 PM">04:00 PM</option>
						<option value="04:30 PM">04:30 PM</option>
                    </select><br/>
					
					<select name="cltime" form="hour_add"> 
						<option value="10:30 AM" selected="true">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AM</option>
						<option value="12:00 PM">12:00 PM</option>
						<option value="12:30 PM">12:30 PM</option>
						<option value="01:00 PM">01:00 PM</option>
						<option value="01:30 PM">01:30 PM</option>
						<option value="02:00 PM">02:00 PM</option>
						<option value="02:30 PM">02:30 PM</option>
						<option value="03:00 PM">03:00 PM</option>
						<option value="03:30 PM">03:30 PM</option>
						<option value="04:00 PM">04:00 PM</option>
						<option value="04:30 PM">04:30 PM</option>
						<option value="05:00 PM">05:00 PM</option>
                    </select> <br>
					
					<input type="submit" id="submit_button" value="Add Window"> 
				</form>
			</main>
		</div>
	</body>
</html>