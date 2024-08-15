

<?php 
include "db_conn.php";
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Traveler template</title>
    <meta property="og:title" content="Traveler template" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Karla;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
  </head>
  <body>
    <link rel="stylesheet" href="./style.css" />
    <div>
      <link href="./index.css" rel="stylesheet" />

      <div class="home-container">
        <section class="home-hero">
          <div class="home-main">
            <div class="home-video">
              <video
                src=""
                poster="public/Videos/hero-cover1-1500h.png"
                class="home-video1"
              ></video>
              <div class="home-tint"></div>
            </div>
            <div class="home-content">
              <header data-thq="thq-navbar" class="home-navbar">
                <img alt="logo" src="public/logo.svg" class="home-logo" />

                  <div class="home-links">
                  <a href="travell_place.php" class="home-link link">Place</a>
                    <a href="hotel_book.php">Hotel</a>
                    <a href="gidebook.php">Gide Book</a>
                    <a href="vehicle.php" >Vehicle</a>
                    <a href="cart.php" >Cart</a>
                    <a href="logout.php">
                      <button class="home-login button">Logout</button>
                    </a>
                    <a href="user.php">
                    <button class="button-r">Profile</button>
                    </a>
                  </div>
                  <div data-thq="thq-burger-menu" class="home-menu">
                  <button class="home-hamburger button">
                    <svg viewBox="0 0 1024 1024" class="home-icon">
                      <path
                        d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                      ></path>
                    </svg>
                  </button>
                </div>
                <div data-thq="thq-mobile-menu" class="home-mobile-menu">
                  <div
                    data-thq="thq-mobile-menu-nav"
                    data-role="Nav"
                    class="home-nav"
                  >
                    <div class="home-container1">
                      <img
                        alt="logo"
                        src="public/logo.svg"
                        class="home-logo1"
                      />
                      <div data-thq="thq-close-menu" class="home-menu-close">
                        <svg viewBox="0 0 1024 1024" class="home-icon02">
                          <path
                            d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <nav
                      data-thq="thq-mobile-menu-nav-links"
                      data-role="Nav"
                      class="home-nav1"
                    >
                      <a class="home-text02">About</a>
                      <a href="travell_place.php" >Place</a>
                      <a href="hotel_book.php">Hotel</a>
                      <a href="gidebook.php">Gide Book</a>
                      <a href="vehicle.php" >Vehicle</a>
                      <a href="cart.php" >Cart</a>
                    </nav>
                    <div class="home-container2">
                      <a href=logout.php>
                        <button class="home-login button">Logout</button>
                      </a>
                      <a href="user.php">
                        <button class="button">Profile</button>
                      </a>
                    </div>
                  </div>
                  <div class="home-icon-group">
                    <svg
                      viewBox="0 0 950.8571428571428 1024"
                      class="home-icon04"
                    >
                      <path
                        d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                      ></path>
                      viewBox="0 0 877.7142857142857 1024"
                      class="home-icon06"
                    >
                      <path
                        d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                      ></path>
                      viewBox="0 0 602.2582857142856 1024"
                      class="home-icon08"
                    >
                      <path
                        d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                      ></path>
                    </svg>
                  </div>
                </div>
              </header>
              <div class="home-center">
                <div class="home-heading">
                  <h1 class="home-header">See the world like a local</h1>
                  <p class="home-caption">
                    Find a local guide consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="feature" class="home-feaures">
            <div class="home-content01">
              <div class="feature-feature">
                <div class="feature-heading">
                  <img
                    alt="image"
                    src="public/Icons/thumbs-up.svg"
                    class="feature-icon"
                  />
                  <h3 class="feature-header">
                    <span>Hand Picked Guides</span>
                  </h3>
                </div>
                <p class="feature-description">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </span>
                </p>
              </div>
              <div class="feature-feature">
                <div class="feature-heading">
                  <img
                    alt="image"
                    src="public/Icons/headset.svg"
                    class="feature-icon"
                  />
                  <h3 class="feature-header"><span>24/7 Support</span></h3>
                </div>
                <p class="feature-description">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </span>
                </p>
              </div>
              <div class="feature-feature">
                <div class="feature-heading">
                  <img
                    alt="image"
                    src="public/Icons/person.svg"
                    class="feature-icon"
                  />
                  <h3 class="feature-header"><span>Private Tours</span></h3>
                </div>
                <p class="feature-description">
                  <span>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </span>
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="tours" class="home-quick-view">
          <div class="home-main1">
            <div class="home-heading01">
              <h2 class="home-header01">See the world like a local</h2>
              <p class="home-caption01">
                Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                eiusmod tempor incididunt.
              </p>
            </div>
            <div class="home-sorting">
              <button class="home-option-primary button">All</button>
              <button class="button-option button">Popular</button>
              <button class="button-option button">Featured</button>
              <button class="button-option button">Trending</button>
            </div>
          </div>
          <div class="home-offers">
            <a href="index.html">
              <div class="home-offer-container">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-11-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text"><span>Crete, Greece</span></span>
                      <span class="offer-text1">
                        <span>3 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container1">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-21-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text">
                        <span>Barcelona, Spain</span>
                      </span>
                      <span class="offer-text1">
                        <span>54 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container2">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-31-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text">
                        <span>Machu Picchu, Peru</span>
                      </span>
                      <span class="offer-text1">
                        <span>34 Local Guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container3">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-41-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text"><span>Doha, Quatar</span></span>
                      <span class="offer-text1">
                        <span>1 Local guide</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container4">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-51-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text">
                        <span>Rhodes, Greece</span>
                      </span>
                      <span class="offer-text1">
                        <span>6 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container5">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-61-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text"><span>New York, USA</span></span>
                      <span class="offer-text1">
                        <span>132 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container6">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-71-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text"><span>Doha, Quatar</span></span>
                      <span class="offer-text1">
                        <span>1 Local guide</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container7">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-81-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text">
                        <span>Rhodes, Greece</span>
                      </span>
                      <span class="offer-text1">
                        <span>6 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-offer-container8">
                <div class="offer-offer">
                  <img
                    alt="image"
                    src="public/Offers/offers-91-1500w.png"
                    class="offer-image"
                  />
                  <div class="offer-content">
                    <div class="offer-details">
                      <span class="offer-text"><span>New York, USA</span></span>
                      <span class="offer-text1">
                        <span>132 Local guides</span>
                      </span>
                    </div>
                    <span class="offer-text2">
                      <span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt.
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="home-pagination">
            <button class="home-previous button-option button">
              <svg viewBox="0 0 1024 1024" class="home-icon11">
                <path d="M658 708l-60 60-256-256 256-256 60 60-196 196z"></path>
              </svg>
              <span class="home-text07">Previous</span>
            </button>
            <div class="home-pages">
              <div class="home-primary">
                <div class="home-number-current page-current page">
                  <span class="home-text08">1</span>
                </div>
                <div class="page"><span class="home-text09">2</span></div>
                <div class="page home-number1">
                  <span class="home-text10">3</span>
                </div>
              </div>
              <img alt="image" src="public/Icons/more.svg" class="home-more" />
              <div class="page"><span class="home-text11">12</span></div>
            </div>
            <button class="home-next button-option button">
              <span class="home-text12">Next</span>
              <svg viewBox="0 0 1024 1024" class="home-icon13">
                <path
                  d="M426 256l256 256-256 256-60-60 196-196-196-196z"
                ></path>
              </svg>
            </button>
          </div>
        </section>
        <section class="home-testimonials">
          <div class="home-content02">
            <div class="home-heading02">
              <span class="home-title">Customer testimonial</span>
              <p class="home-quote">
                “We’ve used Traveler to lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.”
              </p>
            </div>
            <div class="home-details">
              <div class="home-author">
                <img
                  alt="image"
                  src="public/Avatar/quote-200h.png"
                  class="home-avatar"
                />
                <span class="home-name">Michael McDonald</span>
              </div>
              <div class="home-controls">
                <div class="page"><span class="home-text13">&lt;</span></div>
                <div class="home-next1 page">
                  <span class="home-text14">&lt;</span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="how-it-works" class="home-highlights">
          <div class="home-highlight">
            <div class="home-content03">
              <div class="home-heading03">
                <h2 class="home-header02">
                  Excepteur sint occaecat cupidatat non proident
                </h2>
                <p class="home-caption02">
                  Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt.
                </p>
              </div>
              <button class="button-arrow button">
                <span class="home-text15">Read more</span>
                <span class="home-text16">&gt;</span>
              </button>
            </div>
            <div class="home-image1">
              <img
                alt="image"
                src="public/Highlights/highlight-1-1500w.png"
                class="home-image2"
              />
              <div class="home-rectangle"></div>
            </div>
          </div>
          <div class="home-highlight1">
            <div class="home-image3">
              <img
                alt="image"
                src="public/Highlights/highlight-2-1500w.png"
                class="home-image4"
              />
            </div>
            <div class="home-content04">
              <div class="home-heading04">
                <h2 class="home-header03">
                  Excepteur sint occaecat cupidatat non proident
                </h2>
                <p class="home-caption03">
                  <span>
                    Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt.
                  </span>
                  <br />
                  <br />
                  <span>
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                  <br />
                </p>
              </div>
              <button class="home-find button">Find a local guide</button>
            </div>
          </div>
        </section>
        <section id="destinations" class="home-destinations">
          <div class="home-video-details">
            <div class="home-heading05">
              <h2 class="home-header04">Spotlight destinations</h2>
              <p class="home-caption04">
                Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                eiusmod tempor incididunt.
              </p>
            </div>
            <div class="home-video-wrapper">
              <div class="home-tint1">
                <img
                  alt="image"
                  src="public/Icons/play.svg"
                  class="home-image5"
                />
              </div>
              <video
                src=""
                poster="public/Videos/spotlight-cover1-1500w.png"
                class="home-video2"
              ></video>
            </div>
          </div>
          <p class="home-caption05">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis et quasi architecto.
          </p>
          <div class="home-list">
            <a href="index.html" class="home-navlink09">
              <div class="home-location-wrapper">
                <div class="location-item">
                  <img
                    alt="image"
                    src="public/Destinations/destination-1-400h.png"
                    class="location-background"
                  />
                  <div class="location-content">
                    <span class="location-location">
                      <span>Tokyo, Japan</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html" class="home-navlink10">
              <div class="home-location-wrapper1">
                <div class="location-item">
                  <img
                    alt="image"
                    src="public/Destinations/destination-2-400h.png"
                    class="location-background"
                  />
                  <div class="location-content">
                    <span class="location-location">
                      <span>Paris, France</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html" class="home-navlink11">
              <div class="home-location-wrapper2">
                <div class="location-item">
                  <img
                    alt="image"
                    src="public/Destinations/destination-3-400h.png"
                    class="location-background"
                  />
                  <div class="location-content">
                    <span class="location-location">
                      <span>Bruges, Belgium</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html" class="home-navlink12">
              <div class="home-location-wrapper3">
                <div class="location-item">
                  <img
                    alt="image"
                    src="public/Destinations/destination-4-400h.png"
                    class="location-background"
                  />
                  <div class="location-content">
                    <span class="location-location">
                      <span>London, UK</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <button class="home-find1 button">Find a local guide</button>
        </section>
        <section id="guides" class="home-guides">
          <div class="home-heading06">
            <h2 class="home-header05">Meet our guides</h2>
            <p class="home-caption06">
              Lorem ipsum dolor sit consectetur adipiscing elit, sed do eiusmod
              tempor incididunt.
            </p>
          </div>
          <div class="home-list1">
            <a href="index.html">
              <div class="home-guide-wrapper">
                <div class="guide-guide">
                  <img
                    alt="image"
                    src="public/Guides/guide-1.png"
                    class="guide-portrait"
                  />
                  <div class="guide-details">
                    <h3 class="guide-name"><span>Miura Avaron</span></h3>
                    <span class="guide-location">
                      <span>Tokyo, Japan</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-guide-wrapper1">
                <div class="guide-guide guide-root-class-name2">
                  <img
                    alt="image"
                    src="public/Guides/guide-2.png"
                    class="guide-portrait"
                  />
                  <div class="guide-details">
                    <h3 class="guide-name"><span>Miura Avaron</span></h3>
                    <span class="guide-location">
                      <span>Paris, France</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-guide-wrapper2">
                <div class="guide-guide guide-root-class-name">
                  <img
                    alt="image"
                    src="public/Guides/guide-3.png"
                    class="guide-portrait"
                  />
                  <div class="guide-details">
                    <h3 class="guide-name"><span>Miura Avaron</span></h3>
                    <span class="guide-location">
                      <span>Bruges, Belgium</span>
                    </span>
                  </div>
                </div>
              </div>
            </a>
            <a href="index.html">
              <div class="home-guide-wrapper3">
                <div class="guide-guide guide-root-class-name1">
                  <img
                    alt="image"
                    src="public/Guides/guide-4.png"
                    class="guide-portrait"
                  />
                  <div class="guide-details">
                    <h3 class="guide-name"><span>Miura Avaron</span></h3>
                    <span class="guide-location"><span>London, UK</span></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </section>
        <section class="home-articles">
          <div id="articles" class="home-content05">
            <div class="home-heading07">
              <h2 class="home-header06">
                Excepteur sint occaecat cupidatat non proident
              </h2>
              <p class="home-caption07">
                Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                eiusmod tempor incididunt.
              </p>
            </div>
            <div class="home-list2">
              <div class="home-row">
                <div class="article-article article-root-class-name1">
                  <img
                    alt="image"
                    src="public/Articles/articles-11-1500w.png"
                    class="article-image"
                  />
                  <div class="article-content">
                    <div class="article-heading">
                      <h2 class="article-header">
                        <span>Understand your customers</span>
                      </h2>
                      <p class="article-description">
                        <span>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Excepteur sint occaecat cupidatat
                          non proident, sunt in culpa qui officia deserunt
                          mollit anim id est laborum.
                        </span>
                      </p>
                    </div>
                    <button class="button-arrow button">
                      <span class="article-text">Read more</span>
                      <span class="article-text1">&gt;</span>
                    </button>
                  </div>
                </div>
                <div class="article-article article-root-class-name">
                  <img
                    alt="image"
                    src="public/Articles/articles-21-1500w.png"
                    class="article-image"
                  />
                  <div class="article-content">
                    <div class="article-heading">
                      <h2 class="article-header">
                        <span>Understand your customers</span>
                      </h2>
                      <p class="article-description">
                        <span>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua.
                        </span>
                      </p>
                    </div>
                    <button class="button-arrow button">
                      <span class="article-text">Read more</span>
                      <span class="article-text1">&gt;</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="home-row1">
                <div class="article-article article-root-class-name2">
                  <img
                    alt="image"
                    src="public/Articles/articles-31-1500w.png"
                    class="article-image"
                  />
                  <div class="article-content">
                    <div class="article-heading">
                      <h2 class="article-header">
                        <span>Understand your customers</span>
                      </h2>
                      <p class="article-description">
                        <span>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua. Excepteur sint occaecat cupidatat
                          non proident, sunt in culpa qui officia deserunt
                          mollit anim id est laborum.
                        </span>
                      </p>
                    </div>
                    <button class="button-arrow button">
                      <span class="article-text">Read more</span>
                      <span class="article-text1">&gt;</span>
                    </button>
                  </div>
                </div>
                <div class="article-article article-root-class-name3">
                  <img
                    alt="image"
                    src="public/Articles/articles-41-1500w.png"
                    class="article-image"
                  />
                  <div class="article-content">
                    <div class="article-heading">
                      <h2 class="article-header">
                        <span>Understand your customers</span>
                      </h2>
                      <p class="article-description">
                        <span>
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit, sed do eiusmod tempor incididunt ut labore et
                          dolore magna aliqua.
                        </span>
                      </p>
                    </div>
                    <button class="button-arrow button">
                      <span class="article-text">Read more</span>
                      <span class="article-text1">&gt;</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="home-row2">
                <button class="home-read-all button-option button">
                  Read all articles
                </button>
              </div>
            </div>
          </div>
        </section>
        <section class="home-faq">
          <div id="faqs" class="home-content06">
            <div class="home-heading08">
              <h2 class="home-header07">Frequently asked questions</h2>
              <p class="home-caption08">
                Lorem ipsum dolor sit consectetur adipiscing elit, sed do
                eiusmod tempor incididunt.
              </p>
            </div>
            <div class="home-accordion">
              <div
                data-role="accordion-container"
                class="accordion home-element"
              >
                <div class="home-content07">
                  <span class="home-header08">
                    Lorem ipsum dolor sit ametetur elit?
                  </span>
                  <span data-role="accordion-content" class="home-description">
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                </div>
                <div class="home-icon-container">
                  <svg
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-closed"
                    class="home-icon15"
                  >
                    <path
                      d="M213.333 554.667h256v256c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-256h256c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-256v-256c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667v256h-256c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-open"
                    class="home-icon17"
                  >
                    <path
                      d="M213.333 554.667h597.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-597.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div
                data-role="accordion-container"
                class="home-element1 accordion"
              >
                <div class="home-content08">
                  <span class="home-header09">
                    Excepteur sint occaecat cupidatat non sunt in culpa qui
                    officia deserunt mollit anim id est laborum?
                  </span>
                  <span data-role="accordion-content" class="home-description1">
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                </div>
                <div class="home-icon-container1">
                  <svg
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-closed"
                    class="home-icon19"
                  >
                    <path
                      d="M213.333 554.667h256v256c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-256h256c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-256v-256c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667v256h-256c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-open"
                    class="home-icon21"
                  >
                    <path
                      d="M213.333 554.667h597.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-597.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div
                data-role="accordion-container"
                class="home-element2 accordion"
              >
                <div class="home-content09">
                  <span class="home-header10">
                    Tempor incididunt ut labore et dolore magna aliquat enim ad
                    minim?
                  </span>
                  <span data-role="accordion-content" class="home-description2">
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                </div>
                <div class="home-icon-container2">
                  <svg
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-closed"
                    class="home-icon23"
                  >
                    <path
                      d="M213.333 554.667h256v256c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-256h256c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-256v-256c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667v256h-256c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-open"
                    class="home-icon25"
                  >
                    <path
                      d="M213.333 554.667h597.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-597.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div
                data-role="accordion-container"
                class="home-element3 accordion"
              >
                <div class="home-content10">
                  <span class="home-header11">
                    Lorem ipsum dolor sit ametetur elit?
                  </span>
                  <span data-role="accordion-content" class="home-description3">
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                </div>
                <div class="home-icon-container3">
                  <svg
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-closed"
                    class="home-icon27"
                  >
                    <path
                      d="M213.333 554.667h256v256c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-256h256c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-256v-256c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667v256h-256c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-open"
                    class="home-icon29"
                  >
                    <path
                      d="M213.333 554.667h597.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-597.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
              </div>
              <div
                data-role="accordion-container"
                class="home-element4 accordion"
              >
                <div class="home-content11">
                  <span class="home-header12">
                    Incididunt ut labore et dolore?
                  </span>
                  <span data-role="accordion-content" class="home-description4">
                    Sed ut perspiciatis unde omnis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et
                    quasi architecto beatae vitae dicta sunt explicabo.
                  </span>
                </div>
                <div class="home-icon-container4">
                  <svg
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-closed"
                    class="home-icon31"
                  >
                    <path
                      d="M213.333 554.667h256v256c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-256h256c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-256v-256c0-23.552-19.115-42.667-42.667-42.667s-42.667 19.115-42.667 42.667v256h-256c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                    viewBox="0 0 1024 1024"
                    data-role="accordion-icon-open"
                    class="home-icon33"
                  >
                    <path
                      d="M213.333 554.667h597.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-597.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="find" class="home-find2">
          <div class="home-heading09">
            <h2 class="home-header13">Find a local guide now</h2>
            <p class="home-caption09">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam.
            </p>
          </div>
          <button class="home-find3 button">Find a local guide</button>
        </section>
        <section class="home-footer">
          <div class="home-content12">
            <div class="home-main2">
              <div class="home-branding">
                <div class="home-heading10">
                  <img alt="image" src="public/logo.svg" class="home-image6" />
                  <p class="home-caption10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore
                  </p>
                </div>
              </div>
              <div class="home-links1">
                <div class="home-items">
                  <button class="home-link02 button button-clean">
                    Find a guide
                  </button>
                  <a
                    href="#destinations"
                    class="home-link03 button button-clean"
                  >
                    Find a tour
                  </a>
                  <a
                    href="#destinations"
                    class="home-link04 button button-clean"
                  >
                    Visit a city
                  </a>
                  <a
                    href="#destinations"
                    class="home-link05 button button-clean"
                  >
                    Visit a country
                  </a>
                </div>
                <div class="home-items1">
                  <a
                    href="#how-it-works"
                    class="home-link06 button button-clean"
                  >
                    How it works
                  </a>
                  <button class="home-link07 button button-clean">
                    Cancelation policy
                  </button>
                  <button class="home-link08 button button-clean">
                    Local guides
                  </button>
                  <button class="home-link09 button button-clean">
                    Affiliate
                  </button>
                </div>
                <div class="home-items2">
                  <button class="home-link10 button button-clean">
                    About us
                  </button>
                  <button class="home-link11 button button-clean">Blog</button>
                  <button class="home-link12 button button-clean">
                    Partners
                  </button>
                  <button class="home-link13 button button-clean">Faqs</button>
                  <button class="home-link14 button button-clean">
                    Careers
                  </button>
                </div>
              </div>
            </div>
            <span class="home-copyright">
              © 2022 Character. All Rights Reserved.
            </span>
          </div>
        </section>
        <div class="home-accordion1">
          <script>
            function initAccordion() {
              /*
              Accordion - Code Embed
              */
              const accordionContainers = document.querySelectorAll(
                '[data-role="accordion-container"]'
              ); // All accordion containers
              const accordionContents = document.querySelectorAll(
                '[data-role="accordion-content"]'
              ); // All accordion content
              const accordionIconsClosed = document.querySelectorAll(
                '[data-role="accordion-icon-closed"]'
              ); // All accordion closed icons
              const accordionIconsOpen = document.querySelectorAll(
                '[data-role="accordion-icon-open"]'
              ); // All accordion open icons


              accordionContents.forEach((accordionContent) => {
                accordionContent.style.display = 'none'; //Hides all accordion contents
              });

              accordionIconsClosed.forEach((icon) => {
                icon.style.display = 'flex';
              });

              accordionIconsOpen.forEach((icon) => {
                icon.style.display = 'none';
              });

              accordionContainers.forEach((accordionContainer, index) => {
                if (accordionContainer.classList.contains('initialised')) {
                  return;
                }

                accordionContainer.classList.add('initiased');

                accordionContainer.addEventListener('click', () => {
                  if (accordionContents[index].style.display === 'flex') {
                    // If the accordion is already open, close it
                    accordionContents[index].style.display = 'none';
                    accordionIconsClosed[index].style.display = 'flex';
                    accordionIconsOpen[index].style.display = 'none';
                  } else {
                    // If the accordion is closed, open it
                    accordionContents.forEach((accordionContent) => {
                      accordionContent.style.display = 'none'; //Hides all accordion contents
                    });

                    accordionIconsClosed.forEach((accordionIcon) => {
                      accordionIcon.style.display = 'flex'; // Resets all icon transforms to 0deg (default)
                    });

                    accordionIconsOpen.forEach((accordionIcon) => {
                      accordionIcon.style.display = 'none';
                    });

                    accordionContents[index].style.display = 'flex'; // Shows accordion content
                    accordionIconsClosed[index].style.display = 'none'; // Rotates accordion icon 180deg
                    accordionIconsOpen[index].style.display = 'flex';
                  }
                });
              });
            }

            initAccordion();
          </script>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>





<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>