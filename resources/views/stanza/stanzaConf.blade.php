@extends('layouts.main-layout')

@section('content')

  <section>



  <form class="form" action="{{ route('stanza-creazione') }}" method="post">

    @csrf
    @method('POST')

    <label for="room_number">Numero Stanza</label>
    <input type="number" name="room_number" value="">
    <br>
    <label for="floor">Piano</label>
    <input type="number" name="floor" value="">
    <br>

    <label for="beds">LETTI</label>
    <input type="number" name="beds" value="">
    <br>
    <button type="submit" name="button">Aggiungi</button>

  </form>

</section>

@endsection
