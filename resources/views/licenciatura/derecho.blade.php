@extends('layout.principal')

@section('title')
    Derecho
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
            Aplicar los conocimientos jurídicos a la defensa de los derechos de las personas.
          </p>
          <p class="mt-3">
            Contextualizar el derecho como una ciencia social que debe responder a las condiciones y dinámica de los individuos y al orden jurídico de la convivencia republicana
          </p>
          <p class="mt-3">
            Enfrentar las demandas de reconocimiento e investigación de las condiciones y problemas propios de una sociedad dinámica. Identificar en las leyes y sus reglamentos las herramientas necesarias para coadyuvar a la convivencia pacífica y la preservación del estado de derecho.
          </p>


          <p class="h4 bolder mt-5">Perfil del Egresado:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Los egresados del CENTRO UNIVERSITARIO HALLER, deben poseer contenidos universales, significativos vigentes e innovadores en las áreas de Derecho público y privado, específicamente en Derecho Civil, Penal, , Administrativo, Laboral, Fiscal, Mercantil, Internacional y otros derechos especiales, abordando ampliamente los conceptos doctrinarios y la técnica procesal correspondiente, los niveles de posesión de estos conocimientos serán lo suficientemente profundos para colocarlos en condiciones de reaccionar eficazmente ante las exigencias de una sociedad cada vez más informada y dinámica.</p>


          <p class="h4 bolder mt-5">Habilidades:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Identificar las fuentes de estudio de derecho</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar e interpretar la norma jurídica</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Conceptualizar la estructura jurídica y del estado mexicano</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Investigar sobre proceso legislativo</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar, interpretar y aplicar la ley y sus códigos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Postular el derecho a través de la técnica procesal correspondiente</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Representar y asesorar legalmente a las personas ante la corte y los tribunales</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Representa y asesorar legalmente a entidades publicas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Evaluar, junto con otros profesionistas, las condiciones de orden legal de las empresas privadas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Administrar eficientemente el despacho jurídico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Ejercer su profesión apegado a un código de ética</p>


          <p class="h4 bolder mt-5">Actitudes:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> El egresado deberá manifestar una actitud de servicio, responsabilidad, ética profesional y laboral, asumirá actitudes reflexivas que promuevan beneficios para las empresas o instituciones, expresara actitudes encaminadas con el respeto a la naturaleza y al medio ambiente, asumiendo una práctica profesional honesta y respetuosa de los derechos humanos</p>


          <p class="h4 bolder mt-5">Como egresado de la carrera de la Lic. en Comercio Internacional y Aduanas , podrás trabajar en los siguientes rubro:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Abogado</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Negociador</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Mediador</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Director de despacho Jurídico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Litigante</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Asociado en despacho</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Asesor jurídico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Investigador</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Ministro de la Suprema Corte de Justicia</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Magistrado</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Juez</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Federal Publico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Notario o corredor publico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Director del departamento legal de una empresa privada</p>

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
