<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALE DE SALIDA Y AUSENTISMO</title>
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
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #E74C3C;
            color: white;
            padding: 10px 0;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .show-password {
            font-size: 12px;
            cursor: pointer;
            color: #E74C3C;
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
        <p>Bienvenido de Nuevo</p>
        <form method="post">
            <label for="user">Usuario *</label>
            <input type="text" id="user" name="user" required>

            <label for="pass">Contraseña *</label>
            <input type="password" id="pass" name="pass" required>
            <span class="show-password" onclick="togglePasswordVisibility()">Mostrar contraseña</span><br>

            <button type="submit">Acceso</button>
        </form>
        
    </div>

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

    
</body>
</html>