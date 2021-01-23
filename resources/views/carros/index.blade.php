@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <div class="card uper">

  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('carros.create') }}">Cadastrar Veículo</a>
  </div>
 
  <div class="card-body">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>VEICULO</td>
          <td>PLACA</td>
          <td colspan="3">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($carros as $carro)
        <tr>
            <td>{{$carro->id}}</td>
            <td>{{$carro->nome}}</td>
            <td>{{$carro->veiculo}}</td>
            <td>{{$carro->placa}}</td>
            <td><a href="{{ route('carros.edit',$carro->id)}}" class="btn btn-primary">Editar</a></td>
            <td><a class="btn btn-primary" href="{{ route('carros.show',$carro->id) }}">Mostrar</a></td>
            <td>
                <form action="{{ route('carros.destroy', $carro->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection