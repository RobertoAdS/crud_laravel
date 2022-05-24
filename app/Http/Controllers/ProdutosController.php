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
        if($request->nome == '' || $request->valor == '' || $request->estoque == ''){
            echo "<script>alert('Campo em branco')</script>";
            echo "<script>document.location = '/produtos/novo'</script>";
        }
        Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
        ]);
        
        echo "<script>alert('Produto \"$request->nome\" cadastrado!')</script>";
        echo "<script>document.location = '/produtos/table'</script>";
    }

    public function show(){
        $produto = Produto::get();
        
        return view('produtos.table', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        if($request->nome == '' || $request->valor == '' || $request->estoque == ''){
            echo "<script>alert('Campo em branco')</script>";
            echo "<script>document.location = '/produtos/editar'</script>";
        }
        $produto = Produto::findOrFail($id);
        
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
        ]);

       
        echo "<script>alert('Produto alterado!')</script>";
        echo "<script>document.location = '/produtos/table'</script>";
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);

        return view('produto.delete', ['produto' => $produto]);
            }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
       echo "<script>alert('Produto excluído!')</script>";
       echo "<script>document.location = '/produtos/table'</script>";
    }
}
