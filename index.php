<?php include 'head.php'; ?>

<body>
    <main>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6  text-center mx-auto p-3">
                        <img src="" alt="">
                        <h1>Batata</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center mx-auto">
                        <article>
                            <h2>Bem-vindo(a), insira seus dados</h2>
                            <form action="reserva.php" method="post">
                                <fieldset form>
                                    <div class="form-group">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" name="nome" id="nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" name="telefone" id="telefone" required>
                                    </div>
                                    <button type="submit">Enviar</button>
                                </fieldset>
                            </form>
                        </article>
                    </div>
                </div>
            </div>

    </main>

    </html>