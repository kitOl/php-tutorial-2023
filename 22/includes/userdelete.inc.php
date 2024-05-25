<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = $_POST['username'];
  $pwd = $_POST['pwd'];

  try {
    require_once 'dbh.inc.php';

    // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$username, $pwd, $email]);

    $query = "DELETE FROM users WHERE username = :username;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':username', $username);
    // $stmt->bindParam(':pwd', $pwd);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php?userdelete=success&uid=$username");
    exit();
  } catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
  }
}

header("Location: ../index.php");
exit();
