	
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
<!-- 		<div id="contBanner" class="row">
 --><!-- 			<div class="imgBanner"></div>-->		
<!-- 			 <div id="myCarousel" class="carousel slide">
			 	<ol class="carousel-indicators">
			 		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			 		<li data-target="#myCarousel" data-slide-to="1"></li>
			 		<li data-target="#myCarousel" data-slide-to="2"></li>
			 	</ol> -->
			 	<!-- Carousel items -->
<!-- 			 	<div class="carousel-inner">
			 		<div class="active item">
			 			<img src="http://marktyrrell.com/labs/blueberry/img/slide1.jpg" />
			 			<div class="carousel-caption">
			 				<h4>primeiro Thumbnail label</h4>
			 				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			 			</div>
			 		</div>
			 		<div class="item">
			 			<img src="http://marktyrrell.com/labs/blueberry/img/slide2.jpg" />
			 			<div class="carousel-caption">
			 				<h4>Second Thumbnail label</h4>
			 				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			 			</div>
			 		</div>
			 		<div class="item">
			 			<img src="http://marktyrrell.com/labs/blueberry/img/slide3.jpg" />
			 			<div class="carousel-caption">
			 				<h4>terceiro Thumbnail label</h4>
			 				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			 			</div>
			 		</div>
			 	</div> -->
			 	<!-- Carousel nav -->
<!-- 			 	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			 	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			 </div> -->
<!-- 		</div> 
 -->

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