@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')


<section>
    <img src="{{ env('APP_URL') }}/assets/images2022/titulo_online.jpg" width="100%">
</section>


<section>

  <div class="row">
    <div class="col-12 text-center tit-sobre">
      Te facilitamos alcanzar una meta profesional.<br>Estudia tu licenciatura desde casa
    </div>
  </div>

  <div class="container">
    <div class="row pt-5">
      <div class="col-md-6">
        <p>
         Algunos términos que suenan similares y que muchas veces quieren decir lo mismo que e-learning son los siguientes:
        </p>
        <li>Teleformación</li>
        <li>Formación a distancia</li>
        <li>Enseñanza virtual</li>
        <li>Enseñanza o formación online</li>
        <p class="pt-5">
          <img src="{{ env('APP_URL') }}/assets/images/new/icono_1v.png" width="20%">
          <img src="{{ env('APP_URL') }}/assets/images/new/icono_2v.png" width="20%">
          <img src="{{ env('APP_URL') }}/assets/images/new/icono_3v.png" width="20%">
          <img src="{{ env('APP_URL') }}/assets/images/new/icono_4v.png" width="20%">
        </p>
      </div>
      <div class="col-md-6">
        <img src="{{ env('APP_URL') }}/assets/images/new/virtual.jpeg" width="100%">
      </div>

      <div class="col-md-12 pt-5">

        <p>
          El significado de e-learning viene de “electronic learning” o aprendizaje electrónico, en inglés. Otra posible en la educación y capacitación a través de Internet.
        </p>
        <p>
          Este tipo de enseñanza online permite la interacción del usuario con el material mediante la utilización de diversas herramientas informáticas.
        </p>
        <p>
          De acuerdo a la definición anterior podemos enumerar una serie de características básicas del e-learning:
        </p>
        <li>Sencillez de uso.</li>
        <li>Sistema multimedia (texto, audio, vídeo, imagen).</li>
        <li>Desaparecen las distancias entre emisor y receptor.</li>
        <li>Es económico para el alumnado.</li>
        <li>Es interactivo.</li>
        <li>Es accesible.</li>

      </div>

      {{-- <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div>
      <div class="col-md-4 pt-5 pb-5 text-center">
        <img src="{{ env('APP_URL') }}/assets/images/new/icono_5v.png" width="100px">
      </div>
      <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div> --}}


      {{-- <section class="inst_video mb-5" id='contVideo'>
        <video id="instVideo" controls>
          <source src="https://d14c1kqvi6lpt9.cloudfront.net/fb1a68dd8e46-1572048000/bigmarker-recording.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </section>
      --}}


      <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div>
      <div class="col-md-4 pt-5 pb-5 text-center">
        <img src="{{ env('APP_URL') }}/assets/images2022/icono_lics_onlinehaller.png" width="100px">
      </div>
      <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div>

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
          <a href="{{ URL::route('merca') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_merca.png" class="card_lic"></a>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{ URL::route('turismo') }}"><img src="{{ env('APP_URL') }}/assets/images2022/cards_lic_turismo.png" class="card_lic"></a>
        </div>
      </div>


      <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div>
      <div class="col-md-4 pt-5 pb-5 text-center">
        <img src="{{ env('APP_URL') }}/assets/images/new/icono_5v.png" width="100px">
      </div>
      <div class="col-md-4 pt-5 pb-5">
        <hr style="margin-top: 3rem; border: 3px solid;">
      </div>

      <div class="col-md-6 pt-5 pb-5 text-center">
        <a href="https://app.box.com/embed/s/y041u18rw8dduhoye42l?sortColumn=date&view=list" target="_blank"><img src="{{ env('APP_URL') }}/assets/images/new/online_4.jpg" width="75%"></a>
      </div>
      <div class="col-md-6 pt-5 pb-5 text-center">
        <a href="https://www.youtube.com/channel/UC9oOPVBWvvGPbzHiNsbrB-Q" target="_blank"><img src="{{ env('APP_URL') }}/assets/images/new/online_3.jpg" width="75%"></a>
      </div>

      <div class="col-md-6 pt-5 pb-5 text-center">
        <a href="#" {{-- target="_blank" --}}><img src="{{ env('APP_URL') }}/assets/images2022/boton_plataforma_haller.jpg" width="75%"></a>
      </div>

      <div class="col-md-6 pt-5 pb-5 text-center">
        <a href="https://telmex.com/web/negocios/descarga_aplicacion_video" target="_blank"><img src="{{ env('APP_URL') }}/assets/images2022/boton_telmex_haller.jpg" width="75%"></a>
      </div>

    </div>
  </div>

  <div class="row pt-5 pb-5">
    <div class="col-12">
      <img src="{{ env('APP_URL') }}/assets/images2022/banner_aspel_pw_online.jpg" width="100%">
    </div>
  </div>

  <div class="row pt-5 pb-5">
    <div class="col-12">
      <img src="{{ env('APP_URL') }}/assets/images2022/banner_frase_pw_online.jpg" width="100%">
    </div>
  </div>

</section>

<style>
  .tit-sobre{
    background: #01183a;
      color: white;
      font-size: 3em;
      padding: 50px 0;
      letter-spacing: 1px;
  }
  .bullets ul{
    padding-left: 100px;
  }
  .bullets li{
    font-size: 16px;
    text-align: left;
  }
  .tit-sobre2{
    background: #01183a;
      color: white;
      font-size: 50px;
      padding: 50px 0;
      letter-spacing: 2px;;
  }
  .afac{
    font-size: 22px;
  }

  body{
    color: #fff;
  }
</style>


@endsection

@section('scripts')
@endsection
