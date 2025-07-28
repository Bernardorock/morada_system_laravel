<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler as Escrituras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset("css/lerEscrituras.css") }}">
</head>
<body>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('imagens/logom.png') }}" alt="Logo da igreja">
                Moradas do Altíssimo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Bibliotecas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Notícias</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('palavradopastor')}}">Palavra do Pastor</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeria de Fotos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Meus Visitantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-primary px-3" href="#">Login</a></li>
                </ul>
            </div>
        </div>

    </nav>