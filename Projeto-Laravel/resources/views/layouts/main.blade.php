<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ESTILOS -->
    <link rel="stylesheet" href="/css/staticos.css">
    <!-- SCRIPTS -->
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-recycle"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-separar" id="navbarNavAltMarkup">
                
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Início <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Materiais</a>
                        <a class="nav-item nav-link" href="#">Onde Encontrar</a>
                    </div>
                    <div class="navbar-nav">
                        <a href="" class="nav-item nav-link">Login</a>
                        <a href="" class="nav-item nav-link">Cadastre-se</a>
                    </div>
                
                
            </div>
        </nav>
    </header>
    <main>
        @yield('container')
    </main>

    <footer>
        <p>ClearDay &copy; 2023</p>
    </footer>
</body>
</html>