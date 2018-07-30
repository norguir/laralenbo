<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon.png')}}" >
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Lenbo, le prêt entre particuliers, simple et sécurisé
    </title>
    
    <!-- CSRF Token -->
    {{-- Laravel specific --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lenbo</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lenbo.css') }}" rel="stylesheet" />

</head>

<body class="sidebar-collapse">


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-up ">

      <div class="container">

        <div class="navbar-translate">
          <a class="navbar-brand" href="{{ route('index') }}" rel="tooltip" title="Lenbo" data-placement="bottom">
            Lenbo
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" data-nav-image="assets/img/blurred-image-1.jpg" data-color="orange">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item ">
              <a class="nav-link " href="{{ route('ious-new') }}" id="simulateur"  aria-haspopup="true" aria-expanded="false">
                Commencer
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="#" id="comment"  aria-haspopup="true" aria-expanded="false">
                Comment ca marche
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link " href="{{ route('about') }}" id="apropos"  aria-haspopup="true" aria-expanded="false">
                À propos
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#" id="blog"  aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
            </li>

            <form class="form-inline mt-2 mt-md-0">                    
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">S'identifier</button>
            </form>

          </ul>
        </div>

      </div>
  </nav>
  <!-- End Navbar -->

  @yield('content') 

<footer class="footer footer-big">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-9 ml-auto mr-auto">
        <div class="links">
          <ul class="uppercase-links">
            <li>
              <a href="{{ route('cgus') }}" >Conditions Générales d'Utilisation</a>                
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-3 ">
        ©
        <script>
          document.write(new Date().getFullYear())
        </script> Tous droits reservés Lenbo
      </div>
    </div>
        
  </div>
</footer>

    
  <script src="{{ asset('js/app.js') }}" ></script>
  <script src="{{ asset('js/lenbo.js') }}" ></script>

    
</body>



</html>
