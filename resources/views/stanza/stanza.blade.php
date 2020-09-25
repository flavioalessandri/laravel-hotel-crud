@extends('layouts.main-layout')

@section('content')

  <h2>Stanza numero: {{$stanzaInfo -> room_number}} </h2>

  <ul>
    <li>Piano: {{$stanzaInfo->floor}}</li>
    <li>Letti: {{$stanzaInfo->beds}}</li>
  </ul>





  @endsection
