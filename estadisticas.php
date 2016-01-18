<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
         require_once ('./clases/ficha_patronimica.php');
         require_once ('./clases/usuario.php');
        require_once ('./clases/riesgo.php');
          require_once ('./conexion/config.php');
          
          $fuma=0;$presion=0;$col=0;$hiper=0;$ant=0;$sed=0;
          $ejer=0;$med=0;$diab=0;$mas=0;$fem=0;
        $riesgo=new riesgo();
        $usu=new usuario();
        $ficha=new ficha_patronimica();
        $valfla=$ficha->valoresIMC(1,18.49);
        $valnor=$ficha->valoresIMC(18.5,24.99);
        $valmay=$ficha->valoresIMC(25,29.99);
        $valSob=$ficha->valoresIMC(30,39.99);
        $valOb=$ficha->valoresIMC(40,150);
         

        $mas=$usu->contarSexo("masculino");
        $fem=$usu->contarSexo("femenino");
        require_once ('./libs/libchart/libchart/classes/libchart.php');
        $chart = new PieChart(500, 300);
	$dataSet = new XYDataSet();
        $dataSet->addPoint(new Point("<18.5 Debajo del Peso", $valfla));
	$dataSet->addPoint(new Point("18.5≥<25 Peso Normal", $valnor));
        $dataSet->addPoint(new Point("25≥<30 Sobrepeso", $valmay));
	$dataSet->addPoint(new Point("30≥<40 Obeso", $valSob));
        $dataSet->addPoint(new Point("≥40 Obesidad Extrema", $valOb));
         $total=$mas+$fem;
	$chart->setDataSet($dataSet);
	$chart->setTitle("Total pacientes: $total   Masculinos: $mas  Femeninos: $fem \n Composicion de IMC (Tasa de error +/- 0.35%) ");
	$chart->render("imagenes/demo1.png");
   //////////////////////////////////////////////////     

$chart1 = new VerticalBarChart();

$dataSet1 = new XYDataSet();

            $fuma=$riesgo->mostrarCantidad("fuma");
            $presion=$riesgo->mostrarCantidad("presion");
            $col=$riesgo->mostrarCantidad("colesterol");
            $hiper=$riesgo->mostrarCantidad("hiperglicemia");
            $ant=$riesgo->mostrarCantidad("ant_fliares");
            $sed=$riesgo->mostrarCantidad("sedentarismo");
            $ejer=$riesgo->mostrarCantidad("ejercicio");
            $med=$riesgo->mostrarCantidad("medicacion");
            $diab=$riesgo->mostrarCantidad("diabetes");
    
$dataSet1->addPoint(new Point("Fuma",$fuma ));
$dataSet1->addPoint(new Point("Presión", $presion));
$dataSet1->addPoint(new Point("Colesteról",$col ));
$dataSet1->addPoint(new Point("Hiperglisemia", $hiper));
$dataSet1->addPoint(new Point("Ant. Familiares",$ant ));
$dataSet1->addPoint(new Point("Sedentarismo", $sed));
$dataSet1->addPoint(new Point("Hace Ejercicio",$ejer ));
$dataSet1->addPoint(new Point("Medicacion", $med));
$dataSet1->addPoint(new Point("Diabetes",$diab));


$chart1->setDataSet($dataSet1);

$chart1->setTitle("Grafico Riesgo CV");
$chart1->render("imagenes/demo2.png");
        ?>

        <img alt="Torta"  src="imagenes/demo1.png"/>
        <img alt="Barra"  src="imagenes/demo2.png"/>
    </body>
</html>
