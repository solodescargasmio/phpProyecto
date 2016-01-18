<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */  include "../libchart/classes/libchart.php";
	header("Content-type: image/png");

	$chart = new PieChart(500, 300);
	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Maculino", 50));
	$dataSet->addPoint(new Point("Femenino", 75));
	$dataSet->addPoint(new Point("Travestis", 300));
	$chart->setDataSet($dataSet);
	$chart->setTitle("Composicion de prostitucion (Tasa de error +/- 0.35%) ");
	$chart->render();

