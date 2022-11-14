<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="OSUDER - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="OSUDER" />

    <!-- Page Title -->
    <title>Tech Equity Marathon - @yield('title')</title>

    <!-- Favicon and Touch Icons -->

    <!-- Stylesheet -->
    <link href="{{ asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/jquery-ui.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/animate.css")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("assets/css/css-plugin-collections.css")}}" rel="stylesheet">
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset("assets/css/menuzord-skins/menuzord-rounded-boxed.css")}}" rel="stylesheet">
    <!-- CSS | Main style file -->
    <link href="{{ asset("assets/css/style-main.css")}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset("assets/css/preloader.css")}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset("assets/css/custom-bootstrap-margin-padding.css")}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset("assets/css/responsive.css")}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <link href="{{ asset("assets/css/style.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">    

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{ asset("assets/js/revolution-slider/css/settings.css")}}" rel="stylesheet" type="text/css">
    <link  href="{{ asset("assets/js/revolution-slider/css/layers.css")}}" rel="stylesheet" type="text/css">
    <link  href="{{ asset("assets/js/revolution-slider/css/navigation.css")}}" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->
    <link href="{{ asset("assets/css/colors/theme-skin-blue.css")}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- external javascripts -->
    <script src="{{ asset("assets/js/jquery-2.2.4.min.js") }}"></script>
    <script src="{{ asset("assets/js/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset("assets/js/jquery-plugin-collection.js") }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset("assets/js/revolution-slider/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js") }}"></script>
    @yield('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">
      @include('component.header')

          @yield('content')

      @include('component.footer')


    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset("assets/js/custom.js")}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
          (Load Extensions only on Local File Systems ! 
          The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js") }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    {{-- {!! Toastr::message() !!} --}}
      @yield('scripts')
  </body>
</html>