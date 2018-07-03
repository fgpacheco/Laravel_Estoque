<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista() {
    	$produtos = DB::select("select * from produtos");
    	//return view('listagemProdutos')->withProdutos($produtos);
    	return view('produto.listagemProdutos')->with('produtos', $produtos);
    	
    }

    public function detalhes(Request $request) {
    	$produto = Produto::find($request->id);
    	if(empty($produto)) {
    		return '<h1>Produto não existe</h1>';
    	}
    	return view('produto.detalhesProduto', ['produto' => $produto]);
    }

    public function novo() {
        return view('produto.novoProduto');
    }

    public function adiciona(Request $request) {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;        
        $produto->quantidade = $request->quantidade;

        $produto->save();

        return $produto;

    }
}
