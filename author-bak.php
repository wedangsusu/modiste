<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modiste
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="col-profile mb-5">
					<div class="row">
						<div class="col-lg-8">
							<div class="media">
								<div class="img-profile pr-3 mt-0">
									<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 64); ?>
								</div>
								<div class="media-body">
									<div class="pt-2">
										<div class="name-profile mt-0">
											<h3><?php echo get_the_author(); ?></h3>
										</div>
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
						</div>
						<div class="col-lg-4">
							<div class="col-appreciates mb-5 pt-4 text-right">
					           	<a href="#" class="btn btn-leaf mr-lg-2"><i class="fa fa-whatsapp" aria-hidden="true"></i> Send messages</a>
					          	<a href="#" class="btn btn-primary"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this</a>
					        </div>
						</div>
					</div>
				</div>
				<div class="row row-listings">
					<?php
			          $loop = new WP_Query( array( 
			            'post_type' => 'tailor', 
			            'paged' => $paged ) );
			              if ( $loop->have_posts() ) :
			                while ( $loop->have_posts() ) : $loop->the_post(); ?>
			                <div class="col-lg-3 col-xs-6">
			                  <div class="card">
			                    <?php if ( has_post_thumbnail() ) { ?>
			                      <div class="pimage">
			                      	<?php the_post_thumbnail(); ?>
			                      </div>
			                    <?php } ?>
			                    <div class="card-body">
			                      <div class="col-summary-work pt-3">
			                        <?php
			                          if ( is_singular() ) :
			                            the_title( '<h4 class="title-work p-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			                          else :
			                            the_title( '<h4 class="title-work p-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			                          endif;
			                        ?>
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
			                </div>
			            <?php endwhile;
			          endif;
			          wp_reset_postdata();
			        ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
