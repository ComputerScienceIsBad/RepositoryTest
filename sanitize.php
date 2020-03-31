<?php

echo <<<_END
    <html>
        <head>
            <title>This is a fail</title>
        </head>

        <body>
            <pre>
                <form method="post" action="calc.php"><pre>
                    Loan Amount <input type="text" name="principle">
                   Monthly Repayment <input type="text" name="monthly">
                    Number of Years <input type="text" name="years" value="25">
                    Interest Rate <input type="text" name="rate"  value="6">
                    <input type="submit">
                 </form>
            </pre>

        </body>
    </html>
_END;

  function sanitizeString($var)
  {
    if (get_magic_quotes_gpc())
      $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
  }

  function sanitizeMySQL($connection, $var)
  {
    $var = $connection->real_escape_string($var);
    $var = sanitizeString($var);
    return $var;
  }
?>
