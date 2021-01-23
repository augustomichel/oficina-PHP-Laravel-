@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Carro


                <a class="btn btn-primary" href="{{ route('carros.index') }}"> Voltar</a>

            
  </div>
  <div class="card-body">
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nome:</strong>

                {{ $carro->nome }}

            </div>

        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Veículo:</strong>

                {{ $carro->veiculo }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

            <strong>Placa:</strong>

             {{ $carro->placa }}

        </div>

</div>

    </div>
    
  </div>
</div>
@endsection