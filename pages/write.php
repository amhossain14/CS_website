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
				
				if($_POST['prof'] =='dr_cichanowski')
				{	
					$text = $_POST['day'];
					$facdir = scandir('../faculty');
					$parent ="../faculty/";
					$filename = "/$text.txt";
					
					$file = "$parent$facdir[4]$filename";
				}
				
				if($_POST['prof'] =='dr_schumacher')
				{	
					$text = $_POST['day'];
					$facdir = scandir('../faculty');
					$parent ="../faculty/";
					$filename = "/$text.txt";
					
					$file = "$parent$facdir[3]$filename";
				}
				
				if($_POST['prof'] =='dr_francioni')
				{	
					$text = $_POST['day'];
					$facdir = scandir('../faculty');
					$parent ="../faculty/";
					$filename = "/$text.txt";
					
					$file = "$parent$facdir[5]$filename";
				}
				
				if($_POST['prof'] =='dr_debnath')
				{	
					$text = $_POST['day'];
					$facdir = scandir('../faculty');
					$parent ="../faculty/";
					$filename = "/$text.txt";
					
					$file = "$parent$facdir[6]$filename";
				}
				
				
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