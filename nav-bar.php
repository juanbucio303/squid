<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><i class="fas fa-user-circle"> <small><?php echo $_SESSION["name"]; ?></small></i></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-light" id="cerrar_sesion">Cerrar Sesion</a>
    </form>
  </div>
</nav>
