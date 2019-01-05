<html>    
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>Controle do estoque de jogos</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Detalhes do produto: <?= $produto->nome ?></h1>

            <ul>
                <li>
                    <b>Valor: R$</b> <?= number_format($produto->preco, 2, ',', '.') ?>
                </li>

                <li>
                    <b>Gênero: </b> <?= $produto->genero ?>
                </li>

                <li>
                    <b>Compatibilidade: </b> <?= $produto->compatibilidade ?>
                </li>

                <li>
                    <b>Descrição: </b> <?= $produto->descricao ?>
                </li>

                <li>
                    <b>Quantidade: </b> <?= $produto->quantidade ?>
                </li>
            </ul>
        </div>   
    </body>
</html>    