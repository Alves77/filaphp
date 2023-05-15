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

$itens = $fila->getItens();

foreach ($itens as $index => $cliente) {
    if ($cliente['senha'] == $senha) {
        array_splice($itens, $index, 1);
        break;
    }
}

$fila->setItens($itens);
$_SESSION['fila'] = $fila->getItens();

?>
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6  text-center  mx-auto">
                    <h1>Batata</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <article>
                        <h1 class="text-purple">Sua reserva foi cancelada, agradecemos a visita!</h1>
                    </article>
                </div>
            </div>
        </div>
</body>

</html>