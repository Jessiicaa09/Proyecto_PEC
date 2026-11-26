<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - REFORESTA CBTA 35</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        
        header {
            background-color: #1b4332;
            color: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .logo {
            font-size: 1.3rem;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #2d6a4f;
        }

        /* Estilos del Banner */
        .banner {
            width: 100%;
            min-height: 380px;
            background-image: url('/Fondo.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .banner-contenido {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px 35px;
            border-radius: 8px;
            max-width: 600px;
        }

        .banner-contenido h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .banner-contenido p {
            font-size: 1.1rem;
        }

        /* Contenedor para el contenido principal */

        .contenido-principal {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 25px;
            line-height: 1.6;
        }

        .contenido-principal p {
            text-align: justify;
            margin-bottom: 18px;
            color: #222;
        }

        .subtitulo-seccion {
            color: #1b4332;
            margin-top: 30px;
            margin-bottom: 12px;
            font-size: 1.25rem;
        }

        .btn-siguiente {
            display: inline-block;
            margin-top: 20px;
            background-color: #2d6a4f;
            color: #fff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-siguiente:hover {
            background-color: #1b4332;
        }


        /* --- BOTÓN SIGUIENTE --- */
        .contenedor-boton {
            text-align: center;
            margin-top: 20px;
        }

        .btn-siguiente {
            display: inline-block;
            background-color: #2d6a4f;
            color: #fff;
            padding: 12px 28px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-siguiente:hover {
            background-color: #1b4332;
        }


        /* Pie de página */

        footer {
            background-color: #1b4332;
            color: #ffffff;
            text-align: center;
            padding: 25px 15px;
            margin-top: 50px;
            width: 100%;
        }

        footer h3 {
            font-size: 1.2rem;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        footer p {
            font-size: 0.85rem;
            color: #a3c9ab;
            margin-top: 6px;
        }

        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 15px 15px;
                gap: 12px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 8px;
            }

            nav ul li a {
                font-size: 0.9rem;
                padding: 6px 10px;
            }

            .banner {
                min-height: 260px;
            }

            .banner-contenido {
                padding: 15px 20px;
            }

            .banner-contenido h2 {
                font-size: 1.4rem;
            }

            .banner-contenido p {
                font-size: 0.95rem;
            }

            .contenido-principal {
                margin: 25px auto;
                padding: 0 18px;
            }

            .btn-siguiente {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- ENCABEZADO (HEADER) -->
    <header>
        <a href="{{ route('inicio') }}" class="logo">REFORESTA CBTA 35</a>
        <nav>
            <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('proyecto') }}">Proyecto</a></li>
                <li><a href="{{ route('especies') }}">Especies</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- BANNER -->
     
    <div class="banner">
        <div class="banner-contenido">
            <h2>Bienvenido a mi sitio web</h2>
            <p>Conoce y cuida las áreas verdes del CBTA 35</p>
        </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="contenido-principal">
        <h1 style="text-align: center; color: #1b4332;">REFORESTA CBTA 35</h1>
        <h3 style="text-align: center; color: #40916c; margin-bottom: 25px;">Siembra Un Futuro</h3>

        <h4 style="color: #2d6a4f; margin-bottom: 10px; font-size: 1.15rem;">¡Bienvenido a REFORESTA CBTA 35!</h4>

        <p>
            Un espacio digital creado por y para nuestra comunidad estudiantil con el objetivo
            de recuperar, cuidar y dar vida a las áreas verdes de nuestro plantel. Sabemos que
             cada árbol cuenta para refrescar nuestros patios, proteger el suelo y mejorar el 
             entorno donde estudiamos todos los días.
        </p>

        <p>
            En este sistio web podrás explorar las zonas estratégicas de reforestación dentro de 
            la escuela, conocer las especies que se plantan y consultar una guía práctica con los
             cuidados exactos de riego y sol que necesita cada ejemplar. 
             
        </p>

        <h4 class="subtitulo-seccion">¿Qué encontrarás en este sitio?</h4>
        <p>
            Esta pagina funciona como una guía visual y práctica para toda la comunidad escolar. 
            Al navegar por las secciones podrás consultar:
        </p>

        <p>
            <strong>1. Zonas del Plantel:</strong> Conoce las tres áreas clave de nuestra escuela 
            donde se concentra la reforestación: el Área Perimetral, los Jardines Centrales y la Zona Agropecuaria,
             junto con las características de cada terreno.
        </p>

        <p>
            <strong>2. Catálogo de Especies:</strong> Explora las fichas informativas de los árboles 
            que habitan en el CBTA 35, para aprender a identificarlos por su 
            nombre común, nombre científico y forma.
        </p>

        <p>
            <strong>3. Guía de Cuidados:</strong> Consulta los requerimientos esenciales de agua, luz solar y 
            tipo de suelo que necesita cada árbol para crecer sano y evitar que se seque durante las temporadas 
            de calor.
        </p>

        <h4 class="subtitulo-seccion">¿Por qué es importante reforestar nuestro plantel?</h4>
        <p>
            Cuidar nuestras áreas verdes transforma directamente el ambiente en el que estudiamos todos los días:
        </p>

        <p>
            <strong>Mejora el clima escolar:</strong> Los árboles generan sombra natural y ayudan a reducir
             la sensación de calor en patios, pasillos y zonas de descanso.
        </p>

        <p>
            <strong>Protege nuestros suelos:</strong> Sus raíces retienen la humedad y evitan el desgaste de la tierra, 
            algo fundamental para el entorno agrícola de nuestra institución.
        </p>

        <p>
            <strong>Fomenta la biodiversidad:</strong> Recuperar la vegetación atrae aves e insectos polinizadores que 
            mantienen el equilibrio natural dentro de la escuela.
        </p>
        <p>
            Te invitamos a recorrer el sitio, informarte y sumarte a esta iniciativa 
             para sembrar juntos un futuro más verde en el CBTA 35.
        </p>
        <a href="{{ route('proyecto') }}" class="btn-siguiente">Ir a la siguiente página</a>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer>
        <h3>REFORESTA CBTA 35 | Siembra Un Futuro</h3>
        <p>Desarrollado por Franco Díaz Jessica Aline | 3° "B" | Programación.</p>
        <p>Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario".</p>
    </footer>

</body>
</html>