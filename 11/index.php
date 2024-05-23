<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023 :: Arrays</title>
</head>

<body>
  <pre>
  <?php
  $fruits = [
    'Apple',
    'Banana',
    'Cherry'
  ];
  print_r($fruits);

  array_push($fruits, 'kiwi');
  print_r($fruits);

  echo array_pop($fruits), '<br>';
  print_r($fruits);

  print_r(array_reverse($fruits));
  print_r($fruits);

  $array2 = ['kiwi', 'duryan'];
  print_r(array_merge($fruits, $array2));

  // FUNCTIONS DATE AND TIME
  echo '<br>', date('Y-m-d H:i:s');

  echo '<br>', time();
  echo '<br>', strtotime('2024-05-23 15:13:02'); // 1716469982



  ?>
</pre>
</body>

</html>