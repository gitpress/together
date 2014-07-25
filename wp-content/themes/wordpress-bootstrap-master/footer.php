

  <div class="row" id="sthbrand">
    <div class="container centered">
      <div class="backblock">
        <h1 class="lighttext">Get involved</h1>
        <p class="lead lighttext">Participate in our partnership to deliver high quality, efficient patient care for South Yorkshire, Mid Yorkshire and North Derbyshire</p>
        <p> <a class="btn btn-shfchild btn-lg" role="button" href="http://inch-reform.codio.io:3000/wordpress/contact-us/">Contact us</a>
        </p>
      </div>
    </div>
  </div>






			<div class="row" id="footer">
        <div class="container">
          
   
        


			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">

		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
					
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
               </div>
		
		
				</div>


		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>