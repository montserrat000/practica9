<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiTIM Grupo XB</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <style>
        /* Estilos rápidos para modernizar el diseño */
        body {
            font-family: 'Comfortaa', sans-serif;
            background: linear-gradient(to bottom, #e3f2fd, #90caf9);
            margin: 0;
            padding: 0;
            color: #333;
        }
        .wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            color: #1565c0;
        }
        h2 {
            color: #1e88e5;
        }
        p, ul, li {
            line-height: 1.6;
        }
        .esquemaProblema img {
            max-width: 100%;
            height: auto;
            border: 2px solid #90caf9;
            border-radius: 5px;
        }
        button {
            background-color: #1e88e5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #1565c0;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #1e88e5;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <section class="wrapper">
        <!-- Encabezado -->
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>

        <!-- Contenedor principal -->
        <section id="contenedor">
            <!-- Descripción del problema -->
            <section class="problema">
                <h2>Problema: Calcular parámetros del movimiento uniformemente acelerado</h2>
                <p>Descripción:</p>
                <p>
                    Un tren del metro arranca con una aceleración constante de 8 cm/s².
                    <br>a) ¿Cuál es su velocidad después de 30 segundos?
                    <br>b) ¿Qué espacio recorrió en ese tiempo?
                    <br>c) ¿Cuánto tiempo tarda en recorrer 500 m?
                </p>
            </section>

            <!-- Esquema visual -->
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/tren.png" alt="Esquema del problema del tren">
                </center>
            </section>

            <!-- Formulario para el cálculo -->
            <form method="POST" action="index.php">
                <section class="datos">
                    <h2>Datos:</h2>
                    <ul>
                        <li>Aceleración a: <strong>8 cm/s² = 0.08 m/s²</strong></li>
                        <li>Tiempo t: <strong>30 s</strong></li>
                        <li>Velocidad inicial v₀: <strong>0 m/s</strong></li>
                        <li>Espacio total xₓ: <strong>500 m</strong></li>
                    </ul>
                </section>
                <section class="calculos">
                    <h2>Solución</h2>
                    <button type="submit">Calcular</button>
                </section>
            </form>

            <!-- Resultados -->
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <section class="resultado">
                    <h2>Resultado:</h2>
                    <div id="resultadoA">
                        <?php
                            // Datos iniciales
                            $aceleracion = 0.08; // Aceleración en m/s²
                            $tiempo = 30;       // Tiempo en segundos
                            $espacioTotal = 500; // Espacio total en metros

                            // Cálculos
                            $velocidadFinal = $aceleracion * $tiempo; // v = a * t
                            $espacioRecorrido = 0.5 * $aceleracion * pow($tiempo, 2); // x = 0.5 * a * t²
                            $tiempoTotal = sqrt((2 * $espacioTotal) / $aceleracion); // t = sqrt(2x / a)

                            // Mostrar resultados
                            echo "<p><strong>a)</strong> Velocidad después de 30 segundos: " . number_format($velocidadFinal, 2) . " m/s</p>";
                            echo "<p><strong>b)</strong> Espacio recorrido en 30 segundos: " . number_format($espacioRecorrido, 2) . " m</p>";
                            echo "<p><strong>c)</strong> Tiempo para recorrer 500 m: " . number_format($tiempoTotal, 2) . " s</p>";
                        ?>
                    </div>
                </section>
            <?php endif; ?>
        </section>

        <!-- Pie de página -->
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>
