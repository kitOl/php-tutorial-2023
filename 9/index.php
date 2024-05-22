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
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
      <label for="firstname">Firstname?</label>
      <input type="number" name="number" placeholder="Number one" />

      <button type="submit">Submit</button>
    </form>
  </main>

</body>

</html>