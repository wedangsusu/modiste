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
				<div class="row">
					<div class="col-lg-9 ml-auto mr-auto">
						<div class="row">
							<div class="col-lg-8 mt-5">
								<div class="row row-listings">
									<?php
							          $loop = new WP_Query( array( 
							            'post_type' => 'tailor', 
							            'paged' => $paged ) );
							              	if ( $loop->have_posts() ) :
							                while ( $loop->have_posts() ) : $loop->the_post(); ?>
							                <div class="card mb-5">
							                    <?php if ( has_post_thumbnail() ) { ?>
							                      <div class="pimage">
							                      	<?php the_post_thumbnail(); ?>
							                      </div>
							                    <?php } ?>
							                    <div class="card-body">
							                      	<div class="col-summary-work">
								                        <?php
								                          if ( is_singular() ) :
								                            the_title( '<h4 class="title-work mt-0 p-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
								                          else :
								                            the_title( '<h4 class="title-work mt-0 p-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
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
							                    <div class="card-footer">
							                    	<div class="d-flex justify-content-between text-center col-appreciate">
							                    		<a href="#" class="text-primary btn-block">Appreciate Work</a>
							                    		<a href="#" class="text-primary btn-block">Share this</a>
							                    	</div>
							                    </div>
							                </div>  
							            <?php endwhile;
							          endif;
							          wp_reset_postdata();
							        ?>			
							    </div>
							</div>
							<div class="col-lg-4 mt-5">	
								<div class="card mb-5">
									<div class="card-body">
										<div class="col-profile">
											<div class="media">
												<div class="img-profile pr-3">
													<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 64); ?>
												</div>
												<div class="media-body">
													<div class="pt-2">
														<div class="name-profile">
															<?php tailor_marketplace_posted_by(); ?>
														</div>
														<div class="location-profile"><i class="fa fa-map-marker" aria-hidden="true"></i> Malang</div>
														
								                    </div>	
												</div>
											</div>	
											<div class="meta-card mt-3 mb-3">
									            <ul class="list-unstyled ml-0 pl-0">
									              	<li class="d-flex pr-3"><i class="fa fa-eye" aria-hidden="true"></i>Post Views 50</li>
									               	<li class="d-flex pr-3"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like 50</li>
									               	<li class="d-flex"><i class="fa fa-comments" aria-hidden="true"></i>Comments <?php wp_count_comments( post_id ); ?> </li>
									            </ul>
								            </div>
										</div>
										<div class="col-appreciates mt-3">
							            	<a href="#" class="btn btn-outline-primary btn-block text-primary"><i class="fa fa-whatsapp" aria-hidden="true"></i> Send Messages</a>
							              <!--<a href="#" class="btn btn-primary"><i class="fa fa-share-alt" aria-hidden="true"></i> Share this</a>-->
							              
							            </div>
							         
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<?php echo do_shortcode('[addtoany]'); ?>
									</div>
								</div>
							</div>
							
						</div>	
					</div>	
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
