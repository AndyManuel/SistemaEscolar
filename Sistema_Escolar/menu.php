  <?php
    require 'header.php';
	require 'footer.php';
 ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="TestUsuario.php">Usuarios</a></li>
            <li><a href="TestMateria.php">Maestro-Materias</a></li>
            <li><a href="TestAlumno.php">Alumno-Grupo</a></li>
			<li><a href="index.php">Log Out</a></li>   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>