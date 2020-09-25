@extends('layouts.main-layout')

@section('content')

<section>


  <div class="list">

    <ul>

      <h2>STANZE</h2>


    @foreach ($stanze as $stanza)

      <li>
        <a href="{{ route("stanza-info", $stanza->id) }}">

        Stanza numero: {{$stanza -> room_number}}</li>

      </a>

    @endforeach

    </ul>

  </div>

</section>
@endsection
