<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <script src="js/jquery.js" type="text/javascript"></script>
          <script src="js/nicEdit.js" type="text/javascript"></script>
     <script type="text/javascript">
  $(document).ready(function() {    
    //Al escribr dentro del input con id="service"
    $('#service').keyup(function(){
        //Obtenemos el value del input
        largo=0;
        
        var service = $(this).val();
        if(service.length>largo){
         var dataString = 'service='+service;   
    
        
         
        //Le pasamos el valor del input al ajax
        $.ajax({
            type: "POST",
            url: "autocompletar.php",
            data: dataString,
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('#suggestions').fadeIn(1000).html(data);
                //Al hacer click en algua de las sugerencias
                var id="";
                $('a').on('click', function(){
                    //Obtenemos la id unica de la sugerencia pulsada
                    id= $(this).attr('id') ;
                    
// var id = $('suggest-element').attr('#'+id);
                  //  alert(id);
                    //Editamos el valor del input con data de la sugerencia pulsada
                    $('#service').val($('#'+id).attr('data'));  
//  $('#service').val($('#'+id).attr('data'));
                    //Hacemos desaparecer el resto de sugerencias
                    $('#suggestions').fadeOut(1000);
                });              
            }
        });}
    });              
}); 
   </script>
   <style>
.suggest-element{
    
margin-left:5px;
margin-top:5px;
width:350px;
cursor:pointer;
}
#suggestions {
width:350px;
height:150px;
overflow: auto;
}
</style>
    </head>
    <body>
 <form>
   <input type="text" size="50" id="service" name="service" />
   <div id="suggestions"></div>
</form>
        <?php
        error_reporting(0);
        require_once ('./conexion/config.php');
        require_once ('./clases/presion_braquial.php');
        require_once ('./clases/presion_central.php');
        $pres=new presion_braquial();
        $dato=$pres->mostrarPb(44128169);
        $pres1=new presion_central();
        $dato1=$pres1->mostrarPc(44128169);
        var_dump($dato);
        var_dump($dato1);exit();
        ?>
    </body>
</html>
