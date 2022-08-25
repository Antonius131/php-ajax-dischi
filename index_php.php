<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dischi PHP</title>
</head>
<body>
   <header>
      <div class="logo-container">
         <img src="#" alt="spotify-logo">
      </div>
   </header>
   <main>
      <div class="card-wrapper">
         <div class="card">
            <div class="card-img">
               <img :src="poster" :alt="author">
            </div>
            <div class="card-caption">
               <h4>Title</h4>
               <p>Author</p>
               <p>Genre</p>
               <p>Year</p>
            </div>
         </div>
      </div>
   </main>
</body>
</html>