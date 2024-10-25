<?php
include 'connect.php';

if(isset($_POST['REGISTRO'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $clave = password_hash($clave, PASSWORD_DEFAULT);

    $checkUsuario = "SELECT * FROM usuarios WHERE usuario='$usuario' OR email='$email'";
    $result = $conn->query($checkUsuario);
    if($result->num_rows > 0){
        echo "¡El usuario o correo electrónico ya están registrados!";
    }
    else{
        $insertQuery = "INSERT INTO usuarios (nombre, apellido, usuario, email, clave)
                      VALUES ('$nombre', '$apellido', '$usuario', '$email', '$clave')";
        if($conn->query($insertQuery) === TRUE) {
            header("location: login.php");
            exit();
        }
        else{
            echo "Error: " . $conn->error;
        } 
    } 
}

if(isset($_POST['INICIAR_SESION'])){ 
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave = md5($clave);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'"; 
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("location: index.php"); 
        exit();
    }
    else{
        echo "No se pudo iniciar sesión";
    } 
}
?>
