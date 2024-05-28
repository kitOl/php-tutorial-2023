<?php

declare(strict_types=1);

function check_signup_errors()
{
  if (isset($_SESSION['errors_signup'])) {
    $errors = $_SESSION['errors_signup'];

    foreach ($errors as $error) {
      echo '<p class="form-error">' . $error . '</p>';
    }

    unset($_SESSION['errors_signup']);
  } else if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
    echo '<p class="form-success">Signup success!</p>';
  }
}

function signup_inputs()
{
  if (isset($_SESSION['errors_signup']['username_taken'])) {
    $classUserTaken = 'form-error';
  }

  if (isset($_SESSION['errors_signup']['email_used'])) {
    $classEmailUsed = 'form-error';
  }

  echo '<input class="' . ($classUserTaken ?? '') . '" type="text" name="username" placeholder="Username" value="' . ($_SESSION['signup_data']['username'] ?? '') . '" />';
  echo '<input type="password" name="pwd" placeholder="Password">';
  echo '<input class="' . ($classEmailUsed ?? '') . '" type="text" name="email" placeholder="E-Mail" value="' . ($_SESSION['signup_data']['email'] ?? '') . '" />';

  if (isset($_SESSION['signup_data'])) {
    unset($_SESSION['signup_data']);
  }
}
