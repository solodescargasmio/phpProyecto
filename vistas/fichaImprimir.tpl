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
            <a href="javascript:imprSelec('imprimir')" >
   <button id="buscar" name="buscar" class="btn btn-success btn-group-justified">
      Imprimir Ficha</button>  
     </a>
            <div class="container-fluid" id="imprimir" style="width: 100%; height: 1280px;" >        
            <img src="./imagenes/header.jpg" style="width: 100%; height: 15%">
            <label style="width: 100%;text-align: center;" class="bg-success"><h3><font style="font-family: fantasy;">ESTUDIO VASCULAR NO INVASIVO MULTI-PARAMÉTRICO</h3></label>
    <!--   Empiezan las tablas                -->
    <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Datos Patronimicos</caption>
           <thead> 
           <tr class="success">
               <td>Fecha estudio</td>
               <td>Cedula</td>
                 <td>Nombre</td>
                 <td>Sexo</td>
              </tr></thead> 
           <tbody><tr class="success">
                   {if isset($ficha)}
           <td>{$ficha->getFecha_estudio()}</td>
           {else}
               <td></td>
           {/if}
           {if isset($usuarios)}  
                 <td>{$usuarios->getId()}</td>
                 <td>{$usuarios->getNombre()}</td>
                 <td>{$usuarios->getSexo()}</td>{/if}
               </tr>   
 </tbody>
       </table>
                <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Factores de Riesgo Cardiovacular</caption>
           <thead> 
           <tr class="success">
               <td>IMC</td>
               <td>Diabetes</td>
                 <td>Tabaquismo</td>
                 <td>Sedentarismo</td>
              </tr></thead> 
           <tbody><tr class="success">
                       {if isset($ficha)}
           <td>{$ficha->getImc()}</td>
           {else}
               <td></td>
           {/if}
           {if isset($riesgo)} 
               {if $riesgo->getDiabetes()==0}
                   <td>No</td>
           {else}
               <td>Si</td>
           {/if}

               {if $riesgo->getFuma()==0}
                   <td>No</td>
           {else}
               <td>Si</td>
           {/if}
               {if $riesgo->getSedentarismo()==0}
                   <td>No</td>
           {else}
               <td>Si</td>
           {/if}
{/if}
               </tr>   
 </tbody>
       </table>
               
               
                  <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger"> Presión Arterial Periférica y Central Aórtica</caption>
           <thead> 
       <tr class="success">           
             <td colspan="3"></td><td colspan="3">Sistólica</td><td colspan="3">Diastólica</td>
             </tr>                  
           </thead> 
           <tbody>
               <tr>
                   
     <td colspan="3">PRESIÓN ARTERIAL BRAQUIAL [mmHg]</td>
     {if isset($presb)}
     <td colspan="3">{$presb->getPsis_br()}</td><td colspan="3">{$presb->getPdias_br()}</td>{/if}
    </tr><tr>
           <td colspan="3">PRESIÓN AÓRTICA CENTRAL [mmHg]</td>
           {if isset($presc)}
           <td colspan="3">{$presc->getPsis()}</td><td colspan="3">{$presc->getPdias()}</td> {/if}
           </tr>    

           </tbody>
               </table>
               
               <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Comentarios</caption>
           <thead> 
              {if isset($comentarios)} 
               {foreach from=$comentarios item=comentario}
         <tr class="success" style="text-align: center;">           
             <td>{$comentario->getTitulo()|unescape:"html"}<td
             </tr>    
               
           </thead> 
           <tbody>
               <tr>
                   <td>{$comentario->getTexto()|unescape:"html"}</td>   
               </tr>
           {/foreach} {/if}
           </tbody>
               </table>
           <table class="table" border="1" style="width: 100%">
           <caption style="text-align: center;" class="alert-danger">Firma Medico Responsable</caption>
           <thead> 
         <tr class="success" style="text-align: center;">           
             <td>Firma<td
             </tr>    
               
           </thead> 
           <tbody>
               <tr >
                   <th rowspan="3" scope="col" style="text-align: center;">
                       <img src="./imagenes/firma_e.jpg" width="180" height="100">        
                   </th>   
               </tr>
           </tbody>
              </table>
           <table class="table" border="1" style="width: 100%">
           <tr style="text-align: center;"><td>Institucion responsable</td></tr>
      <tr style="text-align: center;"><td>Centro Universitario Paysandu-Universidad de la República- Florida 1065-ingenieriabiologica@cup.edu.uy </td></tr>
           </table>
               </table>  
    </div>
             <script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>  
    
</body>
</html>