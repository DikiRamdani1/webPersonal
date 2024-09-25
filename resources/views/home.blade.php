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

    <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('partials.navbar')


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <h2><span>Hallo, Nama saya </span><span class="underlight">Diki Ramdani</span> seorang<span>
                                Full Stack Web Developer dari Bandung.</span></h2>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <section id="about" class="hero about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    {{-- <div class="col-lg-4" style="height: 400px">
                        <img src="/img/WIN_20240913_08_56_02_Pro.jpg" class="col-12 h-100 object-fit-cover"
                            alt="">
                    </div> --}}
                    <div class="col-lg-5 content text-center">
                        <h2>Seorang Full Stack Web Developer dari Bandung.</h2>
                        <p class="py-3">
                            Perkenalkan nama saya Diki Ramdani bersekolah di SMK Bakti Nusantara 666 dengan jurusan PPLG
                            (Pengembangan Perangkat Lunak dan Game). Saya sudah memahami konsep dasar pemogramman dengan
                            baik.
                        </p>
                        {{-- <p class="m-0">
                            
                        </p> --}}
                        <a href="/about" class="btn-get-started mt-1">Selengkapnya<br></a>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="hero gallery section flex-column py-5">
            <h1>Projek</h1>

            <div class="mt-2" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="/img/gallery/gallery-1.png" class="col-12 h-100 object-fit-cover" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="/img/gallery/gallery-1.png" title="Gacha Waifu"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="/img/gallery/gallery-2.png" class="col-12 h-100 object-fit-cover" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="/img/gallery/gallery-2.png" title="Baca Cerita"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="/img/gallery/gallery-3.png" class="col-12 h-100 object-fit-cover" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="/img/gallery/gallery-3.png" title="Gallery Photo"
                                    class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                {{-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>
            </div>
        </section><!-- /Gallery Section -->

        <div class="mt-5 row d-flex justify-content-center text-center">
            <div class="col-lg-8">
                <h1>Contact</h1>
            </div>
        </div>
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5">

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Lokasi</h3>
                                    <p>Bandung, Jawa Barat</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Telepon</h3>
                                    <p>+62 895-3556-11304</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>rdiki8804@gmail.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Kirim pesan</button>
                        </div>

                    </div>
                </form><!-- End Contact Form -->

            </div>

        </section><!-- /Contact Section -->

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
