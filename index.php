<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REBOOK</title>
</head><link rel="stylesheet" type="text/css" href="barra.css">
<style type="text/css">

	
	#fondo{
		background:url("img/Re_book_fondo1.png") 0 0 / cover no-repeat;
		
		
	}
	 H1{
        left: 50%;
        font-family: arial;
        align-content: center;
        size: 40px;
        background: url("img/Re_book_fondo1.png")  0 0 / cover no-repeat;
        -webkit-background-clip:text;
        -webkit-text-fill-color:transparent;
    }
        #vision{
        	position: absolute;
        	align-content: initial;
        	top: 50%;
        	background-color: rgba(255, 255, 255, 0.2);
        	border-radius: 10px;
        	width: 700px;
        	padding-top: 2px;
        	padding-left: 10px;
        	padding-right: 10px;
        	padding-bottom: 2px;
        	all: none;
        	font-size: 30px;
        	font-family: arial;


        }
        label{
        	 	position: absolute;
        	align-content: initial;
        	top: 2000px;
        	background-color:red;
        	border-radius: 10px;
        	width: 700px;
        	padding-top: 2px;
        	padding-left: 10px;
        	padding-right: 10px;
        	padding-bottom: 2px;
        	all: none;
        	font-size: 30px;
        	font-family: arial;

        }
        .INT{	
        	position: absolute;
        	background: rgba(0, 0, 0, 0.5);
        	color: white;
        	font-family: arial;
        	
        	width: 1200px;
        	display: grid;
        	place-items: center;
            top: 50%;
        	left: 50%;
        	transform:translate(-50%,-50%) ;
        	z-index: -2;
        	text-align: justify;
        	padding: 10px;
        	border-radius: 15px;
        	text-align: center;

        }
        .INT h2{
        	font-size: 25px;
        }
        .INT p{
        	font-size: 20px;
        }
       		.content h2, .content p{
			opacity: 0;
			transition: 0.4s 0.2s ease;
		}
		.content h2{
			margin-bottom: 12px;
			scale: 0.2;
		}
		.content p{
			font-size: 14px;
			line-height: 1.5;
			color: #d1d1d1;
			transform: translate(50%);
		}
		.card:hover .content h2{
			scale: 1;
			opacity: 1;
		}
		.card:hover .content p{
			opacity: 1;
			transform: translateY(0);

		} 
		.contenedor {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 200px;
        }

        .opciones-boton {

            background-color: #18191b;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            width: 100%;
            text-align: left;
            cursor: pointer;
            position: relative;
            font-size: 16px;
            font-family: arial;
        }

        .opciones-boton::after {
            content: "▼";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
      

        .opciones {
            position: absolute;
            font-family: arial;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #18191b;
            border-radius: 10px;
            overflow: hidden;
            display: none;
            z-index: 10;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }

        .opciones div {
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            color: white;

        }

        .opciones div:hover {
            background-color: #000;
            transform: scale(1.05);
        }

        .opciones div:first-child {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .opciones div:last-child {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .opciones.active {
            display: block;
        }

</style>
<body><body id="fondo">
	

	<div class="barra">
		<div class="contenedor">
            <button class="opciones-boton">Ver Más</button>
            <div class="opciones">
                <div data-value="somos.html">¿Quiénes Somos?</div>
                <div data-value="Vision.html">Visión</div>
                <div data-value="Mision.html">Misión</div>
                <div data-value="tienda.php">Tienda</div>
            </div>
        </div>
        <center><h1>Re-Book</h1></center>

<form method="POST" action="inicioS.html">
	<div>
<div id="boton" class="login" onclick="window.location.href='login.php'">Acceder</div>	
	</div>
</form>
<form>
	<div>
	<div id="boton" class="registro" onclick="window.location.href='registro.php'">Registrar</div>



	</div>
</form>
	</div>
<div class="INT">
<h2>INTRODUCCION</h2>
<p>En Re-book, nos dedicamos a transformar el pasado en un futuro más verde y sostenible. Somos una empresa ficticia comprometida con el reciclaje de hojas de cuadernos viejos y utilizados, dándoles una nueva vida como libros y cuadernos frescos y reutilizables. Nuestro objetivo es reducir el desperdicio de papel y promover prácticas sostenibles en la comunidad.<br><br>
Además de nuestro proceso de reciclaje, ofrecemos una plataforma en línea donde los usuarios pueden donar y vender el material que hemos procesado. <br><br> Esta página web no solo facilita la reutilización de recursos, sino que también fomenta una economía circular, donde cada hoja de papel tiene la oportunidad de ser reutilizada y apreciada una vez más. <br><br>
En Re-book, creemos que cada pequeño esfuerzo cuenta. Al reciclar y reutilizar, no solo estamos protegiendo nuestros bosques y recursos naturales, sino que también estamos inspirando a otros a unirse a nuestra misión de sostenibilidad. <br><br> Únete a nosotros en este viaje hacia un mundo más limpio y verde.
</p>
	<script>
        // Interactividad del nuevo select personalizado
        const selectButton = document.querySelector('.opciones-boton');
        const optionsContainer = document.querySelector('.opciones');
        const options = document.querySelectorAll('.opciones div');

        // Abrir/cerrar menú al hacer clic
        selectButton.addEventListener('click', () => {
            optionsContainer.classList.toggle('active');
        });

        // Manejar selección de opción
        options.forEach(option => {
            option.addEventListener('click', () => {
                const value = option.getAttribute('data-value');
                selectButton.textContent = option.textContent; // Actualiza el botón
                optionsContainer.classList.remove('active'); // Cierra el menú
                if (value) window.location.href = value; // Redirige a la URL seleccionada
            });
        });

        // Cerrar el menú al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.contenedor')) {
                optionsContainer.classList.remove('active');
            }
        });
    </script>
</body>
</html>