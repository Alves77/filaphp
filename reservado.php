<?php
session_start();
require_once 'Fila.php';
if (!isset($_SESSION['fila'])) {
    header('Location: index.php');
    exit();
}

$senha = $_POST['senha'];
$fila = new Fila();
$fila->setItens($_SESSION['fila']);

header('Location: chamada.php?senha=' . $senha);
exit();
?>