<?php
/*
Template Name: 3 Col
*/
?>

<?php get_header(); ?>
			
	<div id="content">
		
		<div class="row">
			<div class="small-12 medium-4 columns" id="side_images">
				<?php while(the_flexible_field("side_images")): ?>
					<?php if(get_row_layout() == "side_image"): // layout: Content ?>
						<img src="<?php the_sub_field('single_side_image'); ?>">
	        <?php elseif(get_row_layout() == "file"): // layout: File ?>
	          <div> <a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a></div>
	        <?php endif; ?>
	      <?php endwhile; ?> 

			</div>

			<div class="small-12 medium-8 columns">
			  <div class="row">
				<div class="small-12 columns">
          <h1><?php the_field('copy_title'); ?></h1>
			  	<hr class="s78">
				</div>
				<div class="small-12 medium-6 columns">
					<?php the_field('copy_left'); ?>
				</div>
				<div class="small-12 medium-6 columns">
					<?php the_field('copy_right'); ?>
				</div>
			</div>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
