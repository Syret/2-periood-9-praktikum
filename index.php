<?php session_start(); ?>
<?php 
	$_SESSION["first_name"] = "Syret";
	$_SESSION["last_name"] = "Kärt";	
	$_SESSION["email"] = "kart.syret@khk.ee";		
?>	
	
<!DOCTYPE HTML>
<html>
   <head>
		<title>II periood 9. praktikum</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
   </head>
   <body>
      <pre><?php print_r($_SESSION); 
       
       $first_name = $_SESSION["first_name"];
       echo $first_name;
      ?></pre>

   </body>
   </html>