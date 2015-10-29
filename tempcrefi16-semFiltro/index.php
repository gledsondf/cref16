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
<!-- 			<header>
				<h1>Identificação da página</h1>
			</header> -->
		</div>
		<?php while ( have_posts() ) : the_post() ?>
		<?php
		//remove o filtro de link das midias sociais desta página 
			remove_filter ('the_content','midiaSocialbtn');
		?>
		<?php the_content( __( 'Leia mais <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
		<?php endwhile; ?>
		<?php /* O Ciclo — com comentários! */ ?>

		<?php query_posts("category_name=noticia&posts_per_page=3");?>
		<div class="principalArtigo artigo row">
			<?php
				    // Get the ID of a given category
				    $category_noticia = get_cat_ID( 'noticia' );
				    $category_evento = get_cat_ID( 'teste' );

				    // Get the URL of this category
 				   $category_link_noticia = get_category_link( $category_noticia );
 				   $category_link_evento = get_category_link( $category_evento );
			?>

<!-- Print a link to this category -->

			<h2><a href="<?php echo esc_url( $category_link_noticia ); ?>">Notícias</a></h2>
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
			<h2><a href="<?php echo esc_url( $category_link_evento ); ?>">Eventos</a></h2>
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