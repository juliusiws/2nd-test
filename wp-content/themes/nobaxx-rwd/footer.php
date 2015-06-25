<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nobaxx-rwd
 */
?>

</div>
</section>
    <footer class="site-footer"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-lg-12"> 
                                <?php dynamic_sidebar( 'footer' ); ?> 
                            </div>
                                                     
                            </div>                         
                            <!-- Widget "Stay connected" end //-->                         
                            <!-- Copyrights start //-->
                            <div class="row">                         
                                <div class="col-lg-3 col-lg-offset-9"> 
                                   <a href="http://nobaxx.imwebdesign.de/hygieneinspektion/"><img class="teaser-interaktion" src="/wp-content/uploads/2015/06/button.png"></a>                    
                                </div> 
                            </div>                       
                            <!-- Copyrights end //-->                         
                        </div>                     
                    </div>                 
    </footer>             
            <!-- Site footer end //-->             
            <!-- Scroll to the top button start //-->             
            <div id="scroll-to-the-top" class="fadeOutRight animated" style="display: block;"> 
                <i class="fa fa-angle-up"></i> 
            </div>             
            <!-- Scroll to the top button end //-->                  
<?php wp_footer(); ?>
<script>
(function($) {
	"use strict";

	//
	// Preload images
	//

	$('document').ready(function() {

		var $container = $('body'),
			tweetsTimer;

		$container.imagesLoaded( function() {


			$('#logo-group').rivaLogoGroup({
				selector:'logo-group-item',
				padding:40,
				row:3
			});


			$('#company-events').rivaCarousel({
				style:'horizontal',
				navigation:'buttons',
				navigation_class:'width-auto float-left nav-st-2',
				button_left_text:'<i class="fa fa-chevron-left"></i>',
				button_right_text:'<i class="fa fa-chevron-right"></i>',
				visible:1,
				selector:'item',
				gutter:20,
				infinite:0,
				interval:2000,
				autostart:0,
				speed:600,
				ease: 'easeInQuad'
			});


			$('#spinner-wrapper').hide();

		});

	});

})(jQuery);
</script>         
</body>
</html>
