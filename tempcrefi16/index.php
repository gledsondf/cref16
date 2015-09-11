	
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
<hr />
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
							<li></li>
							<li></li>
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
								<li><?php edit_post_link( __( 'Edit', 'your-theme' )) ?></li>
							</ul>
							
							<p>CREFFITO 16</p>
						</div>
						<ul class="col-terco">
							<li><a href="#"><img title="facebook"  alt="facebook" src="img/logoFace_p.png" /></a></li>
							<li><a href="#"><img title="Youtube"  alt="Youtube" src="img/logoYoutube_p.png" /></a></li>
							<li><a href="#"><img title="Twitter"  alt="Twitter" src="img/logoTwitter_p.png" /></a></li>
							<li><a href="#"><img title="Instagram"  alt="Instagram" src="img/logoInstagram_p.png" /></a></li>
							<li><a href="#"><img title="Flickr"  alt="Flickr" src="img/logoFlickr_p.png" /></a></li>
							<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="img/logoWhatsapp_p.png" /></a></li>
						</ul>
					</footer>
				</div>

			</article>
		</div>
<?php endwhile; ?>

<?php /* O Ciclo — com comentários! */ ?>
<?php while ( have_posts() ) : the_post() ?>
<?php /* Criando uma div com um ID único graças ao the_ID() e classes semânticas com o post_class() */ ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /* um título h2 */ ?>
     <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php /* Meta dados da postagem com possibilidade de tradução */ ?>
     <div class="entry-meta">
      <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
      <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
      <span class="meta-sep"> | </span>
      <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
      <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
     </div><!– .entry-meta –>
<?php /* O conteúdo da postagem */ ?>
     <div class="entry-content">
