<?php get_header(); ?>

	<div class="banner">
		<div class="banner-cont">
			<img class="blur" src="<?php echo THEMEPATH; ?>images/3.jpg">
			<img class="topimg" src="<?php echo THEMEPATH; ?>images/3.jpg">
		</div>
	</div>
	<section class="primera white">
		<div class="wrapper triangle">
			<?php 
				$beneficios = get_page_by_path('beneficios');
				$beneficios_content = $beneficios->post_content;
			?>
			<h2><?php echo $beneficios->post_title; ?></h2>
			<?php echo apply_filters('the_content', $beneficios_content); ?>
		</div>
		</div>
	</section>
	<section class="blue">
		<div class="wrapper triangle">
			<?php 
				$fpl = get_page_by_path('fondo-de-productividad-laboral');
				$fpl_content = $fpl->post_content;
			?>
			<h2><?php echo $fpl->post_title; ?></h2>
			<?php echo apply_filters('the_content', $fpl_content); ?>
		</div>
	</section>

<?php get_footer(); ?>