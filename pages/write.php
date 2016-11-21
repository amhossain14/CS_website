<!DOCTYPE php>
<html lang="en">
<head>
<title>Page Title</title>
	<meta charset="utf-8">
</head>
<body>
<?php
		
			if($_POST) 
			{ 
				
				if(isset($_POST['prof']))
				{	
					$text = $_POST['prof'];
					$file = "./$text.txt";
				}
				
				file_put_contents($file , "");
				
				if(isset($_POST['day'])) 
				{ 
					file_put_contents($file ,$_POST['day'], FILE_APPEND); 
					file_put_contents($file ," \n", FILE_APPEND);
				}
				if(isset($_POST['optime'])) 
				{ 
					file_put_contents($file ,$_POST['optime'], FILE_APPEND); 
					file_put_contents($file ," \n", FILE_APPEND);
				}
				if(isset($_POST['cltime'])) 
				{ 
					file_put_contents($file ,$_POST['cltime'], FILE_APPEND); 
					file_put_contents($file ," \n", FILE_APPEND);
				}
			} 
     
		
	?>
	
</body>
</html>