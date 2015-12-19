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
    {if isset($mensage)}{$mensaje}{/if}
    </div>
    <form id="FormularioPatronimico" method="POST" class="form-horizontal">
    <fieldset> <legend>Datos Distancia</legend>
                         <div class="form-group">     
                    <label  class="col-sm-4 control-label">Car. Fem. : </label>
                    <div class="col-sm-8">
                        <input type="text" name="carfem" class="success" size ="50">
                    </div> 
                </div> 
        
                  <div class="form-group">     
                    <label  class="col-sm-4 control-label">Car. Hueco : </label>
                    <div class="col-sm-8">
                        <input type="text" name="carhueco"  class="success" size ="50">
                    </div> 
                </div> 
        
                         
                                     <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hueco Hombro : </label>
                <div class="col-sm-6">
                        <input type="text" name="huecohombro" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hombro Braq. :</label>
                <div class="col-sm-6">
                    <input type="text" name="hombrobraq" required="required" size ="50" class="texto">
                </div>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hombro Rad. : </label>
                <div class="col-sm-6">
                    <input type="text" name="hombrorad" required="required" size ="50">
                </div>
            </div>
                         
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Hueco Cuffxell : </label>
                <div class="col-sm-6">
                    <input type="text" name="huecocuff" size ="50" class="texto">
                </div>
            </div>
   
        
            <div class="form-group"> 
                <label  class="col-sm-4 control-label">Cuffxell Fem. :</label>
                <div class="col-sm-6">
                    <input type="text" name="cuffem" required="required" size ="50" class="texto">
                </div>
            </div> </fieldset>            
    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
    </div>
  </div>
 
</form>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>
  <script src="js/formToWizard.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            //$("#FormularioPatronimico").formToWizard({ })
        });
       
    </script>
</body>

</html>