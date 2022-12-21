<?php 
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //Esto se hace para que cunado se logueen con la contraseña encriptada fucnione correctamente.
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']=$correo;
        header("Location: bienvenido.php");
        exit();
    }else{
        echo '
            <script>
                alert(" Usuario no existe, por favor verifique los datos introducidos.");
                window.location = "../index.php";
            
            </script>
        
        ';
        exit();
    }

?>
