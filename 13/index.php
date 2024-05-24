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

  function sayHello()
  {
    $localVar = 'Oleg';
    return "Hello, $localVar";
  }

  echo sayHello(), '<br>';
  if (!isset($localVar)) {
    echo "\$localVar don't accessible in global area", '<br>';
  }

  $globalVar = "Global var";

  function myFunction1()
  {
    return $GLOBALS['globalVar'];
  }

  function myFunction2()
  {
    global  $globalVar;
    return $globalVar;
  }

  echo 'Global var is ' . myFunction1(), '<br>';
  echo 'Global var is ' . myFunction2(), '<br>';


  function myFunction3()
  {
    static  $staticVar;
    $staticVar++;
    return $staticVar;
  }

  echo 'Static var is ' . myFunction3(), '<br>';
  echo 'Static var is ' . myFunction3(), '<br>';
  echo 'Static var is ' . myFunction3(), '<br>';


  ?>
</pre>
</body>

</html>