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
    <div class="container-fluid" style="background: #fff;opacity: 0.8; height: 130%;">
    <div class="row">
        {if isset($mensage)}
           {$mensage}
        {/if}    
    <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST">
    <h2>Datos Personales</h2>
    
    <div class="form-group">
        <label for="ci" class="col-lg-3 control-label">Cedula de Identidad</label>
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
    </div>  
    
    <div class="form-group" >
        <label for="sexo" class="col-lg-2 control-label">Sexo</label>
        <div class="col-lg-10">
            <select name="selector">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="indeterminado">Indeterminado</option>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <label for="fecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
            {include file="fecha.tpl"}
    </div>
         
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Alta usuario</button>
        </div>
    </div>
    
    </form>
    </div>
             
    <script src="bootstrap-hover-dropdown.js"></script>
    <script src="js/formToWizard.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#FormularioPatronimico").formToWizard({ })
            });
    </script>
    </div>
    
</body>
</html>
