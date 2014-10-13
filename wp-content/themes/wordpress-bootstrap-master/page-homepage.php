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

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h2>Participating Trusts</h2>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="sthbrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="doncasterbrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="chesterfieldbrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="rotherhambrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="sheffchildbrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="midyorkbrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>
      <div class="barnsleybrand">
        <h4 class="lighttext"><a href="#" class="lighttext">Sheffield Teaching Hospitals NHS Foundation Trust</a></h4>
      </div>      
    </div>
    <div class="col-md-6" id="working-together-twitter-widget">
      <a class="twitter-timeline"  href="https://twitter.com/SheffieldHosp/lists/working-together" data-widget-id="521649704682020866">Tweets from https://twitter.com/SheffieldHosp/lists/working-together</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
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
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits3') ) : ?>
		            <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('benefits4') ) : ?>
		            <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>