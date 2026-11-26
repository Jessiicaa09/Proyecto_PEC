<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especies y Riesgos | REFORESTA CBTA 35</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f4;
            color: #2c3e2e;
            line-height: 1.6;
        }

        /* Barra de navegación superior */
        header {
            background-color: #1b4332;
            color: #ffffff;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .logo {
            font-size: 1.3rem;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            padding-bottom: 4px;
        }

        nav a.activo {
            border-bottom: 2px solid #95d5b2;
            font-weight: 700;
        }

        /* Contenedor principal */
        main {
            max-width: 1150px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .encabezado-seccion {
            text-align: center;
            margin-bottom: 35px;
        }

        .encabezado-seccion h1 {
            color: #1b4332;
            font-size: 2.2rem;
            margin-bottom: 8px;
        }

        .encabezado-seccion h2 {
            color: #1b4332;
            font-size: 1.85rem;
            margin-bottom: 8px;
        }

        .encabezado-seccion p {
            color: #4a6b53;
            font-size: 1.05rem;
            max-width: 780px;
            margin: 0 auto;
        }

        /* Cuadrícula de tarjetas técnicas de especies */
        .grid-especies {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .tarjeta-especie {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #2d6a4f;
            display: flex;
            flex-direction: column;
        }

        .tarjeta-especie img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .contenido-especie {
            padding: 22px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .nombre-comun {
            color: #1b4332;
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .nombre-cientifico {
            color: #52796f;
            font-style: italic;
            font-size: 0.95rem;
            margin-bottom: 14px;
            display: block;
        }

        .descripcion-especie {
            font-size: 0.94rem;
            color: #3d4f40;
            margin-bottom: 18px;
            text-align: justify;
        }

        .ficha-cuidados {
            background-color: #eef5f0;
            border-radius: 8px;
            padding: 14px;
            margin-top: auto;
        }

        .ficha-cuidados h3 {
            color: #1b4332;
            font-size: 0.95rem;
            margin-bottom: 8px;
            border-bottom: 1px solid #cce3d4;
            padding-bottom: 4px;
        }

        .lista-cuidados {
            list-style: none;
            font-size: 0.9rem;
            color: #2c3e2e;
        }

        .lista-cuidados li {
            margin-bottom: 6px;
        }

        .lista-cuidados li:last-child {
            margin-bottom: 0;
        }

        .etiqueta-zona {
            margin-top: 14px;
            background-color: #d8f3dc;
            color: #1b4332;
            font-weight: 600;
            font-size: 0.88rem;
            padding: 8px 12px;
            border-radius: 6px;
            text-align: center;
        }

        /* Separador visual entre bloques */
        .separador {
            border: none;
            border-top: 2px solid #d8e5dc;
            margin: 45px 0;
        }

        /* Cuadrícula de 6 tarjetas de riesgos en el CBTA 35 */
        .grid-riesgos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 40px;
        }

        .tarjeta-riesgo {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
            border-top: 5px solid #b5651d;
            display: flex;
            flex-direction: column;
        }

        .encabezado-riesgo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            gap: 10px;
        }

        .numero-riesgo {
            font-size: 0.82rem;
            font-weight: 700;
            color: #8c4a11;
            background-color: #faedcd;
            padding: 4px 10px;
            border-radius: 20px;
        }

        .nivel-riesgo {
            font-size: 0.8rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
        }

        .riesgo-alto {
            background-color: #fde2e4;
            color: #9b2226;
        }

        .riesgo-medio {
            background-color: #fff3b0;
            color: #7f5539;
        }

        .tarjeta-riesgo h3 {
            color: #1b4332;
            font-size: 1.15rem;
            margin-bottom: 10px;
        }

        .tarjeta-riesgo p {
            font-size: 0.92rem;
            color: #3d4f40;
            text-align: justify;
            margin-bottom: 16px;
        }

        .prevencion-box {
            margin-top: auto;
            background-color: #f1f8f4;
            border-left: 4px solid #2d6a4f;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 0.88rem;
            color: #1b4332;
        }

        /* Cuadro resumen de recomendación general */
        .nota-plantacion {
            background-color: #ffffff;
            border-left: 6px solid #1b4332;
            border-radius: 10px;
            padding: 22px 26px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
        }

        .nota-plantacion h2 {
            color: #1b4332;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .nota-plantacion p {
            font-size: 0.95rem;
            color: #3d4f40;
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


        /* Pie de página institucional  */
        footer {
            background-color: #1b4332;
            color: #ffffff;
            text-align: center;
            padding: 25px 15px;
            margin-top: 50px;
            font-size: 0.9rem;
        }

        footer p {
            margin: 4px 0;
        }

        /* Adaptabilidad responsiva (Tablets y Celulares) */
        @media (max-width: 900px) {
            .grid-especies,
            .grid-riesgos {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 650px) {
            header {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }

            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .encabezado-seccion h1 {
                font-size: 1.75rem;
            }

            .encabezado-seccion h2 {
                font-size: 1.5rem;
            }

            .grid-especies,
            .grid-riesgos {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">REFORESTA CBTA 35</div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/proyecto') }}">Proyecto</a></li>
                <li><a href="{{ url('/especies') }}" class="activo">Especies</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- BLOQUE 1: CATÁLOGO DE 3 ESPECIES -->
        <section class="encabezado-seccion">
            <h1>CATÁLOGO DE ESPECIES ARBÓREAS</h1>
            <p>Guía técnica de consulta sobre los árboles seleccionados para el plantel y los 
                cuidados esenciales para asegurar su supervivencia y desarrollo.</p>
        </section>

        <section class="grid-especies">

            <!-- Tarjeta 1: Pino Moctezuma -->

            <article class="tarjeta-especie">
                <img src="{{ asset('Moctezuma.png') }}" alt="Árbol Pino Moctezuma">
                <div class="contenido-especie">
                    <h2 class="nombre-comun">Pino Moctezuma</h2>
                    <span class="nombre-cientifico">Pinus montezumae</span>
                    <p class="descripcion-especie">
                        Conífera nativa de gran resistencia y copa densa. Su follaje perenne captura 
                        partículas de polvo y actúa como barrera natural contra ráfagas de viento y 
                        ruido exterior.
                    </p>
                    <div class="ficha-cuidados">
                        <h3>Guía Rápida de Cuidados</h3>
                        <ul class="lista-cuidados">
                            <li><strong>Riego:</strong> Moderado; 2 veces por semana durante su primer año.</li>
                            <li><strong>Luz solar:</strong> Sol directo (mínimo 6 horas diarias).</li>
                            <li><strong>Tipo de suelo:</strong> Bien drenado, profundo y ligeramente ácido.</li>
                        </ul>
                    </div>
                    <div class="etiqueta-zona">Zona asignada: Área Perimetral</div>
                </div>
            </article>

            <!-- Tarjeta 2: Jacaranda -->

            <article class="tarjeta-especie">
                <img src="{{ asset('Jacaranda.png') }}" alt="Árbol Jacaranda">
                <div class="contenido-especie">
                    <h2 class="nombre-comun">Jacaranda</h2>
                    <span class="nombre-cientifico">Jacaranda mimosifolia</span>
                    <p class="descripcion-especie">
                        Árbol ornamental de crecimiento medio y copa extendida. Proporciona sombra fresca
                         en áreas de descanso estudiantil y embellece los patios con su floración violeta
                          en primavera.
                    </p>
                    <div class="ficha-cuidados">
                        <h3>Guía Rápida de Cuidados</h3>
                        <ul class="lista-cuidados">
                            <li><strong>Riego:</strong> Frecuente en etapa joven; tolera sequía al madurar.</li>
                            <li><strong>Luz solar:</strong> Pleno sol para favorecer su floración.</li>
                            <li><strong>Tipo de suelo:</strong> Franco o arenoso, con buen drenaje sin encharcamientos.</li>
                        </ul>
                    </div>
                    <div class="etiqueta-zona">Zona asignada: Jardines Centrales</div>
                </div>
            </article>

            <!-- Tarjeta 3: Encino Blanco -->

            <article class="tarjeta-especie">
                <img src="{{ asset('Encino_blanco.png') }}" alt="Árbol Encino Blanco">
                <div class="contenido-especie">
                    <h2 class="nombre-comun">Encino Blanco</h2>
                    <span class="nombre-cientifico">Quercus rugosa</span>
                    <p class="descripcion-especie">
                        Especie forestal longeva de raíces profundas que estabilizan el terreno. 
                        Ayuda a conservar la humedad del subsuelo y protege las parcelas cercanas
                         contra la erosión hídrica y eólica.
                    </p>
                    <div class="ficha-cuidados">
                        <h3>Guía Rápida de Cuidados</h3>
                        <ul class="lista-cuidados">
                            <li><strong>Riego:</strong> Bajo a moderado; riegos profundos cada 5 a 7 días al inicio.</li>
                            <li><strong>Luz solar:</strong> Sol directo o semisombra en sus primeros meses.</li>
                            <li><strong>Tipo de suelo:</strong> Suelos profundos, ricos en materia orgánica y hojarasca.</li>
                        </ul>
                    </div>
                    <div class="etiqueta-zona">Zona asignada: Zona Agropecuaria</div>
                </div>
            </article>
        </section>

        <hr class="separador">

        <!-- BLOQUE 2: 6 TARJETAS DE RIESGOS EN EL CBTA 35 -->
        <section class="encabezado-seccion">
            <h2>RIESGOS AL PLANTAR EN EL CBTA 35</h2>
            <p>Principales factores ambientales y escolares detectados en nuestro plantel que pueden afectar el crecimiento de los árboles recién plantados y cómo prevenirlos.</p>
        </section>

        <section class="grid-riesgos">
            <!-- Riesgo 1 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #1</span>
                    <span class="nivel-riesgo riesgo-alto">Impacto Alto</span>
                </div>
                <h3>Estrés Hídrico en Temporada Seca</h3>
                <p>
                    Durante los meses de estiaje y los periodos vacacionales del plantel, la falta de lluvias y la suspensión de riegos constantes pueden deshidratar los ejemplares jóvenes.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Formar cajetes profundos para captar agua y colocar acolchado (hojarasca o pasto seco) en la base del tronco.
                </div>
            </article>

            <!-- Riesgo 2 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #2</span>
                    <span class="nivel-riesgo riesgo-alto">Impacto Alto</span>
                </div>
                <h3>Pisoteo y Tránsito Estudiantil</h3>
                <p>
                    En los jardines centrales y pasillos cercanos a las aulas, el paso constante de alumnos o actividades deportivas puede quebrar tallos delgados y compactar la tierra.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Instalar tutores de madera y cercos protectores perimetrales alrededor de cada árbol recién sembrado.
                </div>
            </article>

            <!-- Riesgo 3 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #3</span>
                    <span class="nivel-riesgo riesgo-medio">Impacto Medio</span>
                </div>
                <h3>Suelo Compactado y Pobre en Nutrientes</h3>
                <p>
                    Algunas áreas perimetrales presentan tierra endurecida por el paso de maquinaria o vehículos, lo que impide que las raíces nuevas penetren y absorban agua.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Excavar cepas amplias (mínimo 40×40 cm) y mezclar la tierra con composta producida en el plantel.
                </div>
            </article>

            <!-- Riesgo 4 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #4</span>
                    <span class="nivel-riesgo riesgo-medio">Impacto Medio</span>
                </div>
                <h3>Plagas Agrícolas y Hormiga Arriera</h3>
                <p>
                    Por la vocación agropecuaria de la escuela y la cercanía con parcelas de cultivo, insectos defoliadores como la hormiga arriera o el pulgón pueden atacar brotes tiernos.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Realizar revisiones semanales del follaje y aplicar barreras físicas o control orgánico en el tronco.
                </div>
            </article>

            <!-- Riesgo 5 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #5</span>
                    <span class="nivel-riesgo riesgo-medio">Impacto Medio</span>
                </div>
                <h3>Daños por Podas o Chapeo Mecánico</h3>
                <p>
                    Al limpiar el pasto y la maleza de los patios con desbrozadora, los árboles pequeños sin señalización corren el riesgo de sufrir cortes accidentales en su corteza.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Mantener el cajete libre de maleza de forma manual y colocar señalización visible en cada ejemplar.
                </div>
            </article>

            <!-- Riesgo 6 -->
            <article class="tarjeta-riesgo">
                <div class="encabezado-riesgo">
                    <span class="numero-riesgo">Riesgo #6</span>
                    <span class="nivel-riesgo riesgo-alto">Impacto Alto</span>
                </div>
                <h3>Proximidad a Infraestructura y Cableado</h3>
                <p>
                    Plantar árboles de gran altura o raíces agresivas muy cerca de bardas, invernaderos, banquetas o líneas eléctricas puede provocar levantamiento de piso o fallas a futuro.
                </p>
                <div class="prevencion-box">
                    <strong>Prevención:</strong> Respetar una distancia mínima de 3 a 4 metros respecto a bardas, aulas, invernaderos y postes.
                </div>
            </article>
        </section>

        <section class="nota-plantacion">
            <h2>Recomendación General de Mantenimiento en el Plantel</h2>
            <p>
                Para evitar la evaporación rápida del agua, los riegos deben realizarse preferentemente antes de las 9:00 a.m. o después de las 5:00 p.m., manteniendo libre de maleza el cajete alrededor del tronco durante los primeros doce meses posteriores a la plantación.
            </p>
        </section>

    <div class="contenedor-boton">
            <a href="{{ route('contacto') }}" class="btn-siguiente">Ir a la siguiente página</a>
        </div>



    </main>

    <footer>
        <p><strong>REFORESTA CBTA 35 | Siembra Un Futuro</strong></p>
        <p>Desarrollado por estudiantes del CBTA 35 - Programación</p>
        <p>Franco Diaz Jessica Aline | 3° "B" | Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario"</p>
    </footer>

</body>
</html>