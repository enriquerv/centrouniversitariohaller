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
            Aplicar los conceptos de la Mercadotecnia al desarrollo eficiente de soluciones a las necesidades promocionales publicitarias y propagandísticas de los diferentes sectores de la economía
          </p>
          <p class="mt-3">
            Utilizar metodologías y técnicas adecuadas de la mercadotecnia para el análisis e investigación de mercados y la promoción de ventas.
          </p>
          <p class="mt-3">
            Elaborar protocolos para el desarrollo de productos
          </p>
          <p class="mt-3">
            Implementar procesos administrativos eficientes en materia de recursos humanos, económicos, físicos y de organización para la toma de las mejores decisiones
          </p>
          <p class="mt-3">
            Utilizar la tecnología de punta en los procesos mercadológicos y contextualizar los fenómenos y procesos mercadológicos dentro del estado de derecho
          </p>


          <p class="h4 bolder mt-5">Perfil del Egresado:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Los egresados del CENTRO UNIVERSITARIO HALLER, deben poseer contenidos universales, vigentes e innovadores en las áreas de Mercadotecnia, Administración y sus temas auxiliares, Economía, Finanzas y Contabilidad, Metodología, Derecho, los niveles de posesión de estos conocimientos serán lo suficientemente profundos para colocarlos en condiciones de reaccionar eficazmente ante los cambios vertiginosos que ocurren en la sociedad moderna y altamente tecnificada.</p>


          <p class="h4 bolder mt-5">Habilidades:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Contextualizar el entorno económico, social y político de las entidades económicas, publicas y privadas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Elaborar, evaluar y decidir sobre estrategias y planes de mercadotecnia</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar técnicas de planeación estratégica para la publicación y ventas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Diseñar, evaluar y decidir sobre planes de mercadotecnia, publicidad y ventas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Optimizar estructuras y estrategias de mercadotecnia para empresas y negocios</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Elaborar, evaluar y gestionar presupuestos de mercadotecnia, publicidad y ventas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar técnicas de investigación de mercados</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Involucrarse en programas de calidad total y de certificación</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar metodologías para la consultoría</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Integrarse en equipos de trabajo multidisciplinario</p>


          <p class="h4 bolder mt-5">Actitudes:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> El egresado deberá manifestar una actitud de servicio, responsabilidad, ética profesional y laboral, asumirá actitudes reflexivas que promuevan beneficios para las empresas o instituciones, expresara actitudes encaminadas con el respeto a la naturaleza y al medio ambiente, recomendando el uso de tecnologías y procesos limpios y eficientes.</p>


          <p class="h4 bolder mt-5">Como egresado de la carrera de la Lic. en Comercio Internacional y Aduanas , podrás trabajar en los siguientes rubro:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Investigador de Mercados</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Publicista</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Director de Mercadotecnia Internacional</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Ejecutivo de Cuentas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Coordinador de Relaciones Públicas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Creador de Campañas Publicitarias</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Gerente de desarrollo de Proyectos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Representante de Mercadotecnia Internacional</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Planeador Estratégico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Consultor de Marketing</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Especialista en desarrollo de productos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Gerente de Ventas</p>

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
