@extends('padrao')
@section('content')
    <!--BODY-->
    <div class="container my-4">
       <form method="post" action="{{route('alterar-banco-livros', $registrosLivros->id )}}" >
         @method('put')
         @csrf
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('storage/HosanaLima.jpg')}}" alt="">
                </div>
                <div class="col-6 align-self-center">
                    <h1 class="my-4">Alterar Livro</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome do livro</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$registrosLivros->nomelivro}}" name="nomelivro">
                    </div>
                    <div class="mb-3">    
                        <label for="exampleFormControlInput1" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$registrosLivros->autor}}" name="autor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ano de lançamento</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$registrosLivros->anolancamento}}" name="anolancamento"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Editora</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$registrosLivros->editora}}" name="editora"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Breve descrição do livro</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" value="{{$registrosLivros->descricacao}}" name="descricacao"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Alterar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--FIM DO BODY-->

@endsection