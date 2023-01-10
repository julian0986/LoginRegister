<?php

//$conexion = mysqli_connect("localhost","root","","login_register");
$conexion = mysqli_connect("www.db4free.net","login_julian","Calle1128*","log_register");

//prueba de conexion.
 if($conexion){
    echo "conexion externa exitosa a la base de datos";
}else{
    echo "No se puede conectar a la base de datos";
}
 


?>