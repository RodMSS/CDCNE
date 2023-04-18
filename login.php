<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/cabecera.php';
?>
<?php

session_start();
require 'global/database.php';

if (!empty($_POST['email']) && !empty($POST['password'])){

    $records = $conn->prepare('SELECT ID, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message='';

    if(count($results)>0 && password_verify($_POST['password'], $results['password'])){
    $_SESSION['user_id']= $results['ID'];
    header('Location: /php-login');
}else{
    $message="La contraseña o email no son correctos";
}

}

?>
<style>
    body {
 font-family: Arial, sans-serif;
 background-color: rgba(0, 0, 0, 0.5);;
}

table.center {
    margin-left:auto;
    margin-right:auto;
    text-align: center;
}

.login-form {
 background-color: #ffffff;
 max-width: 500px;
 margin: 50px auto;
 padding: 20px;
 border-radius: 10px;
 box-shadow: 0px 0px 10px #cccccc;
 text-align: center;
}

h2 {
 text-align: center;
 margin-top: 0;
 text-align: center;
}

label {
 display: block;
 margin-bottom: 5px;
 text-align: center;
}

input[type="text"],
input[type="password"] {
 width: 100%;
 padding: 10px;
 margin-bottom: 20px;
 border: none;
 border-radius: 5px;
 background-color: #f2f2f2;
}

input[type="submit"] {
 background-color: white;;
 color: black;
 padding: 10px 20px;
 border: 1;
 border-radius: 5px;
 cursor: pointer;
}

input[type="submit"]:hover {
 background-color: rgba(0, 0, 0, 0.5);
 text-align: center;
}
.mi-span {
  text-align: center;
}

</style>


<div class="login-form">
     <h2>Iniciar sesión</h2>
     <span class="mi-span">or <a href="registrarse.php">SignUp</a></span><br/><br/>
     <div class="mensaje">
        <?php
        if(!empty($message)):
        ?>
        <p><?php echo $message; ?></p>
        <?php endif; ?>
    </div>

     <form action="login.php" method="post">
      <input type="text" id="username" name="username" placeholder="Ingresa tu nombre de usuario" style="width :96%;" required>
      <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" style="width :96%;" required>       
      <center><input type="submit" value="Iniciar sesión" > </center>

</form>
</div>

<?php
include 'templates/pie.php';
?>