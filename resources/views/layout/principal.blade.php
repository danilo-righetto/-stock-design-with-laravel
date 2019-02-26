<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <link rel="stylesheet" href="/css/animate.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- JQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
        <title>Controle do estoque de jogos</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header col-md-6">      
                    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>

                <ul class="nav navbar-nav navbar-right col-md-6" style="display:flex; flex-direction: row;">
                    <li>
                        <a href="/produtos">Listagem</a>
                    </li>
                    <li>
                        <a href="/produtos/novo">Novo produto</a>
                    </li>
                    @if(Auth::guest())
                        <li>
                            <a href="/login">Login</a>
                        </li>
                        <li>
                            <a href="/register">Register</a>
                        </li>
                    @else
                        <li><a href=#>{{ Auth::user()->name }}</a></li>
                        <li>
                            <a href="/logout">logout</a>
                        </li>
                    @endif
                </ul>
            </nav>

            @yield('content')

            <footer class="footer">
                <p>© Livro de Laravel do Alura.</p>
            </footer>
        </div>
    </body>
</html>