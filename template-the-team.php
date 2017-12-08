<?php
/*
Template Name: the team
*/
?>

<?php get_header(); ?>
			
	<div id="content">
		
		<div class="row" id="quicklinks">
      <?php while(the_flexible_field("fast_links")): ?>
				<?php if(get_row_layout() == "fast_link"): // layout: Content ?>
	        <div class="small-12 medium-6 columns end">
					  <h2><?php the_sub_field('fast_link_title'); ?></h2>
					  <img src="<?php the_sub_field('fast_link_image'); ?>" alt="<?php the_sub_field('fast_link_title'); ?>" title="<?php the_sub_field('fast_link_title'); ?>">
					  <p><?php the_sub_field('fast_link_intro'); ?></p>
					  <a href="<?php the_sub_field('fast_link_link'); ?>" class="button"><?php the_sub_field('fast_link_button_copy'); ?></a>
					</div>
        <?php elseif(get_row_layout() == "file"): // layout: File ?>
          <div> <a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a></div>
        <?php endif; ?>
      <?php endwhile; ?> 
		</div>
		
	</div> <!-- end #content -->

<?php get_footer(); ?>
