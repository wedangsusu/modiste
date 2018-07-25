<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package modiste
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 ml-auto mr-auto">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'single-post' );

					?>
					<div class="col-recent-posts">
						<h4 class="mt-5 mb-5 font-weight-bold">Recent Post</h4>
						<div class="row">
						<?php $postslist = get_posts('numberposts=10&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>
							<div class="col-md-6 mb-5">
								<div class="card">
									<?php 
										if ( has_post_thumbnail() ){
						                    $thumb = get_post_thumbnail_id();
						                    $img_url = wp_get_attachment_url( $thumb,'full' );
						                    $image = aq_resize( $img_url, 480, 400, true, true, true );
						                    if($image == ""){
						                      $image = $img_url;
						                    }
						                }else{
						                    $image = bloginfo('template_url')."/assets/img/dummy1.jpg";
						                }
									?> 
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $image;?>" class="img-fluid" alt="<?php the_title(); ?>" /></a>	
									
									<div class="card-body">
										<div class="entry-meta pb-2">
											<?php
											tailor_marketplace_posted_on();
											tailor_marketplace_posted_by();
											?>
										</div>
										<h5 class="entry-title font-weight-bold">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a>
										</h5>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
