<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dischi PHP</title>
   <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <?php 
      include './db/db.php';
   ?>
   <header>
      <div class="logo-container">
         <img src="#" alt="spotify-logo">
      </div>
   </header>
   <main>
      <div class="card-wrapper">
         <?php  foreach ($albums as $album) { ?>
            <div class="card">
               <div class="card-img">
                  <img src="<?php echo $album['poster']?>" alt="<?php echo $album['author']?>">
               </div>
               <div class="card-caption">
                  <h4><?php echo $album['title']?></h4>
                  <p><?php echo $album['author']?></p>
                  <p><?php echo $album['genre']?></p>
                  <p><?php echo $album['year']?></p>
               </div>
            </div>
         <?php } ?>
   </main>
</body>
</html>