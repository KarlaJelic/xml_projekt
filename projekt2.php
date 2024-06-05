<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dodaj Kadar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body {
        font-family: Courier, monospace;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="projekt.php">Popis kadrova</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="projekt2.php">Dodaj kadar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container mt-5">
    <h1>Dodaj novi kadar</h1>
    <form action="projekt2.php" method="post">
      <div class="mb-3">
        <label for="redni_broj" class="form-label">Redni broj</label>
        <input type="text" class="form-control" id="redni_broj" name="redni_broj" required>
      </div>
      <div class="mb-3">
        <label for="int_ext" class="form-label">Interijer/Eksterijer</label>
        <input type="text" class="form-control" id="int_ext" name="int_ext" required>
      </div>
      <div class="mb-3">
        <label for="vrsta_kadra" class="form-label">Vrsta kadra</label>
        <input type="text" class="form-control" id="vrsta_kadra" name="vrsta_kadra" required>
      </div>
      <div class="mb-3">
        <label for="opis_kadra" class="form-label">Opis kadra</label>
        <textarea class="form-control" id="opis_kadra" name="opis_kadra" required></textarea>
      </div>
      <button type="submit" class="btn btn-dark">Dodaj</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $redni_broj = $_POST['redni_broj'];
    $int_ext = $_POST['int_ext'];
    $vrsta_kadra = $_POST['vrsta_kadra'];
    $opis_kadra = $_POST['opis_kadra'];

    $xml = simplexml_load_file('projekt.xml');

    $new_kadar = $xml->addChild('kadar');
    $new_kadar->addChild('redni_broj', $redni_broj);
    $new_kadar->addChild('int_ext', $int_ext);
    $new_kadar->addChild('vrsta_kadra', $vrsta_kadra);
    $new_kadar->addChild('opis_kadra', $opis_kadra);
    

    $xml->asXML('projekt.xml');

    header('Location: projekt.php');
    exit;
}
?>
