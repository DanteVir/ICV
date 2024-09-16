<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="../ingresado/principal.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php if(!empty($user)): ?>
    <header>
      <h1 class="PU">ICOLVEN VIRTUAL STORE</h1>
      <a href="#" class="logo">
        <img src="IMG/LOGO.png" alt="Book Store Logo">
      </a>
    </header>
    <h6 style="text-align: center; position: absolute; z-index:10; margin-left: 1200px; color: white; background-color: gray; border-radius: 25px; padding:10px;">
      Bienvenido. <?= $user['email']; ?>
    </h6>
    <nav class="main-menu">
      <ul class="holi">
        <li>
          <a href="#">
            <i class="fa fa-home nav-icon"></i>
            <span class="nav-text">INICIO</span>
          </a>
        </li>

        <li>
          <a href="../ingresado/Nosotros.php">
            <i class="fa fa-image nav-icon"></i>
            <span class="nav-text">NOSOTROS</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-pen nav-icon"></i>
            <span class="nav-text">LIBROS</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-envelope nav-icon"></i>
            <span class="nav-text">UNIFORMES</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bell nav-icon"></i>
            <span class="nav-text">NOTIFICACIONES</span>
          </a>
        </li>

      </ul>

      <ul class="logout">
        <li>
          <a href="#">
            <i class="fa fa-cogs nav-icon"></i>
            <span class="nav-text">MI CUENTA</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-right-from-bracket nav-icon"></i>
            <span class="nav-text">
              <a style="margin-left: 55px;" href="logout.php">CERRAR SESIÓN</a>
            </span>
          </a>
        </li>  
      </ul>
   </nav>
    
   
<div class="container">


</div>
<div class="carrusel" style="position: absolute; width: 100%; height: 100vh;">
  <div id="carouselExampleIndicators" class="carousel slide" style="width: 100%; height: 100vh;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/IMG_8899.jpg" class="d-block w-100" alt="..." style="object-fit: cover; width:500px;">
      </div>
      <div class="carousel-item">
        <img src="IMG/3.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="IMG/1.jpg" class="d-block w-100" alt="..." style="object-fit: cover;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php else: ?>
    <h1>Por favor inicia sesión o regístrate para disfrutar de nuestro contenido</h1>
    <a href="../login/login.php">Iniciar sesión</a> o
    <a href="../login/signup.php">Registrarse</a>
  <?php endif; ?>
</body>
</html>

