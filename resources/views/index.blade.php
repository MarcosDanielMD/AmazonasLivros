@extends('padrao')
@section('content')

<body>
    <div class="container">
        <div class="row my-5 text-center">
            <div class="col-6">
                <p class="titulo ">Amazonas Livros</p>
                <p class="descricao ">Liste seus livros favoritos aqui!</p>
            </div>
            <div class="col-6">
                <img src="{{asset('storage/arvre.png')}}" alt="">
            </div>
        </div>
    </div>
    @endsection