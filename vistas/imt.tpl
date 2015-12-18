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
    <div class="container-fluid" style="background: #fff;opacity: 0.9;">
      <div class="row">
          {if isset($mensage)}
          {$mensage}
          {/if}
          <h3>Datos Paciente</h3>     
          <form id="FormularioPatronimico" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    <fieldset> <legend>Datos IMT</legend>
    <div class="form-group">
    <label for="ci" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
        <input type="text" class="form-control" name="cd" id="cd" required="">
    </div>
  </div>          
              
  <div class="form-group">
    <label for="nombre" class="col-lg-2 control-label">CI</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="ci" id="ci" required="">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta Datos</button>
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
</body>

</html>