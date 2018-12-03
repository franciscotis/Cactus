<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
   CACTUS - ADMINISTRADOR
 </title>

 <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

 <link href="{{ asset('css/pagadmin.css') }}" rel="stylesheet">
 <link rel="icon" href="{{ asset('imgs/p1.png') }}" type="image/x-icon"/>
 <link rel="shortcut icon" href="{{ asset('imgs/p1.png') }}" type="image/x-icon"/>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="{{ asset('js/pagadmin.js') }}" defer></script>
 <link href="https://fonts.googleapis.com/css?family=Poppins:100" rel="stylesheet"> 
</head>
<body>

  <div class="header">
    <nav class="navbar navbar-default navbar-custom">
      <div class= "container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">CACTUS</a>
  
        
        <div id="barra-navegacao">


        </div>
      </nav>

    </div>


    <div class="row">
      <div class="col" >
        <div class="left-sidebar">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
              <ul id="sidebarnav">

                <li class="nav-label">Home</li>
                <li class="nav-devider"></li>
                <li> <a href="{{route('admin.index')}}" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Dashboard </span></a>
                    </li>
                  <li class="nav-label">Usuários</li>
                  <li class="nav-devider"></li>
                  <li> <a href="{{route('controleUsuario')}}" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Controle </span></a>
                  </li>
                    <li class="nav-devider"></li>
                    <li class="nav-label">Plantas</li>
                    <li> <a href="{{route('controlePlanta')}}" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Controle </span></a>
                    </li>
                    <li> <a href="{{route('adicaoPlanta')}}" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Adição </span></a>
                    </li>
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                  </nav>
                  <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
              </div>
            </div>




          </div>

          <div class="conteudo">
            @yield('conteudo')
          </div>

          
          <!-- footer -->
          <footer class="footer">
            <div class="container">
              <center><span class="text-muted">
              © 2018 lays e francis.</span>
            </div></center>
          </footer>




          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="bootstrap/js/bootstrap.min.js"></script>

        </body>
        </html>