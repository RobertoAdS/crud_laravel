<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
        ]);

        return "Produto criado com sucesso!";
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);
        
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
        ]);

        return "Produto Atualizado com Sucesso!";
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);

        return view('produto.delete', ['produto' => $produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Excluído com Sucesso";
    }
}
