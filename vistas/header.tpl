<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">Demo Proyecto Final</a>
        {if isset($cedula)}
            <a class="navbar-brand" href="#" style="float: right;">Esta trabajando con el usuario :{$apellido}  :{$cedula} </a>
        {/if}
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Ingresar Paciente<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="nuevo.php">Ingresar Paciente</a></li>
              <li><a tabindex="-1" href="riesgos.php">Riesgo CV</a></li>
            </ul>
          </li>
          <li> <a tabindex="-1" href="imts.php">IMT </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Ecografia <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Ecografía Carotídea Izquierda</a></li>
              <li><a tabindex="-1" href="#">Ecografía Femoral Común Izquierda</a></li>
              <li><a tabindex="-1" href="#">Arteria Vertebral Izquierda</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Ecografía Carotídea Derecha</a></li>
              <li><a tabindex="-1" href="#">Ecografía Femoral Común Derecha</a></li>
              <li><a tabindex="-1" href="#">Arteria Vertebral Derecha</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Ecografía Radial Derecha</a></li>
              <li><a tabindex="-1" href="#">Ecografía Braquial Derecha</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Caracterización de Placa</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="vops.php">Velocidad de Onda de Pulso</a>
          <!--  <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">PWV SPHYGMOCOR Carotido-Femoral</a></li>
              <li><a tabindex="-1" href="#">PWE Hemodin</a></li>
            </ul>-->
          </li>
          <li class="dropdown">
            <a href="distancias.php">Distancia</a>
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
          </li>    
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