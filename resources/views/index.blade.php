<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moradas do Altíssimo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }
        .navbar-brand img {
            height: 100px;
            margin-right: 4px;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        .nav-link {
            margin-left: 15px;
        }
        .hero {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, #cfe2ff, #e2e3ff);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .nav-link:hover::after {
    width: 100%;
}
.nav-link {
    margin-left: 15px;
    transition: color 0.3s ease, border-bottom 1.3s ease;
    position: relative;
}

.nav-link:hover {
    color: #000000; /* azul Bootstrap */
    font-weight: 500;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: #0d6efd;
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}
img {
    height: 400px
}
.hero {
    background-image: url('https://images.unsplash.com/photo-1504052434569-70ad5836ab65?fm=jpg&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJpYmxlJTIwcmVhZGluZ3xlbnwwfHwwfHx8MA%3D%3D&ixlib=rb-4.1.0&q=60&w=3000'); /* Imagem suave, pode trocar */
    background-size: cover;
    background-position: center;
    padding: 120px 20px;
    position: relative;
    color: white;
}

.hero .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 56, 168, 0.5); /* Azul espiritual com transparência */
    z-index: 1;
}

.hero h1,
.hero p,
.hero a {
    z-index: 2;
    position: relative;
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}

.hero p {
    font-size: 1.4rem;
    margin-top: 20px;
    text-shadow: 1px 1px 6px rgba(0,0,0,0.4);
}

.hero a.btn {
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

   </style>
</head>
<body>

    <!-- Navbar -->
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

<section class="hero position-relative text-white">
    <div class="overlay"></div>
    <div class="container position-relative z-2 text-center">
        <h1 class="animate__animated animate__fadeInDown">Bem-vindo à Moradas do Altíssimo</h1>
        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Um espaço de fé, comunhão e crescimento espiritual.</p>
        <a href="{{route('eventos')}}" class="btn btn-light btn-lg mt-4 animate__animated animate__fadeInUp animate__delay-2s">
            Conheça nossos eventos
        </a>
    </div>
</section>

   <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
