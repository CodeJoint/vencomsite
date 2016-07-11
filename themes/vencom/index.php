	<?php get_header(); ?>
	<!-- Insert content here -->
	<div class="banner">
		<div class="banner-cont">
			<img class="blur" src="<?php echo THEMEPATH; ?>/images/1.jpg">
			<img class="topimg" src="<?php echo THEMEPATH; ?>/images/1.jpg">
			<div class="wrapper">
				<p class="sign"><span><span>35</span> AÑOS</span> GENERANDO RENTABILIDAD</p>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript" src="js/transe.js"></script> -->
	<section class="primera white">
		<div class="wrapper triangle">
			<?php 
				$somos = get_page_by_path('somos');
				$somos_content = $somos->post_content;
			?>
			<p><span class="first-word"><?php echo $somos->post_title; ?> </span>
				<?php echo apply_filters('the_content', $somos_content); ?>
			</p>
		</div>
	</section>
	<section class="blue">
		<div class="wrapper triangle">
			<?php 
				$mision = get_page_by_path('mision');
				$mision_content = $mision->post_content;
			?>
			<h2><?php echo $mision->post_title; ?></h2>
			<?php echo apply_filters('the_content', $mision_content); ?>
			<div class="separador"></div>
			<?php 
				$vision = get_page_by_path('vision');
				$vision_content = $vision->post_content;
			?>
			<h2><?php echo $vision->post_title; ?></h2>
			<?php echo apply_filters('the_content', $vision_content); ?>
		</div>
	</section>
	<?php get_footer(); ?>