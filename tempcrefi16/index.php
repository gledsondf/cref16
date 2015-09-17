	
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
				<h1>Identificação da página</h1>
			</header>
		</div>
		<div id="contBanner" class="row">
<!-- 			<div class="imgBanner"></div>
 -->		
			 <div id="myCarousel" class="carousel slide">
			 	<ol class="carousel-indicators">
			 		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			 		<li data-target="#myCarousel" data-slide-to="1"></li>
			 		<li data-target="#myCarousel" data-slide-to="2"></li>
			 	</ol>
			 	<!-- Carousel items -->
			 	<div class="carousel-inner">
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
			 	</div>
			 	<!-- Carousel nav -->
			 	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			 	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			 </div>
		</div> 


		<?php /* O Ciclo — com comentários! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
		<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
				<div id="post-<?php the_ID(); ?>" class="artigo">
					<article>
						<div class="artTopo">
							<header>
		<?php /* um título h1 */ ?>						
								<h1><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							</header>
							<div class="artInfo">
								<ul>
									<li><span>Data: </span><?php the_time( get_option( 'date_format' ) ); ?></li>
								</ul>
							</div>
						</div><!--artTopo-->
						<div class="artCont">
		<?php /* O conteúdo da postagem */ ?>
							<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Clique aqui</a>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed </p>
						</div>
						<div class="artFoot">
							<footer>
								<div class="col-2terco">
									<ul>
										<li><span>categoria:</span><?php echo get_the_category_list(', '); ?></li>
										<li><?php edit_post_link( __( 'Edit')) ?></li>
									</ul>
									
									<p>CREFFITO 16</p>
								</div>
								<ul class="col-terco">
									<li><a href="#"><img title="facebook"  alt="facebook" src="<?php bloginfo('template_url'); ?>/img/logoFace_p.png" /></a></li>
									<li><a href="#"><img title="Youtube"  alt="Youtube" src="<?php bloginfo('template_url'); ?>/img/logoYoutube_p.png" /></a></li>
									<li><a href="#"><img title="Twitter"  alt="Twitter" src="<?php bloginfo('template_url'); ?>/img/logoTwitter_p.png" /></a></li>
									<li><a href="#"><img title="Instagram"  alt="Instagram" src="<?php bloginfo('template_url'); ?>/img/logoInstagram_p.png" /></a></li>
									<li><a href="#"><img title="Flickr"  alt="Flickr" src="<?php bloginfo('template_url'); ?>/img/logoFlickr_p.png" /></a></li>
									<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="<?php bloginfo('template_url'); ?>/img/logoWhatsapp_p.png" /></a></li>
								</ul>
							</footer>
						</div>

					</article>
				</div>
		<?php endwhile; ?>


	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>