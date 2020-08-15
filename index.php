<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="This is Zera Shih's finial project site. She is a computer science student who is studying in CCT.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starbucks Coffee Shop Project ☕</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Baloo+Chettan+2:wght@600;700;800&family=La+Belle+Aurore&family=Liu+Jian+Mao+Cao&family=Merriweather+Sans&family=Monoton&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="magnific/magnific-popup.css">
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">STARBUCKS PROJECT</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="signup.php"><span>Join Now</span></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="login.php"><span>LOG IN</span></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="loginadmin.php"><span>Admin</span></a>
          </li>
        </ul>
    </nav>
       <!--Navbar-->
    <div id="menu" class="menu">
        <div id="menu-bar" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
            <ul id="nav" class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="login.php">Menu</a></li>
                <!--<li><a href="#">Contact</a></li>-->
            </ul>
        </div>
    </div>
    <!--End of Navbar-->
    <!--Header-->
    <header class="header">
        <div class="shop">
            <h1 class="title">Starbucks Coffee Shop</h1>
            <a href="login.php" class="shop-button pulsate">Order your drinks</a>
        </div>
    </header>
    <!--End of Header-->
    <!--About us-->
    <section id="about">
        <div>
          <h2 class="title-text">About Us</h2>
        </div>
        <div class="about-center">
            <!--Start of the article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Our Heritage</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
            <!--End of the article-->
            <!--Start of the article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-coffee"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Our Coffee</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
            <!--End of the article-->
            <!--Start of the article-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Stories and News</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
            <!--End of the article-->
        </div>
    </section>
    <!--End of About us-->
    <!--Menu-->
    <section class="menu" id="menu">
        <article class="menu-image"></article>
        <article class="menu-text">
            <div class="menu-text-center">
                <h1>Our Menu</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="login.php">Explore</a>
            </div>
        </article>
    </section>
    <!--End of Menu-->
    <!--Social icons-->
    <section id="social-icons">
        <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
        <a href="#"><i class="fab fa-twitter twitter"></i></a>
        <a href="#"><i class="fab fa-instagram instagram"></i></a>
    </section>
    <!--End of Social icons-->
    <!--Numbers-->
    <section id="numbers">
        <article class="number">
            <i class="fas fa-coffee"></i>
            <p>30</p>
            <h3>Drinks</h3>
        </article>
        <article class="number">
            <i class="fas fa-bread-slice"></i>
            <p>10</p>
            <h3>Food</h3>
        </article>  
        <article class="number">
            <i class="fas fa-cookie-bite"></i>
            <p>10</p>
            <h3>Biscuits</h3>
        </article>  
        <article class="number">
            <i class="fas fa-smile"></i>
            <p>100</p>
            <h3>Stores</h3>
        </article>
    </section>
    <!--End of Numbers-->
    <!--Card-->
    <section id="drink">
        <div>
            <h2 class="title-text"> Iced Drinks</h2>
        </div>
        <div class="drink-container">
            <!--article-->
            <article class="drink-card">
                <img src="img/Scaramel.jpg" alt="iced coffee photo">
                <div class="img-text">
                    <h1>Iced Tea</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-euro-sign">3.75</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="drink-btn">Order Now</button>
                    </div>
                </div>
            </article>
            <article class="drink-card">
                <img src="img/Sbrew.jpg" alt="cold brew photo">
                <div class="img-text">
                    <h1>Cold Brew</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-euro-sign">4.10</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="drink-btn">Order Now</button>
                    </div>
                </div>
            </article>
            <article class="drink-card">
                <img src="img/mf.jpg" alt="Mocha Frappucino photo">
                <div class="img-text">
                    <h1>Frappucino</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-euro-sign">5.10</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="drink-btn">Order Now</button>
                    </div>
                </div>
            </article>
            <!--end of article-->
        </div>
    </section>
    
    <!--End of Card-->
    <!--Gallery-->
    <section id="gallery">
        <div>
            <h2 class="title-text">Gallery</h2>
        </div>
        <div id="gallery-center">
            <article class="gallery-item">
                <a href="img/Sca2.jpg">
                <img src="img/Sca2.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Sca3.jpg">
                <img src="img/Sca3.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Sgirl.jpg">
                <img src="img/Sgirl.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Sold.jpg">
                <img src="img/Sold.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Stake.jpg">
                <img src="img/Stake.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/scbl.jpg">
                <img src="img/scbl.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Sjigsaw.jpg">
                <img src="img/Sjigsaw.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="img/Scrf.jpg">
                <img src="img/Scrf.jpg" alt="">
                </a>
            </article> 
        </div>
    </section>
    <!--End of gallery-->
    <!--Footer-->
    <footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy;<span>2020 Zera Shih Mock-up Starbucks Website Project. All rights reserved.</span>
            </p>
        </div>
    </footer>
    <!--End of footer-->

    <script src="onClickMenu.js"></script>
 

 <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <!--magnific popup-->
 <script src="magnific/jquery.magnific-popup.min.js" ></script>
 <script src="magnific/magnific.js"></script>
 
</body>
</html>