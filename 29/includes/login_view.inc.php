<?php

declare(strict_types=1);

function output_username()
{
  if (isset($_SESSION['user_id'])) {
    echo '<span class="form-success">You are logged in as ' . $_SESSION['user_username'] . '</span>';
  } else {
    echo '<span class="form-error">You are not logged in</span>';
  }
}

function check_login_errors()
{
  if (isset($_SESSION['errors_login'])) {
    $errors = $_SESSION['errors_login'];

    foreach ($errors as $error) {
      echo '<p class="form-error">' . $error . '</p>';
    }

    unset($_SESSION['errors_login']);
  } else if (isset($_GET['login']) && $_GET['login'] === 'success') {
    echo '<p class="form-success">Login success!</p>';
  }
}
