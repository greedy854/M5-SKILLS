<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="" defer></script>
  <script src="https://kit.fontawesome.com/31ba87c7ce.js" crossorigin="anonymous"></script>
  <!---boxicons-->

  <script src="https://kit.fontawesome.com/31ba87c7ce.js" crossorigin="anonymous"></script>


  <title>Document</title>
</head>



<body>

  <header>

    <article class="logo">
      <img src="img/logo7.webp" alt="The logo of Greedy's">
    </article>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    

    <article class="cart">
      <a href="dutch.html"><i class="fa-solid fa-cart-shopping"></i></a>
    </article>






    <section class="bx bx-menu" id="menu-icon"></section>
  </header>
  <ul class="navlist">

    <li><a href="main.html">Home</a></li>
    <li><a href="about-us.html">Aboutus</a></li>
    <li><a href="info.html">Information</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="developer.html">Developers</a></li>
    


  </ul>

  <nav>
    <ul class="nav-menu">
      <li class="norm li-1"><a href="main.html">Home</a></li>
      <li class="norm li-1"><a href="about-us.html">About us</a></li>
      <li class="norm li-1"><a href="info.html">Information</a></li>
      <li class="norm li-1"><a href="productpage1.html">Prices</a></li>
      <li class="dropdown norm li-1" id="click-slide">
        <a href="#" class="dropdown-toggle" id="drop" data-toggle="dropdown" onclick="toggleSlider();" role="button"
          aria-expanded="false">Products &nbsp; &#9660;</a>

        <ul class="dropdown-menu" id="dropdown-menu-r" role="menu">
          <li><a href="productpage1.html">All Products</a></li>
          <li><a href="dutch.html">Dutch</a></li>
          <li><a href="goldpage.html">Gold</a></li>
          <li><a href="silverpage.html">Silver</a></li>
          <li><a href="banknotes.html">Banknotes</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- Import jQuery and jQuery UI -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
  </script>

  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js">
  </script>

  <main>
    <section class="inputs">
      <section class="inputs">
        <div>
          <input id="part--1" type="checkbox" class="filter">
          <label for="part--1" class="label">Du</label>
        </div>

        <div>
          <input id="part--2" type="checkbox" class="filter">
          <label for="part--2" class="label">Gold</label>
        </div>

        <div>
          <input id="part--3" type="checkbox" class="filter">
          <label for="part--3" class="label">Silver</label>
        </div>

        <div>
          <input id="part--4" type="checkbox" class="filter">
          <label for="part--4" class="label">Banknotes</label>
        </div>

      </section>



    </section>

    <ul class="parts">

      <section class="part--section">
        <li class="part" data-category="part--1"><img src="img/product1nl.webp"
            alt="Munt 2 euro Nederland 2001 BEATRIX"></li>
        <p>Munt 2 euro Nederland 2001 BEATRIX</p>
        <a href="dutch.html">
          <h2>Op vooraad > </h2>
        </a>
        <a href="productspage.html">
          <h2>Details < </h2>
        </a>
        <li value="399,99" class="price-product">€399,99</li>

        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>


      </section>


      <section class="part--section">
        <li class="part" data-category="part--4"><img src="img/banknotes1.webp"
            alt="100 Gulden Snip 1977 ZFr+"></li>
        <p>+</p>
        <a href="banknotes.html">
          <h2></h2>
        </a>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>
      </section>

      <section class="part--section">
        <li class="part" data-category="part--3"><img src="img/silver1.webp" alt="2022 St. Helena 1 oz Silver Queens Coin"></li>
        <p></p>
        <a href="silverpage.html">
          <h2>Op vooraad </h2>
        </a>
        <li value="34,99" class="price-product">€34,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>

      <section class="part--section">
        <li class="part" data-category="part--1"><img src="img/product2nl.webp"
            alt="Munt 1 euro Nederland 2001 BEATRIX"></li>
        <p>Munt 1 euro Nederland 2001 BEATRIX</p>
        <a href="dutch.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="249,99" class="price-product">€249,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>

      <section class="part--section">
        <li class="part" data-category="part--2"><img src="img/gold1.webp" alt="2 Euro 2000, Juan Carlos I spain"></li>
        <p>2 Euro 2000, Juan Carlos I spain</p>
        <a href="goldpage.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="224,99" class="price-product">€224,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>

      <section class="part--section">
        <li class="part" data-category="part--4"><img src="img/banknotes2.webp"
            alt="Netherlands 1000 Gulden Banknote 1972"></li>
        <p>Netherlands 1000 Gulden Banknote 1972</p>
        <a href="banknotes.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="174,99" class="price-product">€174,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>
      </section>

      <section class="part--section">
        <li class="part" data-category="part--1"><img src="img/product3nl.webp"
            alt="Koningin Beatrix 5 EuroCent"></li>
        <p>Koningin Beatrix 5 EuroCent</p>
        <a href="dutch.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="149,99" class="price-product">€149,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>
      <section class="part--section">
        <li class="part" data-category="part--2"><img src="img/gold2.webp" alt="50 cent euromunt Frankrijk 1999">
        </li>
        <p>50 cent euromunt Frankrijk 1999</p>
        <a href="goldpage.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="99,99" class="price-product">€99,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>

      <section class="part--section">
        <li class="part" data-category="part--3"><img src="img/silver2.webp" alt="Australia Silver Coin 2017 Koala Elizabeth II">
        </li>
        <p>Australia Silver Coin 2017 Koala Elizabeth II</p>
        <a href="silverpage.html">
          <h2>Op vooraad > </h2>
        </a>
        <li value="34,99" class="price-product">€34,99</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>

      </section>

      <section class="part--section">
        <li class="part" data-category="part--4"><img src="img/banknotes3.webp"
            alt="Banknote China 10 Yen - Dragon - ND 1939"></li>
        <p>Banknote China 10 Yen - Dragon - ND 1939</p>
        <a href="banknotes.html">
          <h2>Op vooraad > </h2>
        </a>
        <a href="productspage1.html">
          <h2>Details < </h2>
        </a>
        <li value="2500" class="price-product">€2500</li>
        <section class="about">
          <a href="#"><button type="button">add to cart</button></a>
        </section>
    </ul>
    </article>
  </main>

  </main>
  <footer>
    <article class="row">
      <section class="col">
        <img src="img/logo7.webp" alt="The logo of Greedy's" class="logo">
        <p></p>
      </section>

      <section class="col">
        <h3 class="place">Place <div class="underline"><span></span></div>
        </h3>
        <p>Amsterdam</p>
        <p>Media college</p>
        <p>Amsterdam, 1111aa, Netherlands</p>
        <p class="email-id">34904@ma-web.nl</p>
        <h4>+31 06123456789</h4>
      </section>
      <section class="col">
        <h3>Links <div class="underline"><span></span></div>
        </h3>
        <ul>
          <li><a href="main.html">Home</a></li>
          <li><a href="about-us.html">About-us</a></li>
          <li><a href="info.html">Artists</a></li>
        </ul>
      </section>
      <section class="col">
        <h3>Contact <div class="underline"><span></span></div>
        </h3>
        <form>
          <i class="fa-solid fa-envelope"></i>
          <input type="email" placeholder="Enter your email id" required>
          <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
        <article class="social-icons">
          <a href=""><i class="fa-brands fa-square-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </article>
      </section>
    </article>
    <hr>
    <p class="copyright">Greedy's ©2023 - All Rights Reserved </p>
  </footer>

  <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    list-style: none;
    text-decoration: none;

}

