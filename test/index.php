<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8"/>
      <title>Hello World
     </title>
   </head>
   <body>
     
	  <form method="post">
	  <input type="text" name="A"/><br>
	  <input type="text" name="B"/><br>
	  <input type="submit"/>
	  </form>
	  
   </body>
</html>

<?php
if (!empty($_POST["A"]) && !empty($_POST["B"])){
	echo $_POST["A"] + $_POST["B"];

}
?>