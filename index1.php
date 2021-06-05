<?php require 'index.html'?>

<html>
    
<head>
     
    <title> Comentarios</title>
    <link rel="stylesheet" href="assets/css/style1.css" />
    <style type="text/css">
  body {
    color: black;
    
      
     }
        
  </style>
    </head>
    <body>
        <h1>Comentarios</h1>
    <form method="post" action="comentar.php" >
          <textarea name="comentario" class="box" > Escribe tu comentario</textarea>
          <input type="submit" class="nav-menu-link nav-link" value="Publicar">
    </form>
        <?php include("com.html");?>
</body>
    
</html>
   