<?php //FormTest2.php
if(isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Not Entered)";

echo <<<_END
<html>
	<head>
		<title>Form Test 2 </title>
	</head>
	
	<body>
		Your Name Is: $name<br>
		<form method="post" action="FormTest2.php">
			What is your name?
			<input type="test" name="name">
			<input type="submit">
		</form>
	</body>
</html>
_END;
?>