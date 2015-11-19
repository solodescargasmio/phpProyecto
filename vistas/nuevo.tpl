<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>{$titulo}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
  </head>

  <body>
    {include file="header.tpl"}
    <div class="container-fluid">
      <div class="row">
          {if isset($mensage)}
          {$mensage}
          {/if}
          <h3>Usuario a modificar</h3>     
 

          <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="imagen" class="col-lg-2 control-label">Imagen</label>
    <div class="col-lg-10">
        <input type="file" name="foto" id="foto">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Alta usuario</button>
    </div>
  </div>
</form>


             
      </div>
    </div>
  </body>
</html>