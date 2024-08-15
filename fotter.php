








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

      <div class="">
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




