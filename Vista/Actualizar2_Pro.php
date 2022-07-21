<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/carga.css"/>
		<link rel="stylesheet" type = "text/css" href = "css/select2.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/select2.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
<audio id = "index" src = "../Musica/index.mp3" autoplay = "autoplay" loop = "loop"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="Modificar_Pro.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="top:10px;left:920px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function iniciar() 
				{ 
				    var boton=document.getElementById('Play'); 
				    boton.addEventListener('click', Play, false); 
                } 

				function Play() 
				{ 
				    var audio=document.getElementById('index'); 
				    audio.play(); 
				} 
				window.addEventListener('load', iniciar, false); 
				
				</script>
				<li style="top:10px;left:923px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function inicio() 
				{ 
				    var boton=document.getElementById('Pausa'); 
				    boton.addEventListener('click', Pausa, false); 
                } 

				function Pausa() 
				{ 
				    var audio=document.getElementById('index'); 
				    audio.pause(); 
				} 
				window.addEventListener('load', inicio, false); 
				
				</script>
			</ul>
			
		</div>
    </div>

<p><br/></p>
<p><br/></p>
<p><br/></p>

<font face = "Palatino" size="4">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><b>Actualizar por Nombre</b></div>
					<div class="panel-body">
					<br>
					<center>
					<font face = "Candara">
						<form method="post" action = "../Vista/Actualizar1_Pro.php">
							<input style="float:center;" value="Actualizar por Identificación" type="submit" id="Actualizar_ID" name="Actualizar_ID" class="btn btn-warning btn-lg">
						</form>
					</font>
					</center>
					
				    <br>
					<form method="post" action = "../Controlador/Actualizar_Pro.php">
						<div class="row">
							<div class="col-md-12">
							<p></p>
							<label for="nombre">Nombre del producto:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select menu = "ID" id = "ID" name = "ID" required = "required" style="width : 400px; height : 50px;" class="form-control">
                                
                            <?php
                            
                            include '../Controlador/db.php';
        
                            $sentencia = "SELECT * FROM products";
                            $result = mysqli_query($con, $sentencia);

                            while($mostrar = mysqli_fetch_array($result))
                            {
                                $id = $mostrar['product_id'];
                                $nom = $mostrar['product_title'];
                                
                                echo "<option value =  $id> $nom </option>";
                            ?>

                            <?php
                            }
                            ?>
                            
                            </select>
                            <font face = "Candara">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input style="float:center;" value="Actualizar" type="submit" id="Actualizar" name="Actualizar" class="btn btn-success btn-lg">
							</font>
                            </div>
                        </div>
                        <p><br/></p>
                        
                        <script type = "text/javascript">

						$(document).ready(function(){
						    $('#ID').select2();
						});

						</script>
						
					</div>
                    </form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
    </div>
    </font>
    
    <script>

          window.onload = function()
          {
              var contenedor = document.getElementById
              (
                  'contenedor_carga'
              ); 
              
              contenedor.style.visibility = 'hidden';
              contenedor.style.opacity = '0';
          }
          
    </script>
</body>
</html>