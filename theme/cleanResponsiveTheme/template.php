<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   Clean Responsive Theme
* @Action:    Clean Responsive theme for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
  <?php get_header(); ?>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 

  <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/gridiculous.css">
    
    <style>
    * {
      margin: 0;
      padding: 0;
    }
    nav {
      display: block;
      width: 100%;
      margin: 25px auto;
      text-align: center;
    
    }
    nav ul {
      list-style: none;
    float:right;
    padding-left:50px;
    }
    nav li {
      display: inline-block;
    
    }
    nav a {
      display: inline-block;
      background: #333;
      color: #fff;
      padding: 5px 15px;
      border: 0px solid white;
      text-decoration: none;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    -khtml-border-radius: 8px;
    border-radius: 8px;
    }
    nav a:hover {
      border: px solid red;
      background: red;
    color:#fff;
    }
    nav a:active {
      background: red;
    }
    nav select {
      display: none;
    }
    
    @media (max-width: 960px) {
      nav ul     { display: none; }
      nav select { display: inline-block; }
    }
  
  .style1 {
  font-size: 14px;
  font-weight: bold;
}
    .style2 {color: #333333}
    </style>
    
    <!-- You COULD just put both menus in the markup,
       but if you don't like that, this is how you
       could dynamically create it with jQuery.  -->
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>
   // DOM ready
   $(function() {
     
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Go to..."
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
     // To make dropdown actually work
     // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
   
   });
  </script>
    
    <!--BEGIN TWITTER SCRIPT-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

  <script src="<?php get_theme_url(); ?>/jquery.tweet.js" charset="utf-8"></script>

  <script type='text/javascript'>

    jQuery(function($){

        $(".tweet").tweet({

            username: "henrysaudale",

            join_text: "auto",

            

            count: 1,

            auto_join_text_default: "we said,", 

            auto_join_text_ed: "we",

            auto_join_text_ing: "we were",

            auto_join_text_reply: "we replied to",

            auto_join_text_url: "we were checking out",

            loading_text: "loading tweets..."

        });

    });

</script>

<!--END TWITTER SCRIPT-->

    
</head>
<body id="<?php get_page_slug(); ?>" >
<div class="grid w960">
  <div class="row">
    <div class="c12a">
          <div class="c2"><img src="<?php get_theme_url(); ?>/images/logo.png"></div>
            <div class="c10">
              <nav> 
            <ul> 
            <li><?php get_navigation(return_page_slug()); ?></li> 
            </ul>
           </nav>
            </div>
        </div>
  </div>

  <div class="row">
    <div class="c7"><img src="<?php get_theme_url(); ?>/images/slider.jpg"></div>  
  </div>
    <div class="row">
    <div class="c4"><h2>Web and Graphic Design</h2><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>  
        <div class="c4"><h2>Online and Offline Marketing</h2><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
        <div class="c4"><h2>Consulting Services</h2><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
  </div>
    
    <div class="row">
    <div class="c6"><span class="style1">Twitter</span><br>
    <div class="tweet"></div></div>
        <div class="c5"><a href="http://get-simple.info/" target="_blank"><img src="<?php get_theme_url(); ?>/images/getsimple_logos.png"></a></div>
  </div>

  <div class="row">
    <div class="c12">
        <div class="c6a">
   
        </div>
        <div class="c6b"><a href="http://get-simple.info/" target="_blank"><img src="<?php get_theme_url(); ?>/images/getsimple-logo-2.png" width="18" height="18" align="left"></a>&nbsp;&nbsp;Copyright &copy; 2012. <?php get_page_clean_title(); ?>
        . All Rights Reserved. | Template by <a href="http://henrysaudale.com" target="_blank">Henry Saudale</a></div>       
    </div>
  </div>
</div>
</body>
</html>