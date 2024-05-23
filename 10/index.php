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

  echo "Add new element in end of array: \$array[] = \$value", '<br>';
  $fruits[] = 'Pineapple';
  print_r($fruits);

  echo "Function [unset(\$array[index])]", '<br>';
  unset($fruits[1]);
  print_r($fruits);

  echo "Add new element in array by index: \$array[index] = \$value", '<br>';
  $fruits[1] = 'Grape';
  print_r($fruits);

  echo "Function [ksort(\$array)]", '<br>';
  ksort($fruits);
  print_r($fruits);

  echo "Function [array_splice(\$array, offset, count)]", '<br>';
  array_splice($fruits, 0, 1);
  print_r($fruits);

  echo "Function [array_splice(\$array, offset, count)]", '<br>';
  array_splice($fruits, 0, 2);
  print_r($fruits);

  echo "Function [array_push(\$array, \$value)]", '<br>';
  array_push($fruits, 'Mango');
  print_r($fruits);

  echo "Function [end(\$array)]", '<br>';
  echo end($fruits), '<br>';
  echo reset($fruits), '<br>';

  $fruits = ['apple', 'banana', 'cherry'];

  array_splice($fruits, 2, 0, 'mango');
  print_r($fruits);


  $fruitsNew = ['peache', 'grape'];
  array_splice($fruits, 1, 0, $fruitsNew);
  print_r($fruits);

  array_splice($fruits, 2, 1);
  print_r($fruits);


  // ASSOCIATIVE ARRAY

  $tasks = [
    'laundry' => 'Daniel',
    'trash' => 'Frida',
    'vacuum' => 'Basse',
    'dishes' => 'Bella'
  ];
  print_r($tasks);
  echo $tasks['laundry'], '<br>';

  echo "Function [ksort(\$array)]", '<br>';
  ksort($tasks);
  print_r($tasks);

  echo "Function [krsort(\$array)]", '<br>';
  krsort($tasks);
  print_r($tasks);

  echo "Function [asort(\$array)]", '<br>';
  asort($tasks);
  print_r($tasks);

  echo "Function [arsort(\$array)]", '<br>';
  arsort($tasks);
  print_r($tasks);

  echo "Function [sort(\$array)]", '<br>';
  sort($tasks);
  print_r($tasks);
  echo 'Count elements in array is ' . count($tasks);

  echo "Add new element in associative array: \$array['key'] = \$value", '<br>';
  $tasks['dusting'] = 'Tara';
  print_r($tasks);

  $food = [
    'fruits' => ['apple', 'banana', 'grape'],
    'meat' => ['chicken', 'fish', 'sheep']
  ];

  echo $food['fruits'][0];

  ?>
</pre>
</body>

</html>