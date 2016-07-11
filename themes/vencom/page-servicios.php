<?php get_header(); ?>
	<div class="banner">
		<div class="banner-cont">
			<img class="blur" src="<?php echo THEMEPATH; ?>/images/2.jpg">
			<img class="topimg" src="<?php echo THEMEPATH; ?>/images/2.jpg">
		</div>
	</div>
	<section class="primera white">
		<div class="wrapper triangle">
			<?php 
				$servicios = get_page_by_path('servicios');
				$servicios_content = $servicios->post_content;
			?>
			<h2><?php echo $servicios->post_title; ?></h2>
			<?php echo apply_filters('the_content', $servicios_content); ?>
		</div>
	</section>
	<section class="blue">
		<div class="wrapper triangle">
			<p>Contamos con un grupo de profesionales especializados en cada ramo de remuneración al personal.</p>
			<ul>
				<li><span>Estudios actuariales</span></li>
				<li><span>Plan de previsión social</span></li>
				<li><span>Diseño de planes de retiro</span></li>
				<li><span>Créditos a los trabajadores por medio de una SOFOM</span></li>
				<li><span><a target="_blank" href="http://www.mapseguros.mx/">Seguros y ﬁanzas</a></span></li>
				<li><span><a target="_blank" href="http://www.previvale.mx/">Vales de despensa</a></span></li>
			</ul>
			<p><b>Diseñamos el mejor programa de servicios para sus trabajadores.</b></p>
		</div>
	</section>
<?php get_footer(); ?>