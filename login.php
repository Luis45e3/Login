<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stiles.css">
	<link href='https://unpkg.com/boxicons@2.1.4/c ss/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>    
<body>

	<div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

		<div class="form-box login">
			<h2 class="animation" style="--i:0; --j:21;">Login</h2>
			<form action="prueba1.php" method="POST">
				<div class="input-box animation" style="--i:1; --j:22;">
					<input type="text" required name="Usuario" id="Campo1" class="custom-input">
					<label>Usuario</label>
					<i class='bx bxs-user'></i>
				</div>
				<div class="input-box animation" style="--i:2; --j:23;">
					<input type="password" required name="Contraseña">
					<label>Password</label>
					<i class='bx bxs-lock-alt'></i>
				</div>
				<button type="submit" class="btn animation" style="--i:3; --j:24;" onclick="mostrar()">Entrar</button>

				<script type="text/javascript">
		
        function mostrar(){ 
        	
        	Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
            });
     

        }



	</script>
				<div class="logreg-link animation" style="--i:4; --j:25;">
					<p>No tienes cuenta? <a href="#" class="register-link">Registrate</a></p>
				</div>
			</form>
		</div>
		<div class="info-text login">
			<h2 class="animation" style="--i:0; --j:20;">Welcome Back!</h2>
			<p class="animation" style="--i:1; --j:21;"></p>
		</div>

        		<div class="form-box register">
			<h2 class="animation" style="--i:17; --j:0;">Registro</h2>
			<form>
				<div class="input-box animation" style="--i:18; --j:1;">
					<input type="text" required name="Usuario">
					<label>Usuario</label>
					<i class='bx bxs-user'></i>
				</div>
				<div class="input-box animation" style="--i:19; --j:2;">
					<input type="text" required name="Apellidos">
					<label>Apellidos</label>
					<i class='bx bxs-user'></i>
				</div>
				<div class="input-box animation" style="--i:20; --j:3;">
					<input type="text" required name="Email">
					<label>Email</label>
					<i class='bx bxs-envelope'></i>
				</div>
				<div class="input-box animation" style="--i:21; --j:4;">
					<input type="password" required name="contraseña">
					<label>Password</label>
					<i class='bx bxs-lock-alt'></i>
				</div>
			<button type="submit" class="btn animation" style="--i:22; --j:5;">Guardar</button>



				<div class="logreg-link animation" style="--i:23; --j:6;">
					<p>Ahora inicia tu sesion? <a href="#" class="login-link">login</a></p>
				</div>
			</form>
		</div>
        <div class="info-text register">
			<h2 class="animation" style="--i:17; --j:0;">Welcome Back!</h2>
			<p class="animation" style="--i:18; --j:1;">Este proyecto se realiza para conocer el comportamiento del clima en el invernadero de fresas</p>
		</div>
	</div>
    
    <script src="script.js"></script>
</body>
</html>



<?php 
if(isset($_POST['Usuario'])&&isset($_POST['Apellidos'])&&isset($_POST['Email'])&&isset($_POST['contraseña'])){
    $con=mysqli_connect("localhost", "root", "", "webfresas"); 

    mysqli_query($con, ("INSERT INTO login_registro(Usuario, Apellidos, Email, Contraseña)VALUES ('$_POST[Usuario]','$_POST[Apellidos]','$_POST[Email]','$_POST[contraseña]')"));    
 
 }       

 ?>       