<?php 
  session_start(); 
  $first_name = $_SESSION["first_name"];
  ?>

<!DOCTYPE HTML>
<html>
   <head>
		<title>II periood 9. praktikum</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
   </head>
   <body>
      <pre><?php print_r($_SESSION); ?></pre>
      <?php echo $first_name; ?>
   </body>
   </html>