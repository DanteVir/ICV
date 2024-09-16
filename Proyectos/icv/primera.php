<?require './Components/login/database.php' ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> ICV </title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
<link rel="stylesheet" href="./style.css">

</head>
<body>
<main>
  <div class="content">
    <h2>BIENVENIDOS A ICOLVEN VIRTUAL STORE</h2>
    <br>
    <p> ¡Bienvenidos a la tienda en línea del Colegio Adventista ICOLVEN! Ahora, comprar los uniformes y libros de la institución es más fácil que nunca. Naveguen, elijan y reciban todo lo que necesitan directamente en casa en un solo clic. ¡La calidad y rapidez es nuestra especialidad!</p>
    <ul class="counter">
    </ul>
    <a href="./Components/login/login.php"><button class="btn" > Iniciar Sesion <i class="fa-solid fa-arrow-right"></i></button></a>
  </div>

  <div class="swiper-container">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">

          <span></span>
          <div class="slide-content">
            <h3>PROM 2024</h3>

          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <span></span>
          <div class="slide-content">
            <h3>DOCENTES</h3>

          </div>

        </div>
        <div class="swiper-slide swiper-slide--three">
          <span></span>

        </div>
        <div class="swiper-slide swiper-slide--four">
          <span></span>

        </div>
        <div class="swiper-slide swiper-slide--five">
          <span></span>

        </div>
        <div class="swiper-slide swiper-slide--six">
          <span></span>
          <div class="slide-content">
          </div>

        </div>
    

      </div>

    </div>

    <div class="swiper-pagination"></div>
  </div>
  <div class="circle"></div>
</main>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script><script  src="./script.js"></script>

</body>
</html>
