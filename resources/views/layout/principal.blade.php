<html>
    <head></head>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Controle do estoque de jogos</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header col-md-6">      
                    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>

                <ul class="nav navbar-nav navbar-right col-md-6">
                    <li>
                        <a href="/produtos">Listagem</a>
                    </li>
                </ul>
            </nav>

            @yield('content')

            <footer class="footer">
                <p>© Livro de Laravel do Alura.</p>
            </footer>
        </div>
    </body>
</html>