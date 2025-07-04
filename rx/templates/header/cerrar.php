<?php 

session_start();
session_destroy();
echo "Saliendo de la plataforma";

header("Location: ../../login.php");
?>