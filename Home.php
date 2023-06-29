<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>3Shoes</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar ">
    <a href="#home" class="navbar-logo">3<span>shoes</span>.</a>
    <div class="navbar-nav">
      <a href="Home.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="#categories">Categories</a>
      <a href="#about">About Us</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="navbar-extra">
      <!-- <div> Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com'</a></div> -->

      <a href="#" id="search" type="submit"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
      <a href="#ham-menu" id="ham-menu"><i data-feather="menu"></i></a>

    </div>

  </nav>
  <!-- hero section -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Let's Make Your <span>Day</span>
      </h1>
      <p> Setiap langkah kecil mengarah pada kesuksesan.
      </p>
      <a href="" class="cta">Cek Sekarang</a>
    </main>
  </section>
  <!-- hero section End -->

  <!-- section categories -->
  <section id="categories" class="categories">
    <h2>Our categories</h2>
    <div class="row" data-aos="zoom-out-left" data-aos-duration="2000">
      <div class="categories-card">
        <a href="shop.php#sports" class="hre">

          <img class="categories-card-img" src="img/sports.jpg" alt="">
        </a>

        <h3 class="categories-card-title">sports</h3>
      </div>
      <div class="categories-card">
        <a href="shop.php#casual">
          <img href="#casual" class="categories-card-img" src="img/casuals.jpg" alt="">
        </a>
        <h3 class="categories-card-title">Casual</h3>
      </div>
      <div class="categories-card">
        <a href="shop.php#kids" class="hre">

          <img class="categories-card-img" src="img/kids.jpg" alt="">
        </a>
        <h3 class="categories-card-title">Kids</h3>
      </div>
      <div class="categories-card">
        <a href="shop.php#boots" class="hre">

          <img class="categories-card-img" src="img/boots.jpg" alt="">
        </a>
        <h3 class="categories-card-title">Boots</h3>
      </div>
    </div>

  </section>
  <!-- section categorist end -->

  <!-- section about -->
  <section id="about" class="about">
    <h2><span>About</span> Us</h2>
    <p>Kepuasan Anda Berbelanja Di Tempat Kami adalah Sebuah Kewajiban Untuk Kami
      <br>Misi Kami Berfokus Pada Kenyamanan Anda
    </p>

    <div class="row" data-aos="fade-right" data-aos-duration="2000">
      <div class="about-card">
        <img id="imam" src="img/imam.jpeg" alt="tess">
        <h3 class="about-card-title">IMAM ASHARI. S</h3>
        <P class="about-card-bio">(FrontEnd & BackEnd Developer)</P>
        <P class="about-card-bio">Teknik Informatika</P>
        <P class="about-card-bio">Universitas Islam Makassar</P>
      </div>
      <div class="about-card">
        <img id="imam" src="img/idris.jpeg" alt="tess">
        <h3 class="about-card-title">IDRIS SARABITI</h3>
        <P class="about-card-bio">(UI/UX Design Developer)</P>
        <P class="about-card-bio">Teknik Informatika</P>
        <P class="about-card-bio">Universitas Islam Makassar</P>
      </div>
      <div class="about-card">
        <img id="imam" src="img/asri.jpeg" alt="tess">
        <h3 class="about-card-title">ASRI ASTITA</h3>
        <P class="about-card-bio">(CEO & Founder 3shoes.)</P>
        <P class="about-card-bio">Teknik Informatika</P>
        <P class="about-card-bio">Universitas Islam Makassar</P>
      </div>


    </div>
  </section>
  <!-- section about end -->


  <!-- contact section -->
  <section class="contact" id="contact">
    <h2><span>Contact</span> Us</h2>
    <p>Kepuasan Anda Berbelanja Di Tempat Kami adalah Sebuah Kewajiban Untuk Kami
      <br>Misi Kami Berfokus Pada Kenyamanan Anda
    </p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772040620531!2d119.47807772418899!3d-5.140364444836831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf02a7e0adbbeb%3A0xe9fbbb77bf3cc0b0!2sUniversitas%20Islam%20Makassar!5e0!3m2!1sid!2sid!4v1687973709324!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="Nama">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="Email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="No.HP">
        </div>
        <button type="submit" class="btn">Kirim</button>
      </form>
    </div>
  </section>

  <!-- section footer -->
  <footer>
    <div class="socials">
      <a href=""><i data-feather="instagram"></i></a>
      <a href=""><i data-feather="facebook"></i></a>
      <a href=""><i data-feather="twitter"></i></a>
    </div>
    <div class="links">
      <a href="#home">Home</a>
      <a href="#shop">Shop</a>
      <a href="#categories">Categories</a>
      <a href="#about">About Us</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="credit">
      <p>created by <a href="">IMAM ASHARI. S</a>. | &copy; 2023 </p>
    </div>
  </footer>
  <!-- icon feather -->
  <script>
    feather.replace()
  </script>
  <script src="js/script.js"> </script>
  <!-- end icon -->
  <!-- END NAVBAR -->

  <!-- about section -->

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>