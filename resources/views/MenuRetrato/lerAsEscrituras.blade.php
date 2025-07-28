<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moradas do Altíssimo</title>
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

<section class="hero position-relative text-white">
    <div class="overlay"></div>
    <div class="container position-relative z-2 text-center">
        <h1 class="animate__animated animate__fadeInDown">Uma reflexão sobre as escrituras</h1>
        <p class="lead animate__animated animate__fadeInUp animate__delay-1s"></p>
        <h3>
            As palavras do Senhor são puras,
            são como prata purificada num forno,
            sete vezes refinada. Senhor, tu nos guardarás seguros,
e            dessa gente nos protegerás para sempre.
            <strong>Salmos 12:6-7</strong>
        </h3>
    </div>
</section>
<section class="biblia-reflexao py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4 animate__animated animate__fadeInDown">Palavra que transforma</h2>
        <blockquote class="blockquote animate__animated animate__fadeInUp">
            <p class="mb-4 fs-4 fst-italic">"Lâmpada para os meus pés é a tua palavra, e luz para o meu caminho."</p>
            <footer class="blockquote-footer mt-2">Salmos <cite title="Salmos 119:105">119:105</cite></footer>
        </blockquote>

        <div class="mt-5 animate__animated animate__fadeInUp animate__delay-1s">
            <p class="lead">A Bíblia é mais do que um livro: é o sopro do Criador guiando cada passo do nosso caminho.  
            Ao meditar nas Escrituras, encontramos direção, conforto e renovação para alma.
            Algumas pessoas escolhem um versículo bíblico como guia para suas vidas, encontrando nele inspiração e força. Essa prática 
            reflete a busca por significado e direção espiritual no cotidiano. 
            <br>
            <strong>**A Bíblia: História e Autoria**</strong>  
            A Bíblia, escrita por diversos autores ao longo de séculos, 
            reúne textos sagrados de origem divina e humana. Composta por Antigo e Novo Testamento, sua biografia remonta a 
            tradições orais e manuscritos antigos, consolidados como fundamento dos cristãos.
            </p>
            <p class="text-muted">Reserve um momento hoje para abrir a Palavra e deixar Deus falar com você.</p>
        </div>
    </div>
</section>
<section class="py-5 text-white" style="position: relative; background-image: url('https://images.unsplash.com/photo-1504052434569-70ad5836ab65?ixlib=rb-4.1.0&auto=format&fit=crop&w=1600&q=80'); background-size: cover; background-position: center;">
  <!-- Sobreposição -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.55);"></div>

  <div class="container position-relative text-center">
    <h2 class="fw-bold mb-5 display-5">Por que devemos ler as Escrituras?</h2>

    <div class="row justify-content-center">
      <div class="col-md-10 text-start">

        <p class="fs-5 mb-4">📖 <strong>Para conhecer a Deus</strong> — A Bíblia revela quem Deus é, seu amor, sua justiça e seus planos eternos.  
        <br><em>“Conheçamos, e prossigamos em conhecer ao Senhor.”</em> — <strong>Oséias 6:3</strong></p>

        <p class="fs-5 mb-4">💡 <strong>Para receber sabedoria e direção</strong> — A Palavra ilumina nossos passos e nos mostra o caminho.  
        <br><em>“Lâmpada para os meus pés é a tua palavra...”</em> — <strong>Salmo 119:105</strong></p>

        <p class="fs-5 mb-4">🙏 <strong>Para fortalecer a fé</strong> — Quanto mais ouvimos a Palavra, mais firme nossa fé se torna.  
        <br><em>“A fé é pelo ouvir, e o ouvir pela palavra de Deus.”</em> — <strong>Romanos 10:17</strong></p>

        <p class="fs-5 mb-4">🛡️ <strong>Para vencer as tentações</strong> — A Palavra é nossa espada espiritual.  
        <br><em>“Está escrito...”</em> — <strong>Mateus 4:4</strong></p>

        <p class="fs-5 mb-4">❤️ <strong>Para transformar o coração</strong> — Deus usa a Bíblia para ensinar, corrigir e curar.  
        <br><em>“Toda a Escritura é inspirada por Deus...”</em> — <strong>2 Timóteo 3:16</strong></p>

        <p class="fs-5 mb-4">🌱 <strong>Para crescer espiritualmente</strong> — A Palavra é alimento para a alma.  
        <br><em>“Desejai o genuíno leite espiritual...”</em> — <strong>1 Pedro 2:2</strong></p>

        <div class="text-center mt-5">
          <a href="{{route('leiturabiblia')}}" class="btn btn-warning btn-lg fw-bold shadow">Comece sua leitura hoje!</a>
        </div>

      </div>
    </div>
  </div>
</section>


