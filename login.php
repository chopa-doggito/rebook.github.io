<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	     
        H1{
        left: 50%;
        font-family: arial;
        align-content: center;
        size: 40px;
             color:white;
}       
 body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            width: 350px;
            background-color: #18191b;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: white;
        }

        /* Estilos de los formularios */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            color: white;
        }
        input{
            background-color: #474b4e;
            border: 13px solid white;
        }

        input[type="password"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid white;
            color: white;
            border-radius: 5px;
            outline: none;
        } 
        input[type="password"]:hover,
        input[type="email"]:hover{
            scale: 1.1;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #18191b;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            border:1px solid white;

        }

        input[type="submit"]:hover {
            background-color:black;

        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #33ccff;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
            color:#2699e6;
        }

        
</style>
<body><div class="contenedor">
	<center><h1>Re-Book</h1></center>
            <h2>Inicio de Sesión</h2>

		<form method="POST" action="datosLogin.php">
			<label>Correo Electronico:</label><input type="email"id="username" name="email" required>
			<label>Contraseña:</label><input type="password" id="password" name="password" required>
			<input type="submit" name="Iniciar" value="Iniciar Sesion">
			
			<div class="link"><label >¿No tienes una cuenta? </label><a href="registro.php">Regístrate aquí</a></div>
		</form>
</div>
</body>
</html>
