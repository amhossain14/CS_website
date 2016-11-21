<!DOCTYPE php>
<html lang="en">
<head>
<title>Page Title</title>
	<meta charset="utf-8">
</head>
<body>
<?php
		
		$x=file("services.txt");
		$m="cheese";
			if(in_array($m." \n",$x))
			{
			print"#. Extra Cheese Added +$1 <br>";
			}
			
		?>
	
</body>
</html>