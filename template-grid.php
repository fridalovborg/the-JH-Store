<?php
/**
 * Template Name: Grid
 */
?>
<?php while (have_posts()) : the_post(); ?>

	<?php if( have_rows('gridlayout') ): ?>
		<?php while ( have_rows('gridlayout') ) : the_row(); ?>
			<div class="container">
				<?php if( get_row_layout() == 'left' ): ?>
					<div class="row mt-5 mb-5">
						<div class="col-12 col-sm-12 col-md-6">
							<?php $image = get_sub_field('image'); ?>
							<div class="feature-img" style="background-image: url('<?php echo $image["url"]; ?>')"></div>
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<?php $text = get_sub_field('text'); ?>
							<?php echo $text; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if( get_row_layout() == 'right' ): ?>
					<div class="row mt-5 mb-5">
						<div class="col-12 col-sm-12 col-md-6">
							<?php $text = get_sub_field('text'); ?>
							<?php echo $text; ?>
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<?php $image = get_sub_field('image'); ?>
							<div class="feature-img" style="background-image: url('<?php echo $image["url"]; ?>')"></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if( have_rows('samarbetspartners') ): ?>
		<div class="container">
		<strong><?php the_field('header'); ?></strong>
			<div class="row mt-5 mb-5">
				<?php while ( have_rows('samarbetspartners') ) : the_row(); ?>
					<?php $logoImg = get_sub_field('logotyp'); ?>
					<div class="col-12 col-sm-12 col-md-4">
						<a href="<?php the_field('link'); ?>">
							<img class="logo-friends" src="<?php echo $logoImg['url']; ?>">
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; ?>