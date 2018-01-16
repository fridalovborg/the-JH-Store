<?php
/**
 * Template Name: Front page
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
            	<div class="txt-content">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
            <div class="col-12 col-sm-12 col-md-6">
				<div class="feature-img" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, 'small' ); ?>"></div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
