<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livros;



class LivrosController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    public function mostrarFormLivro(){
        return view('cad_livro');
    }

    public function mostrarManipulaLivros(){
        $registrosLivros = Livros::All();
        return view('manipula_livros',['registrosLivros' => $registrosLivros]);
    }

    public function MostrarAlterarLivros(Livros $registrosLivros){
        return view('alteralivro',['registrosLivros'=> $registrosLivros]);
    }

    public function cadastroLivro(Request $request)
    {
        $registrosLivros = $request->validate([
            'nomelivro' => 'string|required',
            'autor' => 'string|required',
            'anolancamento' => 'string|required',
            'editora' => 'string|required' ,
            'descricacao' => 'string|required'
            ]);
    
            Livros::create($registrosLivros);
    
            return view('index');
    }
    public function AlterarBancoLivros(Livros $registrosLivros, Request $request)
    {
            $registros = $request->validate([
                'nomelivro' => 'string|required',
                'autor' => 'string|required',
                'anolancamento' => 'string|required',
                'editora' => 'string|required' ,
                'descricacao' => 'string|required'
               ]);
               
            // Esta linha é que altera o registro no banco.
             $registrosLivros->fill($registros);
             $registrosLivros->save();
             return Redirect::route('manipula-livros');
    }

    public function DeletarLivros(Livros $registrosLivros)
    {
            $registrosLivros->delete();
            return Redirect::route('manipula-livros');
    }
}
