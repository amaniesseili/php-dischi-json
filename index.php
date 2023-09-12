<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- Custom css -->
  <link rel="stylesheet" href="style.css">

  <title>PHP Art JSON</title>
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand  mx-auto" href="#"><img  src="img/logo.jpg" alt=""></a>
    </nav>

  </header>

  <main>


    <!-- Contenuto principale -->
    <div id="app" class="container">
      <h1 class="text-center mt-3 mb-3">Le mie Opere</h1>
      <div class="row ">

          <?php

          // step1- Leggo il contenuto del file JSON
          $fileContent = file_get_contents("art.json");

          // decodifico il json in un array assosciativo
          $opere = json_decode($fileContent, true);

          foreach ($opere as $opera) {
            echo '
    <div class="col-md-3 mb-3">
        <div class="card mb-1 h-100">
            <img src="' . $opera['opera'] . '" class="card-img-top" alt="Immagine dell\'opera">
            <div class="card-body text-center">
                <h5 class="card-title">' . $opera['titolo'] . '</h5>
                <p class="card-text">Artista: ' . $opera['artista'] . '</p>
                <p class="card-text">Anno: ' . $opera['anno'] . '</p>
            </div>
        </div>
    </div>';
          }
          ?>




        </div>

      </div>
    </div>



  </main>





  <script src="main.js"></script>
</body>

</html>