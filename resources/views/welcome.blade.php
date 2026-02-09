@extends('layout.app')

@section('title', 'Home')

@section('content')

    <main class="cardcenter">
        <h1>Bem-vindo ao DevStart!</h1>

        <img src="{{ asset('imagens/imgHome.jpg') }}" alt="imagem de um laptop com codigos">

        <div class="universCard">
            <p>O DevStart é o lugar ideal para quem está começando no mundo da programação. Aqui você vai encontrar
                conteúdos
                simples, projetos práticos e dicas para dar seus primeiros passos no desenvolvimento web. </p>

            <p> Navegue pelas nossas páginas, conheça os serviços que oferecemos e explore os tópicos que vão te ajudar a se
                tornar um desenvolvedor confiante e preparado. </p>
        </div>

    </main>

@endsection
