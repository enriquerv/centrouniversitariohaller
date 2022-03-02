@extends('layout.principal')

@section('title')
    Gastronomía
@endsection

@section('styles')
@endsection

@section('content')

    <section>
        <img src="{{ env('APP_URL') }}/assets/images2022/universidad/titulo_{{ $active }}.png" width="100%">
    </section>


    <section class="container text-white mt-4">

      <div class="row">
        <div class="col-md-12">
          <p class="h4 bolder">Objetivo de la Licenciatura:</p>
          <p class="mt-3">
            Formar profesionistas de la Gastronomía conocedores de los aspectos operativos y directivos, sin descuidar el aspecto cultural que permite a los futuros ejecutivos de la gastronomía desempeñarse como líderes en esta rama turística.
          </p>
          <p class="mt-3">
            Capaces de producir, elaborar y decorar alimentos no conservados y bebidas, tanto de la cultura culinaria Mexicana, como de la Cocina Internacional.
          </p>


          <p class="h4 bolder mt-5">Perfil del Egresado:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> El Centro Universitario Haller, egresará Licenciados en Gastronomía ampliamente conocedores de la historia Gastronómica y los fundamentos químico-biológicos de la nutrición; conocerá los elementos administrativos y financieros de la empresa gastronómica, de igual forma poseerá las habilidades suficientes y adecuadas para producir alimentos, bebidas y otros productos similares mediante técnicas de cocina en sus diferentes variantes tanto tecnológicas como geográficas.</p>


          <p class="h4 bolder mt-5">Habilidades:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Analizar los elementos integradores de la actividad gastronómica.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Analizar los impactos que la actividad empresarial gastronómica genera en el entorno.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Valorar la gastronomía como fenómeno socioeconómico.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Utilizar herramientas estadísticas y financieras para la toma de decisiones en su profesión.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Aplicar las disposiciones legales en la actividad gastronómica.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Analizar las características del mercado gastronómico así como sus tendencias a corto, mediano y largo plazo en una economía globalizada.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Diseñar, operar y evaluar campañas de mercadotecnia, aplicando las herramientas administrativas necesarias, que permitan la comercialización de empresas y productos gastronómicos.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Aplicar estrategias actuales de gestión empresarial.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Identificar y evaluar proyectos empresariales gastronómicos.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Producir y elaborar alimentos en los estilos español, mexicano, asiáticos, internacional.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Aplicar las técnicas de cocina para la elaboración de alimentos derivados de aves, carnes, pescados y mariscos.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Elaborar pasteles, bocadillos, entremeses, ensaladas, entretiempos.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Aplicar técnicas de decoración de alimentos.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i>Elaborará y producirá bebidas.</p>


          <p class="h4 bolder mt-5">Actitudes:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> El egresado deberá manifestar una actitud de servicio, responsabilidad, ética profesional y laboral, asumirá actitudes reflexivas que promuevan beneficios para las empresas o instituciones, expresará actitudes encaminadas con el respeto a la naturaleza y al medio ambiente, recomendando el uso de tecnologías y procesos limpios y eficientes.</p>


          <p class="h4 bolder mt-5">Como egresado de la carrera de la Lic. en Comercio Internacional y Aduanas , podrás trabajar en los siguientes rubro:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Empresas de alimentos , cadenas de restaurantes, hoteles, catering, cruceros, campamentos y sectores afines</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Organismos comprometidos con la investigación y la difusión del arte culinario</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Proyectos enfocados en el diseño y la elaboración de cartas o menús</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Instituciones educativas orientadas a la formación gastronómica</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Entidades encargadas del control de calidad de productos alimentarios y de servicios</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Organizaciones responsables de la estandarización de los procesos relacionados con la industria alimentaria</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Proyectos editoriales centrados en la promoción de productos y recetas</p>

        </div>
      </div>




    </section>


    <style>
        .dnone{ display: none; }
        .bullet{ font-size: 10px; margin-right: 8px; }
    </style>

@endsection

@section('scripts')
  <script>
      $( document ).ready(function() {
          H = $("#contVideo").height();
          $("#imgVideo").css('height', H+'px');
          $("#contVideo").hide();
      });

      $("#imgVideo").click(function(){
          $("#contVideo").show();
          $(this).hide();
          $("#instVideo").get(0).play();
      });

      $(".img-ofed").hover(function() {
          /* Stuff to do when the mouse enters the element */
          $(this).css('opacity', '0.5');
          $(this).next('.centered').css('display', 'block');
      }, function() {
          $(this).css('opacity', '1');
          $(this).next('.centered').css('display', 'none');
      });

  </script>
@endsection
