<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @yield('scripts')
      <title>eDayGrees</title>
      <link rel="shortcut icon" href="{{ asset('/images/uvinha.png') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script type="application/x-javascript">
         addEventListener("load", function() {
             setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
             window.scrollTo(0, 1);
         }
      </script>
      <!-- bootstrap-css -->
      <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
      <!--// bootstrap-css -->
      <!-- css -->
      <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all" />
      <!--// css -->
      <!-- font-awesome icons -->
      <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
      <script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
      <script src="{{asset('/js/bootstrap.js')}}"></script>
      <script src="{{asset('/js/SmoothScroll.min.js')}}"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
             $(".scroll").click(function(event) {
                 event.preventDefault();
                 $('html,body').animate({
                     scrollTop: $(this.hash).offset().top
                 }, 1000);
             });
         });
      </script>
   </head>
   <body>
      <!-- header -->
      <div class="header">
         <div class="container">
            <nav class="navbar navbar-default">
               <!-- Marque e alterne para agrupar para melhor exibição em dispositivos móveis -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                     data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <div class="w3layouts-logo">
                     <h1><a href="">eDayGrees</a></h1>
                  </div>
               </div>
               <!-- Centro de navegação top com opções -->
               <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                  <nav>
                     <ul class="nav navbar-nav">
                        <li><a href="{{ route('index') }}" class="hvr-sweep-to-bottom">Inicio</a></li>
                        <li><a href="{{ route('about') }}" class="hvr-sweep-to-bottom">Sobre</a></li>
                        <li><a href="{{ route('login') }}" class="hvr-sweep-to-bottom">Entrar</a></li>
                        <li><a href="{{ route('register') }}" class="hvr-sweep-to-bottom">Registre-se</a></li>
                        <li><a href="{{ route('contact') }}" class="hvr-sweep-to-bottom">Contato</a></li>
                     </ul>
                  </nav>
               </div>
               <!-- /.navbar-collapse -->
            </nav>
         </div>
      </div>
      @yield('content')
      <!-- footer -->
      <div class="footer">
         <div class="container">
            <div class="agileinfo_footer_grids">
               <div class="col-md-4 agileinfo_footer_grid">
                  <div class="agile-logo">
                     <h4><a href="">eDayGrees</a></h4>
                  </div>
                  <p>Unindo tecnologia com campo.</p>
                  <div class="agileinfo-social-grids">
                     <h4 style="color: white"> Mídias Sociais </h4>
                     <ul>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4 agileinfo_footer_grid">
                  <h3>Informação de Contato</h3>
                  <ul class="agileinfo_footer_grid_list">
                     <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>END CEDETEG,
                        <span>Guarapuava.</span>
                     </li>
                     <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                        href="mailto:edaygrees@gmail.com">edaygrees@gmail.com</a></li>
                     <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>TELEFONE</li>
                  </ul>
               </div>
               <div class="col-md-4 agileinfo_footer_grid">
                  <h3>Navegação</h3>
                  <ul class="agileinfo_footer_grid_nav">
                     <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                        href="{{ route('index') }}">Inicio</a>
                     </li>
                     <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                        href="{{ route('about') }}">Sobre</a>
                     </li>
                     <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a
                        href="{{ route('contact') }}">Contato</a>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!-- //footer -->
      <script type="text/javascript" src="{{ asset('/js/move-top.js') }}"></script>
      <script type="text/javascript" src="{{ asset('/js/easing.js') }}"></script>
      <!-- here stars scrolling icon -->
      <script type="text/javascript">
         $(document).ready(function () {
             $().UItoTop({
                 easingType: 'easeOutQuart'
             });
         });
      </script>
   </body>
</html>