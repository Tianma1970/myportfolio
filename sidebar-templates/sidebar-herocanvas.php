<?php
/**
 * Sidebar - hero canvas setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>

	<!-- ******************* The Hero Canvas Widget Area ******************* -->


	<div class="jumbotron jumbotron-fluid bg-dark text-white mt-3">
	<div class="row ml-5">
		<img src="/myportfolio/wp-content/uploads/2019/04/me.jpg" style="width: 200px; height: 200px; border-radius:10px;">
		<div class="column ml-5">
			<h1>
			Tillmann Weimer
		</h1>
		<h3>Web Developer</h3>
		<p class="lead">
		    <h5>with focus on</h5>
		    Laravel<br>
			WordPress
		</p>
		</div>
	</div>
</div>




<?php endif; ?>
