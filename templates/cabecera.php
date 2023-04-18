<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-0h+lsg6gSYU6zLd9X9H6RH0T1RmwOg7cU2QFhvjO/QwLqYJ3+q3hJ/lKry7lKH3q3Jd5Wy5pIv5FK0x+J0CHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<style>.navbar-dark {
  background-color: rgba(0, 0, 0, 0.5); /* un negro semi-transparente */
}
.navbar-nav li a {
  font-size: 20px;
  margin: 0 25px;
}

.navbar-nav li:hover {
  transform: scale(1.1);
  transition: all 0.2s ease-in-out;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-transparent fixed-top">
  <a class="navbar-brand"><img src="RMS.png" height="40" alt="Logo de la tienda"></a>
  <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="my-nav" class="collapse navbar-collapse justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link navbar-text" href="iniciar.php">Iniciar sesión</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navbar-text" href="index.php">Tienda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-text" href="mostrarcarrito.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))? 0:count($_SESSION['CARRITO'])?>)</a>
      </li>
    </ul>
  </div>
</nav>

    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
