@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Cadastrar Veículo
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div>
      <form method="post" action="{{ route('carros.store') }}">
          <div class="col-md-4 mb-3">
              @csrf
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome" />
          </div>
          <div class="col-md-4 mb-3">
           
              <label for="veiculo">Veículo:</label>
              <input type="text" class="form-control" name="veiculo" id="veiculo" />
          </div>
          <div class="col-md-4 mb-3">
             
              <label for="placa">Placa:</label>
              <input type="text" class="form-control" name="placa" id="placa" />
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      </div>
  </div>
</div>
@endsection