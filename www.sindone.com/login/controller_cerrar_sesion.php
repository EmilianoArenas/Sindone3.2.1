<?php

//iniciar base de datos
include ('../app/config/config.php');
include ('../app/config/conexion.php');

session_start();
if (isset($_SESSION['sesion_email'])) {
    session_destroy();
    header('Location: ' . $URL . '../index.php');
} else {
    
}
