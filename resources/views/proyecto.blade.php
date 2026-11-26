<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Proyecto - REFORESTA CBTA 35</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f7f4;
            color: #222;
        }

        /* --- ENCABEZADO Y MENÚ  --- */

        header {
            background-color: #1b4332;
            color: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
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

        /* --- CONTENEDOR GENERAL --- */
        .contenedor {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .titulo-principal {
            text-align: center;
            color: #1b4332;
            font-size: 2.2rem;
            margin-bottom: 8px;
        }

        .subtitulo-principal {
            text-align: center;
            color: #40916c;
            font-size: 1.15rem;
            margin-bottom: 40px;
        }

        /* --- CUADRO INFORMATIVO Y LA IMAGEN AL LADO --- */
        .bloque-concientizacion {
            display: flex;
            align-items: center;
            gap: 35px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            border-left: 6px solid #2d6a4f;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            margin-bottom: 50px;
        }

        .texto-concientizacion {
            flex: 1.2;
        }

        .texto-concientizacion h2 {
            color: #1b4332;
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .texto-concientizacion p {
            text-align: justify;
            line-height: 1.6;
            margin-bottom: 14px;
            font-size: 0.98rem;
        }

        .lista-problemas {
            margin-left: 20px;
            line-height: 1.6;
            font-size: 0.95rem;
            color: #333;
        }

        .lista-problemas li {
            margin-bottom: 8px;
        }

        .imagen-concientizacion {
            flex: 1;
            text-align: center;
        }

        .imagen-concientizacion img {
            width: 100%;
            max-height: 340px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* --- WIREFRAME: MATRIZ DE 3 COLUMNAS (ZONAS) --- */
        .titulo-zonas {
            text-align: center;
            color: #1b4332;
            font-size: 1.7rem;
            margin-bottom: 10px;
        }

        .descripcion-zonas {
            text-align: center;
            color: #555;
            max-width: 750px;
            margin: 0 auto 30px auto;
            line-height: 1.5;
        }

        .matriz-zonas {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columnas exactas del wireframe */
            gap: 25px;
            margin-bottom: 40px;
        }

        .tarjeta-zona {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            border-top: 5px solid #1b4332;
        }

        .tarjeta-zona img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background-color: #d8e8dc;
        }

        .info-zona {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .info-zona h3 {
            color: #1b4332;
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .info-zona p {
            text-align: justify;
            font-size: 0.94rem;
            line-height: 1.55;
            color: #333;
            margin-bottom: 15px;
        }

        .etiqueta-especie {
            background-color: #e8f3ea;
            color: #1b4332;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 0.88rem;
            font-weight: bold;
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

        /* --- PIE DE PÁGINA  --- */
        footer {
            background-color: #1b4d2e;
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

        /* --- RESPONSIVO PARA TABLETS Y CELULARES --- */
        @media (max-width: 900px) {
            .matriz-zonas {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 15px;
                gap: 12px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 8px;
            }

            .bloque-concientizacion {
                flex-direction: column; 
                padding: 20px;
            }

            .titulo-principal {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>

    <!-- ENCABEZADO  -->
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

    <main class="contenedor">
        <!-- ENCABEZADO DESTACADO  -->
        <h1 class="titulo-principal">REFORESTACIÓN CBTA 35</h1>
        <p class="subtitulo-principal">Diagnóstico ambiental y distribución estratégica 
            de áreas verdes en el plantel</p>

        <!-- CUADRO INFORMATIVO + IMAGEN AL LADO -->
        <section class="bloque-concientizacion">
            <div class="texto-concientizacion">
                <h2>¿Por qué es urgente reforestar nuestra escuela?</h2>
                <p>
                    A pesar de la vocación agropecuaria, el uso constante de las instalaciones
                     y las variaciones climáticas han provocado una disminución de árboles en 
                     puntos clave del CBTA 35. Este proyecto nace para combatir directamente 
                     tres problemáticas detectadas en el plantel:
                </p>
                <ul class="lista-problemas">
                    <li><strong>Efecto de isla de calor:</strong> La falta de sombra eleva la 
                    temperatura en salones, patios y pasillos de tránsito.</li>
                    <li><strong>Erosión del terreno:</strong> El suelo sin cobertura vegetal pierde
                     humedad y nutrientes, afectando las áreas agrícolas.</li>
                    <li><strong>Falta de guías botánicas:</strong> Sin información clara sobre riego 
                    y luz solar, los árboles recién plantados corren el riesgo de secarse.</li>
                </ul>
            </div>
            <div class="imagen-concientizacion">
                
                <img src="{{ asset('imagenproyecto.png') }}" alt="Áreas verdes y reforestación en el CBTA 35">

            </div>
        </section>

        <!-- MATRIZ DE 3 COLUMNAS DE ZONAS (HU-02 Y WIREFRAME) -->
        <h2 class="titulo-zonas">Zonas Estratégicas del Plantel</h2>
        <p class="descripcion-zonas">
            El terreno escolar se divide en tres sectores prioritarios para maximizar la sombra, proteger los cultivos
             y mejorar el entorno estudiantil:
        </p>

        <section class="matriz-zonas">
            <!-- COLUMNA 1: ÁREA PERIMETRAL -->
            <article class="tarjeta-zona">
                
                <img src="/area.png" alt="Área Perimetral CBTA 35">
                <div class="info-zona">
                    <div>
                        <h3>1. Área Perimetral</h3>
                        <p>
                            Comprende los linderos y franjas exteriores del plantel, 
                            donde se registra mayor desgaste del suelo por el viento. 
                            La reforestación aquí crea una barrera natural contra el polvo, 
                            reduce el ruido exterior y delimita nuestras instalaciones con 
                            sombra continua.
                        </p>
                    </div>
                    <div class="etiqueta-especie">Especie ideal: Pino Moctezuma</div>
                </div>
            </article>

            <!-- COLUMNA 2: JARDINES CENTRALES -->
            <article class="tarjeta-zona">
                
                <img src="/jardines.png" alt="Jardines Centrales CBTA 35">
                <div class="info-zona">
                    <div>
                        <h3>2. Jardines Centrales</h3>
                        <p>
                            Incluye las áreas verdes cercanas a aulas, andadores y puntos de reunión
                             estudiantil. El objetivo en este sector es generar espacios frescos 
                             de descanso, disminuir el calor en los edificios y mejorar la imagen 
                             ecológica de la escuela.
                        </p>
                    </div>
                    <div class="etiqueta-especie">Especie ideal: Jacaranda</div>
                </div>
            </article>

            <!-- COLUMNA 3: ZONA AGROPECUARIA -->
            <article class="tarjeta-zona">
                
                <img src="/zonaagropecuaria.png" alt="Zona Agropecuaria CBTA 35">
                <div class="info-zona">
                    <div>
                        <h3>3. Zona Agropecuaria</h3>
                        <p>
                            Abarca los terrenos destinados a prácticas de campo y parcelas de cultivo. 
                            Plantar árboles en sus bordes ayuda a retener la humedad de la tierra, frena la erosión y 
                            protege los sembradíos contra corrientes de aire fuertes.
                        </p>
                    </div>
                    <div class="etiqueta-especie">Especie ideal: Encino Blanco</div>
                </div>
            </article>
        </section>

        <div class="contenedor-boton">
            <a href="{{ route('especies') }}" class="btn-siguiente">Ir a la siguiente página</a>
        </div>
    </main>

    <!-- PIE DE PÁGINA (HU-05) -->
    <footer>
        <h3>REFORESTA CBTA 35 | Siembra Un Futuro</h3>
        <p>Desarrollado por estudiantes del CBTA 35 - Programación</p>
        <p>Franco Diaz Jessica Aline | 3° "B" | Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario"</p>
    </footer>

</body>
</html>