<?php

get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">

    <!-- as Theme Author you can use this to display custom content -->
    <h3>Custom HTML Here!</h3>

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
			?>

    <!-- as Theme Author you can use this to display custom content -->
    <h3>Custom HTML Here!</h3>

	</div><!-- /site-content -->

	<?php get_footer();

?>
