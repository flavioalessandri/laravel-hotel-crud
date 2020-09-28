@extends('layouts.main-layout')

@section('content')

  <div class="list">
    <h2>LISTA PAGAMENTI</h2>

    <table id="pagamenti-list">
      <tr>
        <th>STATUS</th>
        <th>PREZZO</th>
        <th>CALCELLA PAGAMENTO</th>
        <th>AGGIORNA</th>
      </tr>


      @foreach ($pagamenti as $pagamento)
      <tr>
        <td>{{$pagamento-> status}}</td>
        <td>{{$pagamento-> price}}</td>
        <td class="delete">
          <a href="{{route('pagamenti.delete', $pagamento->id)}}">
            <i class="fas fa-skull"></i>
          </a>
        </td>
        <td>Update</td>
      </tr>
      @endforeach

  </table>

</div>
@endsection
