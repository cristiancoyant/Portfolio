<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

      
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/images/logo.png">
       
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
       
		
      
        <section id="social" class="social">
            <div class="container">
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="https://www.facebook.com/cristian.coyant/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/in/cristian-coyant-44282a1a2/"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>      
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
              
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="Logo" /></a>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('HOME')}}">Home</a></li>
                        <li><a href="{{route('Aptitudes')}}">Aptitudes</a></li>
                        <li><a href="{{route('Contacto')}}">Contacto</a></li>
                    </ul>

                </div>
            </div>
        </nav>
</head>
<body>
    @yield('content')
</body>
</html>