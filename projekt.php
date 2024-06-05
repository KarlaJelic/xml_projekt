<?php
$xml = simplexml_load_file('projekt.xml');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popis Kadrova</title>
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
    <h1 class="p-3">Zapisani kadrovi:</h1>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-dark table-hover mx-auto text-center" style="max-width: 90%;">
          <thead>
            <tr>
              <th scope="row">Redni broj</th>
              <th scope="row">Interijer/Eksterijer</th>
              <th scope="row">Vrsta kadra</th>
              <th scope="row">Opis kadra</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($xml->kadar as $kadar): ?>
              <tr>
                <td><?php echo $kadar->redni_broj; ?></td>
                <td><?php echo $kadar->int_ext; ?></td>
                <td><?php echo $kadar->vrsta_kadra; ?></td>
                <td><?php echo $kadar->opis_kadra; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoT0z1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
