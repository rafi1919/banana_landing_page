<!DOCTYPE html>
<html lang="en">
<head>
  <title>Banana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="style.css">

  <script ></script>
</head>
<body>
  <section>
    <div class="circle"></div>
    
    <p class="mark">BRONANA</p>
    <div class="mark2">
      <h1>BRONANA</h1>
      <h1>BRONANA</h1>
      <h1>BRONANA</h1>
    </div>
    <header>
      <div class="brand">
         <a href=""><img src="img/logo.png" class="logo"></a>
         <p>BRONANA</p>
      </div>
      <ul>
        <li><a id='Home' href="#">Home</a></li>
        <li><a id='Benefit' href="#">Bennefit</a></li>
        <li><a id='History' href="#">History</a></li>
        <input type="text" name="search" placeholder="search">

      </ul>
    </header>

   <div id="content"></div>

  </section>
  <div class="elipse"></div>

    
    

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
  </script>

    <script>
      $(document).ready(function () {
        $('#content').load('home.php');

        $('#Home').on('click', function() {
          $('#content').load('home.php');
        });

        $('#Benefit').on('click', function() {
          $('#content').load('benefit.php');
        });

        $('#History').on('click', function() {
          $('#content').load('history.php');
        });
        
        
      });
      console.lo

    </script>


​</body>
</html>