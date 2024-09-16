<?php
  session_start();

  require '../login/database.php';

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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Transparent Sidebar | Nothing4us </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="./principal.css">

</head>
<body>
<?php if(!empty($user)): ?>

  <header>
    <h1 class="PU">ICOLVEN VIRTUAL STORE</h1>
    <a href="" class="logo">
      <img src="../login/IMG/LOGO.png" alt="Book Store Logo">
    </a>
  </header>
<body>
    <nav class="main-menu" style="padding: 0;">
      <ul >
        <li>
          <a href="../login/index.php">
            <i class="fa fa-home nav-icon"></i>
            <span class="nav-text">INICIO</span>
          </a>
        </li>

        <li>
          <a href="#">
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
          <a href="../login/logout.php">
            <i class="fa fa-right-from-bracket nav-icon"></i>
            <span class="nav-text">
              CERRAR SESIÓN
            </span>
          </a>
        </li>  
      </ul>
   </nav>
    
   
<div class="container">
	<div class="blob-c">
    <div class="shape-blob"></div>
    <div class="shape-blob one"></div>
    <div class="shape-blob two"></div>
    <div class="shape-blob three"></div>
    <div class="shape-blob four"></div>
    <div class="shape-blob five"></div>
    <div class="shape-blob six"></div>
  </div>

  <section>
    <div class="card">
      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/ef19280b-4fd3-4fdd-9798-1ec22d8ab4b8" alt="image" />

      <div class="card-content">
        <p>MISIÓN</p>
        <p>Generar en cada persona una mejor experiencia a la hora de comprar por medio de nuestra página web algún implemento necesario para la institución, garantizando seguridad y confianza a la hora de realizar cualquier pago y así mismo a la hora de recibir el pedido, obteniendo así buenos comentarios y experiencias inolvidables, evitando una mala experiencia y malos comentarios al momento de la compra o al momento de recibir el pedido.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/cd21ab5f-c7c2-4d9a-a0e7-ad17a88df444" alt="image" />

      <div class="card-content">
        <p>VISIÓN</p>
        <p>Como empresa deseamos que en un futuro a corto o largo plazo, la institución implemente nuestra página web en todos los momentos posibles, con el fin de mejorar la perspectiva de las personas acerca del plantel, por otra parte de su rapidez y eficiencia, y así evolucionar a medida del tiempo.</p>
      </div>
    </div>

    <div class="card">
      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/1beae2b7-eea5-4f05-8bb8-cd7a6a85d3e2" alt="image" />

      <div class="card-content">
        <p>JUSTIFICACIÓN</p>
        <p>Nosotros como estudiantes de Icolven hemos sentido la necesidad de implementar una página web que nos facilite la compra de los implementos necesarios para la institución. Por tal razón hemos decidido dar el paso de crear una donde podamos encontrar los libros y uniformes para todos los estudiantes del plantel educativo, para una adquisición dinámica y rápida de todos estos.
        </p>
      </div>
    </div>
  </section>
</div>

</body>
<?php else: ?>
    <h1>Por favor inicia sesión o regístrate para disfrutar de nuestro contenido</h1>
    <a href="../login/login.php">Iniciar sesión</a> o
    <a href="../login/signup.php">Registrarse</a>
<?php endif; ?>


</body>
</html>
