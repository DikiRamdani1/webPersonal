<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Diki Ramdani</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="gallery-page overflow-x-hidden">

  @include('partials.navbar')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="">
        <div class="mt-3">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Projek</h1>
                </div>
            </div>
        </div>
    </div>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-evenly" data-aos="fade-up" data-aos-delay="100">

        <div class="col-12 col-md-7 col-lg-4">
          <img class="col-12 h-100 object-fit-cover" src="/img/gallery/gallery-1.png" alt="">
          <h3 class="mt-2">Gacha Waifu</h3>
          <p class="mt-2">Gacha Waifu adalah sebuah website untuk mendapatkan istri dalam keberuntungan, dibuat dengan menggunakan html, css dan js.</p>
          <a href="https://gacha-waifu-one.vercel.app/">https://gacha-waifu-one.vercel.app/</a>
        </div>
        <div class="col-12 col-md-7 col-lg-4 mt-5 mt-md-0">
          <img class="col-12 h-100 object-fit-cover" src="/img/gallery/gallery-2.png" alt="">
          <h3>CeritaKu</h3>
          <p class="mt-2">CeritaKu adalah sebuah website untuk membaca cerita, dibuat menggunakan tailwind, firebase dan next js.</p>
          <a href="https://cerita-ku-ini.vercel.app/">https://cerita-ku-ini.vercel.app/</a>
        </div>

      </div>
      <div class="container-fluid mt-5 d-flex align-items-center justify-content-evenly" data-aos="fade-up" data-aos-delay="100">

        <div class="col-12 col-md-7 col-lg-4">
          <img class="col-12 h-100 object-fit-cover" src="/img/gallery/gallery-3.png" alt="">
          <h3 class="mt-2">Memorify</h3>
          <p class="mt-2">Memorify adalah sebuah website untuk menyimpan gambar atau mencari banyak inspirasi untukmu, dibuat menggunakan tailwind, firebase dan next js.</p>
          <a href="https://memorify-galery-kuyun.vercel.app/">https://memorify-galery-kuyun.vercel.app/</a>
        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>