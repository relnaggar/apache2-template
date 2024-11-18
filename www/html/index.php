<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Hello World</title>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/styles.css">
    <link
      rel="preload"
      href="/fonts/bootstrap-icons.woff2?24e3eb84d0bcaf83d77f904c78ac1f47"
      as="font"
      type="font/woff2"
      crossorigin="anonymous"
    >
  </head>
  <body>
    <div class="container">
      <?= 'Hello World!' ?>
      <i class="bi bi-bootstrap"></i>
      <?php
        $databaseWorking = false;
        try {
          $pdo = new PDO('sqlite:/var/db/database.sqlite');
          $databaseWorking = true;
        } catch (PDOException $e) {
          $error = $e->getMessage();
        }
      ?>
      <p>
        <?php if ($databaseWorking): ?>
          Database is working!
        <?php else: ?>
          Database isn't working! Error: <?= $error ?>
        <?php endif; ?>
      </p>
    </div>
    <script type="module" src="/js/main.js"></script>
  </body>
</html>
