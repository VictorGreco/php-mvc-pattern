<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error</title>
</head>
<body>
  <main class="main">
    <?= isset($errorMsg) ? "<h1>$errorMsg</h1>" : "<h1>Fatal Error</h1>" ?>
    <a class="buttons" href='index.php'>Back to main</a>
  </main>
</body>
</html>