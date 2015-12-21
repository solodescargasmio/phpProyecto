<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$titulo}</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/dashboard.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.js" type="text/javascript"></script> 
 <link href="css/ficha.css" rel="stylesheet" type="text/css">
</head>

<body>
    {include file="header.tpl"}
    <div class="container-fluid">
        <font style="color:#fff;">{if isset($mensaje)}{$mensaje}{/if}</font>
    </div>
<form role="form" method="POST" class="form-horizontal">
    <fieldset> <legend>Datos Patronimicos</legend>
        <input type="text" class="form-control" name="ci" id="ci" value="{$cedula}">     
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
      <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar Ficha</button>
    </div>
  </div>
 </fieldset>
</form>

</body>

</html>