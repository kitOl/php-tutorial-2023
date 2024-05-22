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
      <label for="firsname">Firstname?</label>
      <input type="text" id="firstname" name="firstname" placeholder="Firstname...">

      <label for="firsname">Lastname?</label>
      <input type="text" id="lastname" name="lastname" placeholder="Lastname...">

      <label for="favouriepet">Favourite Pet?</label>
      <select name="favouriteper" id="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="bird">Bird</option>
        <option value="cat">Cat</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </main>

</body>

</html>