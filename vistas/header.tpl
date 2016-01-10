<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a tabindex="-1" class="navbar-brand" href="index.php">Inicio</a>
        
        <a tabindex="-1" class="navbar-brand" href="cerrar.php" style="  margin-left: auto; margin-right: auto;;">Cerrar</a>
        {if isset($cedula)}
            <div style="float: right;"><font style="color: #fff;">Apellido: {$apellido}<br>Cedula : {$cedula} <br>Edad : {$edad}</font></div>
        {/if}
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">{if !isset($cedula)}
            <a tabindex="-1" href="nuevo.php">Ingresar Paciente</a>
              {/if}

          </li>
          <li> <a tabindex="-1" href="imts.php">IMT </a></li>
          <li class="dropdown">
            <a tabindex="-1" href="guardarmultimedia.php">Archivos</a>
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="riesgos.php">Riesgo CV</a>
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="vops.php">Velocidad de Onda de Pulso</a>
          <!--  <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>-->
          </li>
          <li class="dropdown">
            <a tabindex="-1" href="distancias.php">Distancia</a>
          <!--  <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>-->
          </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Presión<b class="caret"></b></a>
           <ul class="dropdown-menu">
              <li><a tabindex="-1" href="pres_central.php">Presión Central</a></li>
              <li><a tabindex="-1" href="pres_braquial.php">Presión Braquial</a></li>
            </ul>  
        </li>
        <li class="dropdown">
            <a tabindex="-1" href="comentarios.php">Comentarios</a>
          </li>
           <li class="dropdown">
            <a tabindex="-1" href="imprimir.php">Ver Ficha</a>
          </li>
    <!--  <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Reactividad Vascular <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Basal</a></li>
              <li><a tabindex="-1" href="#">Basal-Oclusión</a></li>
              <li><a tabindex="-1" href="#">Oclusion Inmediata</a></li>
              <li><a tabindex="-1" href="#">Minimo Post Oclusión</a></li>
              <li><a tabindex="-1" href="#">Máximo Post Oclusión</a></li>
              <li class="divider"></li>
               <li><a tabindex="-1" href="#">Preliberación</a></li>
              <li><a tabindex="-1" href="#">Liberación Inmediata</a></li>
              <li><a tabindex="-1" href="#">Mínimo Post Liberación</a></li>
              <li><a tabindex="-1" href="#">Máximo Post Liberación</a></li>
      <li class="divider"></li>
      <li><a tabindex="-1" href="cifras.php">Cifras</a></li>
            </ul>
          </li>   --> 
        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  </header> <!-- .navbar -->

  

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
    
</script>