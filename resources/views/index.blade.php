<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moradas do Altíssimo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
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
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
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
<div class="conteiner_retratos">
    <a href="{{route('lerestcrituras')}}" class="retrato">
        <img src="{{ asset('imagens/escrituras.jpg') }}" alt="Escrituras">
        <p>Porque devemos ler as escrituras?</p>
    </a>

    <a href="{{route('adoracao')}}" class="retrato">
        <img src="{{ asset('imagens/img6.jpg') }}" alt="Adoração">
        <p>O poder da adoração</p>
    </a>

    <a href="#" class="retrato">
        <img src="{{ asset('imagens/jesus.jpg') }}" alt="Jesus">
        <p>A vida de Jesus</p>
    </a>
</div>
<section class="culto-domingo position-relative text-white">
  <div class="overlay-culto"></div>
  <div class="container text-center position-relative z-2 py-5">
<h2 class="display-4 fw-bold animate__animated animate__fadeInDown">
  <span id="frase-rotativa">Cultos aos Domingos</span>
</h2>

    <p class="lead mt-3 animate__animated animate__fadeInUp animate__delay-1s">
      Venha celebrar conosco todos os <strong>Domingos das 18h às 20h</strong><br>
      Louvor, Palavra e Comunhão em um ambiente cheio de paz e alegria!
    </p>
    <a href="{{ route('eventos') }}" class="btn btn-outline-light btn-lg mt-4 animate__animated animate__fadeInUp animate__delay-2s">
      Ver programação completa
    </a>
  </div>
</section>

<section class="visite-igreja position-relative text-white mt-5">
    <div class="overlay-visita"></div>
    <div class="container text-center position-relative z-2 py-5 animate__animated animate__zoomIn">
        <h2 class="fw-bold display-4 animate__animated animate__fadeInDown">Venha nos visitar!</h2>
        <p class="lead mt-4 animate__animated animate__fadeInUp animate__delay-1s">
            A <strong>Moradas do Altíssimo</strong> tem um espaço preparado para você e sua família.<br>
            Venha participar de um culto, conhecer nossa comunidade<br> e sentir o amor de Deus de forma acolhedora.
        </p>
        <a href="#" class="btn btn-outline-light btn-lg mt-4 animate__animated animate__fadeInUp animate__delay-2s visita-btn">
            Saiba mais
    </div>
</section>


    <script src="{{ asset('js/rotative.js') }}"></script>

   <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
