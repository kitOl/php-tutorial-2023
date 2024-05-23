<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023 :: Calculator</title>
</head>

<body>

  <main>
    <h1>CALCULATOR</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="num01" placeholder="Number one" />

      <select name="operator" id="">
        <option value="add">+</option>
        <option value="substruct">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
      </select>

      <input type="text" name="num02" placeholder="Number two" />

      <button type="submit">Calculate</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $errors = false;

      $num01 = filter_input(
        INPUT_POST,
        'num01',
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
      );
      $num02 = filter_input(
        INPUT_POST,
        'num02',
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
      );
      $operator = htmlspecialchars($_POST['operator']);


      if (!is_numeric($num01) || !is_numeric($num02)) {
        echo '<p class="calc-error">Only write numbers!</p>';
        $errors = true;
      }

      if (empty($num01) || empty($num02) || empty($operator)) {
        echo '<p class="calc-error">Fill in all filelds!</p>';
        $errors = true;
      }

      if (!$errors) {

        $val = 0;
        switch ($operator) {
          case 'add':
            $val = $num01 + $num02;
            break;
          case 'substruct':
            $val = $num01 - $num02;
            break;
          case 'multiply':
            $val = $num01 * $num02;
            break;
          case 'divide':
            $val = $num01 / $num02;
            break;
          default:
            echo '<p class="calc-error">Something went wrong!</p>';
        }
        echo '<h2 class="calc-result">Result: ' . $num01 . ' ' . $operator . ' ' . $num02 . ' = ' . $val . '</h2>';
      }
    }
    ?>

  </main>
</body>

</html>