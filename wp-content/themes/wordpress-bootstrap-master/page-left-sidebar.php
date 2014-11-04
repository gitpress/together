<?php
/*
Template Name: Services page
*/
?>
<?php get_header(); ?>

			<div id="content" class="clearfix row">
        
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb hidden-xs">
            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<li id="breadcrumbs">','</li>');
            } ?>
            </ol>
            <br>
            <br>
            <h1 class="brand-color workstream-h1 lighttext"><?php the_title(); ?></h1>
            <?php echo '<p class="lead">' . get_post_meta($post->ID, 'workstream_desc', true) . '</p>'; ?>
          </div>
        </div>
        
        <div class="row">
          				<div id="main" class="col-sm-8 clearfix" role="main">
          
        

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
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
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>
        
        
        
        
        


</div> <!-- end #container -->

<?php get_footer(); ?>