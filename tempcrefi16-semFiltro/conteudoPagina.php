<div class="artTopo">
	<header>
		<?php /* um título h1 */ ?>						
		<h1><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
</div><!--artTopo-->
<div class="artCont row">
	<?php /* O conteúdo da postagem */ ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
</div><!--artCont-->
