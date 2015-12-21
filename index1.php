<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi titulo</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script>
        $(function() {
    var $form = $("#my-dynamic-form");

    $('#add-field-button').click( function(){
        var $fieldset = $('<fieldset>');
        
        $('<input type="text" name="field[]">').appendTo($fieldset);
        $('<input type="number" name="value[]">').appendTo($fieldset);
        
        $fieldset.appendTo($form);
    });
    
});
        </script>
    </head>
    
    <body>
        
        <a href="mostrartodos.php">Mostrar todos los usuarios</a>
        <h1>Ejemplo de formulario dinámico</h1>

<form id="my-dynamic-form" action="/guardar_formulario.php" method="post">
</form>
        <label>Agregar campo de tipo</label>
        <select><option>text</option>
        <option>checkbox</option>
        <option>password</option>
        <option>file</option>
        </select>
<button id="add-field-button">
    Agrega campo
</button>
    </body>
</html>
