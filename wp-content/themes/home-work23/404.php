<?php   get_header();?>


  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->



  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
           <a class="navbar-brand logo" href="wordpress/index/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.jpg" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li><a href="wordpress/index/">Home</a></li>
            <li class="active"><a href="404.php">404 </a></li>
          </ul>                            
        </div><!--/.nav-collapse -->

        <div class="search">
          <?php include ('searchform.php'); ?>
        </div>

      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2>404 Error</h2>
                <p>Sorry</p>
              </div>
            </div>
          </div>
          <div class="error-message">
            <h4>Woops! Something gone wrong</h4>
            <p>Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="wordpress/index/">homepage</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

<?php get_footer(); ?>