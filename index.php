<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular parámetros del movimiento uniformemente acelerado</h2>
            <p>Descripción:</p>
            <p>
                Un tren del metro arranca con una aceleración constante de 8 cm/s².
                a) ¿Cuál es su velocidad después de 30 segundos?<br>
                b) ¿Qué espacio recorrió en ese tiempo?<br>
                c) ¿Cuánto tiempo tarda en recorrer 500 m?
            </p>
        </section>
        <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/tren.png" alt="Esquema del problema">
            </center>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <ul>
                <li><strong>Velocidad final:</strong> \( v = v_0 + a \cdot t \)</li>
                <li><strong>Espacio recorrido:</strong> \( x = v_0 \cdot t + \frac{1}{2} \cdot a \cdot t^2 \)</li>
                <li><strong>Tiempo total:</strong> \( t = \sqrt{\frac{2 \cdot x_f}{a}} \)</li>
            </ul>
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <ul>
                <li>Aceleración \( a \): 8 cm/s² = 0.08 m/s²</li>
                <li>Tiempo \( t \): 30 s</li>
                <li>Velocidad inicial \( v_0 \): 0 m/s</li>
                <li>Espacio total \( x_f \): 500 m</li>
            </ul>
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <form method="post" action="">
                <button type="submit" name="calcular">Presiona para calcular</button>
            </form>
        </section>
        <section class="resultado">
            <h2>Resultado:</h2>
            <?php
            if (isset($_POST['calcular'])) {
                // Datos iniciales
                $aceleracion = 0.08; // Aceleración en m/s²
                $tiempo = 30;        // Tiempo en segundos
                $espacioTotal = 500; // Espacio total en metros

                // Cálculos
                $velocidadFinal = $aceleracion * $tiempo; // v = a * t
                $espacioRecorrido = 0.5 * $aceleracion * pow($tiempo, 2); // x = 0.5 * a * t^2
                $tiempoTotal = sqrt((2 * $espacioTotal) / $aceleracion); // t = sqrt(2x / a)

                // Resultados
                echo "<p><strong>a)</strong> Velocidad después de 30 segundos: " . number_format($velocidadFinal, 2) . " m/s</p>";
                echo "<p><strong>b)</strong> Espacio recorrido en 30 segundos: " . number_format($espacioRecorrido, 2) . " m</p>";
                echo "<p><strong>c)</strong> Tiempo para recorrer 500 m: " . number_format($tiempoTotal, 2) . " s</p>";
            }
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>
