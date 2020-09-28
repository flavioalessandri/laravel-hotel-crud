<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pagamento;

class PagamentoController extends Controller
{
    public function index(){
      $pagamenti = Pagamento::all();
      // dd($pagamenti);
      return view('pagamenti.pagamenti', compact('pagamenti'));
    }

    public function delete($id){
      $pagamento = Pagamento::findOrFail($id);
      // dd($pagamento);
      $pagamento -> delete();
      return redirect()-> route('pagamenti.index');
    }
}
