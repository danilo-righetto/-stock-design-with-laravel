<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>Controle do estoque de jogos</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                        <td id="middle"><?= number_format($produto->preco, 2, ',', '.') ?></td>
                        <td id="middle"><?= $produto->quantidade ?></td>
                        <td id="middle">
                            <a href="/produtos/mostra/<?= $produto->id ?>">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>