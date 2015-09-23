	<?php /*Template Name: PrimeiraPágina*/?>
	<?php get_header(); ?>

	<div id="menuLateral" class="col-quarto">
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!--menuLateral-->

	<div id="conteudo" class="col-3quarto row">
	<section>
		<div id="conteudoId">
			<header>
				<h1>Identificação da página</h1>
			</header>
		</div>
		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
		<?php endwhile; ?>
		<?php /* O Ciclo — com comentários! */ ?>

		<?php query_posts("category_name=noticia&posts_per_page=3");?>
		<div class="principalArtigo artigo row">
			<h2>Notícias</h2>
			<article>
				<div class="listaNoticia">
					<ul>
						<?php while ( have_posts() ) : the_post() ?>
						
						<?php
							//remove as imagens dos posts na página principal
							 add_filter( 'the_content', 'remove_images', 100 );
						 ?>
						<li class="row cartao">
							<?php the_post_thumbnail(); ?>
							<h3>
								<span><?php the_time('d/m/y'); ?></span>
								<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h3>
							<div class="artCont row">

								<?php the_content( __( 'Leia mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</article>
		</div>

		<?php query_posts("category_name=teste&posts_per_page=3");?>
		<div class="principalArtigo artigo row">
			<h2>Eventos</h2>
			<article>
				<div class="listaEventos">
					<ul>
						<?php while ( have_posts() ) : the_post() ?>
						<li><h3><!--<span><?php the_time('d/m/y'); ?></span>--> <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</article>
		</div>

	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>