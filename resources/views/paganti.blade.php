@extends('layouts.main-layout')
@section('content')
  <h1>
    Paganti:
  </h1>
  <ol>
    @foreach ($paganti as $pagante)
      <li>{{ $pagante -> name }} {{ $pagante -> lastname }}</li>
    @endforeach
  </ol>
@endsection
