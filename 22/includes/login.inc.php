<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $emailuid = $_POST['emailuid'];
  $pwd = $_POST['pwd'];

  try {
    require_once 'dbh.inc.php';

    // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$username, $pwd, $email]);

    $query = "SELECT * FROM users WHERE username = :emailuid OR email = :emailuid;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':emailuid', $emailuid);
    $stmt->bindParam(':pwd', $pwd);

    $stmt->execute();

    if ($result = $stmt->fetch()) {
      if ($result['pwd'] == $pwd) {
        session_start();
        $_SESSION['userId'] = $result['id'];
        $_SESSION['userUid'] = $result['username'];
        $_SESSION['userEmail'] = $result['email'];
      } else {
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php?login=wrongpassword&emailuid=$emailuid");
        exit();
      }
    } else {
      $pdo = null;
      $stmt = null;
      header("Location: ../index.php?login=usernotfound");
      exit();
    }

    $pdo = null;
    $stmt = null;
  } catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
  }
}

header("Location: ../index.php");
exit();
