<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Proyecto</title>
    <link rel="stylesheet" href="global.css">
    <style>
        /* Estilos específicos del login */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .login-box {
            width: 350px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        .login-box input[type="text"]:focus,
        .login-box input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 6px rgba(0,123,255,0.5);
        }

        .login-box input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-box input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .login-links {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-links a {
            margin: 0 10px;
            color: #007BFF;
        }

        .login-links a:hover {
            color: #a3a2a2cc;
        }
    </style>
</head>
<body>

    <header>
        <div class="logoN"><img src="img/logoN.png" alt="Logo N" width="60"></div>
        <div class="titulos">
            <h1>Bienvenido a Sleyenda</h1>
            <h2>Accede a tu cuenta</h2>
        </div>
        <div class="logoP"><img src="img/logoP.png" alt="Logo P" width="60"></div>
    </header>

    <main class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="procesos/logoproc.php" method="POST">
                <input type="text" name="user" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Ingresar">
            </form>

            <div class="login-links">
                <a href="registro.php">Crear cuenta</a> | 
                <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2025 Sleyenda - Todos los derechos reservados</p>
    </footer>

</body>
</html>
