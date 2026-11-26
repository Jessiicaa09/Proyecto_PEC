<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | REFORESTA CBTA 35</title>
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
            max-width: 1100px;
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

        .encabezado-seccion p {
            color: #4a6b53;
            font-size: 1.05rem;
            max-width: 750px;
            margin: 0 auto;
        }

        /* Cuadrícula de tarjetas informativas de contacto */
        .grid-contacto {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 35px;
        }

        .tarjeta-contacto {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 26px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #2d6a4f;
        }

        .tarjeta-contacto h2 {
            color: #1b4332;
            font-size: 1.3rem;
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e8f3ec;
        }

        .lista-datos {
            list-style: none;
            font-size: 0.96rem;
            color: #3d4f40;
        }

        .lista-datos li {
            margin-bottom: 12px;
        }

        .lista-datos li:last-child {
            margin-bottom: 0;
        }

        .lista-datos strong {
            color: #1b4332;
            display: block;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        /* Bloque de participación escolar */
        .bloque-participacion {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-left: 6px solid #1b4332;
        }

        .bloque-participacion h2 {
            color: #1b4332;
            font-size: 1.35rem;
            margin-bottom: 12px;
        }

        .bloque-participacion p {
            color: #3d4f40;
            font-size: 0.96rem;
            margin-bottom: 16px;
            text-align: justify;
        }

        .pasos-consulta {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 15px;
        }

        .paso-item {
            background-color: #eef5f0;
            padding: 16px;
            border-radius: 8px;
        }

        .paso-item span {
            display: inline-block;
            background-color: #1b4332;
            color: #ffffff;
            font-weight: 700;
            font-size: 0.82rem;
            padding: 3px 10px;
            border-radius: 15px;
            margin-bottom: 8px;
        }

        .paso-item h3 {
            color: #1b4332;
            font-size: 1rem;
            margin-bottom: 6px;
        }

        .paso-item p {
            font-size: 0.88rem;
            margin-bottom: 0;
            text-align: left;
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
        @media (max-width: 820px) {
            .grid-contacto {
                grid-template-columns: 1fr;
            }

            .pasos-consulta {
                grid-template-columns: 1fr;
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
        }

        .enlace-institucional {
    color: #2d6a4f;
    font-weight: 600;
    text-decoration: underline;
    word-break: break-all;
}

.enlace-institucional:hover {
    color: #1b4332;
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
                <li><a href="{{ url('/especies') }}">Especies</a></li>
                <li><a href="{{ url('/contacto') }}" class="activo">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="encabezado-seccion">
            <h1>CONTACTO E INFORMACIÓN INSTITUCIONAL</h1>
            <p>Directorio de referencia del plantel y datos académicos del proyecto para orientar a 
                alumnos y docentes interesados en las jornadas ambientales.</p>
        </section>

        <section class="grid-contacto">

            <!-- Tarjeta 1: Datos del Plantel -->
<article class="tarjeta-contacto">
    <h2>Sede Institucional</h2>
    <ul class="lista-datos">
        <li>
            <strong>Plantel Educativo</strong>
            Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario"
        </li>
        <li>
            <strong>Ubicación</strong>
            Carretera Federal México–Puebla Km. 22.5, Tlalpizáhuac, Ixtapaluca / 
            Valle de Chalco, Estado de México.
        </li>
        <li>
            <strong>Horario de Atención Escolar</strong>
            Lunes a Viernes de 7:00 a.m. a 3:00 p.m. (Turno Matutino)
        </li>
        <li>
            <strong>Área de Coordinación Ambiental</strong>
            Departamento de Vinculación y Prácticas Agropecuarias del CBTA 35
        </li>
        <li>
            <strong>Sitio Web Oficial del Plantel</strong>
            <a href="https://cbta35.edu.mx/" target="_blank" rel="noopener noreferrer" class="enlace-institucional">
                https://www.cbta35.edu.mx/
            </a>
        </li>
    </ul>
</article>

            <!-- Tarjeta 2: Responsables del Proyecto -->

            <article class="tarjeta-contacto">
                <h2>Créditos y Desarrollo del Proyecto</h2>
                <ul class="lista-datos">
                    <li>
                        <strong>Nombre del Proyecto</strong>
                        REFORESTA CBTA 35 | Siembra Un Futuro
                    </li>
                    <li>
                        <strong>Autora y Desarrolladora</strong>
                        Franco Diaz Jessica Aline
                    </li>
                    <li>
                        <strong>Especialidad, Grado y Grupo</strong>
                        Técnico en Programación — 3° "B"
                    </li>
                    <li>
                        <strong>Docente Asesor</strong>
                        Prof. Mariano Sánchez Reyes
                    </li>
                </ul>
            </article>
        </section>

        <!-- Bloque de Orientación para la Comunidad Estudiantil -->

        <section class="bloque-participacion">
            <h2>¿Cómo sumarse al cuidado de nuestras áreas verdes?</h2>
            <p>
                Este portal funciona como una guía de consulta abierta para toda la comunidad 
                estudiantil. Si deseas apoyar en el mantenimiento de los árboles del plantel, sigue 
                estas tres recomendaciones básicas dentro de la escuela:
            </p>
            <div class="pasos-consulta">
                <div class="paso-item">
                    <span>Paso 1</span>
                    <h3>Ubica la Zona</h3>
                    <p>Consulta el apartado <strong>Proyecto</strong> para identificar si el 
                    área corresponde al Área Perimetral, Jardines Centrales o Zona Agropecuaria.</p>
                </div>
                <div class="paso-item">
                    <span>Paso 2</span>
                    <h3>Revisa la Especie</h3>
                    <p>Verifica en <strong>Especies</strong> la frecuencia de riego, luz solar y
                     riesgos preventivos del árbol asignado.</p>
                </div>
                <div class="paso-item">
                    <span>Paso 3</span>
                    <h3>Coordina en el Plantel</h3>
                    <p>Acércate con tu docente de área o al departamento agropecuario escolar 
                        para organizar las brigadas de riego y limpieza.</p>
                </div>
            </div>
        </section>

<div class="contenedor-boton">
            <a href="{{ route('inicio') }}" class="btn-siguiente">Ir a la página principal</a>
        </div>

    </main>

    <footer>
        <p><strong>REFORESTA CBTA 35 | Siembra Un Futuro</strong></p>
        <p>Desarrollado por estudiantes del CBTA 35 - Programación</p>
        <p>Franco Diaz Jessica Aline | 3° "B" | Centro de Bachillerato Tecnológico 
            Agropecuario No. 35 "Leona Vicario"</p>
    </footer>

</body>
</html>