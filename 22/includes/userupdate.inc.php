<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $email = $_POST['email'];

  try {
    require_once 'dbh.inc.php';

    // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$username, $pwd, $email]);

    session_start();
    $useruid = $_SESSION['userUid'];

    $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE username = :useruid;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':pwd', $pwd);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':useruid', $useruid);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php?userupdate=success");
    exit();
  } catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
  }
}

header("Location: ../index.php");
exit();
