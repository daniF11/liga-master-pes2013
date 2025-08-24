<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
session_start();

// Conexión
$con = new mysqli("localhost", "root", "", "bd_sleyenda_crud");

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Consulta preparada
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // $row['password'] debe ser el hash guardado en la BD
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $user;
            // Redirección si todo está bien
            header("Location: ../index.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Contraseña incorrecta',
                confirmButtonText: 'Volver al login'
            }).then(() => {
                window.location.href = '../login.php';
            });
            </script>";
        }
    } else {
        // Usuario no encontrado
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Usuario no encontrado',
            confirmButtonText: 'Volver al login'
        }).then(() => {
            window.location.href = '../login.php';
        });
        </script>";
    }

    $stmt->close();
}

$con->close();
?>
    
</body>
</html>
