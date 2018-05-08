<?php
/**
 * Template Name: Front page
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div class="container-header-carousel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php if( have_rows('carousel') ): ?>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $i = 0; ?>
                            <?php while ( have_rows('carousel') ) : the_row(); ?>
                                <?php if($i == 0) { 
                                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                                } else {
                                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                                }
                                $i++; ?>
                            <?php endwhile; ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php $f = 0; ?>
                            <?php while( have_rows('carousel') ) : the_row(); ?>
                                <?php $bgImage = get_sub_field('carousel_image'); ?>

                                <div class="carousel-item <?php if($f == 0) { echo 'active'; } ?>">
                                    <?php if($bgImage): ?>
                                        <div class="carousel-box" style="background-image: url('<?php echo $bgImage['url']; ?>')"></div>
                                    <?php endif; ?>
                                </div>
                                <?php $f++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
    <div class="container">
    	<div class="row">
    		<div class="col-12">
    			<h1><?php the_title(); ?></h1>
    		</div>
    	</div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
            	<div class="txt-content">
					<?php the_content(); ?>
				</div>
			</div>
            <div class="col-12 col-sm-12 col-md-6">
				<div class="feature-img" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, 'small' ); ?>"></div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
