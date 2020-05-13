<?php

/**
 * Testimonial block template
 *
 * loop-templates/blocks/testimonial.php
 */

 $image = get_field('image');
 $background_color = get_field('background_color');
 $text_color = get_field('text_color');
?>

<div id="testimonial-<?php echo $block['id']; ?>" class="testimonial">
	<blockquote class="blockquote">

		<div class="testimonial-text">
			<?php the_field('testimonial'); ?>
		</div>
		<br>

		<div class="testimonial-author">
			<?php the_field('author'); ?>
		</div>
		<br>

		<div class="testimonial-role">
			<?php the_field('role'); ?>
		</div>

		<div class="testimonial-author-skill">
			<?php the_field('skills'); ?>
		</div>

	</blockquote>
	<?php if($image): ?>
		<div class="testimonial-image">
			<?php echo wp_get_attachment_image($image, 'large'); ?>
		</div>
<?php endif; ?>


</div>

<style>

	#testimonial-<?php echo $block['id']; ?>{
		background-color: <?php echo $background_color; ?>;
		color: <?php echo $text_color; ?>;
	}

</style>
