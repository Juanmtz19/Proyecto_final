<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Informática Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('homes/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homes/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('homes/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homes/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('homes/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homes/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('homes/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage - v5.1.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="index.html">Virtual Music</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Bienvenido</a></li>
                            <li><a class="nav-link scrollto" href="#about">Información</a></li>
                            <li><a class="nav-link scrollto" href="#services">Servicio</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Sucursales</a></li>
                            <li><a class="nav-link scrollto" href="{{ url('login') }}">Ingresar</a></li>
                            <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-|||||||||||||||||||||||||||||||||||||||||||||||||container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active"
                        style="background-image: url(homes/assets/img/hero-carousel/12.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Bienvenido </h2>
                                <p class="animate__animated animate__fadeInUp">Los mejores intrumentos en las mejores
                                    marcas, y los mejores conciertos con los mejores artistas. </p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Comenzemos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(homes/assets/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">La música es la banda sonora de la
                                    vida</h2>
                                <p class="animate__animated animate__fadeInUp">Si ampliamos la panorámica con la que
                                    vemos nuestras vidas, nos daremos
                                    cuenta de que esta reflexión tiene mucho sentido.</p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Comenzemos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(homes/assets/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Kurt D. Cobain </h2>
                                <p class="animate__animated animate__fadeInUp">La música es sinónimo de libertad, de
                                    tocar lo que quieras y como quieras,
                                    siempre que sea bueno y tenga pasión, que la música sea el alimento del amor.</p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Comenzemos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(homes/assets/img/hero-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Oscar Wilde</h2>
                                <p class="animate__animated animate__fadeInUp">Los músicos son terriblemente
                                    irrazonables. Siempre quieren que uno sea
                                    totalmente mudo en el preciso momento que uno desea ser completamente sordo.</p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Comenzemos</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(homes/assets/img/hero-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Música</h2>
                                <p class="animate__animated animate__fadeInUp">La música fluye por las venas de casi
                                    todos
                                    los niños, una vez crecidos son pocos los que se embarcan en una carrera musical,
                                    pero podemos decir que todos ""vibramos""
                                    gracias a las emociones que nos da música, capaz de llegar a describir los
                                    sentimientos, a menudo sin tener que recurrir a las palabras.
                                    A la música y a las emociones que despierta va dedicada la recopilación de frases de
                                </p>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Comenzemos</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="bi bi-briefcase"></i>
                        <h4 class="title"><a href="">Guitarras México</a></h4>
                        <p class="description">Bienvenido a nuestra tienda de guitarras en donde podrás encontrar una
                            variedad de guitarras acústicas, electroacústicas y eléctricas.

                            Contamos con marcas como Fender, Yamaha, Jackson, Ibanez, Sevilla, Takamine y muchas más.

                            ¡No lo dudes más y compra tu guitarra de nuestra selección especial!</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Yamaha México</a></h4>
                        <p class="description">Encuentra nuestros nuevos saxofones. Saxofón alto, saxofón tenor,saxofón
                            soprano
                            ,saxofón barítono. Los mejores precios.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title"><a href="">Casa del Teclado</a></h4>
                        <p class="description">
                            El acompañamiento automático basado en “Estilos” proporciona un auténtico grupo instrumental
                            que te acompaña según tocas el teclado. Desde el momento en que empieces
                            a tocar, dispondrás de excelentes acompañamientos
                            para inspirarte a añadir frases musicales a medida que se te ocurran.</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->


        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->

        
        <div class="">
            <div class="container text-center">
                @forelse($guitar as $guitar)
                <div class="mt-3">
                    <img style="width: 80%; height: 250px; object-fit: cover;"
                        src="/imagenes/guitar/{{ $guitar->image }}" alt="{{ $guitar->brand }} {{ $guitar->model }}" />
                    <div class="container text-center">
                        <h2 class="container text-center">{{ $guitar->brand }} {{ $guitar->model }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="container text-center">{{ $guitar->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        @empty
        NO hay registros de automóviles en este momento
        </div>

        @endforelse




        <!-- End Services Section -->


        </section><!-- End Call To Action Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Ventas</h3>
                    <p>La música despierta la sensibilidad, amor y apreciación por la música a través del juego.
                        Método enseñanza es de lo particular a lo general, cada clase es totalmente personalizada.
                        Aprende Música.</p>
                </header>

                <div class="skills-content">

                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">Korg <i class="val">100%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">Roland <i class="val">90%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">Yamaha <i class="val">75%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">M-Audio <i class="val">55%</i></span>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Contratos</h3>
                    <p>Los mejores Artistas y conciertos</p>
                </header>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clientes</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Recomendaciones</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Ventas</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Plazas</p>
                    </div>

                </div>

                <div class="facts-img">
                    <img src="assets/img/facts-img.png" alt="" class="img-fluid">
                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100"">
      <div class=" col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1"
                                class="link-preview"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 1</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 3</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 2</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 2</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 2</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">App 3</a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 1</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Card 3</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                            <a href="assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">Web 1</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->


        </section><!-- End Our Clients Section -->

        <!-- End testimonial item -->


        </section><!-- End Testimonials Section -->


        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>
                        @foreach ($information as $info)
                        {{$info->email}}
                        @endforeach

                    </p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Puebla de Zaragoza. </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:2312073941">2312073941</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:juan2304valerio@gmail.com">Juan2304valerio@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>BizPage</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                            proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam
                            illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase
                            seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>
                @forelse($information as $info)
                {{$info->copyright}}
                @empty
                Todos los derechos reservados
                @endforelse
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('homes/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('homes/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('homes/assets/js/main.js') }}"></script>

</body>

</html>