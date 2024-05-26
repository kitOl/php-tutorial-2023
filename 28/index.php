<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023 :: Login System</title>
</head>

<body>
  <main>

    <div>
      <h3>Login</h3>
      <form action="includes/login.inc.php" method="post" autocomplete="off">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
      </form>
    </div>

    <div>
      <h3>Signup</h3>
      <form action="includes/signup.inc.php" method="post" autocomplete="off">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Signup</button>
      </form>
    </div>

  </main>
</body>

</html>