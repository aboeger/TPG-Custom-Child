<?php

/*
Template Name: Risk Main
Template Post Type: risk
*/
?>

<?php get_header();?>


<!--- Risk Header --->
<?php $image = get_field('banner_image'); ?>
<div id="risk-header" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('banner_title'); ?></h1>
			<p><?php the_field('banner_text'); ?></p>
			<button type="button" class="btn btn-outline-danger btn-lg">Free Consultation</button>
		</div>
	</div>
</div>




<!--- Main Content --->
		<div id="risk-content-container"class="container-fluid">
			<section class="page-wrap">
				<div class="row">
				<div class="col-md-3">
					    <!-- Risk Menu -->
							<div class="">
						<?php wp_nav_menu( array(
							'theme_location' 	=> 'risk-menu',
							'fallback_cb'    => '__return_false',
							'depth'           	=> 0,
							'container'     	=> 'div',
							'container_class' 	=> 'side-menu',
							'walker'			=> new Walker_Nav_Side(),
						) ); ?>
							</div>
					</div>
				<div class="col content-right">
					<?php the_field('content_right'); ?>
				</div>
			</div>
		</section>
		<section class="content-main">
			<div class="row">
				<div class="col-sm-12">
					<?php while (have_posts()) : the_post();/* Start loop */ ?>
	        			<?php the_content(); ?>
					<?php endwhile; /* End loop */ ?>
				</div>

			</div>
		</section>
	</div>
</div>

<!--- Risk Footer --->
<?php $image = get_field('footer_image'); ?>
<div id="risk-footer" class="container-fluid" style="background-image:url('<?php echo $image['url']; ?>')">
	<div class="container-fluid">
		<div class="container">
			<h1><?php the_field('footer_title'); ?></h1>
			<p><?php the_field('footer_text'); ?></p>
			<button type="button" class="btn btn-danger btn-lg">Free Consultation</button>
		</div>
	</div>
</div>

<?php get_footer();?>
