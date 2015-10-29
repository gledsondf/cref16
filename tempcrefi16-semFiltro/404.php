	
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
				<h1><?php the_title(); ?></h1>
			</header>
		</div>
		<div id="erroPagina" class="artigo row">
			<article>
				<h1>Desculpe!</h1>
				<p>Página não encontrada, verifique corretamente o endereço digitado por favor.</p>

			</article>
		</div>

		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
		
		<?php endwhile; ?>
	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>