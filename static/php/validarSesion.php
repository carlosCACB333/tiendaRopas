<?php

session_start();
if (isset($_SESSION['email'])) {

    $arreglo = new stdClass();
    $arreglo->email = $_SESSION['email'];
    $arreglo->perfil = $_SESSION['perfil'];
    echo json_encode($arreglo);
} else {
    echo "false";
}
