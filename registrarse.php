<?php

require 'BASE.php';

$message = "";

if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && ($_POST['password'] == $_POST['confirm-password'])) {
	$sql = "INSERT INTO registros (username, email, password) VALUES (:username, :email, :password)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':username', $_POST['username'] );
	$stmt->bindParam(':email', $_POST['email'] );
	
	$stmt->bindParam(':password', $_POST['password'] );
	
	if($stmt->execute()){
		$message = "Su cuenta ha sido creada";
	} else {
		$message = "Error al crear la cuenta";
	}
} 
if (!empty($_POST['password']) && ($_POST['password'] != $_POST['confirm-password'])){
	$message = "Llenado incorrecto del registro";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>Formulario de registro</title>
 <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	
 <table class="center">
  <tr>
   <td>
    <div class="register-form">
     <h2>Registro de usuario</h2>
     <form action ="registro.php" method="POST">
      <input type="text" id="username" name="username" placeholder="Ingresa tu nombre de usuario" style="width :96%;" required>
      <input type="email" id="email" name="email" placeholder="Ingresa tu e-mail" style="width :96%;"required>
      <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" style="width :96%;" required>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" style="width :96%;" required>
      <center><input type="submit" value="Registrarse">
		  	<?php if(!empty($message)): ?>
		 <p><center><?= $message ?></center></p>
	<?php endif; ?>
		 <h3> ¿Ya tienes una cuenta? </h3>
		  <h2><a href= "http://localhost/IdS2/forma.php"> Inicia Sesión </a></h2>
		  </center>
     </form>
    </div>
   </td>
  </tr>
 </table>
 <script src="reg.js"></script>
</body>
</html>