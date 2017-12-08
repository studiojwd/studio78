<?php
/*
Template Name: Artist
*/
?>

<?php get_header(); ?>
			
	<div id="content">
		
		<div class="row">
			<div class="small-12 medium-8  columns">


	      <?php 

$images = get_field('gallery_image');

if( $images ): ?>
    <ul id="gallery_images">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>" rel="lightbox[copy_title]">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" alt="<?php echo $image['caption']; ?>" title="<?php echo $image['caption']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


			</div>

			<div class="small-12 medium-4 columns">
			  <h1><?php the_field('copy_title'); ?></h1>
			  <hr class="s78">
			  <?php the_field('copy'); ?>
			</div>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>