<?php /*Template Name: noticias*/?>
	
	<?php get_header(); ?>

	<div id="menuLateral" class="col-quarto">
		<aside>
			<div id="contMenuAcessoRapido" class="contMenuLateral">
				<nav>
					<h1>Acesso Rápido</h1>
					<ul>
						<li><a href="">item menu lateral</a></li>
						<li><a href="">item menu lateral</a></li>
						<li><a href="">item menu lateral</a></li>
						<li><a href="">item menu lateral</a></li>
					</ul>
				</nav>
			</div>		
			<div id="contMenuServico" class="contMenuLateral">
				<nav>
					<h1>Serviços</h1>
					<ul>
						<li><a href="">item menu lateral</a>
							<ul>
								<li><a href="">item menu lateral</a></li>
								<li><a href="">item menu lateral</a></li>	
							</ul>
						</li>
						<li><a href="">item menu lateral</a></li>
						<li><a href="">item menu lateral</a></li>
						<li><a href="">item menu lateral</a>
							<ul>
								<li><a href="">item menu lateral</a></li>
								<li><a href="">item menu lateral</a></li>	
							</ul>
						</li>
					</ul>
				</nav>
			</div>

		</aside>
	</div><!--menuLateral-->

	<div id="conteudo" class="col-3quarto row">
	<section>
		<div id="conteudoId">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
		</div>
		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
				<div id="post-<?php the_ID(); ?>" class="artigo">
					<article>
						<?php include "conteudoArtigo.php"; ?>

					</article>
				</div>
		<?php endwhile; ?>


	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>