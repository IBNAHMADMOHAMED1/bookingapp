

<?php 
// if (isset($_SESSION['user_logged']) && $_SESSION['user_logged'] == true ) {
// } else {
//   Redirect::to('login');
// }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- icon family -->
    <link rel="stylesheet" href="https://www.jsdelivr.com/package/npm/themify-icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- swwipper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>



    <!-- style css -->
    <link rel="stylesheet" href="./public/assets/style.css">
</head>

<body data-bs-spy="scrol" data-bs-target=".navbar">
    <!-- Navigation section -->
    <section id="header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./image/Logo.png" alt="" srcset="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="ti-align-justify navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php BASE_URL;?>reservation">Réservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php BASE_URL?>profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- home -->
    <section id="home" class="home pt-5 overflow-hidden" style="min-height: 100vh;">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="home-banner home-banner-1">
                        <img src="./image/homebg.png" alt="">
                        <div class="home-banner-text">
                            <h1>Envolez-vous vers <span>L'Europe</span></h1>
                            <h2>-50% Réduction pour ce vols</h2>
                            <a href="<?php BASE_URL;?>reservation" class="btn btn-danger text-uppercase mt-4">EN SAVOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-banner home-banner-2">
                        <img src="./image/hom2.png" alt="">
                        <div class="home-banner-text">
                            <h1>Envolez-vous vers Asie</h1>
                            <h2>-30% Réduction pour ce vols</h2>
                            <a href="" class="btn btn-danger text-uppercase mt-4">EN SAVOIR PLUS</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="ti-angle-left slide-icon"></span>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <span class="ti-angle-right slide-icon"></span>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        
        <!-- o -->
        <div class="offers">
            <div class="container">
                <div class="row">
                    <!-- paris -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <a href="">
                            <div class="offer-box text-center position-relative">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./image/paris.jpg" class="img-fluid" alt="" srcset="">
                                        <div class="offer-overlay">

                                        </div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">paris</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">-50% Réduction pour ce
                                                vols</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">EN
                                                SAVOIR PLUS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- 1 -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-between">
                        <a href="">
                            <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./image/dubai1.jpg" class="img-fluid" alt="" srcset="">
                                        <div class="offer-overlay">

                                        </div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">dubai</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">-50% Réduction pour ce
                                                vols</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">EN
                                                SAVOIR PLUS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="offer-box text-center position-relative">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden ">
                                        <img src="./image/dubai1.jpg" class="img-fluid" alt="" srcset="">
                                        <div class="offer-overlay">

                                        </div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">dubai</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">-10% Réduction pour ce
                                                vols</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">EN
                                                SAVOIR PLUS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- 2 -->
                    <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                        <a href="">
                            <div class="offer-box text-center position-relative">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="./image/paris.jpg" class="img-fluid" alt="" srcset="">
                                        <div class="offer-overlay">

                                        </div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">paris</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">-50% Réduction pour ce
                                                vols</p>
                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4">EN
                                                SAVOIR PLUS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </section>
            <!-- hi -->

<div class="section">
    <div class="container">
        <div class="title">
            <h1>Gagnez des points</h1>
        </div>
        <div class="content">
            <div class="article">
                
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p>Vols et bagages
                    Jusqu'à 5% de l'argent en retour*</p>
                <div class="buttn">
                    <a class="btn btn-danger text-uppercase " href="">Montrez-Moi Comment</a>
                </div>
            </div>
        </div>
        <div class="image-section">
            <img src="./image/balis.jpg" alt="" srcset="">
        </div>
        <div class="social">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>



<section>
    <div class="container">
        <div class="section-title">
            <h2>Testimonials</h2>
            <span class="section-separator"></span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>
    <div class="testimonials-carousel-wrap">
        <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
        <div class="testimonials-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="./image/clinet1.png"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>John Doe</h3>
                                    <h4>Owner</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>

                    <!--second--->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="./image/clinet1.png"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>Doe Boe</h3>
                                    <h4>Director</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>
                    <!--third-->

                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="./image/clinet1.png"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>Boe Doe</h3>
                                    <h4>Developer</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>

                    <!--fourth-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="./image/clinet1.png"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-link"></a>
                                <div class="testimonials-avatar">
                                    <h3>Doe John</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>
                    <!--testi end-->

                </div>
            </div>
        </div>

        <div class="tc-pagination"></div>
    </div>
</section>

<section class = "contact-section">
    <div class = "contact-bg">
      <h3>Get in Touch with Us</h3>
      <h2>contact us</h2>
      <div class = "line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum sequi qui.</p>
    </div>


    <div class = "contact-body">
      <div class = "contact-info">
        <div>
          <span><i class = "fas fa-mobile-alt"></i></span>
          <span>Phone No.</span>
          <span class = "text">1-2392-23928-2</span>
        </div>
        <div>
          <span><i class = "fas fa-envelope-open"></i></span>
          <span>E-mail</span>
          <span class = "text">M.ibnahmad</span>
        </div>
        <div>
          <span><i class = "fas fa-map-marker-alt"></i></span>
          <span>Address</span>
          <span class = "text">United States</span>
        </div>
        <div>
          <span><i class = "fas fa-clock"></i></span>
          <span>Opening Hours</span>
          <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
        </div>
      </div>

      <div class = "contact-form">
        <form>
          <div>
            <input type = "text" class = "form-control" placeholder="First Name">
            <input type = "text" class = "form-control" placeholder="Last Name">
          </div>
          <div>
            <input type = "email" class = "form-control" placeholder="E-mail">
            <input type = "text" class = "form-control" placeholder="Phone">
          </div>
          <textarea rows = "5" placeholder="Message" class = "form-control"></textarea>
          <input type = "submit" class = "send-btn" value = "send message">
        </form>

        <div>
          <img src = "./image/contact-png.png" alt = "">
        </div>
      </div>
    </div>

    <div class = "map">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.6796314134226!2d-9.23770664909054!3d32.293590281028074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYouCode%20Safi!5e0!3m2!1sfr!2sma!4v1645094741540!5m2!1sfr!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
    </div>

    <div class = "contact-footer">
      <h3>Copyright 2022 all rights reserved                     @Mohamed Ibnahmad </h3>
      
    </div>
  </section>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="./public/js/main.js"></script>
</body>
</html>