<?php if($post->post_content != "") : ?>
									                                    	    
	<div class="post-excerpt">
		    		            			            	                                                                                            
		<?php the_excerpt('100'); ?>
	
	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'bear'); ?></span> <?php } ?>

<?php bear_meta(); ?>

<div class="clear"></div>