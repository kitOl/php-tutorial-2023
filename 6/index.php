<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>PHP Tutorial 2023</title>
</head>

<body>

  <main>
    <form action="includes/formhandler.inc.php" method="post">
      <label for="firstname">Firstname?</label>
      <input type="text" id="firstname" name="firstname" placeholder="Firstname..." value="<?= $_GET['firstname'] ?? '' ?>" />

      <label for="Lastname">Lastname?</label>
      <input type="text" id="lastname" name="lastname" placeholder="Lastname..." value="<?= $_GET['lastname'] ?? '' ?>" />

      <label for="favouritepet">Favourite Pet?</label>
      <select name="favouritepet" id="favouritepet">
        <option value="none">None</option>
        <option value="dog" <?= $_GET['favouritepet'] == 'dog' ? 'selected' : '' ?>>Dog</option>
        <option value="bird" <?= $_GET['favouritepet'] == 'bird' ? 'selected' : '' ?>>Bird</option>
        <option value="cat" <?= $_GET['favouritepet'] == 'cat' ? 'selected' : '' ?>>Cat</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </main>

</body>

</html>