@extends('layout.principal')

@section('title')
    Turismo
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
            Formar licenciados con un alto sentido de servicio, capaces de planificar, evaluar y desarrollar nuevos proyectos turísticos, haciendo uso adecuado de los recursos naturales, materiales y humanos presente en la operación de bienes, muebles e inmuebles; en turismo obtendrá las herramientas teóricas-prácticas para el completo desarrollo profesional en Hoteles, Restaurantes, Centros Recreativos y Empresas u Organizaciones gubernamentales y no gubernamentales del sector turístico
          </p>
          <p class="mt-3">
            Los conocimientos, habilidades, actitudes y valores que se lograrán en beneficio de nuestro país, creando conciencia de cultura turística en nuestro patrimonio histórico-cultural- natural que a través del turismo alcanzaremos una calidad en el servicio para respaldo de nuestro turista.
          </p>
          <p class="mt-3">
            Aplicar los conceptos, principios y técnicas de una formación básica necesaria y de apoyo instrumental para la aplicación de técnicas específicas en problemas económicos, administrativos y jurídicos de empresas del sector turístico
          </p>
          <p class="mt-3">
            Identificar la estructura financiera y de recursos humanos y de calidad empresarial, para la toma de decisiones requerida para la mejor operación.
          </p>
          <p class="mt-3">
            Aplicar la planeación adecuada, la formulación y evaluación de proyectos de inversión turística y diseñar nuevos productos turísticos, para la comercialización exitosa.
          </p>


          <p class="h4 bolder mt-5">Perfil del Egresado:</p>

          <p class="h4 bolder mt-5">Conocimientos:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar las características de los mercados potenciales para el desarrollo de zonas turísticas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Reflexionar ante la situación actual del medio ambiente para su conservación y preservación de recursos naturales</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar la organización, distribución y operación de hoteles y agencias de viajes.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Describir los elementos de servicio al cliente y el manejo de los alimentos y bebidas con respecto a restaurantes y bares</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar principios matemáticos y estadísticos para la planificación, evaluación y desarrollo turístico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Reconocer e interpretar las disposiciones legales y normativas relacionadas con el desarrollo y operación de la actividad turística</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Identificar principios y métodos mercadológicos para el diseño y comercialización de productos turísticos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Establecer y evaluar sistemas de administración de recursos humanos y financieros en empresas del sector turístico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Identificar, formular y evaluar proyectos turísticos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar los elementos de desarrollo sustentable para integrarlos a la actividad turística</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar las implicaciones del tiempo libre y el ocio sobre la actividad turística</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar información estadística y financiera para la toma de decisiones</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Utilizar métodos y técnicas de investigación multidisciplinaria aplicable a la planificación de la actividad turística</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Analizar las perspectivas del sector turismo en términos de microeconomía y macroeconomía, para su aplicación</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Valorar las características del patrimonio turístico nacional e internacional para su aprovechamiento racional</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Utilizar procedimientos de evaluación y certificación de sistema de calidad</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Diseñar y evaluar modelos de planificación turística para el desarrollo sustentable</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Formular programas de desarrollo turístico con base en las políticas nacionales.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Dominar el idioma ingles</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Poseer conocimientos de cultura general</p>



          <p class="h4 bolder mt-5">Habilidades:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Planificar, organizar y desarrollar proyectos de inversión en centro y complejos turísticos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Promover el patrimonio Turístico nacional e internacional</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Operar y controlar los establecimientos de alimentos y bebidas, restaurantes, bar, hoteles o centros de diversión</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar los reglamentos de higiene y seguridad en áreas de alimentos y bebidas</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Diseñar y organizar campañas de promoción turística como ferias, muestras gastronómicas, exposiciones y lanzamientos de productos turísticos </p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aplicar la legislación turística en base a lo prescrito y señalado por la ley misma</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Manejar los sistemas computacionales que se utilizan en hoteles, restaurantes y agencias de viaje.</p>



          <p class="h4 bolder mt-5">Actitudes:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Desempeñar la función de planeador turístico con responsabilidad y compromiso</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Ejercer su profesión con interés y aptitud para trabajar interdisciplinariamente.</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Trabajar bajo el rubro de higiene y seguridad</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Tener una amplia conciencia moral y ecológica en el desarrollo de su profesión</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Valorar los legados nacionales e internacionales que hoy forman parte del patrimonio turístico</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Emprender nuevos proyectos de vida y trabajo hacia la superación</p>


          <p class="h4 bolder mt-5">Como egresado de la carrera de la Lic. en Comercio Internacional y Aduanas , podrás trabajar en los siguientes rubro:</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Restaurantes</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Hoteles, moteles, posadas, albergues</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Centro de convenciones y de negocios</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Cafeterías</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Agencias de viajes</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Cruceros</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Servicios de banquetes y eventos especiales</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> En la docencia</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Arrendadoras de vehículos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Aeropuertos</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Empresas de asesoría administrativa turística</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Organismos y dependencias gubernamentales</p>
          <p class="mt-3"><i class="fas fa-play bullet"></i> Y todos aquellos involucrados en el sector Turístico</p>

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
