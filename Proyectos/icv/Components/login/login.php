<?php
session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: \Proyectos\icv\Components\login');
  }
  require 'database.php';
  
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email'] );
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC, );
    

    $message = '';
    

    echo '<pre>';
    echo json_encode($results['password']);
    echo '</pre>';

    echo $_POST['password'];


    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: \Proyectos\icv\Components\login"); 
    } else {
      $message = 'lo siento contraseña incorrecta o correo';
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICOLVEN VIRTUAL STORE</title>
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
                <h3>Bienvenidos</h3>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input name="email" type="text" placeholder="Enter your email" class="input-control" required>
                    </div>
                    <div class="input-box">
                        <input name="password" type="password" placeholder="Enter your Password" class="input-control" required>
                        <div class="input-link">
                            <a href="recuperar.php" class="gradient-text"> ¿Has olvidado tu contraseña? </a>
                        </div>
                    </div>
                    <input type="submit" value="Iniciar Sesión" class="btn">
                </form>
                <p> ¿No tienes una cuenta? <a href="signup.php" class="gradient-text">Crear cuenta</a></p>
            </div>
        </div>
    </section>
</body>
</html>