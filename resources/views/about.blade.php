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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page overflow-x-hidden">
    @include('partials.navbar')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="">
                <div class="mt-3">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>About</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="/img/WIN_20240913_08_56_02_Pro.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 content">
                        <h2>Seorang Full Stack Web Developer dari Bandung.</h2>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>17
                                            September 2006</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong>
                                        <span>Bandung, Indonesia</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Telepon:</strong> <span>+62 895 3556
                                            11304</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>18</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>rdiki8804@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            Saya sudah berada di dunia IT selama 3 tahun dan memiliki banyak keahlian dalam memahami
                            bahasa pemograman seperti PHP, CSS dan JavaScript, saya juga memahami Framework seperti
                            laravel dan next JS. Selama 3 tahun tentunya saya memliki banyak pengalaman dalam
                            pengembangan website.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <p>keahlian</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="py-2 d-flex flex-column justify-content-center text-center bg-black">
                                <div>
                                    <img style="width: 50px; height: 50px;" src="/img/html-5.png" alt="">
                                </div>
                                <h3 class="mt-2">HTML</h3>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="py-2 d-flex flex-column justify-content-center text-center bg-black">
                                <div>
                                    <img style="width: 50px; height: 50px;" src="/img/css-3.png" alt="">
                                </div>
                                <h3 class="mt-2">CSS</h3>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="py-2 d-flex flex-column justify-content-center text-center bg-black">
                                <div>
                                    <img style="width: 50px; height: 50px;" src="/img/php.png" alt="">
                                </div>
                                <h3 class="mt-2">PHP</h3>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="py-2 d-flex flex-column justify-content-center text-center bg-black">
                                <div>
                                    <img style="width: 50px; height: 50px;" src="/img/js.png" alt="">
                                </div>
                                <h3 class="mt-2">Java Script</h3>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

    </main>

    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
