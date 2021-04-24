<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/chat.css">
    <title>SabaTour</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark  menu">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img width="35" height="35" src="./assets/img/Logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse listaMenu" id="navbarCollapse">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link "  href="index.html"><h6 class="tituloSeis">Inicio</h6></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html #destinos"><h6 class="tituloSeis">Destinos</h6></a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.html"><h6 class="tituloSeis">perfil</h6>
            </a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
  </header>
   <div class="contenedor">
    <h1>Chat de cercania</h1>
    <div class="conversacion" id="conversacion"></div>
    <input type="text" class="form-control" placeholder="usuario">
    <textarea id="mensaje" placeholder="mensaje" class="form-control"></textarea>
    <button class="btn btn-success" onclick="escribir()">Enviar</button>
    
    
   </div>
   <footer>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link " href="index.html"><img class="opacity" widht="50" height="30"
            src="./assets/img/explora.png" alt="">
          <h6 class="tituloSeis">Inicio</h6>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html #destinos"><img class="opacity" widht="50" height="30" src="./assets/img/planes.png"
            alt="">
          <h6 class="tituloSeis">Destinos</h6>
        </a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="perfil.html"><img class="opacity" widht="50" height="30" src="./assets/img/perfil.png"
            alt="">
          <h6 class="tituloSeis">perfil</h6>
        </a>

      </li>
    </ul>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="./assets/js/chat.js"></script>
</body>
</html>