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
          <a href="{{ URL::route('admon') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_admon.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('ciencias') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_ciencias.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('comercio') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_comercio.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('derecho') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_derecho.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('gastro') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_gastro.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('merca') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_merca.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('turismo') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_turismo.png" class="card_lic"></a>
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
