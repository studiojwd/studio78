<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
	<div id="content">
		
		<div class="row">
			<div class="small-12 medium-7 columns">
			  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				  <ul class="orbit-container">
				    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
				    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

				    <?php while(the_flexible_field("heroscrolling")): ?>
							<?php if(get_row_layout() == "scrolling"): // layout: Content ?>
						    <li class="is-<?php the_sub_field('first_image'); ?> orbit-slide">
						      <img class="orbit-image" src="<?php the_sub_field('single_image'); ?>">
						    </li>
			        <?php elseif(get_row_layout() == "file"): // layout: File ?>
			          <div> <a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a></div>
			        <?php endif; ?>
			      <?php endwhile; ?> 
				  </ul>
				</div>
			</div>

			<div class="small-12 medium-5 columns">
			  <h1><?php the_field('copy_title'); ?></h1>
				<hr class="s78">
			  <?php the_field('copy'); ?>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<hr class="s78">
			</div>
		</div>
		<div class="row" id="quicklinks">
      <?php while(the_flexible_field("fast_links")): ?>
				<?php if(get_row_layout() == "fast_link"): // layout: Content ?>
	        <div class="small-12 medium-4 columns end">
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
