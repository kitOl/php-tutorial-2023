<?php

declare(strict_types=1);

function is_login_empty(string $username, string $pwd)
{
  return empty($username) || empty($pwd);
}

function is_username_wrong(bool|array $username)
{
  return !$username;
}

function is_password_wrong(string $pwd, string $hashedPwd)
{
  return !password_verify($pwd, $hashedPwd);
}
