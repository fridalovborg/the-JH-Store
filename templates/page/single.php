<?php
/**
 * Single
 */
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>