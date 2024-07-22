<html>
 <head>

 <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
        }

        p {
            text-align: center;
        }

        label {
            display: block;
            text-align: center;
        }

        input {
            margin-bottom: 10px; 
        }
    </style>

  <title>VALE DE SALIDA Y AUSENTISMO </title>
 </head>
 <body>

 <?php 

    include '0. config.php';

    echo '<p>VALE DE SALIDA Y AUSENTISMO</p>'; 

    $message = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $data = isset($_POST['data']) ? $_POST['data'] : '';
    
        // Procesar datos (por ejemplo, limpiar datos y hacer algo con ellos)
        $data = htmlspecialchars($data);
    
        // Crear un mensaje de respuesta
        $message = "Datos recibidos: " . $data;
    }

 ?>

<form>

<br>
<br>
<br>
<br>
        <label for="user">USUARIO:</label>
        <input type="text" id="user" name="user" required>
<br>
<br>
        <label for="pass">CONTRASEÑA:</label>
        <input type="password" id="pass" name="pass" required>
<br>
        <span class="show-password" onclick="togglePasswordVisibility()">Mostrar contraseña</span><br><br>
 <br>
 <br>
        <button type="submit">ENTRAR</button>
    </form>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pass");
            var showPasswordText = document.querySelector(".show-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                showPasswordText.textContent = "Ocultar contraseña";
            } else {
                passwordField.type = "password";
                showPasswordText.textContent = "Mostrar contraseña";
            }
        }
    </script>

<?php 

    if (isset($_POST['user']) && isset($_POST['pass'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $user = $conn->real_escape_string($user);
    $pass = $conn->real_escape_string($pass);

    $sql = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario encontrado, iniciar sesión
        session_start();
        $_SESSION['user'] = $user;
        // Redireccionar a la página de inicio
        header("Location: 2. inicio.php");
    } else {
        // Usuario no encontrado
        echo "Nombre de usuario o contraseña incorrectos.";
    }
    
    $conn->close();

    }

 ?>

 </body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALE DE SALIDA Y AUSENTISMO</title>
    <style>
        /* Estilos globales */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .logo {
            position: absolute;
            top: 20px; /* Ajusta la distancia desde la parte superior */
            left: 20px; /* Ajusta la distancia desde la izquierda */
            width: 100px; /* Ajusta el tamaño de la imagen según tu diseño */
            height: auto;
        }

        /* Estilos para los elementos del formulario */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Ajusta el ancho del formulario según tu diseño */
        }

        p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .show-password {
            font-size: 12px;
            cursor: pointer;
            color: #007bff;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fmx.linkedin.com%2Fcompany%2Fgpamex&psig=AOvVaw18TJ4YmuK_km1JWC3XWmbj&ust=1721748265493000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCLiZ8Z_6uocDFQAAAAAdAAAAABAI" alt="Logo" class="logo">
    <p>VALE DE SALIDA Y AUSENTISMO</p>

    <form method="post">
        <label for="user">USUARIO:</label>
        <input type="text" id="user" name="user" required>

        <label for="pass">CONTRASEÑA:</label>
        <input type="password" id="pass" name="pass" required>
        <span class="show-password" onclick="togglePasswordVisibility()">Mostrar contraseña</span><br><br>

        <button type="submit">ENTRAR</button>
    </form>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pass");
            var showPasswordText = document.querySelector(".show-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                showPasswordText.textContent = "Ocultar contraseña";
            } else {
                passwordField.type = "password";
                showPasswordText.textContent = "Mostrar contraseña";
            }
        }
    </script>

    <?php
     if (isset($_POST['user']) && isset($_POST['pass'])) {

        $user = $_POST['user'];
        $pass = $_POST['pass'];
    
        $user = $conn->real_escape_string($user);
        $pass = $conn->real_escape_string($pass);
    
        $sql = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Usuario encontrado, iniciar sesión
            session_start();
            $_SESSION['user'] = $user;
            // Redireccionar a la página de inicio
            header("Location: 2. inicio.php");
        } else {
            // Usuario no encontrado
            echo "Nombre de usuario o contraseña incorrectos.";
        }
        
        $conn->close();
    
        }
    ?>

</body>
</html>
