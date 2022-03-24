@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

    <section class="container mt-5">


      <div class="row">
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_admon.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_ciencias.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_comercio.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_derecho.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_gastro.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_merca.png" class="card_lic">
        </div>
        <div class="col-md-4 text-center">
          <img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_turismo.png" class="card_lic">
        </div>
      </div>

    </section>

<style>
  .card_lic{
    cursor: pointer;
    width: 250px;
    text-align: center;
  }
</style>

@endsection

@section('scripts')


  </script>
@endsection
