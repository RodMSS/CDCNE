<?php
include 'templates/cabecera.php';

  session_start();
  require 'BASE.php';

  $messageregister = '';

  if (isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && ($_POST['password'] == $_POST['confirm-password'])) {
      $sql = "INSERT INTO registros (username, email, password) VALUES (:username, :email, :password)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':username', $_POST['username'] );
      $stmt->bindParam(':email', $_POST['email'] ); 
      $stmt->bindParam(':password', $_POST['password'] );      

      if($stmt->execute()){
        $messageregister = "Usuario registrado";
      } else {
        $messageregister = "Error al crear la cuenta";
      }
  } else if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['confirm-password']) && ($_POST['password'] == $_POST['confirm-password'])) {
    $messageregister = "Llenado incorrecto del registro";
  }
}
$messagelogin = '';
if (isset($_POST['login'])) {
if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, username, email, password FROM registros WHERE username = :username');
  $records->bindParam(':username', $_POST['username']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if (is_countable($results) && count($results) > 0 && ($_POST['password'] == $results['password']) && $_POST['username'] == $results['username']) {
    $_SESSION['user_id'] = $results['id'];
    $messagelogin = "Login exitoso";
    header('Location: http://localhost/CDCNE/index.php'); // redirigir al usuario a menudenuncias.php
} else {
  $messagelogin = 'Usuario no registrado';
}
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>Formulario de inicio de sesión</title>
 <link rel="stylesheet" type="text/css" href="estiloss.css">
</head>
<body>
<div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST">
                <h1>Crear cuenta</h1>
                <input type="hidden" name="action" value="register">
                <input type="text" id="username" name="username" placeholder="Ingresa tu nombre de usuario" style="width :96%;" required>
                <input type="email" id="email" name="email" placeholder="Ingresa tu e-mail" style="width :96%;" required>
<input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" style="width :96%;" required>
<input type="password" id="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" style="width :96%;" required>
<input type="submit" name="register" value="Registrarse">
<?php if(!empty($messageregister)): ?>
		 <p><center><?= $messageregister ?></center></p>
	<?php endif; ?>
</form>
</div>
<div class="form-container sign-in-container">
<form  method="POST">
<h1>Iniciar sesión</h1>
<input type="hidden" name="action" value="login">
<input type="text" id="username" name="username" placeholder="Ingresa tu nombre de usuario" style="width :96%;" required>
<input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" style="width :96%;" required>
<input type="submit" name="login" value="Iniciar sesion">
<?php if(!empty($messagelogin)): ?>
		 <p><center><?= $messagelogin ?></center></p>
	<?php endif; ?>

</form>
</div>
<div class="overlay-container">
<div class="overlay">
<div class="overlay-panel overlay-left">
<h1>¡Bienvenido de vuelta!</h1>
<p>Para mantenerse conectado con nosotros, por favor inicie sesión con sus datos personales</p>
<button class="ghost" id="signIn">Iniciar sesión</button>
</div>
<div class="overlay-panel overlay-right">
<h1>¡Hola, amigo!</h1>
<p>Ingrese sus datos personales y comience su viaje con nosotros</p>
<button class="ghost" id="signUp">Registrarse</button>
</div>
</div>
</div>
</div>
<script src="funcionn.js"></script>

</body>

</html>
