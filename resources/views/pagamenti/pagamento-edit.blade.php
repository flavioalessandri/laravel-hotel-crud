@extends('layouts.main-layout')

@section('content')

  <div class="form-section">


    <form class="pag-form" action="{{route('pagamenti.update', $pagamento -> id)}}" method="post">

      @csrf
      @method('POST')

      <div class="form-group">
        <label for="status">Status Pagamento</label>
        <input type="text" name="status" value="{{$pagamento -> status}}">
      </div>
      <div class="form-group">
        <label for="price">Prezzo Pagamento</label>
        <input type="number" name="price" value="{{$pagamento -> price}}">
      </div>

      <button type="submit" name="button">Aggiorna Prenotazione</button>

    </form>

  </div>
@endsection
