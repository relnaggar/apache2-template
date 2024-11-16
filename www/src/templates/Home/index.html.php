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
