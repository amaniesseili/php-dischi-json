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

    <title>PHP Dischi JSON</title>
</head>
<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand " href="#"><img src="img/logo.jpg" alt=""></a>
    </nav>

  </header>

  <main>


    <!-- Contenuto principale -->
    <div id="app" class="container">
        <h1>Le mie Opere</h1>

        <!-- perche non posso visualizzare le opere ??? -->
        <div class="row">
          <div class="col-4" id="opere-container">
            
          <div class="card">
            <img src="${opera.opera}" class="card-img-top" alt="Immagine dell'opera">
            <div class="card-body">
                <h5 class="card-title">${opera.titolo}</h5>
                <p class="card-text">Artista: ${opera.artista}</p>
                <p class="card-text">Anno: ${opera.anno}</p>
            </div>
          </div>


          </div>

        </div>
    </div>


  </main>





  <script src="main.js"></script>
</body>
</html>