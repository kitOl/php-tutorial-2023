<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userSearch = $_POST['usersearch'];

  try {
    require_once 'includes/dbh.inc.php';

    $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':usersearch', $userSearch);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    // header("Location: ../index.php?search=success");
  } catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
  }
} else {
  header("Location: index.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023 :: Search Form</title>
</head>

<body>
  <section>
    <h3>Search results:</h3>
    <h5>
      <a href="index.php">Search another</a>
    </h5>

    <?php if (empty($results)) : ?>

      <div>
        <p>There were no results!</p>
      </div>

    <?php else : ?>

      <?php foreach ($results as $row) : ?>
        <div>
          <h4><?= htmlspecialchars($row['username']) ?></h4>
          <p><?= htmlspecialchars($row['comment_text']) ?></p>
          <p><?= htmlspecialchars($row['created_at']) ?></p>
        </div>
      <?php endforeach; ?>

    <?php endif; ?>

  </section>
</body>

</html>