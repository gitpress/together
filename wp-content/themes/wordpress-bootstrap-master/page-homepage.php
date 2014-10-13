<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
</div><!-- kills container -->

 <div class="row centered">
  <div class="brandhead">
    <h1 class="">Working Together</h1>
    <p class="lead">A partnership to deliver high quality, efficient patient care for South Yorkshire, Mid Yorkshire and North Derbyshire</p>
    <p><a class="btn btn-doncaster btn-lg" role="button" href="/about">Learn more &raquo;</a>
    </p>
  </div>
</div>

<div class="container centered" id="">
  <div class="row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage3') ) : ?>
		            <?php endif; ?>
  </div>
</div>


			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-10 col-sm-offset-2 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>


						
						</header>
						
						<section class="row post_content">
						
							<div class="col-sm-12">
						
								<?php the_content(); ?>
								
							</div>
							
	
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->




  <div class="row" id="benefits">
    <div class="container centered">
      <div class="backblock">
        		<div class="col-md-4 col-sm-4">
			<a href="#" class="benefits-link"><i class="fa fa-cogs fa-5x"></i>
      <p>It came to pass, that in the ambergris affair Stubb's after-oarsman chanced so to sprain his hand, as for a time to become quite maimed; and, temporarily, Pip was put into his place.</p>
		</a>
        </div>

		<div class="col-md-4 col-sm-4">
			<a href="#" class="benefits-link"><i class="fa fa-random fa-5x"></i><p>It came to pass, that in the ambergris affair Stubb's after-oarsman chanced so to sprain his hand, as for a time to become quite maimed; and, temporarily, Pip was put into his place. </p></a>
		</div>

		<div class="col-md-4 col-sm-4">
			<a href="#" class="benefits-link"><i class="fa fa-check-square-o fa-5x"></i><p>It came to pass, that in the ambergris affair Stubb's after-oarsman chanced so to sprain his hand, as for a time to become quite maimed; and, temporarily, Pip was put into his place. </p></a>
		</div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>