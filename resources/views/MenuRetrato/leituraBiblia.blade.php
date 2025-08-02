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
                    <li class="nav-item"><a class="nav-link" href="{{route('paginainicial')}}">Home</a></li>
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
    <!-- Seção de leitura das escrituras -->
<section class="py-5 mt-5">
    <div class="container">
        <h2 class="mb-4 text-center">Ler as Escrituras</h2>
        <form method="POST" action="{{route('lerlivro')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="livro" class="form-label">Escolha um livro da Bíblia:</label>
                    <select class="form-select" id="livro" name="livro" required>
                        <!-- Antigo Testamento -->
                        <option value="gn">Gênesis</option>
                        <option value="ex">Êxodo</option>
                        <option value="lv">Levítico</option>
                        <option value="nm">Números</option>
                        <option value="dt">Deuteronômio</option>
                        <option value="js">Josué</option>
                        <option value="jz">Juízes</option>
                        <option value="rt">Rute</option>
                        <option value="1sm">1 Samuel</option>
                        <option value="2sm">2 Samuel</option>
                        <option value="1rs">1 Reis</option>
                        <option value="2rs">2 Reis</option>
                        <option value="1cr">1 Crônicas</option>
                        <option value="2cr">2 Crônicas</option>
                        <option value="ed">Esdras</option>
                        <option value="ne">Neemias</option>
                        <option value="et">Ester</option>
                        <option value="jó">Jó</option>
                        <option value="sl">Salmos</option>
                        <option value="pv">Provérbios</option>
                        <option value="ec">Eclesiastes</option>
                        <option value="ct">Cânticos</option>
                        <option value="is">Isaías</option>
                        <option value="jr">Jeremias</option>
                        <option value="lm">Lamentações</option>
                        <option value="ez">Ezequiel</option>
                        <option value="dn">Daniel</option>
                        <option value="os">Oseias</option>
                        <option value="jj">Joel</option>
                        <option value="am">Amós</option>
                        <option value="ob">Obadias</option>
                        <option value="jn">Jonas</option>
                        <option value="mq">Miqueias</option>
                        <option value="na">Naum</option>
                        <option value="hc">Habacuque</option>
                        <option value="sf">Sofonias</option>
                        <option value="ag">Ageu</option>
                        <option value="zc">Zacarias</option>
                        <option value="ml">Malaquias</option>

                        <!-- Novo Testamento -->
                        <option value="mt">Mateus</option>
                        <option value="mc">Marcos</option>
                        <option value="lc">Lucas</option>
                        <option value="jo">João</option>
                        <option value="at">Atos</option>
                        <option value="rm">Romanos</option>
                        <option value="1co">1 Coríntios</option>
                        <option value="2co">2 Coríntios</option>
                        <option value="gg">Gálatas</option>
                        <option value="ef">Efésios</option>
                        <option value="fp">Filipenses</option>
                        <option value="cc">Colossenses</option>
                        <option value="1ts">1 Tessalonicenses</option>
                        <option value="2ts">2 Tessalonicenses</option>
                        <option value="1tm">1 Timóteo</option>
                        <option value="2tm">2 Timóteo</option>
                        <option value="tt">Tito</option>
                        <option value="fm">Filemom</option>
                        <option value="hb">Hebreus</option>
                        <option value="tg">Tiago</option>
                        <option value="1pe">1 Pedro</option>
                        <option value="2pe">2 Pedro</option>
                        <option value="1jo">1 João</option>
                        <option value="2jo">2 João</option>
                        <option value="3jo">3 João</option>
                        <option value="jd">Judas</option>
                        <option value="ap">Apocalipse</option>
                    </select>
                    <br>
                    <label>Insira o capítulo: </label>
                    <input type="number" name="capitulo" required> 
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Ler</button>
                </div>
            </div>
        </form>
    </div>
</section>
    <!-- Retorna a requisição feita pelo o formuláiro -->

 <div style="max-width: 700px; margin: auto; padding: 20px; font-family: 'Georgia', serif; line-height: 1.8; background-color: #fdfdfd; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    <h2 style="text-align: center; margin-bottom: 30px; color: #4a4a4a;">Leitura Bíblica</h2>
    @if(isset($textos))
        @foreach($textos as $index => $texto)
            <p style="margin-bottom: 20px; font-size: 18px; color: #333;">
                <strong>{{ $index + 1 }}.</strong> {{ $texto['text'] }}
            </p>
        @endforeach
    @else 
        {{'Aguardando Leitura'}}
    @endif
</div>

</body>