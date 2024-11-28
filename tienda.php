<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online</title>
    
</head>
<style type="text/css">
body {
    font-family: Arial, sans-serif;
    background-color:  #18191b;
    color: black;
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
.barra {
    background: black;
    width: 100%;
    height: 100px;
    position: absolute; /* La barra no se mueve con el scroll */
    top: 0;
    left: 0px;
    z-index: 100; /* Mantén el contenido visible sobre otros elementos */
}

#boton,#infor {
    cursor: pointer;
    border: none;
    padding: 16px 32px;
    font-size: 18px;
    font-family: Arial;
    width: auto;
        height: auto;
    gap: 20px;

}

.info,#infor {
    position: absolute; /* Se posiciona en relación a la barra */
    top: 20px;
    left: 20px;
    background: none;
    color: white;
}
 .info::before {
            content: "";
            position: absolute;
            top: 0;/*las medidas se cuentan dentro del boton*/
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 100%;
            border-radius: 15px;
            background-color: #18191b; /* Color al que cambiará */
            transition: width 0.4s ease;
            z-index: -1;
        }  

        .info:hover::before {
            width: 100%;
            border: solid 2px white;
        }

.login {
    position: absolute; /* Se mantiene dentro de la barra */
    top: 20px;
    right: 200px;
    background: none;
    color: white;
    border-radius: 10px;
} .login::before {
            content: "";
            position: absolute;
            top: 0;/*las medidas se cuentan dentro del boton*/
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 100%;
            border-radius: 15px;
            background-color: #18191b; /* Color al que cambiará */
            transition: width 0.4s ease;
            z-index: -1;
        }  
        .login:hover::before {
            width: 100%;
            border: solid 2px white;
        }


.donacion {
    position: absolute; /* También se fija dentro de la barra */
    top: 20px;
    right: 10px;
    background: white;
    border-radius: 15px;
    z-index: 2;
}
   
    .donacion::before {

            content: "";
            position: absolute;
            top: 0;/*las medidas se cuentan dentro del boton*/
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 100%;
            border-radius: 15px;
            background-color: black; /* Color al que cambiará */
            transition: width 0.4s ease;
            z-index: -1;
        }  
        .donacion:hover::before {
            width: 100%;
            border: solid 2px white;

        }
        .donacion:hover{
            color: white;
             background: black;
        }



section {
    margin-top: 100px; /* Asegura que el contenido no se superponga con la barra */
}



/* section Contenedor */
.section-contenedor {
    padding: 2rem;
    text-align: center;
    background-color:  #18191b;
}

h3 {color: black;

}
h2 {
    margin-bottom: 1rem;
    color: white;
}

/* Book Grid */
.libros-zona {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    padding: 0 2rem;
}

.libro-carta {
    background: white;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

}

.libro-carta img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
       width: 300px;
    height: 350px;
}

.libro-carta h3 {
    margin: 1rem 0 0.5rem;
    font-size: 1.2rem;
}

.libro-carta p {
    margin: 0.5rem 0;
    font-size: 1rem;
    color: #555;
}

.libro-carta button {
    background-color: black;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

.libro-carta button:hover {
    background-color: white;
    color: black;
    box-shadow: inset 0 0 0 2px black;/*abusamos del box shadow para poner bordes internos al boton*/
}

/* Footer */
.div {
    position:relative ;
    background-color: black;
    color: white;
    text-align: center;
    bottom: -10px;
    width: 100%;
    height: 100px;
    left: -10px;
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
<body>
     <!-- Barra personalizada -->
    <div class="barra">

         <div class="contenedor">
            <button class="opciones-boton">Ver Más</button>
            <div class="opciones">
                <div data-value="index2.html">Inicio</div>
                <div data-value="somos.html">¿Quiénes Somos?</div>
                <div data-value="Vision.html">Visión</div>
                <div data-value="Mision.html">Misión</div>
            </div>
        </div>
         <center><h1>Re-Book</h1></center>

        <form method="POST" action="inicioS.html">
            <div>
                <div id="boton" class="donacion" onclick="window.location.href='donaciones.html'">Donaciones</div>
            </div>
        </form>
        
    </div>

    <!-- Contenido principal -->
    <section class="section-contenedor">
        <h2>Nuestros Productos</h2>
        <div class="libros-zona">
            <!-- Libro 1 -->
            <div class="libro-carta">
                <img src="img/cuaderno1.png" alt="Libro 1">
                <h3>Cuaderno Prof. 70 Hojas</h3>
                <p>$70 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 2 -->
            <div class="libro-carta">
                <img src="img/cuaderno2.png" alt="Libro 2">
                <h3>Cuaderno Ital. 50 Hojas</h3>
                <p>$50 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 3 -->
            <div class="libro-carta">
                <img src="img/cuaderno3.png" alt="Libro 3">
                <h3>Cuaderno Fran. 50 Hojas</h3>
                <p>$50 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 4 -->
            <div class="libro-carta">
                <img src="img/cuaderno9.png" alt="Libro 4">
                <h3>Cuaderno Prof. 50 Hojas</h3>
                <p>$50 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 5 -->
            <div class="libro-carta">
                <img src="img/cuaderno5.png" alt="Libro 5">
                <h3>Cuaderno Fran. 100 Hojas</h3>
                <p>$100 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 6 -->
            <div class="libro-carta">
                <img src="img/cuaderno6.png" alt="Libro 6">
                <h3>Libreta 70 Hojas</h3>
                <p>$80 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 7 -->
            <div class="libro-carta">
                <img src="img/cuaderno7.png" alt="Libro 7">
                <h3>Libreta 50 Hojas</h3>
                <p>$60 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 8 -->
            <div class="libro-carta">
                <img src="img/cuaderno11.png" alt="Libro 8">
                <h3>Cuaderno Fran. 70 Hojas</h3>
                <p>$70 MXN</p>
                <button>Comprar</button>
            </div>
            <!-- Libro 9 -->
            <div class="libro-carta">
                <img src="img/cuaderno10.png" alt="Libro 9">
                <h3>Cuaderno Prof. 100 Hojas</h3>
                <p>$100 MXN</p>
                <button>Comprar</button>
            </div>
        </div>
    </section>

    <div class="div">
        <br>
        <p>© 2024 Re-book. Tienda en linea.</p>
        <p>Escribe Tu Historia Sin Dejar Huella En El Planeta.</p>
    </div>
    <label></label>

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
