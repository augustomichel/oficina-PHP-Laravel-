@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Carro
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
      <form method="post" action="{{ route('carros.update', $carro->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" value={{ $carro->nome }} />
        </div>
        <div class="form-group">
          <label for="veiculo">Veiculo:</label>
          <textarea name="veiculo" id="veiculo" class="form-control">{{ $carro->veiculo }}</textarea>
        </div>
        <div class="form-group">
          <label for="placa">Placa:</label>
          <textarea name="placa" id="placa" class="form-control">{{ $carro->placa }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
      </form>
  </div>
</div>
@endsection