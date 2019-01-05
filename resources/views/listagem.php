<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>Controle do estoque de jogos</title>
    </head>

    <body>
        <div class="container">
            <h1>Listagem dos produtos</h1>
            <table class="table table-bordered table-hover">
                <?php foreach ($produtos as $produto) : ?> 
                    <tr>
                        <td id="middle" class="oneRow"><?= $produto->nome ?></td>
                        <td><?= $produto->descricao ?></td>
                        <td id="middle" class="oneRow"><?= $produto->compatibilidade ?></td>
                        <td id="middle" class="oneRow"><?= $produto->genero ?></td>
                        <td id="middle"><?= $produto->preco ?></td>
                        <td id="middle"><?= $produto->quantidade ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>