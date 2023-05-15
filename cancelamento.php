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

$posicao = 0;

foreach ($fila->getItens() as $index => $cliente) {
    if ($cliente['senha'] == $senha) {
        $posicao = $index + 1;
        break;
    }
    $_SESSION['fila'] = $fila->getItens();
    $posicao = $fila->tamanho();
    $tempo_medio = $posicao * 5; 
}
?>
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6  text-center  mx-auto">
                    <h1 class='titulo'>Batata</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <article>
                        <img src='' alt="">
                        <p class='senha'>Posição na fila: <?php echo $posicao; ?></p>
                        <p>Tempo médio de espera: <?php echo $tempo_medio; ?> minutos</p>
                        <h2>Você deseja sair da fila?</h2>

                        <form action="reservado.php" method="post">
                            <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                            <button class="continuar" type="submit">Continuar na fila</button>
                        </form>
                        <form action="desistencia.php" method="post">
                            <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                            <button class="sair" type="submit">Sair</button>
                        </form>
                    </article>

                </div>
            </div>
        </div>

</body>
</html>