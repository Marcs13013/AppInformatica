<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Material Escolar Online</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <header style="height:30px;">
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:90px;">
            <div class="container-fluid"  style="background-color: #fff;width:100vw">
                <a  class="navbar-brand" href="{{route('home-adm')}}" style="background-color:black; color:white; padding-right:10px; margin-left:-18px; margin-right:20px"><img src="{{ asset('assets/logo.png') }}"
                        alt="Logo" style="width: 80px; height: 80px;    "> <!-- Logo -->Especificações do Notebook</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-nav-custom" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a style="margin-right:32px; margin-left:28px; font-weight:800; font-size:32px" class="nav-link active" aria-current="page" href="{{route('home-adm')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-weight:800; font-size:32px" class="nav-link active" aria-current=" page"
                                href="{{route('show-cadastro-Notebook')}}">Cadastro</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>


    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>