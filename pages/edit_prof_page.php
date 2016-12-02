<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Professor Info</title>
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
						if(isset($_POST['prof'])){
							$prof = chop($_POST['prof']);
						}
						$namefile = file_get_contents("../faculty/$prof/name.txt");
						$arr = explode(' ', trim($namefile));
						$firstname = $arr[0];
						$lastname = $arr[1];
						$infofile = file_get_contents("../faculty/$prof/info.txt");
						?>
						<form action="edit_prof_post.php" method="post">
							<label for="first">First Name: </label><input type="text" name="first" value="<?php print $firstname; ?>"></input><br/>
							<label for="last">Last Name: </label><input type="text" name="last" value="<?php print $lastname; ?>"></input><br/>
							<label for="info">Info: </label><textarea rows="7" cols="60" name="info"><?php print $infofile; ?></textarea><br/>
							<input type="text" name="prof" value="<?php print $prof ?>" hidden></input>
							<input type="submit"/>
						</form>
						<form action="del_prof_post.php" method="post">
							<input type="text" name="prof" value="<?php print $prof ?>" hidden></input>
							<input type="submit" value="Delete This Professor"/>
						</form>
					<?php } 
					else{ ?>
						<p>You did not select a professor to edit</p>
						
					<?php } ?>
					<form action="edit_professor.php">
						<input type="submit" value="Go Back To Edit Page"/>
					</form>
					<form action="admin.html">
						<input type="submit" value="Go Back To Admin Page"/>
					</form>
			</main>
		</div>
	</body>
</html>