<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
  var_dump($_SESSION);
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
    echo "<pre>";
    print_r($user);
    echo "</pre>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Welcome to you WebApp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php var_dump($_SESSION); ?>
  <?php require 'partials/header.php' ?>

  <?php if (!empty($user)) : ?>
    <br> bienvenido. <?= $user['email']; ?>
    <br>
    <p class="text-success fs-1">corretamente logueado</p>
    <a href="/php-login-simple/logout.php">
      Logout
    </a>
  <?php else : ?>
    <h1>por favor Login o registro</h1>

    <a href="login.php">Login</a> or
    <a href="signup.php">SignUp</a>
  <?php endif; ?>
</body>

</html>