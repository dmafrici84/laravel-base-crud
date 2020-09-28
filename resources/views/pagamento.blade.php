

@extends('layouts.main-layout')
@section('content')
  <h1>
    Pagamento: <br>
    Status: {{ $pagamento -> status }}; Price: {{ $pagamento -> price }}
  </h1>

  <div class="update-delete">
    <h3 class="update">
      <a href="{{route('pagamento.edit', $pagamento -> id)}}">
        UPDATE
      </a>
    </h3>
    <h3 class="delete">
      <a href="{{route('pagamento.destroy', $pagamento -> id)}}">
        DELETE
      </a>
    </h3>
  </div>


  <h3>
    <a href="{{route('pagamenti.index')}}">
      INDEX PAGAMENTI
    </a>
  </h3>
@endsection
