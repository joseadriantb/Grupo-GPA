<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERMISO</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('background-image-url.jpg'); /* URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: white;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
            height: 80px;
            background: url('https://th.bing.com/th/id/OIP.LROSfOdVYCzMHGDhVe92rAHaFr?rs=1&pid=ImgDetMain') no-repeat center center; /* URL del logo */
            background-size: cover;
        }

        p {
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="datetime-local"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="button"] {
            background-color: #E74C3C;
            color: white;
            padding: 10px 0;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="button"]:hover {
            background-color: #0056b3;
        }

        .show-password {
            font-size: 12px;
            cursor: pointer;
            color: #007bff;
            display: block;
            margin-bottom: 20px;
        }

        .additional-options {
            margin-top: 20px;
            font-size: 14px;
        }

        .additional-options a {
            color: #007bff;
            text-decoration: none;
        }

        .additional-options a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo"></div>
        <?php 
        include '0. config.php';
        echo '<p>PERMISO</p>'; 
        ?>
        <form>
            <label for="solicitante">SOLICITANTE:</label>
            <input type="text" id="solicitante" name="solicitante" readonly>

            <label for="empresa">EMPRESA:</label>
            <input type="text" id="empresa" name="empresa" readonly>

            <label for="fecha">FECHA:</label>
            <input type="date" id="fecha" name="fecha" readonly>

            <label for="tipo">TIPO DE PERMISO:</label>
            <select name="tipo" id="tipo" onchange="ocultarEtiqueta()" required>
                <option value="gpa">Trabajo GPA</option>
                <option value="singoce">Sin goce de sueldo</option>
                <option value="imss">IMSS</option>
                <option value="reposicion">Reposición de tiempo</option>
            </select>

            <label for="concepto">CONCEPTO:</label>
            <input type="text" id="concepto" name="concepto" required>

            <label for="salidatent">FECHA Y HORA TENTATIVA DE SALIDA:</label>
            <input type="datetime-local" id="salidatent" name="salidatent" required>

            <label for="regresotent">FECHA Y HORA TENTATIVA DE REGRESO:</label>
            <input type="datetime-local" id="regresotent" name="regresotent" required>

            <label for="treposicion" id="treposicion">¿CUÁNDO SE REPONE EL TIEMPO?:</label>
            <input type="text" id="creposicion" name="creposicion" required>

            <button type="button">GUARDAR</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener la fecha actual en formato "YYYY-MM-DD"
            var fechaActual = new Date().toISOString().split('T')[0];

            // Asignar la fecha al campo de entrada
            document.getElementById('fecha').value = fechaActual;
        });

        function ocultarEtiqueta() {
            var comboBox = document.getElementById('tipo');
            var etiquetaOculta = document.getElementById('treposicion');
            var cajaTextoOculta = document.getElementById('creposicion');

            if (comboBox.value == 'reposicion') {
                etiquetaOculta.style.display = 'block';
                cajaTextoOculta.style.display = 'block';
            } else {
                etiquetaOculta.style.display = 'none';
                cajaTextoOculta.style.display = 'none';
            }
        }

        function generarQR() {
            // Agrega aquí la lógica para generar el código QR
            console.log("Generando código QR...");
        }
    </script>
</body>
</html>