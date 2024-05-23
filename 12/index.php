<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023 :: User-defined Functions</title>
</head>

<body>
  <pre>
  <?php

  function sayHello(string $name)
  {
    return "Hello, $name";
  }

  echo sayHello('123'), '<br>';

  function calculator(int $num01, string $operator, int $num02)
  {
    switch ($operator) {
      case '+':
        return $num01 + $num02;
      case '-':
        return $num01 - $num02;
      case '*':
        return $num01 * $num02;
      case '/':
        if (!$num02) {
          return "Error! Divide by zero!";
        }
        return $num01 / $num02;
      default:
        return "Something unknown operator";
    }
  }

  echo 'a = 23, b = 8', '<br>';
  echo 'a + b = ' . calculator(23, '+', 8), '<br>';
  echo 'a * b = ' . calculator(23, '*', 8), '<br>';
  echo 'a / b = ' . calculator(23, '/', 8), '<br>';
  echo 'a - b = ' . calculator(23, '-', 8), '<br>';

  ?>
</pre>
</body>

</html>