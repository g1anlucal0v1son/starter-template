<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h2>questo è un sito in html </h2>

  <?php  

  $a = ["primo risultato", "secondo risultato" ,"terzo risultato"];

  for ($i=0 ; $i < count($a) ; $i++ ) { 
    print $a[$i]; 
  }

  ?>    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js.map" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>