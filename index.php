<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">
  <script src="https://kit.fontawesome.com/0ca1088645.js" crossorigin="anonymous"></script>

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>Home</title>

  <link href="./main.3da94fde.css" rel="stylesheet">
</head>

<body>

  <!-- Add your content of header -->

  <header>
    <nav class="navbar navbar-fixed-top navbar-default">
      <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <nav class="navbar-fullscreen" id="navbar-middle">
          <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <ul class="navbar-fullscreen-links">
            <li><a href="./index.php" title="">Home</a></li>
            <li><a href="./project.html" title="">Project(Android)</a></li>
            <li><a href="./project-js.html" title="">Project(React)</a></li>
            <li><a href="./project-flutter.html" title="">Project(Flutter)</a></li>
            <li><a href="./about.html" title="">About me</a></li>
            <!--  <li><a href="./components.html" title="">Components</a></li> -->
          </ul>

          <div class="footer-container">

            <p><small>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
            <p class="footer-share-icons">
              <a href="https://github.com/hariose" class="fa-icon" title="">
                <i class="fab fa-github"></i>
              </a>
            </p>

          </div>


        </nav>

      </div>
    </nav>
  </header>

  <div class="hero-full-container background-image-container white-text-container" style="background-image:url('./assets/images/mainImage.png')">
    <div class="overlay-gradient"></div>
    <p style="text-align:center; color: black;"> <strong>우측상단의 메뉴 혹은 하단의 네비게이션바를 이용해주세요</strong></p>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-7 col-md-offset-1">
          <div class="hero-full-wrapper">
            <div class="text-content">
              <h2>EuiSung Jung(Todd, Hariose)</h2>
              <p style="color: white;">
                <b>대학교 4학년 재학중의 안드로이드 개발자 입니다.
                  프론트엔드 개발자를 희망중에 있으며 Kotlin 을 통한 안드로이드 어플 개발을 담당하고 있습니다.
                </b>
              </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navbarFixedTopAnimation();
      closeMenuBeforeGoingToPage();
    });
  </script>


  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <ul class="navbar-nav nav">
            <li>
              <a href="./index.html" title="홈" class="project-nav left"><span class="project-number">00</span>Previous</a>
            </li>
          </ul>

          <p class="h5 navbar-text text-center">
            Navigation
            <span class="project-number">
              00
            </span>
          </p>

          <ul class="navbar-nav nav navbar-right">
            <li>
              <a href="./project.html" title="안드로이드" class="project-nav right"><span class="project-number">01</span>Next</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
  </script>
  <script type="text/javascript" src="./main.4c6e144e.js"></script>
</body>

</html>