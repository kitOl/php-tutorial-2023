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
  <title>PHP Tutorial 2023 :: MySQL DB</title>
</head>

<body>
  <nav>
    <a href="index.php" title="Home page">HOME</a>
    <div style="width: 3px; height: 25px; margin-right: 20px; background-color: rgb(37, 100, 183);"></div>
    <?php if (!isset($_SESSION['userId'])) : ?>
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="emailuid" placeholder="E-mail/Username" value="<?= $_GET['emailuid'] ?? '' ?>">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
      </form>
    <?php else : ?>
      <a href="profile.php" title="Profile Page Link"><?= $_SESSION['userUid'] ?></a>
      <form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
      </form>
    <?php endif; ?>
  </nav>

  <main>

    <div>
      <?php if (!isset($_SESSION['userId'])) : ?>
        <h3>Signup</h3>
        <form action="includes/formhandler.inc.php" method="post" autocomplete="off">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="text" name="email" placeholder="E-Mail">
          <button>Signup</button>
        </form>
      <?php endif; ?>
    </div>

    <div>
      <?php if (isset($_SESSION['userId'])) : ?>
        <h3>Change account</h3>
        <form action="includes/userupdate.inc.php" method="post" autocomplete="off">
          <input type="text" name="username" placeholder="Username" value="<?= $_SESSION['userUid'] ?? '' ?>" />
          <input type="password" name="pwd" placeholder="Password">
          <input type="text" name="email" placeholder="E-Mail" value="<?= $_SESSION['userEmail'] ?? '' ?>" />
          <button>Update</button>
        </form>
      <?php endif; ?>
    </div>

    <div>
      <?php if (isset($_SESSION['userId'])) : ?>
        <h3>Delete account</h3>
        <form action="includes/userdelete.inc.php" method="post" autocomplete="off">
          <input type="hidden" name="username" value="<?= $_SESSION['userUid'] ?? '' ?>" />
          <input type="password" name="pwd" placeholder="Password" />
          <button>Delete</button>
        </form>
      <?php endif; ?>
    </div>

  </main>
</body>

</html>