html {
    font-size: 62.5%;
}

body {
    overflow-x: hidden;
    width: 100%;
}

.cart {
    position: fixed;
    display: flex;
    top: 3%;
    right: 1.2%;
}

.cart::after {
    position: fixed;
    bottom: 6%;
    right: 9%;
    content: '';
}

.cart i {
    display: block;
    padding: 1.2rem;
    font-size: 5.5rem;
    color: #ffdf4f;
    border-radius: 3rem;

}

.cart i:hover {
    transform: translateY(-0.6rem);
}




header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 9.8rem;
    background: transparent;
    background: #555555;
    position: relative;
    
}

.navlist {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 8rem;
    background: transparent;
    background: #555555;
    position: relative;
    padding: 4rem;
}

.navlist a {
    color: white;
    margin-left: 6rem;
    font-size: 1.9rem;
    font-weight: 600;
    border-bottom: 0.2rem solid transparent;
    transition: all .55s ease;

}

.navlist a:hover {
    border-bottom: 0.2rem solid #39b54a;
    color: #ffdf4f;
}

.logo {
    width: 250%;
    height: 220%;
    display: flex;
    top: 0%;
    right: 50%;
    margin-top: 3.1rem;
}


nav {
 }

     /* Navbar Default State Bg Color */
    .nav-menu .norm a:before {
     background-color: #ffdf4f;}

    /* Navbar Hover State Bg Color */
    .nav-menu .norm a:after {
     background-color: #ecc725;}

    /* Dropdown Menu a (navbar) Bg Color */
    .nav-menu .dropdown a:before {
     background-color:#ffdf4f !important;
     }

    /* Dropdown Menu a (navbar) Bg Color */
    .nav-menu .dropdown a:after {
     background-color:white !important;
     border-bottom: 0.2rem solid #B7521B;}

    /* Dropdown Menu Open a (navbar) Bg Color */
    .down-color {
     background-color: white !important;
     border-bottom: 0.2rem solid #ecc725;}

    /* Dropdown Menu Inner Items Default Bg Color */
    .dropdown-menu > li > a {
     background-color: #ecc725 !important;}

    /* Dropdown Menu Inner Items Hover/Focus Bg Color */
    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus {
     background-color: #ffdf4f !important;}

/* - - - - End Color Theme - - - - */




/* + + + + Navbar Body + + + + */

nav {
 position: absolute;
max-height: 30rem;
 width: 100vw;
}

.nav-menu {
 display: flex;
 margin-top: -0.2rem;
 padding: 0;
}


/* - - - - End Navbar Body - - - - */


/* + + + + Nav Buttons + + + + */

.nav-menu li {
 display: block;
 flex-grow: 1;
 text-align: center;
 z-index: 100;
 background-color: transparent;
 line-height: 6.1rem;
 overflow: hidden;
}



.nav-menu li a {
 position: relative;
 display: inline-block;
 z-index: 50;
 width: 100%;
 color: black;
 text-decoration: none;
 text-transform: uppercase;
 font-size: 1.5rem;
}


/* + + Style for Top-Level li's Only + + */

.nav-menu .li-1 {
 width: 100%;
}


/*  + + + + Nav Button Pseudos (For Hover State) + + + + */

.nav-menu .norm a:after,
.nav-menu .norm a:before {
 content: "";
 position: absolute;
 display: inline-block;
 height: 6rem;
}

.nav-menu .norm a:after {
 left: 50%;
 width: 0%;
 z-index: -20;
 -webkit-transition: .6s ease all .2s;
 transition: .6s ease all .2s;
}

.nav-menu .norm a:hover:after {
 left: 0%;
 width: 100%;
 -webkit-transition: .2s ease-out all;
 transition: .2s ease-out all;
}

.nav-menu .norm a:before {
 left: 0%;
 width: 100%;
 z-index: -50;
}

/* - - - - End Nav Button Pseudos - - - - */



/*  + + + + Dropdown Styles + + + + */

.dropdown {
 
}

.dropdown-menu {
 width: 100%;
 position: relative;
 top: -50rem;
 text-align: center;
 z-index: 1049;
 display: block;
 list-style: none;
 font-size: 1.2rem;
 border: none;
 -webkit-background-clip: padding-box;
 background-clip: padding-box;
 padding: 0;
}

.dropdown-menu > li > a {
 display: block;
 padding-top: 0.56rem;
 padding-bottom: 0.56rem;
 clear: both;
 font-family: gotham light !important;
 font-size: 1.5rem !important;
 line-height: 3.5rem;
 color: #777 !important;
 white-space: nowrap;
}

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
 text-decoration: none;
 color: black !important;
}

.dropdown-menu > li > a:after,
.dropdown-menu > li > a:before {
 display: none !important;
}


/* + + jQuery Modified Dropdown Styles + + */

#click-slide {
 z-index: 3;
 padding-bottom: 0 !important;
}

#drop {
 width: 100%;
 text-align: center;
 margin-bottom: 1.85rem;
}

.down {
 position: absolute;
 display: block;
 top: 0rem;
}


#menu-icon {
    color: red;
    font-size: 3.5rem;
    z-index: 10001;
    cursor: pointer;
    display: none;
}

.hero {
    height: 100%;
    padding: 9rem;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    /* Do not repeat the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
    margin-left: 4rem;
}

section {
    padding: 0 19%;
}

.hero-text h5 {
    font-size: 4rem;
    font-weight: 400;
    color: #555555;
    margin-bottom: 4rem;
}

.hero-text h1 {
    font-family: 'PT Serif', serif;
    font-size: 3rem;
    line-height: 1;
    color: #555555;
    margin: 0 0 4.5rem;
   

}

.hero-text h4 {
    font-size: 4.2rem;
    font-weight: 400;
    color: #555555;
    margin-bottom: 1rem;
}


.hero-img img {
    width: 54rem;
    height: auto;
    margin-top: 4rem;
    margin-left: -11rem;
}

.hero-text a {
    display: inline-block;
    color: black;
    background: rgb(255, 223, 79);
    border: 0.1rem solid transparent;
    padding: 1.2rem 3rem;
    line-height: 1.4;
    font-size: 1.4rem;
    font-weight: 500;
    border-radius: 3rem;
    text-transform: uppercase;
    transition: all .55s ease;
}

.hero-text a:hover {
    background-color: #ecc725;
    color: black;
    cursor: pointer;
    transition: 0.4s;
    transform: translateX(0.8rem);
}

.hero-text a.ctaa {
    background: transparent;
    border: 0.1rem solid #39b54a;
    margin-left: 2rem;
}

.hero-text .ctaa {
    color: #39b54a;
}

.hero-text a.ctaa i {
    vertical-align: middle;
    margin-right: 0.5rem;
}


.icons {
    position: absolute;
    top: 50%;
    padding: 0 9%;
    transform: translateY(-50%);
}

.icons i {
    display: block;
    margin: 2.6rem;
    font-size: 2.8rem;
    color: black;
    transition: all .50s ease;
}

.icons i:hover {
    color: #434343;
    transform: translateY(-0.5rem);
}

.scroll-down {
    position: fixed;
    bottom: 6%;
    right: 9%;

}

.scroll-down::after {
    position: fixed;
    bottom: 6%;
    right: 9%;
    content: '';
}

.scroll-down i {
    display: block;
    padding: 1.2rem;
    font-size: 2.5rem;
    font-size: 2.5rem;
    background-color: #ffdf4f;
    color: #000;
    margin-right: 145rem;

}

.scroll-down i:hover {
    transform: translateY(-0.6rem);
}

.row {
    display: flex;
    justify-content: center;
    align-items: center;

}

.container {
    display: inline-block;
    margin-top: 10rem;
    width: 42.1rem;
    padding: 1rem;
}

.container p {
    font-size: 1.6rem;
}

.heading {
    position: relative;
    background: lightgray;
}

.heading-img {
    width: 50rem;
    height: auto;

    margin-left: 18rem;
}

.heading-text1 {
    font-size: 2.5rem;
    text-transform: uppercase;
}

.heading-text {
    position: absolute;
    bottom: 33%;
    left: 38%;
}

.heading-text2 {
    font-size: 1.35rem;
    display: inline-block;
}

.wrap {
    height: 150%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 33rem;
    flex-wrap: wrap;
}

.button {
    width: 14rem;
    height: 5rem;
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 0.25rem;
    font-weight: 500;
    color: black;
    background-color: #ffdf4f;
    border: none;
    box-shadow: 0rem 0.8rem 1.5rem rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
    margin-left: 30rem;
    margin-top: 2rem;

}

.button:hover {
    background-color: #ecc725;
    color: black;
    cursor: pointer;
    transition: 0.4s;
}

.parts {
    width: 32rem;
    display: flex;
    gap: 5rem;
    align-items: center;
    height: auto;
    margin: 1.8rem;

}

.part--section {
    border: rgb(196, 196, 196) 0.1rem solid;
}

.part--section h2,
p {
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    color: #555555;
}



.part--section h1{
    color: #39b54a;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
}

.part {
    width: 27rem;
    height: 30rem;
    transition: 0.2s transform;
    flex-grow: 1;
    /* Used if the image is unavailable */
}

.part:hover {
    transform: scale(1.02) translateY(-0.7rem);
    cursor: pointer;
}

.part>img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.part--section h2 {
    font-size: 0.86rem;
}

.h2--details{
    font-size: 1.4rem !important;
}

.part--section h1 {
    font-size: 1.2rem;
}

.part--p {
    color: #39b54a;
    font-size: 1.9rem;
}

.parts1 {
    width: 32rem;
    display: flex;
    gap: 5rem;
    align-items: center;
    height: auto;
    margin: 1.8rem;

}

.part--section1 {
    border: rgb(196, 196, 196) 0.1rem solid;
}

.part--section1 h2,
p {
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    color: #555555;
}



.part--section1 h1{
    color: #39b54a;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
}

.part1 {
    width: 27rem;
    height: 30rem;
    transition: 0.2s transform;
    flex-grow: 1;
    /* Used if the image is unavailable */
}

.part1:hover {
    transform: scale(1.02) translateY(-0.7rem);
    cursor: pointer;
}

.part1>img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.part--section1 h2 {
    font-size: 0.86rem;
}

.h2--details1{
    font-size: 1.4rem !important;
}

.part--section1 h1 {
    font-size: 1.2rem;
}

.part--p1 {
    color: #39b54a;
    font-size: 1.9rem;
}



.image img {
    width: 200%;
    height: 150%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.name {
    color: #fff;
}

.title {
    display: block;
    margin-top: -1.5rem;
    font-size: 1.5rem;
    color: green;
    text-transform: capitalize;
}

.social li {
    display: inline-block;
}

.social li i {
    display: block;
    padding: 1rem;
    font-size: 1.7rem;
    color: white;
    transition: all 0.3s ease 0s;
    text-decoration: none;
}


a {
    text-decoration: none;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 20rem;
    font-size: 1.6rem;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 2rem;
    height: 5.5rem;
    text-align: center;
    border: none;
    background-size: 300% 100%;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}


.btn-hover.color-5 {
    background: #ffdf4f;
    color: white;
}


.btn-hover.color-5:hover {
    background-color: #ecc725;
    color: black;
    cursor: pointer;
    transition: 0.4s;
}

.sec--3--steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 1rem;
    color: #30dd8a;
}

.sec--3--steps h1 {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    grid-column: 1/6;
    font-size: 2rem;
}

.sec--3--steps figure {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #434343;
    color: #f0f6ff;
    width: 15rem;
    height: 15rem;
    border-radius: 50rem;
    font-size: 2.5rem;
    box-shadow: 1rem 1rem 1rem rgba(0, 0, 0, 0.2);
}

.step {
    display: flex;
    justify-content: center;
    align-items: center;

    flex-direction: column;
    gap: 1rem;
}

.step--1 {

    grid-column: 2/3;
    grid-row: 2/3;
}

.step--2 {
    grid-column: 4/5;
    grid-row: 2/3;
}

.step--3 {
    grid-column: 2/3;
    grid-row: 4/5;
}

.step--4 {
    grid-column: 4/5;
    grid-row: 4/5;
}

.section-a {
    margin-left: -4rem;
    display: flex;
    background: #ECECEC;
    justify-content: center;
    align-items: center;
}

.section-a a:hover {
    text-decoration: none;
}

.section-a .container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 30rem;
}

.section-a h1 {
    font-size: 4rem;
    color: var(--primary-color);
    margin-left: 6rem;
}

.section-a p {
    margin: 1rem 0;
}

.section-a img {
    margin-left: 20rem;
}

.about button {
    background: #ffdf4f;
    color: black;
    border: 0.2rem solid transparent;
    text-decoration: none;
    padding: 1rem 3rem;
    font-size: 1.7rem;
    font-weight: bold;
    width: 14rem;
    height: 4.5rem;
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 0.25rem;
    font-weight: 500;
    box-shadow: 0rem 0.8rem 1.5rem rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
    margin-left: 5rem;
}

.about button:hover {
    background-color: #ecc725;
    color: black;
    cursor: pointer;
    transition: 0.4s;
}

.section--first {
    background: black;
}

.section--second {
    background: darkblue;
}

.section--third {
    background: white;
    display: flex;
    padding: 4rem;
    align-items: center;
}

.arrow {
    width: 10%;
    height: 100%;
    background: white;
    font-size: 300%;
    outline: none;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

.arrow:hover {
    cursor: pointer;
}

.reviews {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    gap: 2rem;
    width: 80%;
    flex-wrap: wrap;
    margin-top: 20rem;
}

.review {
    width: 26.6rem;
    min-height: 30rem;
    background: darkred;
    list-style: none;
    padding: 4rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 0.5rem;
    background: white;
    box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2),
        inset 0 -1rem 1rem -1rem rgba(0, 0, 0, 0.1);
    position: relative;
    animation-name: fadein;
    animation-duration: 0.8s;
}

.review:nth-of-type(4),
.review:nth-of-type(5),
.review:nth-of-type(6) {
    display: none;
}

.review img {
    width: 15rem;
    height: 15rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    text-align: center;
    margin-left: 2rem;
}

.quote {
    font-size: 500%;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    line-height: 3rem;
}

.stars {
    color: gold;
    display: flex;
    justify-content: center;
    align-items: center;
}

.review p {
    font-style: italic;
    padding-bottom: 2rem;
    border-bottom: 0.5 rem solid rgba(0, 0, 0, 0.2);
    margin-top: 1rem;
}

footer {
    height: 61rem;
    width: 100%;
    position: absolute;
    /* bottom: 0;weghalen als niet werkt*/
    background: #313139;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #fff;
    padding: 10rem 0 3rem;
    border-top-left-radius: 12.5rem;
    font-size: 1.3rem;
    height: 85vh;
    line-height: 2rem;
}

footer p,h1,h4, .email-id{
    color: #999999;
}

.row {
    width: 85%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.col {
    flex-basis: 25%;
    padding: 1rem;
}

.col:nth-child(2),
.col:nth-child(3) {
    flex-basis: 15%;
}

.logo {
    width: 25rem;
    margin-bottom: 3rem;
    margin-left: -5.3rem;
}

.col h3 {
    width: fit-content;
    margin-bottom: 4rem;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.place {
    width: fit-content;
    margin-bottom: 4rem;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-left: 2rem;
}

.col p {
    margin-right: 12rem;
}



.email-id {
    width: fit-content;
    border-bottom: 0.1rem solid #ccc;
    margin: 2rem 0;
}

ul li {
    list-style: none;
    margin-bottom: 1.2rem;
}

ul li a {
    text-decoration: none;
    color: #999999;
}


form {
    padding-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 0.1rem solid #ccc;
    margin-bottom: 5rem;
    gap: 1rem;
}

form .fas {
    font-size: 1.8rem;
    margin-right: 1rem;
}

form input {
    width: 100%;
    background: transparent;
    color: #ccc;
    border: 0;
    outline: none;
}

form button {
    background: transparent;
    border: 0;
    outline: none;
    cursor: pointer;

}

form button .fas {
    font-size: 1.6rem;
    color: #ccc;
}

.social-icons .fab {
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    text-align: center;
    line-height: 4rem;
    font-size: 2rem;
    color: #000;
    background: #fff;
    margin-right: 1.5rem;
    cursor: pointer;
}

.social-icons:hover {
    cursor: pointer;
}

.social-icons a {
    color: white;
}

hr {
    width: 100%;
    border: 0;
    border-bottom: 0.1rem solid #ccc;
    margin: 2rem auto;
}

.copyright {
    text-align: center;
    background: #26262e;
    min-height: 13.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: -9rem;
    margin-top: -2rem;

}

.underline {
    width: 100%;
    height: 0.5rem;
    background: #39b54a;
    border-radius: 0.3rem;
    position: absolute;
    top: 2.5rem;
    left: 0;
    overflow: hidden;
}

footer a:hover {
    border-bottom: 0.2rem solid #39b54a;
}

.underline span {
    width: 1.5rem;
    height: 100%;
    background: #ffdf4f;
    border-radius: 0.3rem;
    position: absolute;
    top: 0;
    left: 1rem;
    animation: moving 2s linear infinite;
}


@keyframes moving {
    0% {
        left: -2rem
    }

    100% {
        left: 100%;
    }

}

button i {
    color: #ccc;
}

@media (max-width:70rem) {
    footer {
        bottom: unset;
    }

    .col {
        flex-basis: 100%;

    }

    .col:nth-child(2),
    .col:nth-child(3) {
        flex-basis: 100%;
    }
}

::-webkit-scrollbar {
    width: 1.5rem;
}

::-webkit-scrollbar-track {
    background: #d1e5ff;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to right, #000000, #434343);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

@media screen and (max-width: 118rem) {
    .about {
        width: 100%;
        height: auto;
    }
}

@media screen and (max-width: 65rem) {
    .about .content img {
        margin-bottom: 3.5rem;
    }

    .text h1 {
        font-size: 6rem;
        margin-bottom: 2.5rem;
    }
}

@keyframes fadein {
    from {
        opacity: 0;
        filter: blur(1rem);
    }

    to {
        opacity: 1;
        filter: blur(0);
    }
}

@media screen and (max-width: 50rem) {
    .arrow {
        display: none;
    }

    .reviews {
        width: 100%;
    }
}

@media (max-width: 153.5rem) {
    header {
        padding: 1.5rem 3%;
        transition: .2s;
    }

    .icons {
        padding: 0 3%;
        transition: .2s;
    }

    .scroll-down {
        right: 3%;
        transition: .2s;
    }
}

@media (max-width: 146rem) {
    section {
        padding: 0 12%;
        transition: .2s;
    }
}

@media (max-width: 134rem) {
    .hero-img img {
        width: 100%;
        height: auto;
    }

    .hero-text h1 {
        font-size: 7.5rem;
        margin: 0 0 3rem;
    }

    .hero-text h5 {
        margin-bottom: 2.5rem;
    }
}

@media (max-width: 119.5rem) {
    section {
        padding: 0 3%;
        transition: .2s;
    }

    .hero-text {
        padding-top: 11.5rem;
    }

    .hero-img img {
        width: 56rem;
        height: auto;
    }

    .hero {
        height: 100%;
        gap: 1rem;
        grid-template-columns: 1fr;
    }

    .icons {
        display: none;
    }

    .scroll-down {
        display: none;
   }
}
@media (max-width: 68rem) {
    .hero-img img {
        width: 100%;
        height: auto;
    }
}
@media screen and (max-width:64.125rem) {
    html{
        overflow-x: hidden;
    }
    body{
        width: 100%;
    }
    .wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-left: 22.3rem;
    }
    .label{
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .navlist a{
        font-size: 1.2rem;
    }
    .navlist{
        height: 5rem;
    }
    .searchBar{
        width: 30rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .heading{
        display: flex;
        justify-content: space-between;
    }
    .heading-text{
        display: flex;
        flex-direction: column;
        margin-left: 7.5rem;
        width: 50%;
}
    .heading img{
        margin-left: 6rem;
        width: 40rem;
    }
    .heading-text1{
        margin-left: -5rem;
        font-size: 2.5rem;
    }
    .heading-text2{
        margin-left: -5rem;
        font-size: 1rem;
        display: flex;
        flex-direction: column;
    }
    .part--section1{
        display: none;
    }
    .cart i{
        }
    footer{
        height: 170%;
    }
    .col{
        display: flex;
        flex-direction: column;
        height: 100%; 
    }
    .col p,h4{
        display: flex;
        justify-content: flex-start;
        margin-left: 1rem;}
    .reviews{
        display: flex;
        flex-direction: column;
    }
    .container img{
        width: 40rem;
        margin-right: 25rem;
    }
}
@media screen and (max-width:48.9375rem) {
    .wrapper{
        margin-left: 6rem;
    }
    .navlist a{
        font-size: 1.6rem;
    }

    .hero{
        display: flex;
        flex-direction: column;
    }

    .hero-3{
        width: 10rem;
        margin-right: 65rem;
    }
    .hero-text h5{
        font-size: 2.4rem;
    }
    .hero-text h1{
        font-size: 2.4rem;
    }
    .hero-text h4{
        font-size: 2rem;
    }
    .part--section{
        width: 21.3rem;
        height: 40rem;
    }
    .part>img {
        width: 70%;
        height: 100%;
        object-fit: contain;
    }
    img.heading-img{
        margin-left: -2rem;
    }
.container {
    margin-bottom: 10rem;
}

    .container h1{
        margin-left:10rem;
        font-size: 3rem;
    }
    .container p{
        margin-left: 6rem;
        font-size: 1.2rem;
    }
    .container .about{
        margin-left: 3rem;
    }
    .container img{
        margin-left: 3rem;
        width: 40rem;
    }
}

@media screen and (max-width:47.375rem) {
    .navlist a{
        font-size: 1rem;
    }
    .part--section{
        width: 18.8rem;
        height: 40rem;
    }
    .part>img {
        width: 60%;
        height: 100%;
        object-fit: contain;
    }

}

@media screen and (max-width:43.75rem) {
    .part--section{
        width: 20.3rem;
        height: 40rem;
    }
    .part>img {
        width: 70%;
        height: 100%;
        object-fit: contain;
    }
}
@media screen and (max-width:43.6875rem) {
    .part--section{
        width: 18.3rem;
        height: 40rem;
    }
    .part>img {
        width: 60%;
        height: 100%;
        object-fit: contain;
    }
}
@media screen and (max-width:47.3125rem){
    .parts{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
    }
    .part--section{
        width: 35rem;
    }
    .part>img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
    }
    .part>img{
        margin-left: 3rem;
    }
}
@media screen and (max-width:38.0625rem){
    
    .heading-text{
        margin-bottom: -8rem;
    }

    img.heading-img{
        width: 40%;
    }
    
}
@media screen and (max-width:35rem){
    .navlist a{
        font-size: 0.7rem;
    }
    .nav-menu li{
        font-size: 1rem;
    }
    footer{
        height: 140%;
    }
}
@media screen and (max-width:34.625rem){
   .heading-text1 {
        font-size: 1.4rem;
    }

    .searchBar{
        margin-right: 8rem;
    }

    .button{
        width: 7rem;
        height: 5rem;
        margin-right: 8rem;
    }
}
@media screen and (max-width:32.3125rem){
    .container h1{
        margin-left: 10rem;
    }
    .container p{
        margin-left: 10rem;
    }
    .container .about{
        margin-left: 8rem;
    }
    .searchBar{
        margin-right: 16rem;
    }
    .container img{
        width: 20rem;
        margin-right: 31rem;
    }
    .hero-3 img{
        width: 30rem;
    }
    .navlist a{
        font-size: 0.93rem;
        display: flex;
        justify-content: space-evenly;
        gap: 0;
        margin: 2.5rem;
    }
    .nav-menu li a{
        font-size: 0.75rem;
        
    }

    .hero{
        padding: 0;
    }

    .hero h1,h5,h4{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero h1{
        font-size: 2rem;
    }
    .hero h5{
        font-size: 2rem;
    }
    .hero h4{
        width: 90%;
        font-size: 1.4rem;
    }
    .hero-text a.ctaa{
        width: 22rem;
    }
    .heading{
        padding: 5rem;
        display: flex;
        justify-content: space-between;
    }
    .heading-text{
        width: 45%;
        
    }
    .button{
        margin-left:22rem;
    }
    .wrapper{
        display: none;
    }

    .hero img{
        width: 300%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    footer h4{
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        margin-right: 29rem;

    }

    .part>img{
        margin-left: 3rem;
    }
}

@media screen and (max-width:63.1875rem){
    footer h4{
        margin-right: 26rem;
       
    }
    footer{
        height: 180%;
        width: 100%;
    }
    .hero{
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-direction: column;
    }
    

    .hero h5,h1{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }
    .hero img{

        margin-left: 25rem;
    }
}
  </style>
</body>

</html>