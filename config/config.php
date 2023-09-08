<!-- Inicio ->Andres implementar encriptacion de pagina -->
<?php

define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}
?>

<!-- Fin ->Andres implementar encriptacion de pagina -->