<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Mar 11 2017 20:10:42 GMT+0000 (UTC)  -->
<html data-wf-page="589bebcb88fa97e101898ea6" data-wf-site="5691d74711a368f064af1e40">
<head>
  <meta charset="utf-8">
  <title>Alonzo News</title>
  <meta content="Alonzo News" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/alonzo.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script src="../js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
  <header class="header w-container" id="header">
    <div class="w-row">
      <div class="w-col w-col-6">
        <a class="logo w-nav-brand" href="index.html"><img class="logo-img" src="../images/logo.svg">
        </a>
      </div>
      <div class="w-col w-col-6">
        <div class="social-links w-clearfix">
          <a class="facebook w-clearfix w-inline-block" href="https://www.facebook.com/AlonzoClemmonsA/" target="_blank"><img height="30" src="../images/1486970579_facebook_circle.svg" width="30">
            <div class="facebook-text-link social-text-link">Facebook</div>
          </a>
          <a class="w-clearfix w-inline-block youtube" href="https://www.youtube.com/results?search_query=alonzo+clemons" target="_blank"><img class="youtube-icon" height="30" src="../images/1486970596_youtube_circle.png" width="30">
            <div class="social-text-link youtube-text-link">YouTube</div>
          </a>
        </div>
      </div>
    </div>
    <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-in" data-easing2="ease-out">
      <div class="nav w-container">
        <nav class="navmenu w-nav-menu" role="navigation"><a class="navlink w-nav-link" href="index.html">Home</a>
          <div class="w-dropdown" data-delay="100" data-hover="1">
            <div class="dropdown w-dropdown-toggle">
              <div class="navlink works-dropdown" data-ix="test">Works</div>
            </div>
            <nav class="dropdown-list w-dropdown-list"><a class="dropdown-link w-dropdown-link" href="sculptures-for-sale.html">Sculptures For Sale</a><a class="dropdown-link w-dropdown-link" href="oil-pastels-for-sale.html">Oil Pastels For Sale</a><a class="dropdown-link w-dropdown-link" href="past-works.html">Past Works</a>
            </nav>
          </div><a class="navlink w-nav-link" href="about.html">About Alonzo</a><a class="navlink w-nav-link" href="savant-syndrome.html">Savant Syndrome</a><a class="navlink w-nav-link" href="videos.html">Videos</a><a class="navlink w-nav-link" href="alonzo-news.html">Alonzo News</a><a class="navlink w-nav-link" href="contact.html">Contact</a>
        </nav>
        <div class="menu-button w-nav-button">
          <div class="hamburger-icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </header>
  <div class="hero-section">
    <div class="hero-container news-hero w-container">
      <h2 class="hero news" data-ix="right-to-left-title">Alonzo's News</h2>
    </div>
  </div>
  <div class="content">
    <div class="about-container w-container">
      <h2>A Periodic Look at what Alonzo is up to</h2>
    </div>
  </div>
  <div class="content">
    <div class="about-container w-container">


		    <?php
		        perch_blog_recent_posts(10);
		    ?>

		    </div>
  <footer class="footer">
    <div class="w-container">
      <div class="footer-divblock">
        <div class="footer-text">Alonzo Clemons &nbsp; - &nbsp;Copyright 2017 &nbsp;- &nbsp;Created with&nbsp;</div><img class="herat" height="20" src="../images/heart.svg" width="20">
        <div class="footer-text">&nbsp;by Brennan Smith</div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css">
  <script>
    // Show the progress bar 
    NProgress.start();
    // Increase randomly
    var interval = setInterval(function() { NProgress.inc(); }, 1000);        
    // Trigger finish when page fully loaded
    jQuery(window).load(function () {
        clearInterval(interval);
        NProgress.done();
    });
    // Trigger bar when exiting the page
    jQuery(window).unload(function () {
        NProgress.start();
    });
  </script>
</body>
</html>