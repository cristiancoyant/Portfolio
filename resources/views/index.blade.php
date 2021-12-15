        @extends('layouts.plantilla')
    @section('title', 'Portfolio')
    
      @section('content')
          
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1>Portfolio echo con PHP en Laravel 8</h1>
                                    <p>Hola , me presento , mi nombre es Cristian Coyant soy desarrollador web y tecnico en programacion </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>

        
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/feature-2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>Sobre mi </h2>
                                <p>Tengo 21 años , soy de Lanus , actualmente estoy buscando trabajo como desarrollador laravel </p>
                                <ul>
                                    <li>Resposabilidad  100%</li>
                                    <li>Compromiso  100%</li>
                                    <li>Trabajo en equipo 100%</li>
                                </ul>
                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                       

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>Expectativas laborales</h2>
                                <p></p>
                                <ul>
                                    <li>Buen clima laboral</li>
                                    <li>Sueldo acorde</li>
                                    <li>Buenos terminos de contratacion</li>
                                </ul>
                             
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/feature-1.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
        @endsection
   
