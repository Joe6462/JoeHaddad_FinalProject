<!DOCTYPE html>

<?php
$cookie_name = "user";
$cookie_value = "FMF";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/globel.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
        <title>FMF</title>
    </head>

    <body>

    <?php 
    if(!isset($_COOKIE[$cookie_name])) {
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>

        <div class="sub__nav">
        <div class="container">
            <div class="info__wrapper">
                <span><a href=""><i class=""></i>FeedMeFoundation</a></span>
            </div>
        </div>
        </div>
      <nav role="navigation" class="nav__mob">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>

          <ul id="menu">
            <div class="logo__wrapper">Menu</a></div>
            <li><a href="">Home</a></li>
            <li><a href="assets/pages/about.html">About</a></li>
            <li><a href="assets/pages/gallery.html">Gallery</a></li>
            <li><a href="assets/pages/testimonial.html">Testimonials</a></li>
          </ul>
        </div>
      </nav>

        <header>
            <div class="nav">
                <ul>
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="assets/pages/about.html">About</a></li>
                    <li><a href="assets/pages/gallery.html">Gallery</a></li>
                    <li><a href="assets/pages/testimonial.html">Testimonials</a></li>
                </ul>
            </div>
            <div class="banner">
                <div class="img__wrapper">
                    <img src="assets/images/banner.jpg" alt="banner" style="height: auto;width:100;">

                    <div class="intro"><a href="#intro"><i class="lni lni-chevron-down"></i></a></div>
                </div>
            </div>
        </header>
        <section class="informative" id="intro">
            <div class="title__wrapper">
                <div>Introduction</div>
            </div>
            <div class="info__para">
                <p>FeedMeFoundation is a charitable organization whose mission is to alleviate poverty and 
                hunger across all continents . We work to feed, empower, cloth, and provide basic amenities 
                such as food, water, electricity, housing, and healthcare to the less fortunate.</p>
            </div>
        </section>
        <section class="experience">
            <div class="img__wrapper">
                <img src="assets/images/donner.jpg" alt="">
            </div>
            <div class="donner__experience">
                <div class="title__wrapper">
                    <div>Improve Your Donor Experience</div>
                </div>
                <div class="donor__para">
                    <p>Whether you’re a seasoned expert on online fundraising or providing your donors an online giving
                        option for the first time, FeedMeFoundation makes it simple for donors to support your initiative. Our donation
                        forms, fundraising pages, and text messaging platform provide modern and beautiful avenues to
                        collect donations digitally.</p>
                </div>
            </div>
        </section>
        <section class="solution">
            <div class="title__wrapper">
                <div>A fundraising solution for you</div>
            </div>
            <div class="card__wrapper">
                <div class="card">
                    <div class="icon__wrapper">
                        <i class="lni lni-heart"></i>
                    </div>
                    <div class="card__tagline"></div>
                    <p>We provide healthcare support and immunization to children and adults in underdeveloped regions that we are located in. We also provide the COVID-19 Vaccines as well as Ebola and Malaria.</p>

                </div>
                <div class="card">
                    <div class="icon__wrapper">

                        <i class="lni lni-home"></i>
                    </div>
                    <div class="card__tagline"></div>
                    <p>Shelter and food to the homeless and assist with basic training and employment, food and basic healthcare.</p>

                </div>
                <div class="card">
                    <div class="icon__wrapper">

                        <i class="lni lni-invention"></i>
                    </div>
                    <div class="card__tagline"></div>
                    <p>Basic training like Nursing Assistants, office Assistant, shipping and receiving. Medical Assistants, 
                    legal assistants. Sewing, bread making, food preparing and Pharmacy Technician</p>

                </div>
            </div>
        </section>
        <section class="support">
            <div class="title">
                <div class="title__wrapper">
                    <div>Our Partners: </div>
                </div>
                <div class="support__wrapper">
                    <div class="img__wrapper">
                        <a href="#"><img src="assets/images/support-1.jpg" alt="WCF"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mission">
            <div class="mission__wrapper">
                <div class="mission__tagline">OUR MISSION</div>
                <p>We will focus on the most vulnerable people who do not have the capacity to self recover. 
                FeedMeFoundation empowers children to improve long-term health, provide nutrition to
                feed hungry children and offer volunteer opportunities.</p>
            </div>
            <div class="mission__wrapper">
                <div class="mission__tagline">OUR METHOD</div>
                <p>Your contribution helps to increase
                    our scientific, logistical and financial resources.
                It gives us the opportunity to demonstrate our commitment to development aid and to increasing happiness in the world. We can change lives together!</p>
            </div>
            <div class="mission__wrapper">
                <div class="mission__tagline">OUR CULTURE</div>
                <p>In our sustainable development and economic action plan, we provide support to help create and protect a better living environment
                in communities and industries in countries that have been most affected by unfortunate events.</p>
            </div>
        </section>
        <footer>
            <ul>
                <li><a href="#">Email: info@feedmefoundation.com</a></li>
                <li><a href="#">Tel: 000 000-0000</a></li>
            </ul>
            <div class="icon__wrapper">
                <a href=""><i class="lni lni-facebook-filled"></i></a>
                <a href=""><i class="lni lni-twitter"></i></a>
                <a href=""><i class="lni lni-instagram"></i></a>
            </div>
        </footer>
    </body>
</html>
