<?php

//if ($_SERVER['REQUEST_METHOD']=='POST') {
$n = $_POST["n"];
if (isset($_POST['n'])) {
  echo '<!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="scriptFibo.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>Fibonacci</title>
  </head>

  <body>
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Fibonacci.html">Fibonacci</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="MCD.html">MCD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CousingN.html">Cousing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Fibonacci.html">Fibonacci</a>
            </li>
          </ul>
        </div>
      </nav> <br>';

      $x=0;
      $y=1;
      $z=1;
      for ($i=1; $i <= $n; $i++) {
        $z = $x + $y;
        $x= $y;
        $y= $z;
      }

      echo '<h5>El numero es ' . $z . '</h5>
    </div>
  </body>

  </html>';

}




//}else {
  //echo "vale brga";
//}



 ?>
