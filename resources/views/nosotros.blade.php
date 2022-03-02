@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section>
    <img src="{{ env('APP_URL') }}/assets/images/titulos/titulo_nosotros.png" style="width: 100%;">
</section>

<div class="who container">
    {{-- <h2 style="font-weight: bold;" class="text-center text-white">¿QUIÉNES SOMOS?</h2>
    <p class="mt-4 text-white">
        Somos una institución educativa, con más de 30años de experiencia. Nuestro legado es
        formar alumnos (as) críticos, reflexivos, creativos, amantes dela paz y los derechos
        humanos, socialmente comprometidos con su entorno social y con su país. Para lograr
        estepropósito fomentamos valores morales y éticos, tales como: solidaridad, compromiso,
        respeto, responsabilidad,entre otros.
    </p> --}}

    <div class="row text-white" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-md-6 first">
            <h2 class="bolder text-center mb-4">Misión</h2>
            <p class="text-justify px-3">
                Formar excelentes profesionistas éticos, responsables y comprometidos para que puedan llegar a ser personas capaces de trabajar y tomar las mejores decisiones aún bajo la presión que su entorno actual demande.

                Forjamos ciudadanos con espíritu y acciones críticas y creativas, con una personalidad emprendedora y comprometida con el desarrollo económico, político, social y cultural en la esfera nacional e internacional a través de sus programas tecnológicos, humanísticos, educativos y de investigación
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="bolder text-center mb-4">Visión</h2>
            <p class="text-justify px-3">
                Ser la Institución de mayor reconocimiento y calidad educativa en el Estado de México y a nivel nacional, por la formación integral y de liderazgo de sus egresados en el sector público, privado y social; con una constante innovación educativa y formativa, basados en el conocimiento y la enseñanza de valores.

                Valores como la lealtad, la verdad y la rectitud, contribuyendo en el cambio que nuestro país necesita.
            </p>
        </div>
    </div>

    <div class="row text-white" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-md-12 mt-4">
            <h2 class="bolder text-center mb-4">Valores</h2>
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_1.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_2.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_3.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_4.png" width="135px">
        </div>
        <div class="col-xs-5ths">
            <img src="{{ env('APP_URL') }}/assets/images2022/valor_haller_5.png" width="135px">
        </div>
    </div>
</div>

<section class="container " style="margin-top: 100px; margin-bottom: 100px;">
      <img src="{{ env('APP_URL') }}/assets/images2022/img_hashtag_index.png" width="100%">
    </section>

<style>
    .first{
        border-right: 5px solid #c72242;
    }
</style>

@endsection

@section('scripts')
@endsection