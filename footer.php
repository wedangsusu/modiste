<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modiste
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
	<div class="footer-top pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="navbar-brand"><a href="#">MODISTE</a></div>
              <p>Email: help@modiste.com <br/> Contact: +62 123 456789</p>
            </div>
            <div class="col-md-7 ml-auto">
              <div class="menu-footer mt-4">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Showcase</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Faqs</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
		<div class="footer-bottom pt-2 pb-2">
			<div class="container">
				<div class="col-lg-3">&copy; <?php echo date("Y"); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!--[start:modal profile]-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php while ( have_posts() ) :  the_post(); ?>  
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <div class="pic-showcase">
              <div class="img-thumbnail mb-5"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/img/dummy.jpg" alt="Card image cap"></div>
              <div class="img-thumbnail mb-5"><img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/img/dummy.jpg" alt="Card image cap"></div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="img-profile pr-3">
                <?php echo get_wp_user_avatar(get_the_author_meta('ID'), 64); ?>
              </div>
              <div class="media-body">
                <div class="pt-2">
                  <div class="name-profile"><?php tailor_marketplace_posted_by(); ?></div>
                  <div class="meta-card">
                    <ul class="list-unstyled d-flex flex-row ml-0 pl-0">
                      <li class="d-flex pr-3"><i class="fa fa-eye" aria-hidden="true"></i> 50</li>
                      <li class="d-flex pr-3"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 50</li>
                      <li class="d-flex"><i class="fa fa-comments" aria-hidden="true"></i> <?php wp_count_comments( post_id ); ?> </li>
                    </ul>
                  </div>
                </div>  
              </div>
            </div>
            <div class="col-appreciates mb-5 pt-4">
              <a href="#" class="btn btn-maroon mr-lg-2"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Appreciate Work</a>
              <a href="#" class="btn btn-primary"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this</a>
            </div>
            <div class="col-summary-work">
              <?php
                 the_title();
              ?>
            </div>
            <div class="entry-meta"><?php tailor_marketplace_posted_on(); ?></div>
            <div class="entry-content"><?php the_content(); ?>
          </div>
          </div>
        </div>
        <?php
          endwhile; // End of the loop.
        ?>
      </div>
    </div>
  </div>
</div>
<!--[end:modal profile]-->

<div class="modal fade" id="modal-msg-dashboard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Harga terlalu tinggi tidak sesuai dengan desain yang dibuat
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
