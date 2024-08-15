<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<?php include_once('head.php');?>



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
                <?php




                    // SQL query to retrieve offers from the database
                    $sql = "SELECT * FROM hotel_info";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<a href='index.html'>";
                            echo "<div class='offer-offer'>";
                            echo "<img alt='image' src='" . $row['images'] . "' class='image' />";
                            echo "<div class='offer-content'>";
                            echo "<span class='offer-text'><span>" . $row['location'] . "</span></span>";
                            echo "<span class='offer-text1'><span>" . $row['contact_information'] . "</span></span>";
                            echo "<span class='offer-text2'><span>" . $row['pb'] . "</span></span>";
                            echo "</div>";
                            echo "</div>";
                            echo "</a>";

                        }
                    } else {
                        echo "No offers available.";
                    }

                    // Close the database connection
                    $conn->close();
                ?>
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


  </body>
  <?php include_once('fotter.php');?>

  <?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>

