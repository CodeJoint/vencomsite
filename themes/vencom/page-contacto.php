<?php get_header(); ?>

	<div class="banner">
		<div class="banner-cont">
			<img class="blur" src="<?php echo THEMEPATH; ?>/images/5.jpg">
			<img class="topimg" src="<?php echo THEMEPATH; ?>/images/5.jpg">
		</div>
	</div>
	<section class="primera white">
		<div class="wrapper triangle">
			<?php 
				$contacto = get_page_by_path('contacto');
				$contacto_content = $contacto->post_content;
			?>
			<h2><?php echo $contacto->post_title; ?></h2>
			<?php echo apply_filters('the_content', $contacto_content); ?>
		</div>
	</section>
	<section class="blue">
		<div class="wrapper triangle">
			<?php 
				$requisitos = get_page_by_path('requisitos-y-evaluacion');
				$requisitos_content = $requisitos->post_content;
			?>
			<h2><?php echo $requisitos->post_title; ?></h2>
			<?php echo apply_filters('the_content', $requisitos_content); ?>
		</div>
	</section>

<?php get_footer(); ?>