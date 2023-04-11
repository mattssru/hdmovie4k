<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/styles.css?v=<?=filemtime('./assets/css/styles.css');?>">
        <link rel="stylesheet" href="./dist/fonts/boxicons-2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="./assets/fonts/fonts.css" />
        <title>SecureBusinessCard</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='fas fa-chevron-up scrolltop__icon'></i>
        </a>


        <main class="l-main" style="background: gray; height: 100vh;">
          <div class="container" style="max-width: 1540px;">
            <div class="layout">
              <div class="grid__left">
                <div class="topic__movie">ประเภท</div>
              </div>
              <div class="grid__center">
                <div class="topic__movie">ประเภท</div>
                <div class="grid__center__in">
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                  <div class="item_movie">
                    <a href="#">
                      <img src="./assets/images/movie.jpeg" alt="">
                    </a>
                    <p class="text__movie">JOHN WICK (2014)</p>
                  </div>
                </div>
              </div>
              <div class="grid__right">
                <div class="topic__movie">หมวดหมู่</div>
              </div>
            </div>
          </div>
        </main>


        <!--========== SCROLL REVEAL ==========-->
        <script src="./assets/js/scrollreveal.js"></script>
        <script src="./assets/js/jquery.min.js"></script>
        
        <!--========== MAIN JS ==========-->
        <script src="./assets/js/global.js?v=<?=filemtime('./assets/js/global.js');?>"></script>
        <script>
          $(document).ready(function () {
            $(".btn-hamburger").click(function () {
              $(this).toggleClass('open');
              $(".menu").toggleClass("menu-open");
              $(".menu-bg").toggleClass('menu-bg-active');
            });
            $('.menu-bg').on('click', function () {
              $('.btn-hamburger ').click();
            });
          });
        </script>
    </body>
</html>