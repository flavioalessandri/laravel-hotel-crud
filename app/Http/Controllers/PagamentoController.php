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

    public function edit($id){
      $pagamento= Pagamento::findOrFail($id);

      return view('pagamenti.pagamento-edit', compact('pagamento'));
    }

    public function update(Request $request, $id){

          $data = $request->all();
          // dd($data);

        $pagamento = Pagamento::findOrFail($id);
        // dd($pagamento);
        $pagamento -> update($data);
        return redirect() -> route('pagamenti.index');


    }
}
