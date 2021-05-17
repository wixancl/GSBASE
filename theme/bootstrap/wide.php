<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      wide.php
* @Package:   GetSimple
* @Action:    Bootstrap 2.1.0 for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
  <?php get_header(); ?>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css">

	<script src="<?php get_theme_url(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body id="<?php get_page_slug(); ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php get_navigation(return_page_slug()); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

      
        <h1><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?>
      

      <hr>


      <footer>
        <p><a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a> Theme by <a href="http://www.simondahla.com" target="_blank" >Simon Dahla</a> - <?php get_site_credits(); ?></p>
      </footer>

    </div> <!-- /container -->
    <?php get_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php get_theme_url(); ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="<?php get_theme_url(); ?>/js/libs/bootstrap/bootstrap.min.js"></script>

<script src="<?php get_theme_url(); ?>/js/script.js"></script>
</body>
</html>