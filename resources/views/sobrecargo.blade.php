@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')

<section class="img-section2 " id="ini_sobrecargo">
    <img src="{{ env('APP_URL') }}/assets/images/lic/titulo_sobrecargo.png" width="100%">
</section>

<section>

    <div class="row">
        <div class="col-12 text-center tit-sobre">
            El único curso de formación de sobrecargo de<br>la zona, con instructores calificados y certificados
        </div>
    </div>

    <div class="container" id="objetivo_sobrecargo">
        <div class="row pt-5">
            <div class="col-md-8">
                <h2>OBJETIVO GENERAL HALLER</h2>
                <p class="mt-5">
                    Desarrollar y proporcionar a nuestros alumnos, conocimientos, habilidades y procedimientos técnicos que les permitan desempeñarse en situaciones normales, de emergencia y de asistencia al pasajero.
                </p>
                <p class="mt-5">
                    Satisfacer las necesidades y exigencias de cualquier compañía aérea, nacional e internacional, privada y comercial, a través de sus prácticas profesionales y sus programas de estudio.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ env('APP_URL') }}/assets/images_sobrecargo/pw_s_img1.jpg" width="100%">
            </div>

            <div class="col-md-8 pt-5" id="ventajas_sobrecargo">
                <h2 class="mb-4">VENTAJAS DE ESTAR EN HALLER</h2>

                <li class="mt-3">Instructores certificados por la AFAC (Agencia Federal de Aviación Civil).</li>
                <li class="mt-3">Convenio para practicas con CAT (Centro de Adiestramiento Técnico) de Mexicana de Aviación.</li>
                <li class="mt-3">Curso de primeros auxilios impartido por un médico certificado en Urgencias.</li>
                <li class="mt-3">Certificación de primeros auxilios para los alumnos con valor curricular, por la American Heart Association.</li>
                <li class="mt-3">Inglés incluido durante todo el curso.</li>
                <li class="mt-3">Simulador para prácticas de emergencia.</li>
                <li class="mt-3">Curso de etiqueta.</li>
                <li class="mt-3">Trámite de licencia de sobrecargo elaborado por la escuela.</li>
                <li class="mt-3">Curso con duración de 4 meses.</li>
            </div>
            <div class="col-md-4 pt-5 text-center">
                <img src="{{ env('APP_URL') }}/assets/images_sobrecargo/pw_s_img2.jpg" width="100%">
            </div>

            {{-- <section class="inst_video" id='contVideo' style="margin-top: 150px;">
                <video id="instVideo" controls>
                    <source src="{{ env('APP_URL') }}/assets/images_sobrecargo/sobrecargo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section> --}}

        </div>
    </div>

    <div class="row mt-5 mb-5" id="plan_sobrecargo">
        <div class="col-md-4 mt-4 text-center">
            <img src="{{ env('APP_URL') }}/assets/images2022/1_sobrecargo.jpg" width="80%">
        </div>
        <div class="col-md-4 mt-4 text-center">
            <img src="{{ env('APP_URL') }}/assets/images2022/2_sobrecargo.jpg" width="80%">
        </div>
        <div class="col-md-4 mt-4 text-center">
            <img src="{{ env('APP_URL') }}/assets/images2022/3_sobrecargo.jpg" width="80%">
        </div>
    </div>

    <div class="row pt-5" id="plan_sobrecargo">
        <div class="col-12 text-center tit-sobre row">
            <div class="col-md-12 pb-5">PLAN DE ESTUDIOS</div>

            <div class="col-md-6 bullets">
                <ul><li>INTRODUCCIÓN AL MEDIO AERONÁUTICO.</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>REGLAMENTACIÓN AÉREA</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>AERODINÁMICA</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>METEOROLOGÍA</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>TRANSPORTE DE MERCANCÍAS PELIGROSAS</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>REQUERIMIENTOS TÉCNICOS</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>SEGURIDAD Y PROCEDIMIENTOS DE EMERGENCIA</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>EQUIPO DE EMERGENCIA</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>SERVICIOS A BORDO</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>FACTORES HUMANOS</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>PRIMEROS AUXILIOS</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>INGLÉS TÉCNICO AERONÁUTICO</li></ul>
            </div>
            <div class="col-md-6 bullets">
                <ul><li>ACTOS DE INTERFERENCIA ILÍCITA</li></ul>
            </div>

        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row pt-5">
            <div class="col-md-6">
                <h2>REQUISITOS HALLER</h2>
                <li>Acta de nacimiento</li>
                <li>Certificado de Bachillerato o Equivalente</li>
                <li>RFC con homoclave</li>
                <li>2 Fotografías tamaño infantil a color</li>
                <li>2 Fotografías tamaño pasaporte</li>
                <li>Nacionalidad Mexicana</li>
                <li><a href="https://ts.sct.gob.mx/cis/pg00000002.jsp" target="_blank">Constancia de Aptitud Psicofisica</a></li>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ env('APP_URL') }}/assets/images_sobrecargo/pw_s_img3.jpg" width="100%">
            </div>

            <div class="col-md-6 pt-5">
                <h2 class="pt-2 mb-4">UNIFORME HALLER</h2>

                <h4 class="pt-2 pb-2">MUJERES</h4>
                <li>Traje sastre azul marino</li>
                <li>Blusa blanca</li>
                <li>Mascada roja</li>
                <li>Medias de compresión color natural</li>
                <li>Zapatillas lisas negras de piel , tacón mínimo de 5cm</li>

                <h4 class="pt-3 pb-2">UNIFORME PARA PRÁCTICAS</h4>
                <li>Pantalón casual color caqui</li>
                <li>Playera manga larga, tipo polo, con logo de la escuela</li>
                <li>Zapatos negros de piso liso</li>
                <li>Tobimedias color natural</li>
                <li>Traje de baño negro (completo)</li>
                <li>Gorra de natación</li>


                <h4 class="mt-3 pt-4 pb-2">HOMBRES</h4>
                <li>Traje sastre azul marino</li>
                <li>Camisa blanca</li>
                <li>Corbata roja</li>
                <li>Zapatos de agujeta negros</li>

                <h4 class="pt-3 pb-2">UNIFORME PARA PRÁCTICAS</h4>
                <li>Pantalón casual color caqui</li>
                <li>Playera manga larga, tipo polo, con logo de la escuela</li>
                <li>Traje de baño</li>
                <li>Gorra de natación</li>
            </div>
            <div class="col-md-6 pt-5">
                <img src="{{ env('APP_URL') }}/assets/images/new/sob_05.jpg" width="100%">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center tit-sobre2">
            Contamos con bolsa de trabajo
        </div>
        <div class="col-12 text-center">
            <img src="{{ env('APP_URL') }}/assets/images/new/logo_afac.png" width="300px">
            <p class="afac">CURSO RECONOCIDO POR LA AFAC</p>
            <p class="afac">AGENCIA FEDERAL DE AVIACIÓN CIVIL</p>
            <p class="afac">PERMISO: F-170</p>
        </div>
        <div class="col-12">
            <img src="{{ env('APP_URL') }}/assets/images/new/sob_06.png" width="100%">
        </div>
    </div>


    <section id="contacto_sobrecargo">
        <div class="container text-justify mt-5 mb-5">
            <!-- <div class="container mt-5 mb-5">
                <iframe class="map" src="https://maps.google.com.mx/maps?q=instituto+haller&ll=19.677828,-99.220276&spn=0.279308,0.308647&sll=19.320036399999996,-99.15212780000002&sspn=1.195607100001713,1.7598905899350736&t=m&hq=instituto+haller&z=12&iwloc=A&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div> -->
            <div class="row">
                <div class="col-md-6">
                    <b style="font-size: 40px;">CONTÁCTANOS</b> <br><br>
                    Somos una institución educativa, con 30 años de experiencia. Nuestro legado es formar alumnos (as) críticos, reflexivos, creativos, amantes de la paz, los derechos humanos y socialmente comprometidos con su entorno social y con su país.<br><br>

                    <b>CAMPUS TEPOTZOTLÁN</b><br>
                    AV.BENITO JUÁREZ N.4 BARRIO SAN MARTÍN TEPOTZOTLÁN.<br>
                    Tel. 58-76-66-82 / 55-58-76-44-30<br>
                    Correo haller.vinculacion@gmail.com<br><br>

                    <b>CAMPUS IZCALLI</b><br>
                    ANDADOR ILRANDA IT. 58, 59 Y 60<br>
                    Col. Centro Urbano Cuautitlán Izcalli<br>
                    TEL: 58-73-52-92<br>
                    Correo haller.vinculacion@gmail.com
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger" style="opacity: 0; transition: 0.5s" id='error-f'>
                                Favor de llenar todos los campos
                            </div>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Nombre" id='name'>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Email" id='email'>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Teléfono" id='phone'>
                        </div>
                        <div class="col-12 mt-3">
                            <textarea class="form-control" placeholder="Mensaje" rows="10" id='tarea'></textarea>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button class="btn btn-primary" id="btn-modal" style="padding: 5px 50px; font-size: 18px;">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<div class="modal fade" id="galleryCenter" tabindex="-1" role="dialog" aria-labelledby="galleryCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="galleryLongTitle">Galería</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/1.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/2.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/3.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/4.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/5.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/6.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/7.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/8.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/9.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/10.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/11.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/12.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/13.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/14.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/15.jpg" alt="First slide"></div>
              <div class="carousel-item"><img class="d-block img-gallery" src="{{ env('APP_URL') }}/assets/images_sobrecargo/16.jpg" alt="First slide"></div>
           </div>
           <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<style>
    body{
        color: #fff;
    }
</style>

<style>
    .tit-sobre{
        background: #01183a;
        color: white;
        font-size: 28px;
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
    #navGallery{ cursor: pointer; }
    .img-gallery{
        width: 300px;
        margin: 0 auto;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      height: 100px;
      width: 100px;
      outline: black;
      background-size: 100%, 100%;
      background-image: none;
    }

    .carousel-control-next-icon:after
    {
      content: '►';
      font-size: 55px;
      font-weight: bold;
      color: #023773;
    }

    .carousel-control-prev-icon:after {
      content: '◄';
      font-size: 55px;
      font-weight: bold;
      color: #023773;
    }
</style>

@endsection

@section('scripts')
  <script>

  </script>
@endsection
