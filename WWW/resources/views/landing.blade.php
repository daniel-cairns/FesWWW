<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FES</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto|Monsieur+La+Doulaise|Codystar|Monda|Great+Vibes' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="css/styles-landing.css" />
    <script src="/js/vendor/modernizr.js"></script>
  </head>
  <body>

  <div id="landing">
    <h1><img src="img/logo/logo.png" alt=""></h1>
    <div>
      <h2 id="enter">Enter</h2>
    </div>  
  </div>

  <div id="logo">
    <img src="img/logo/logo.png" alt="">
  </div>
    
    <div id="content" class="clearfix">
    
      <div id="weddings" class="image-box">
        <img src="img/landing/wedding-home.jpg" alt="">
        <div class="hover-window">  
          <div class="hover-window-text">
            <a href="/weddings"><h1>Weddings</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptas explicabo similique cupiditate, adipisci corrupti ullam rerum ipsum quo! Obcaecati, incidunt, officia. Maxime distinctio, harum excepturi, neque quam architecto reprehenderit.</p></a>
          </div>
        </div>  
      </div>

      <div id="portraits" class="image-box clearfix">
        <img src="img/landing/portrait-home.jpg" alt="">
        <div class="hover-window">  
          <div class="hover-window-text">
            <a href="/portraits"><h1>Portraits</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptas explicabo similique cupiditate, adipisci corrupti ullam rerum ipsum quo! Obcaecati, incidunt, officia. Maxime distinctio, harum excepturi, neque quam architecto reprehenderit.</p></a>
          </div>
        </div>  
      </div>
      
      <div id="seniors" class="image-box clearfix">
        <img src="img/landing/senior-home.jpg" alt="">
        <div class="hover-window">  
          <div class="hover-window-text">
            <a href="/seniors"><h1>Seniors</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptas explicabo similique cupiditate, adipisci corrupti ullam rerum ipsum quo! Obcaecati, incidunt, officia. Maxime distinctio, harum excepturi, neque quam architecto reprehenderit.</p></a>
          </div>
        </div>  
      </div>
      
      <div id="commercial" class="image-box clearfix">
        <img src="img/landing/commercial-home.jpg" alt="">
        <div class="hover-window">  
          <div class="hover-window-text">
            <a href="/commercial"><h1>Commercial</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptas explicabo similique cupiditate, adipisci corrupti ullam rerum ipsum quo! Obcaecati, incidunt, officia. Maxime distinctio, harum excepturi, neque quam architecto reprehenderit.</p></a>
          </div>
        </div>  
      </div>
      
      <div id="models" class="image-box">
        <img src="img/landing/model-home.jpg" alt="">
        <div class="hover-window">  
          <div class="hover-window-text">
            <a href="/models"><h1>Models</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptas explicabo similique cupiditate, adipisci corrupti ullam rerum ipsum quo! Obcaecati, incidunt, officia. Maxime distinctio, harum excepturi, neque quam architecto reprehenderit.</p></a>
          </div>
        </div>  
      </div>
    
    </div>  <!-- end #content -->
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>
      $("#enter").click(function(){
        $("#landing").toggle( "slow" );
        $("#logo").toggle("slow");
      });
    </script>
  </body>
</html>