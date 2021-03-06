<?php
/*
Template Name: blog archive
*/
?>

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
            <li class="active"><a href="wordpress/blog-archive/">BLOG </a></li>
          </ul>                            
        </div><!--/.nav-collapse -->

        <div class="search">
          <?php include ('searchform.php'); ?>
        </div>

      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <!-- Start blog banner section -->
  <section id="blog-banner">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2>Blog Archive</h2>
              <ol class="breadcrumb">
                <li><a href="wordpress/index/">Home</a></li>
                <li class="active">Blog Archive</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog banner section -->

  <!-- Start blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-archive">
                  <!-- Start single blog post -->
                  <article class="single-from-blog">
                    <figure>
                      <a href="wordpress/blog-single/"><img alt="img" src="<?php bloginfo('template_directory'); ?>/assets/images/the-sky.jpg"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="wordpress/blog-single/">Here is the post title</a></h2>
                      <p>Posted by <a href="#" class="blog-admin">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                  <!-- End single blog post -->
                  <!-- Start single blog post -->
                  <article class="single-from-blog">
                    <figure>
                      <a href="wordpress/blog-single/"><img alt="img" src="<?php bloginfo('template_directory'); ?>/assets/images/the-sky.jpg"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="wordpress/blog-single/">Here is the post title</a></h2>
                      <p>Posted by <a href="#" class="blog-admin">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                  <!-- End single blog post -->
                  <!-- Start single blog post -->
                  <article class="single-from-blog">
                    <figure>
                      <a href="wordpress/blog-single/"><img alt="img" src="<?php bloginfo('template_directory'); ?>/assets/images/the-sky.jpg"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="wordpress/blog-single/">Here is the post title</a></h2>
                      <p>Posted by <a href="#" class="blog-admin">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis. Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                  <!-- End single blog post -->

                  <!--Start Blog pagination -->
                  <nav>
                    <ul class="pagination blog-pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <!-- End blog pagination -->
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">
                <aside class="blog-right">
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Search</h2>
                    <form class="blog-search">
                      <input type="text">
                      <button class="button button-default" data-text="Search" type="submit"><span>Search</span></button>
                    </form>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Follow us on</h2>
                    <div class="follow-us">
                      <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                      <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                      <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                      <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                      <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                      <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Popular post</h2>
                    <div class="popular-post-widget">
                      <div class="media">
                          <div class="media-left">
                            <a href="wordpress/blog-single/">
                              <img class="media-object" src="<?php bloginfo('template_directory'); ?>/assets/images/popular-post-img.jpg" alt="img">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="wordpress/blog-single/">A lonely flower</a></h4>
                            <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                          </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="wordpress/blog-single/">
                            <img class="media-object" src="<?php bloginfo('template_directory'); ?>/assets/images/popular-post-img.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="wordpress/blog-single/">A lonely flower</a></h4>
                          <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="wordpress/blog-single/">
                            <img class="media-object" src="<?php bloginfo('template_directory'); ?>/assets/images/popular-post-img.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="wordpress/blog-single/">A lonely flower</a></h4>
                          <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Instagram feed</h2>
                    <div class="instagram-feed">
                      <div class="single-instagram-feed">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-feed-img.jpg" alt="img">
                      </div>
                      <div class="single-instagram-feed">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-feed-img.jpg" alt="img">
                      </div>
                      <div class="single-instagram-feed">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-feed-img.jpg" alt="img">
                      </div>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Subscribe to newslater</h2>
                    <form class="blog-search">
                      <input type="text">
                      <button class="button button-default" data-text="Subscribe" type="submit"><span>Subscribe</span></button>
                    </form>
                  </div>
                  <!-- End Sidebar Single widget -->
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->

<?php get_footer(); ?>