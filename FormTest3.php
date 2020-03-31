<?php // FormTest3And4.php
echo <<<_END
	<html>
		<head>
			<title> Form Test 3, "Loan Amount" </title>
		</head>
		<body>
<form method="post" action="FormTest3And4.php"><pre>
Loan Amount <input type="text" name="principle">
Monthly Repayment <input type="text" name="monthly">
Number of Years <input type="text" name="years" value="25">
Interest Rate <input type="text" name="rate" value="6">
<input type="submit">
		</html>
_END;
?>