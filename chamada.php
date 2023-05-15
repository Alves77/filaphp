<?php

$senha = $_GET['senha'];
// gerar número aleatório de 1 a 10
$mesa = rand(1, 10);
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
                        <h1 class="text-purple">Você foi chamado(a)!</h1>
                        <img src="" alt="">
                        <p>A tolerância máxima é de 10 minutos.</p>
                        <p class='senha'>Senha : <?php echo $senha; ?></p>
                        <p class='senha'>Mesa: <?php echo $mesa; ?></p>
                    </article>

                </div>
            </div>
        </div>
</body>

</html>