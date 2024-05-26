<?php

$pwdSignup = 'Kitaev';

$options = [
  'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);
// password_hash($pwd, PASSWORD_DEFAULT);

$pwdLogin = 'Kitaev';

if (password_verify($pwdLogin, $hashedPwd)) {
  echo "They are the same!";
} else {
  echo "They are not the same!";
}
