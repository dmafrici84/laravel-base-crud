@extends('layouts.main-layout')
@section('content')
  <h1>
    Pagamenti:
  </h1>
  <ul>
    @foreach ($pagamenti as $pagamento)
        <li>
          <a href="{{route('pagamento.show', $pagamento -> id)}}">
            Status: {{ $pagamento -> status }};<br>
            Price: {{ $pagamento -> price }}
          </a>
        </li>
    @endforeach
  </ul>
@endsection
