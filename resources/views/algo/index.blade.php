@extends('layouts.app')

@section('content')
   <section class="cabecera">
      <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <h1>Noti<b>API</b></h1>
                  <h2>Ramo Metodología y Desarrollo de Software</h2>
                 
               </div>
         </div>
      </div>

   </section>

   <section class="container-fluid introduccion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                   <h1 class="mb-4"><b>¿En qué consiste?</b></h1>

					   <p class="intro">Sistema de autorización de solicitudes <b> integrable al software que produce Patagonia Software</b>. El sistema contará con un API integrada tanto para pruebas, como para enviar solicitudes autorizadas al servidor. Al mismo tiempo tendrá notificaciones en el cliente con las solicutudes pendientes por aprobar. </p>
                </div>
            </div>
        </div>
    </section>

<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Nuestro Equipo</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('/images/rob.jpg') }}" alt="card image"></p>
                                    <h4 class="card-title">Roberto Fabián Jeria</h4>
                                    <p class="card-text">Estudiante de 3er año Ingeniería en Computación e Informática. Viña del Mar.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title"><b>Product Owner</b></h3>
                                    <h4 class="card-title mt-4"> Tareas </h4>
                                    <ul class="justify-content-lg-start">
                                        <li>Gestión Notificaciones en vista general</li>   
                                        <li>Crear Layout general del sitio</li> 
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('/images/christian.jpg') }}"alt="card image"></p>
                                    <h4 class="card-title">Christian Astete Seguel</h4>
                                    <p class="card-text">Alumno 4to Ingeniería en Computacion e Informática. Santiago</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title"><b>Developer</b></h3>
                                    <h4 class="card-title mt-4"> Tareas </h4>
                                    <ul class="justify-content-lg-start">
                                        <li>Implementación backend sistema de autorización con registro y logueo de usuarios</li>                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ asset('images/anthony.jpg') }}" alt="card image"></p>
                                    <h4 class="card-title">Anthony Remigio Vela</h4>
                                    <p class="card-text">Alumno 4to año de Ingeniería en Computación e Informática. Santiago.</p>

                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h3 class="card-title"><b>Developer</b></h3>
                                    <h4 class="card-title mt-4"> Tareas </h4>
                                    <ul class="justify-content-lg-start">
                                        <li>Lógica para envío de correo notificando estado de solicitudes. </li> 
                                        <li>Crear vista Login.</li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                    <h4 class="card-title">Cristobal Oyarce</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                        <h3 class="card-title"><b>Developer</b></h3>
                                        <h4 class="card-title mt-4"> Tareas </h4>
                                        <ul class="justify-content-lg-start">
                                            <li>Crear Layout general del sitio.</li> 
                                            <li>Crear API de prueba y datos en memoria para utilizar con el servicio .</li>   
                                            <li>Pruebas para comprobar el diseño responsivo de la página.  </li>                                       
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                    <h4 class="card-title">Carlos Uribe</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                    <h3 class="card-title"><b>Scrum Master</b></h3>
                                    <h4 class="card-title mt-4"> Tareas </h4>
                                    <ul class="justify-content-lg-start">
                                        <li>Implementación backend sistema de autorización con registro y logueo de usuarios</li>                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                    <h4 class="card-title">Victor Filgueira</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                            <div class="card-body text-center mt-4">
                                    <h3 class="card-title"><b>Developer</b></h3>
                                    <h4 class="card-title mt-4"> Tareas </h4>
                                    <ul class="justify-content-lg-start">
                                        <li>Diseño de API para dar respuesta al estado de las notificaciones. </li>   
                                        <li>Generación pruebas en base de datos local para comprobar respuestas del API. </li>                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
@endsection

