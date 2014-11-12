<?php
date_default_timezone_set("America/New_York");

$time = time();
//1415847600 //10pm EST tonight
//1415970000 //8am EST Friday
$isit = "NOT YET";
$text = "More Info";
if ($time >= 1415847600) 
  {
    $text = "Live Stream";
    $isit="YES!";
  }
if ($time >= 1415970000) 
  {
    $text = "More Info";
    $isit="IT'S OVER!";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    
    <title>IS IT #ROKERTHON?</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="cover.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"></h3>
              <ul class="nav masthead-nav">
                
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading" id="headline"><?php echo $isit; ?></h1>

            <p><img src="assets/images/rokerthonpre.jpg" width="75%"></p>
            
            <p class="lead" id="summary"></p>
            
            <p class="lead">
            <div class="share-tools">
              <a id="storylink" href="http://today.com/rokerthon" class="btn btn-lg btn-default"><?php echo $text; ?></a>
              
              <a alt="Share on Facebook"
                      class="btn btn-lg btn-default"
                      data-source="feature-bottom"
                      data-social="Facebook"
                      href="javascript:void(0);"
                      onclick="window.open( 'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://isitrokerthon.com'), 'facebook-share-dialog', 'width=626,height=436'); return false;">
                      <img src="assets/images/facebook-black.svg" align="left"> Facebook
                    </a>
              <a alt="Share on Twitter"
                      class="btn btn-lg btn-default"
                      data-source="feature-bottom"
                      data-social="Twitter"
                      href="javascript:void(0);"
                      onclick="window.open( 'http://www.twitter.com/intent/tweet?text=IS%20IT%20%23ROKERTHON%3F&url=http://isitrokerthon.com/','','width=550, height=350, scrollbars=no' )">

                      <img src="assets/images/fontawesome-twitter-black.0.svg" align="left"> Twitter
                    </a>
                  </div>
            </p>
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              
            </div>
          </div>

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56708309-1', 'auto');
  ga('send', 'pageview');

  </script>
  </body>
</html>
