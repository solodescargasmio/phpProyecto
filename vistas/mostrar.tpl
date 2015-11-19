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
          <h3>Esto es la pagina principal</h3>     
          <table class="table table-condensed">
                      <tr>
                          <td>ID</td>
                          <td>Nombre</td>
                          <td>Imagen</td>
                          
              </tr>
             
              
              {foreach from=$usuarios item=usuario} <tr class="success">
                 <td>{$usuario->getId()}</td>
                 <td>{$usuario->getNombre()}</td>
                 <td><img src="imagenes/{$usuario->getImagen()}" width="50" height="50"> </td>
                 <td><a class="btn btn-lg btn-primary" href="editarUsuario.php?id={$usuario->getId()}">Editar</a></td>
 <td><a class="btn btn-lg btn-primary" href="eliminar.php?id={$usuario->getId()}">Eliminar</a></td>
                 </tr> 
             {/foreach}
             
</table>
             <a href="nuevo.php" class="btn btn-primary btn-lg btn-block">Ingresar nuevo</a>
      </div>
    </div>
  </body>
</html>