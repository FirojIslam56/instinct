
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSTINCT: Best Textile Company of Bangladesh</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <link rel="stylesheet" href="./css/style.css">

    <link rel="shortcut icon" type="image" href="./img/company-logo.png">

</head>

<body onload="bannerImageSliding()">
    <header class="header" id="header">
        <nav class="nav">
            <a href="" class="nav-logo">
                <img src="./img/company-logo.png" height="30px" alt="">
            </a>
            <div class="nav-menu" id="nav-menu-id">
                <ul class="nav-list">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="company_profile.php" class="nav-link">Profile</a></li>
                    <li class="nav-item for-products-menu"> <a href="" class="nav-link">Products</a>
                        <ul class="sub-menu">
                        <li><a href="./terry_towel.php" class="nav-link">Terry Towel</a></li>
                        <li><a href="./shop_towel.php" class="nav-link">Shop Towel</a></li>
                        <li><a href="./wiping_rags.php" class="nav-link">Wiping Rags</a></li>
                        <li><a href="./drop_cloth.php" class="nav-link">Drop Cloth</a></li>
                        <li><a href="./packaging_products.php" class="nav-link">Packaging</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="csr.php" class="nav-link">CSR</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <span><i class="fa-brands fa-facebook header-icon header-social-icon"></i></i></span>
                <span><i class="fa-brands fa-twitter header-icon header-social-icon"></i></span>
                <span><i class="fa-brands fa-instagram header-icon header-social-icon"></i></span>
                <span><i class="fa-brands fa-youtube header-icon header-social-icon"></i></span>
            </div>
        </nav>
        <div class="menu-button">
            <div class="cm-btn menu-btn-icon">
                <button onclick="togglerMenu()" id="menuId"><i class="fa-solid fa-bars" id=""></i></button>
            </div>
            <div class="cm-btn cross-btn-icon">
                <button onclick="togglerCross()" id="crossId"><i class="fa fa-times" id="" aria-hidden="true"></i></button>
            </div>
        </div>
    </header>

    <section class="banner-sec">
        <div class="banner" id="banner">
            <div class="slider">
                <img src="./img/banner-slider-image-4.jpg" id="sliderImg" alt="">
            </div>

            <div class="overlay">
                <div class="banner-content">
                    <h1 data-aos="fade-down">LET'S START with TEXTILE JOURNEY</h1>
                    <h3 data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique laudantium maxime asperiores
                        non saepe cupiditate!</h3>
                    <div class="banner-btn">
                        <a data-aos="fade-left" href="">VIEW MORE</a>
                        <a href="" data-aos="fade-right">SUBSCRIBE</a>
                    </div>     
                </div>
            </div>
        </div>
    </section>

    <section class="padding_zero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 box">
                    <div class="box-wrap" data-aos="fade-right"  data-aos-duration="3000">
                        <div class="featured-icon">
                            <img src="./img/thumb-hand.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <h4>Towel</h4>
                            <p>We provide shop towels. Press more button to look some more picture of it. Contact with
                                us for more detail.</p>
                            <a href="shop_towel.php" target="_blank">READ MORE
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 box">
                    <div class="box-wrap" data-aos="fade-up"  data-aos-duration="3000">
                        <div class="featured-icon">
                            <img src="./img/thumb-wiping.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <h4>Wiping Rag</h4>
                            <p>Mill bleached Smooth/ Unsmooth knit wiper (White), Bleached Smooth & Unsmooth knit wiper
                                (White) etc</p>
                            <a href="wiping_rags.php" target="_blank">READ MORE
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 box">
                    <div class="box-wrap" data-aos="fade-down"  data-aos-duration="3000">
                        <div class="featured-icon">
                            <img src="./img/thumb-drop.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <h4>Drop Cloth</h4>
                            <p>We provide drop cloths. Press more button to look some more picture of it. Contact with
                                us for more detail.</p>
                            <a href="drop_cloth.php" target="_blank">READ MORE
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 box">
                    <div class="box-wrap" data-aos="fade-left"  data-aos-duration="3000">
                        <div class="featured-icon">
                            <img src="./img/thumb-pack.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <h4>Packaging</h4>
                            <p>We provide drop cloths. Press more button to look some more picture of it. Contact with
                                us for more detail.</p>
                            <a href="packaging_products.php" target="_blank">READ MORE
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec">
        <div class="container">
            <div class="container-title-box" data-aos="zoom-in">
                <h3 class="container-title">About <span>Us</span></h3>
                <h5 class="container-sub-title">Who We Are</h5>
                <div class="divider"><i class="fa-solid fa-user"></i></div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 col-md-12 box about-img">
                    <div class="row">
                        <div class="col" data-aos="fade-up" data-aos-dely="100"><img src="./img/about-img-1.jpg"
                                class="img-fluid" alt="" id="aboutImg-1">
                        </div>
                        <div class="col" data-aos="fade-down" data-aos-dely="300"><img src="./img/about-img-2.jpg"
                                class="img-fluid" alt="" id="aboutImg-2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 box">
                    <h3 class="about-content-title my-title">
                        We are Instinct Textile Limited
                    </h3>
                    <p>Instinct Textile Ltd (ITL) is one of the leading Textile & Garments waste fabric recycler and
                        Terry Towel manufacture in Bangladesh. It is also the biggest wiping Rag producer and exporter
                        in the country. ITL started its journey as M/s Instinct in 2006 as a small trading house. It has
                        continuously been providing customized service and consistent product Quality since its
                        inception.

                        Commitment & intense supportive manner of ITL towards its customer has established ITL as the
                        most trusted & reliable Wiping Rag and Terry Towel supplier in Bangladesh</p>
                    <div class="title-content-ex">
                        <div class="left-ex" data-aos="zoom-in">
                            <span><i class="fa-solid fa-award"></i></span>
                            <div>
                                <strong>
                                    <h1>10<sup>+</sup></h1>
                                </strong>
                            </div>
                            <p style="color: bisque;">Years Of Experiences</p>
                        </div>
                        <div class="right-ex">
                            <p data-aos="fade-left" data-aos-dely="100"><i class="fa-solid fa-circle-check "></i>Best
                                Quality Standards</p>
                            <p data-aos="fade-left" data-aos-dely="300"><i class="fa-solid fa-circle-check "></i>100%
                                Satisfaction Guarantee</p>
                            <p data-aos="fade-left" data-aos-dely="600"><i
                                    class="fa-solid fa-circle-check "></i>Commitment to Customers</p>
                            <p data-aos="fade-left" data-aos-dely="1000"><i
                                    class="fa-solid fa-circle-check "></i>Quality Control System</p>
                            <p data-aos="fade-left" data-aos-dely="1500"><i class="fa-solid fa-circle-check "></i>Highly
                                Professional Team</p>

                        </div>
                    </div>
                    <div class="elementor-container">
                        <div class="founder">
                            <img src="./img/5246331.jpg" id="founderImg" alt="">
                            <div class="founder-content">
                                <h5><strong><a href="" target="_blank">Rashed Mahmud</a></strong></h5>
                                <p>Managing Director & CEO</p>
                            </div>
                        </div>
                        <div class="more-about-us">
                            <button class="mybtn">More About Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-products">
        <div class="container">
            <div class="container-title-box" data-aos="zoom-in">
                <h3 class="container-title">Our <span>Products</span></h3>
                <h5 class="container-sub-title">What We Provide</h5>
                <div class="divider"><i class="fa-brands fa-servicestack"></i></div>
            </div>
            <div id="our-products-owl-demo" class="owl-carousel owl-theme" style="transition: all 2s ease 0s">
                <div class="item">
                    <img src="./img/thumb-hand.jpg" alt="">
                    <hr>
                    <h4>Terry Towel</h4>

                    <div class="item-overlay">
                        <div class="item-overlay-inner">
                            <h5>Terry Towel</h5>
                            <hr>
                            <p style="color: blanchedalmond;">Bar mops of different sizes, Oshibori, Zuokins, Face
                                towel, Bath mat, Bath Towel, Shop towel, Drop cloth etc....</p>
                            <p></p>
                            <a href="terry_towel.php" target="_blank" type="button" class="seeMoreBtn">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img//thumb-shop.jpg" alt="">
                    <hr>
                    <h4>Shop Towel</h4>

                    <div class="item-overlay">
                        <div class="item-overlay-inner">
                            <h5>Shop Towel</h5>
                            <hr>
                            <p style="color: blanchedalmond;">We provide shop towels. Press more button to look some
                                more picture of it. Contact with us for more detail.</p>
                            <p></p>
                            <a href="shop_towel.php" target="_blank" type="button" class="seeMoreBtn">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/thumb-wiping.jpg" alt="">
                    <hr>
                    <h4>Wiping Rag</h4>

                    <div class="item-overlay">
                        <div class="item-overlay-inner">
                            <h5>Wiping Rag</h5>
                            <hr>
                            <p style="color: blanchedalmond;">Mill bleached Smooth/ Unsmooth knit wiper (White),
                                Bleached Smooth & Unsmooth knit wiper (White) etc....</p>
                            <p></p>
                            <a href="wiping_rags.php" target="_blank" type="button" class="seeMoreBtn">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/thumb-drop.jpg" alt="">
                    <hr>
                    <h4>Drop Cloth</h4>

                    <div class="item-overlay">
                        <div class="item-overlay-inner">
                            <h5>Drop Cloth</h5>
                            <hr>
                            <p style="color: blanchedalmond;">We provide drop cloths. Press more button to look some
                                more picture of it. Contact with us for more detail.</p>
                            <p></p>
                            <a href="drop_cloth.php" target="_blank" type="button" class="seeMoreBtn">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/thumb-pack.jpg" alt="">
                    <hr>
                    <h4>Packaging</h4>

                    <div class="item-overlay">
                        <div class="item-overlay-inner">
                            <h5>Packaging</h5>
                            <hr>
                            <p style="color: blanchedalmond;">Along with Wiping Rag it also offer a wide range of
                                suitable packaging according to buyer’s need</p>
                            <p></p>
                            <a href="packaging_products.php" target="_blank" type="button" class="seeMoreBtn">SEE MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 panel-box">
                    <div class="panel-box-wrap">
                        <div class="panel-heading">Our <span>Team</span></div>
                        <div class="panel-content">
                            <p>The success story of ITL has been written day by day with the help of a bunch of sincere,
                                honest dedicated and very hard working work force. Around 515 people are giving their
                                heartiest effort and skills to keep ITL’s operation smooth and effective among them,
                                around 230 people are working in Wiping Rag units and rest 270 person are in terry unit.
                                The women constitute around 70% of the total workforce. The management team of ITL is
                                very sophisticated, highly educated, well experienced, vigilant and dedicated. Their
                                right strategic move and constant monitoring system ensure overall productivity, quality
                                and growth of the company. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 panel-box">
                    <div class="panel-box-wrap">
                        <div class="panel-heading">COMPETITIVE ADVANTAGE</div>
                        <div class="panel-content">
                            <p>ITL is associated with a large number of garments and textile industries along with a
                                huge number of local waste fabric collectors and suppliers from all over the industrial
                                zones (Gazipur Savar, Tongi, Narayongonj, Chittagonj) in Bangladesh, which has given ITL
                                a competitive advantage in collection of waste fabric from all other exporters. Because
                                of this strong network and supply chain, ITL is able to provide best products at the
                                most competitive price in a very big volume to its valued customers and keep them
                                constantly happy and confident. Regarding Terry, ITL is associated with some very
                                prominent and big spinners in Bangladesh and also the volume of yarn that is used
                                regularly in the factory, has given ITL a very high purchase power in the yarn market,
                                which facilitates a strong price negotiation power to ITL and has put them in a very
                                competitive position then other factories of the country. ITL has been providing the
                                most competitive price for best Quality products continuously to its customers around
                                the world. ITL constantly competes with the Pakistani Terry market in terms of price and
                                Quality and ensure its growth. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php include('./sister_concern.php'); ?>

   
   <?php include('./footer.php'); ?>


   <?php include('./scripts.php'); ?> 


