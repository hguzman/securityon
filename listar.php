<html>
<head>
  <meta charset="UTF-8">
  <title>SID</title>
  <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
</head>
    <body>    
      <div class="container">
        <div class="row">
          <!-- Aqui esta la primera fila de 12 columnas-->
          <div class="col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="imagenes/logo.jpg"></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li><a href="#">Misión</a></li>
                      <li><a href="#">Visión</a></li>
                      <li><a href="#">Objetivos</a></li>
                      <li><a href="#">Valores</a></li>
                      <li><a href="#">Productos</a></li>
                      <li><a href="#">SID</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
          </div>
          <!-- Termina Aqui la primera fila-->

          <div class="col-md-12">            
            <div class="page-header">
              <h1>SID <small>Sistema de Información D</small></h1>
            </div>

          </div>

          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-heading">Bienvenidos a SID</div>
              <div class="panel-body">

              	
					<?php
					$db = mysql_connect("localhost", "root","");
					mysql_select_db("securityon",$db);
					$sql = "select * from distribuidores";
					$result = mysql_query($sql);
					echo "<table class='table table-striped'>";
					echo "<tr>";
					echo "<td>Cedula</td>";
					echo "<td>Nombre</td>";
					echo "<td>Direccion</td>";
					echo "</tr>";
					while ($row = mysql_fetch_row($result)){ 
					       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>"; 
					} 
					echo "</table>"; 
					?>				
				              
              </div>
            </div>
          </div>

          <a href="sid.html">Regresar</a>
        </div>
      </div>
      
    </body>
</html>




