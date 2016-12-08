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
				<form action="edit_hours_post.php" method="post">
					<?php 
					if(isset($_POST['day'])){
						$day = $_POST['day'];
					}
					if(isset($_POST['prof'])){
						$prof = $_POST['prof'];
					}
					if(isset($_POST['oldhours'])){
						$oldhours = $_POST['oldhours'];
					}
					
					$profchop = chop($prof);
                    
					$hoursprint= file("../faculty/$profchop/hours.txt");
					
					for($j = 0; $j < count($hoursprint); $j+=2){
						if(chop($hoursprint[$j]) == chop($day)){
							if($hoursprint[$j+1] == $oldhours){
								$timearr = explode("-",$hoursprint[$j+1],2);
								$optime = $timearr[0];
								$cltime = $timearr[1]; ?>
								<div class="edit_hours">
									<input type="text" name="newopen" value="<?php print $optime ?>"></input><br/>
									<input type="text" name="newclose" value="<?php print $cltime ?>"></input>
								</div>
							<?php } 
							}
						} ?>
				
					<input type="text" name="prof" value="<?php print $prof ?>" hidden></input>
					<input type="text" name="day" value="<?php print $day ?>" hidden></input>
					<input type="text" name="oldhours" value="<?php print $oldhours ?>" hidden></input>
					<input type="submit" value="Finalize Changes">
				</form>
				<form action="del_hours_post.php" method="post">
					<input type="text" name="prof" value="<?php print $prof ?>" hidden></input>
					<input type="text" name="day" value="<?php print $day ?>" hidden></input>
					<input type="text" name="oldhours" value="<?php print $oldhours ?>" hidden></input>
					<input type="submit" value="Delete Office Hours">
				</form>
			</main>
		</div>
	</body>
</html>