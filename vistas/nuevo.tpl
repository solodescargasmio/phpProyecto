<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>{$titulo}</title>
           <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.js" type="text/javascript"></script> 
 <link href="css/ficha.css" rel="stylesheet" type="text/css">
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
</head>

<body>
            {include file="header.tpl"}
    <div class="container-fluid" style="background: #fff;opacity: 0.9; height: 100%;">
      <div class="row">
          {if isset($mensage)}
          {$mensage}
          {/if}
          <h3>Datos Paciente</h3>     
          <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos Personales</legend>
    <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">Cedula de Identidad</label>
    <div class="col-lg-10">
        <input type="number" class="form-control" name="ci" id="ci" required="">
    </div>
  </div>          
              
  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="nombre" id="nombre" required="">
    </div>
  </div>
              
  <div class="form-group">
    <label for="apellido" class="col-lg-2 control-label">Apellido</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="apellido" id="apellido" required="">
    </div>
  </div>  <div class="form-group" >
    <label for="sexo" class="col-lg-2 control-label">Sexo</label>
    <div class="col-lg-10">
              <select name="selector">
            <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="indeterminado">Indeterminado</option>
        </select>
    </div>
  </div>
             <div class="form-group" style="background: #fff;opacity: 0.9; height: 100%;">
    <label for="fecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    {include file="fecha.tpl"}
    </div>
            
    </fieldset>
    <fieldset> <legend>Datos Patronimicos</legend>    
                                     <div class="form-group"> 
                <label  class="col-sm-4 control-label">Ingrese Peso : </label>
                <div class="col-sm-6">
                        <input type="text" name="peso" placeholder="Peso :" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Ingrese Altura :</label>
                <div class="col-sm-6">
                    <input type="text" name="altura" placeholder="Altura :" required="required" size ="50" class="texto">
                </div>
            </div>
              
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Fecha de Estudio: </label>
                <div class="col-sm-6">
                    <input type="text" value="{$fecha}" size ="50" class="texto" readonly="">
                    <div id="masInfo" style="float: right"></div>
                </div>
            </div>
    
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta usuario</button>
    </div>
  </div>
    </fieldset>
</form>
      </div>
             
                    <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
        });</script>
        </div>
</body>
</html>
