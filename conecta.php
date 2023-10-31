<?php
define("HOST", 'localhost');
define("BD", 'empleado');
define("USER_BD", 'root');
define("PASS_BD", '');

function conecta(){
    $conn = new mysqli (HOST, USER_BD, PASS_BD, BD);
    return $conn;
}
?>
