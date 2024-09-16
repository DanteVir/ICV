<?php 
    require 'database.php';
    $mensaje = '';
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users ( email, password) VALUES ( :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);            
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            $message = "Usuario creado correctamente. Ahora puedes iniciar sesión.";
        } else {
            $message = "Error al crear el usuario. Por favor, intente nuevamente.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
            <?php if(!empty($message)): ?>
                <p><?= $message ?></p>
            <?php endif; ?>
                <h3>Crear una cuenta</h3>
                <form action="signup.php" method="POST">
                    <div class="input-box">
                        <input name="email" type="email" placeholder="correo" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <input name="password" type="password" placeholder="Contraseña" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <input name="confirm_password" type="password" placeholder="confirmar Contrasela" class="input-control" required>
                    </div>
                    <input type="submit" value="Registrarse" class="btn">
                </form>
                <p> ¿Ya tienes una cuenta? <a href="login.php" class="gradient-text">Iniciar Sesión</a></p>
            </div>
        </div>
    </section>
</body>
</html>