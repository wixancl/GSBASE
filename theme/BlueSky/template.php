<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		BlueSky theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if (function_exists('get_custom_title_tag'))
			{echo(get_custom_title_tag());}
			else { get_page_clean_title();echo'&nbsp;&ndash;&nbsp;';get_site_name();}  ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans|Archivo+Narrow|Sanchez' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico" type="image/x-icon"/>
        <script src="<?php get_theme_url(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<?php get_header(); ?>
    </head>

    <body id="<?php get_page_slug(); ?>" >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
                <nav>
                    <ul>
                        <?php get_navigation(return_page_slug()); ?>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
			
                <article>
                    <header>
                        <h1><?php get_page_title(); ?></h1>
                    </header>
                    <section>
                        <?php get_page_content(); ?>
                    </section>
                    <footer>
                        <small>Last Updated on &nbsp;<?php get_page_date('F jS, Y'); ?></small>
                    </footer>
                </article>

                <aside>
                    <?php  if (component_exists('sidebar-'.get_page_slug(false)))
						{get_component('sidebar-'.get_page_slug(false));}
						else {get_component('sidebar');}	?>
                </aside>

				</div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
				<small>
					<?php echo date('Y'); ?> - <strong><?php get_site_name(); ?></strong>
					&nbsp;|&nbsp;Theme by <a href="http://www.cyberpress.biz/" >The Cyber Press</a>
					&nbsp;|&nbsp;<?php get_site_credits(); ?><br>
					<?php get_component('tagline'); ?>
				</small>
            </footer>
        </div>

		<?php get_footer(); ?>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="<?php get_theme_url(); ?>/js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
		
    </body>
	
</html>