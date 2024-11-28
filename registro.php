<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registro.php</title>
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

        input[type="text"],input[type="int"],input[type="password"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid white;
            color: white;
            border-radius: 5px;
            outline: none;
        } 
       input[type="text"]:hover,input[type="int"]:hover,input[type="password"]:hover,
        input[type="email"]:hover {
            scale: 1.1;
        }

        input[type="submit"] {
            padding: 10px;
          border:1px solid white;
            background-color: #18191b;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color:black;

        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: rgba(0, 0, 140, 1.0);
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
            color: rgba(0, 0, 110, 1.0);
        }

</style>
<body>
	<div class="contenedor">
	<center><h1>Re-Book</h1></center>
<h2>Registrate</h2>
		<form method="POST" action="datosRegistro.php">
			<label>Nombre:</label><input type="text" name="nombre" required>
			<label>Correo Electronico:</label><input type="email" name="email" required>
			<label>Celular:</label><input type="int" name="celular" required>
			<label>Contraseña:</label><input type="password" name="password" required>

			<input type="submit" name="Enviar" value="Registrarse">
		</form>
	
</div>
</body>
</html>