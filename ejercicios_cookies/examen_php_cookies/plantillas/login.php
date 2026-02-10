<?php
//autentificacion /inicio de sesion 
if(isset($_SERVER["POST"])){
    session_start();
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $_SESSION["auth"]=false;

    $conexion=new mysqli("localhost","root","","examen_php");
    $consulta=$conexion->prepare("select email,password from usuarios where email= ? and password= ?");
    $consulta->bind_param("ss",$email,$pass);
    $resultado=$consulta->execute();
    if($resultado=$consulta->fetch_assoc()){
        //recordar 24 horas el correo electronico cookies
        setcookie("correo",$email,time()+(24*60*60*60));
        $_SESSION["auth"]=true;
        header("location: dashboard.php");
    }else{
        header("location: login.php");
        $_SESSION["auth"]=false;

    }
    $conexion->close();
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Soporte - Login</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 100px; background: #eee; }
        .login-box { background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { display: block; width: 250px; margin-bottom: 10px; padding: 8px; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Acceso Técnicos</h3>
        <form method="POST">
            <input type="email" name="email" value="" placeholder="Email" required>
            <input type="password" name="pass" placeholder="Contraseña" required>
            <button type="submit" name="login">Entrar</button>
        </form>
        
        </div>
</body>
</html>