<?php the_content( __( 'Continue reading <span class="meta-nav">»</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
     </div><!– .entry-content –>
<?php /* Categoria micro-formatada e links para tags junto com link para comentários */ ?>
     <div class="entry-utility">
      <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
      <span class="meta-sep"> | </span>
      <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
      <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
     </div><!– #entry-utility –>
    </div><!– #post-<?php the_ID(); ?> –>
<?php /* Encerrar a div e terminar o ciclo com endwhile */ ?>
<?php endwhile; ?>

<hr/>


		<div class="artigo">
			<article>
				<div class="artTopo">
					<header>
						<h1>Título Artigo</h1>
					</header>
				</div>
				<div class="artCont">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Clique aqui</a>Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed </p>
				</div>
				<div class="artFoot">
					<footer>
						<div class="col-2terco">
							<p>CREFFITO 16</p>
						</div>
						<ul class="col-terco">
							<li><a href="#"><img title="facebook"  alt="facebook" src="img/logoFace_p.png" /></a></li>
							<li><a href="#"><img title="Youtube"  alt="Youtube" src="img/logoYoutube_p.png" /></a></li>
							<li><a href="#"><img title="Twitter"  alt="Twitter" src="img/logoTwitter_p.png" /></a></li>
							<li><a href="#"><img title="Instagram"  alt="Instagram" src="img/logoInstagram_p.png" /></a></li>
							<li><a href="#"><img title="Flickr"  alt="Flickr" src="img/logoFlickr_p.png" /></a></li>
							<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="img/logoWhatsapp_p.png" /></a></li>
						</ul>
					</footer>
				</div>

			</article>
		</div>

		<div class="artigo ">
			<article>
				<div class="artTopo">
					<header>
						<h1>Título Notícias</h1>
					</header>
				</div>
				<div class="artCont">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed </p>
					<ul>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
						<li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra</a></li>
					</ul>
				</div>
				<div class="artFoot row">
					<footer>
						<div class="col-2terco">
							<p>CREFFITO 16</p>
						</div>
						<ul class="col-terco">
							<li><a href="#"><img title="facebook"  alt="facebook" src="img/logoFace_p.png" /></a></li>
							<li><a href="#"><img title="Youtube"  alt="Youtube" src="img/logoYoutube_p.png" /></a></li>
							<li><a href="#"><img title="Twitter"  alt="Twitter" src="img/logoTwitter_p.png" /></a></li>
							<li><a href="#"><img title="Instagram"  alt="Instagram" src="img/logoInstagram_p.png" /></a></li>
							<li><a href="#"><img title="Flickr"  alt="Flickr" src="img/logoFlickr_p.png" /></a></li>
							<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="img/logoWhatsapp_p.png" /></a></li>
						</ul>
					</footer>
				</div>

			</article>
		</div>

		<div class="artigo ">
			<article>
				<div class="artTopo">
					<header>
						<h1>Exemplo Formulário</h1>
					</header>
				</div>
				<div class="artCont">
					<form action="">
						<fieldset>
							<legend>título do formulário</legend>
							<label for="nome">Título do label</label>
							<input type="text" name="nome" />
							<label><input type="radio" name="sexo" value="masculino" /> Masculino</label>
							<label><input type="checkbox" name="veiculos" /> Eu tenho um carro</label>
							<select name="carros">
								<option value="volvo">Volvo</option>
								<option value="fiat">Fiat</option>
								<option value="audi">Audi</option>
							</select>	
							<button type="button" onclick="alert('teste botão')">Clica aqui</button>
							<textarea name="mensagem" rows="10" cols="30">
								teste de mensagem
							</textarea>
							<input type="submit" value="enviar" />
						</fieldset>
					</form>
				</div>
				<div class="artFoot row">
					<footer>
						<div class="col-2terco">
							<p>CREFFITO 16</p>
						</div>
						<ul class="col-terco">
							<li><a href="#"><img title="facebook"  alt="facebook" src="img/logoFace_p.png" /></a></li>
							<li><a href="#"><img title="Youtube"  alt="Youtube" src="img/logoYoutube_p.png" /></a></li>
							<li><a href="#"><img title="Twitter"  alt="Twitter" src="img/logoTwitter_p.png" /></a></li>
							<li><a href="#"><img title="Instagram"  alt="Instagram" src="img/logoInstagram_p.png" /></a></li>
							<li><a href="#"><img title="Flickr"  alt="Flickr" src="img/logoFlickr_p.png" /></a></li>
							<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="img/logoWhatsapp_p.png" /></a></li>
						</ul>
					</footer>
				</div>

			</article>
		</div>

		<div class="artigo ">
			<article>
				<div class="artTopo">
					<header>
						<h1>Exemplo Tabela</h1>
					</header>
				</div>
				<div class="artCont responsive">
					<table>
						<thead>
							<tr>
								<th>titulo</th><th>titulo</th><th>titulo</th><th>titulo</th><th>titulo</th>
							</tr>
			
						</thead>
						<tfoot>
							
							<tr>
								<td>rodapé</td><td>rodapé</td><td>rodapé</td><td>rodapé</td><td>rodapé</td>
							</tr>

						</tfoot>
						<tbody>
							<tr>
								<td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td>
							</tr>
							<tr>
								<td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td>
							</tr>
							<tr>
								<td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td>
							</tr>
							<tr>
								<td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td>
							</tr>
							<tr>
								<td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td><td>corpo</td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="artFoot row">
					<footer>
						<div class="col-2terco">
							<p>CREFFITO 16</p>
						</div>
						<ul class="col-terco">
							<li><a href="#"><img title="facebook"  alt="facebook" src="img/logoFace_p.png" /></a></li>
							<li><a href="#"><img title="Youtube"  alt="Youtube" src="img/logoYoutube_p.png" /></a></li>
							<li><a href="#"><img title="Twitter"  alt="Twitter" src="img/logoTwitter_p.png" /></a></li>
							<li><a href="#"><img title="Instagram"  alt="Instagram" src="img/logoInstagram_p.png" /></a></li>
							<li><a href="#"><img title="Flickr"  alt="Flickr" src="img/logoFlickr_p.png" /></a></li>
							<li><a href="#"><img title="Whatsapp"  alt="Whatsapp" src="img/logoWhatsapp_p.png" /></a></li>
						</ul>
					</footer>
				</div>

			</article>
		</div>

	</section>
	</div><!--conteudo-->
<?php get_footer(); ?>