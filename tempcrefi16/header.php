<!DOCTYPE >
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php
	if ( is_single() ) { single_post_title(); }
	elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
	elseif ( is_page() ) { single_post_title(''); }
	elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
	elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
	else { bloginfo('name'); wp_title('|'); get_page_number(); }
	?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">



	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/bootstrap-carousel.css" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- 	<?php wp_head(); ?> -->
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap-carousel.js"></script>
	<script>
		$(window).load(function() {
			 $('#myCarousel').carousel()
		});
	</script>
</head>

<body>
	<?php
		//inclui o código do google analytics
 		include_once("analyticstracking.php");
 	?>	
<!-- 
<div id="branding">
    <div id="blog-title"><span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span></div>
<?php if ( is_home() || is_front_page() ) { ?>
        <h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>
<?php } else { ?>
        <div id="blog-description"><?php bloginfo( 'description' ) ?></div>
<?php } ?>
   </div><!– #branding –>


 -->
<!-- <div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'seu-template' ) ?>"><?php _e( 'Skip to content', 'seu-template' ) ?></a></div>
 -->	<div id="topo" class="row">
		<div id="logo">
			<div id="contLogo">
				<a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/logoCrefito16_nome.png" /></a>
			</div>
		</div>
		<div id="menu">
			<nav>
				<ul id="menuP">
					<li>
						<a href="#" onclick="abreMenu()"><img src="<?php bloginfo('template_url'); ?>/img/tresmenu.png" /></a>
					</li>

				</ul>
				<ul id="menuN">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-principal','items_wrap' => '%3$s','container' => '', ) ); ?>
				<!-- 	<?//php wp_list_pages('title_li='); ?> -->
					<li class="fecharMenu" ><a href="#" onclick="fecharMenu()"><img src="<?php bloginfo('template_url'); ?>/img/fecharMenu.png" /></a></li>
					<li><a href="">item menu</a>
						<ul>
							<li><a href="">item menu lateral</a></li>
							<li><a href="">item menu lateral</a></li>	
						</ul>						
					</li>
					<li><a href="">item menu</a></li>
					<li><a href="">item menu</a></li>
					<li><a href="">item menu</a></li>
					<li><a href="">item menu</a></li>
					<li><a href="">item menu</a>
						<ul>
							<li><a href="">item menu lateral</a></li>
							<li><a href="">item menu lateral</a></li>
							<li><a href="">item menu lateral</a></li>	
						</ul>	
					</li>

				</ul>
			</nav>
		</div>
	</div><!--top-->
<div id="geral" class="row">
<div id="acessibilidade" class="row"></div>