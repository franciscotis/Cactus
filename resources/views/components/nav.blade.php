<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CACTUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catalogo</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#Sobre-nos">Sobre Nós</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="{{route('login')}}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="{{route('register')}}">Cadastre-se</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="modal" id="Sobre-nos" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="#">Sobre Nós</label>
                    <div class="form-group">
                      <h4>O Cactus é um aplicativo que busca facilitar a manutenção e os cuidados das plantas que você possui em sua casa. Com informações disponíveis a todo momento você pode evitar muitos problemas causados pela falta de cuidados ou manutenção incorreta de suas plantas. Aprenda a cuidar das suas plantas de maneira interativa e prática.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>