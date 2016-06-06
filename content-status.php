<?php if($post->post_content != "") : ?>
									                                    	    
	<div class="post-excerpt">
		    		            			            	                                                                                            
		<?php the_excerpt('100'); ?>
	
	</div> <!-- /post-excerpt -->

<?php endif; ?>

<?php bear_meta(); ?>
            
<div class="clear"></div>