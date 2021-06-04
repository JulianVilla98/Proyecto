<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido a U-Mapp</title>
      
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
     
  </head>
  <body>
    <?php require 'partials/header.php' ?>
    <?php require 'index.html'?>  
    <?php if(!empty($user)): ?>
      <h3> ¡Bienvenido/a! <?= $user['email']; ?></h3>
      <br>Tu sesión ha iniciado con éxito
      
      <iframe src="https://www.google.com/maps/d/embed?mid=1Hot5kOvN8AOPMouWGvmeegsGKFu-wOAQ&hl=es" width="1900" height="850"></iframe>
    <?php else: ?>
      <h1>Por favor inicia sesión o regístrate</h1>
         

      <a href="login.php">Iniciar sesión</a> o
      <a href="signup.php">Regístrate</a>
    <?php endif; ?>
  </body>
</html>
