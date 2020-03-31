<?php // FormTest3.php
echo <<<_END
	<html>
		<head>
			<title> Form Test 3, "Loan Amount" </title>
		</head>
		<body>
<form method="post" action="FormTest3.php"><pre>
Loan Amount <input type="text" name="principle">
Monthly Repayment <input type="text" name="monthly">
Number of Years <input type="text" name="years" value="25">
Interest Rate <input type="text" name="rate" value="6">
<input type="submit">
			</pre></form>
			<p> _-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-</p>
<h4> What is your preferred ice cream?</h4><br>
Vanilla <input type="checkbox" name="ice" value="Vanilla">
Chocolate <input type="checkbox" name="ice" value="Chocolate"> 
Strawberry <input type="checkbox" name="ice" value="Strawberry">
Mint <input type="checkbox" name="ice" value="Mint">
		</body>
	</html>
_END;
?>