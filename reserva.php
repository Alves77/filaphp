<?php
// reserva.php
session_start();
require_once 'Fila.php';

// Inicializa a fila na sessão, se necessário.
if (!isset($_SESSION['fila'])) {
    $fila = new Fila();
} else {
    $fila = new Fila();
    $fila->setItens($_SESSION['fila']);
}

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$senha = rand(1000, 9999);

$cliente = [
    'nome' => $nome,
    'telefone' => $telefone,
    'senha' => $senha,
];

$fila->enfileirar($cliente);

$_SESSION['fila'] = $fila->getItens();
$posicao = $fila->tamanho();
$tempo_medio = $posicao * 5;
?>
<?php include 'head.php'; ?>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class=" col-md-6  text-center  mx-auto">
                    <img src="" alt="">
                    <h1>Fila</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center mx-auto">
                    <article>
                        <h1 class="text-purple">Reserva</h1>
                        <p class='senha'>Senha: <?php echo $senha; ?></p>
                        <p>Posição na fila: <?php echo $posicao; ?></p>
                        <p>Tempo médio de espera: <?php echo $tempo_medio; ?> minutos</p>
                        <form action="reservado.php" method="post">
                            <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                            <button class="continuar" type="submit">Confirmar Reserva</button>
                        </form>
                        <form action="cancelamento.php" method="post">
                            <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                            <button class="sair" type="submit">Cancelar Reserva</button>
                        </form>
                    </article>
                </div>
            </div>
        </div>
</body>

</html>