@extends('padrao')
@section('content')

    <div class="container  my-4">
       <form method="post" action="{{route('cadastro-livro')}}" >
       @csrf
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('storage/HosanaLima.jpg')}}" alt="">
                </div>
                <div class="col-6 align-self-center">
                    <h1 class="my-4">Cadastro de Livros</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome do livro</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="As Consolações da Filosofia" name="nomelivro">
                    </div>
                    <div class="mb-3">    
                        <label for="exampleFormControlInput1" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alan de Botton" name="autor">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ano de lançamento</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2000 " name="anolancamento"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Editora</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Monte Cristo " name="editora"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Breve descrição do livro</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="É um livro muito legal" name="descricacao"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--FIM DO BODY-->

    <!--FOOTER-->
    
@endsection