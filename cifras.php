<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mostrar algo</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.js" type="text/javascript"></script>  
    </head>
<body>
<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="submenu.php">Demo Proyecto Final</a>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Cifras 1 <b class="caret"></b></a>
            <ul class="dropdown-menu">
             <li><a tabindex="-1" href="#">15</a></li>
              <li><a tabindex="-1" href="#">30</a></li>
              <li><a tabindex="-1" href="#">45</a></li>
              <li><a tabindex="-1" href="#">60</a></li>
               <li><a tabindex="-1" href="#">90</a></li>
              <li><a tabindex="-1" href="#">120</a></li>
              <li><a tabindex="-1" href="#">150</a></li>
              <li><a tabindex="-1" href="#">180</a></li>
              <li><a tabindex="-1" href="#">210</a></li>
            </ul>
          </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Cifras 2 <b class="caret"></b></a>
            <ul class="dropdown-menu">
             <li><a tabindex="-1" href="#">15</a></li>
              <li><a tabindex="-1" href="#">30</a></li>
              <li><a tabindex="-1" href="#">45</a></li>
              <li><a tabindex="-1" href="#">60</a></li>
               <li><a tabindex="-1" href="#">90</a></li>
              <li><a tabindex="-1" href="#">120</a></li>
              <li><a tabindex="-1" href="#">150</a></li>
              <li><a tabindex="-1" href="#">180</a></li>
              <li><a tabindex="-1" href="#">210</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</header>
      <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

    </body>
</html>
