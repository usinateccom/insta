
<?php
include "../config/config.php";

include "../funcoes/funcoes.php";

session_start();

if(!isset($_SESSION['logindd']) and !isset($_SESSION['senhadd'])){
//se não tem sessão

$entra_men = '<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a href="../cadastro/">Cadastre-se</a></li>


<li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a href="#" onclick="login_entra()">Entrar</a></li>';




}else{


$entra_men = '<li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a href="../painel/" >Minha Conta</a></li>';



}//sessapo

$ponto = "../";

?>


<html lang="pt-BR">
<head>

	<style>
#wpadminbar{display: none!important}
</style>
<meta charset="UTF-8">

<meta name="google-site-verification" content="QBqUjcY2ZjEz4T1XseHQD00Osid_yqNvt2Y5ScO0zgw" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Instashare.ME - Cadastro Instashare</title>




<script src="<?php echo $ponto; ?>config/js/jquery.min.js"></script>

<script src="<?php echo $ponto; ?>config/js/funcoes.js"></script>
<script src="<?php echo $ponto; ?>config/js/jquery-1.5.2.min.js"></script>
<script src="<?php echo $ponto; ?>config/js/jquery.maskedinput.js"></script>

<script>
$(document).ready(function(){
$("#data_init").mask("99/99/9999");

$("#data_end").mask("99/99/9999");

$("#hora_init").mask("99:99");

$("#hora_end").mask("99:99");
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111619006-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111619006-1');
</script>









<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="testedez/xmlrpc.php">
<title>InstaShare.Me &#8211; Compartilhamento Inteligente &#8211; Só mais um site WordPress</title>
<link rel="alternate" type="application/rss+xml" title="Feed de InstaShare.Me - Compartilhamento Inteligente &raquo;" href="feed/" />
<link rel="alternate" type="application/rss+xml" title="InstaShare.Me - Compartilhamento Inteligente &raquo;  Feed de comentários" href="comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/instashare.me\/testedez\/../wp-includes\/js\/../wp-emoji-release.min.js?ver=4.4.13"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;return g&&g.fillText?(g.textBaseline="top",g.font="600 32px Arial","flag"===a?(g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3):"diversity"===a?(g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e):("simple"===a?g.fillText(h(55357,56835),0,0):g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
        
        <link rel="stylesheet" href="<?php echo $ponto; ?>config/css/geral.css">
        
		<style type="text/css">
img.../wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.4.13' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='../wp-includes/css/dashicons.min.css?ver=4.4.13' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='../wp-includes/css/admin-bar.min.css?ver=4.4.13' type='text/css' media='all' />
<link rel='stylesheet' id='bbp-default-css'  href='../wp-content/plugins/bbpress/templates/default/css/bbpress.css?ver=2.5.14-6684' type='text/css' media='screen' />
<link rel='stylesheet' id='bp-admin-bar-css'  href='../wp-content/plugins/buddypress/bp-core/css/admin-bar.min.css?ver=2.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='bp-legacy-css-css'  href='../wp-content/plugins/buddypress/bp-templates/bp-legacy/css/buddypress.min.css?ver=2.9.2' type='text/css' media='screen' />
<link rel='stylesheet' id='parallax-one-bootstrap-style-css'  href='../wp-content/themes/Parallax-One/css/bootstrap.min.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='parallax-one-style-css'  href='../wp-content/themes/Parallax-One/style.css?ver=1.0.0' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var BP_Confirm = {"are_you_sure":"Tem certeza?"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/confirm.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/widget-members.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/jquery-query.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-cookie.min.js?ver=2.9.2'></script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-core/js/vendor/jquery-scroll-to.min.js?ver=2.9.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var BP_DTheme = {"accepted":"Aceitos","close":"Fechar","comments":"coment\u00e1rios","leave_group_confirm":"Voc\u00ea tem certeza que quer sair desse grupo?","mark_as_fav":"Favorito","my_favs":"Meus Favoritos","rejected":"Rejeitados","remove_fav":"Remover Favorito","show_all":"Mostrar tudo","show_all_comments":"Mostrar todos os coment\u00e1rios nesta discuss\u00e3o","show_x_comments":"Mostrar todos os coment\u00e1rios (%d)","unsaved_changes":"Seu perfil tem altera\u00e7\u00f5es n\u00e3o salvas. Se voc\u00ea deixar a p\u00e1gina, as mudan\u00e7as ser\u00e3o perdidas.","view":"Ver"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.min.js?ver=2.9.2'></script>
<link rel='https://api.w.org/' href='../wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.4.13" />

	<script type="text/javascript">var ajaxurl = '../wp-admin/admin-ajax.php';</script>

<!--[if lt IE 9]>
<script src="../wp-content/themes/Parallax-One/js/html5shiv.min.js"></script>
<![endif]-->
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>



<?php

include "../funcoes/geoloc.php";

?>


</head>

<body class="home-page bp-legacy home blog logged-in admin-bar no-customize-support no-js" onload=" initialize();">


<script>
 window.fbAsyncInit = function() {
    FB.init({
      appId      : '1989484314633279', // seu APP ID
      cookie     : true, // habilita cookies para permitir o servidor acessar a sessao
      xfbml      : true, // processa plugins sociais nessa pagina
      version    : 'v2.5' // versao da Graph API usada
    });
  };
 
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
   
   function testAPI() {

if($("#satazi_f").val() == "not"){


    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', {locale: 'pt_BR', fields: 'name , email, gender'}, function(response) {
      console.log('Successful login for: ' + response.name);

if(typeof response.email == 'undefined' ){


var eco = response.id + "@instashare.me";

}else{

var eco = response.email;



}


    }); // if

  } // funcção testa api


</script>






	<!-- =========================
     PRE LOADER       
    ============================== -->
	<div class="preloader"><div class="status">&nbsp;</div></div>

	<!-- =========================
     SECTION: HOME / HEADER  
    ============================== -->
	<header class="header header-style-one" data-stellar-background-ratio="0.5" id="home">

        <!-- COLOR OVER IMAGE -->
        		<div class="overlay-layer-nav sticky-navigation-open">

            <!-- STICKY NAVIGATION -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll" role="navigation" style="top: 0%; position: fixed">
				<!-- CONTAINER -->
                <div class="container">
				
                    <div class="navbar-header">
                        
                        <!-- LOGO ON STICKY NAV BAR -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#stamp-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                     
                        <!-- LOGO -->
						
						<a href="" class="navbar-brand" title="InstaShare.Me - Compartilhamento Inteligente"><img src="<?php echo $ponto; ?>../wp-content/uploads/2017/12/IMG-20171213-WA0053.png" alt="InstaShare.Me - Compartilhamento Inteligente"></a><div class="header-logo-wrap paralax_one_only_customizer"><h1 class='site-title'><a href='' title='InstaShare.Me &#8211; Compartilhamento Inteligente' rel='home'>InstaShare.Me - Compartilhamento Inteligente</a></h1><h2 class='site-description'>Só mais um site WordPress</h2></div>
                    </div>
                    
                    <!-- MENU -->
                    <div class="navbar-collapse collapse" id="stamp-navigation">		
    					<ul id="menu-principal" class="nav navbar-nav navbar-right main-navigation small-text"><li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a href="../cadastro-veiculo/">Cadastre seu Veículo</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a href="../como-funciona/">Como Funciona</a></li>
<?php echo $entra_men; ?>
</ul>                    </div>
					<!-- /END MENU -->
                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION --><!-- CONTAINER -->


		<div class="overlay-layer-wrap" style="display: none;">
			<div class="container overlay-layer" id="parallax_header">

			<!-- ONLY LOGO ON HEADER -->
						<!-- /END ONLY LOGO ON HEADER -->

			<div class="row">
				<div class="col-md-12 intro-section-text-wrap">

					<!-- HEADING AND BUTTONS -->
											<div id="intro-section" class="intro-section">

							<!-- WELCOM MESSAGE -->
							<h1 id="intro_section_text_1" class="intro white-text">Carro compartilhado sem esforço</h1>

							<h5 id="intro_section_text_2" class="white-text">Alugue um carro conforme sua preferência e perto de você</h5>
							<!-- BUTTON -->
							<div id="intro_section_text_3" class="button"><div id="inpage_scroll_btn"><a href="#" onclick="demonstrativo()" class="btn btn-primary standard-button inpage-scroll">Assista o Demonstrativo</a></div></div>							<!-- /END BUTTON -->

						</div>
						<!-- /END HEADNING AND BUTTONS -->
									</div>
			</div>
			</div>
		</div>

		</div>
		<!-- /END COLOR OVER IMAGE -->
	</header>
	<!-- /END HOME / HEADER  -->


<style>
.bus{background-color: #4C2658!important; border: 0px; border-bottom: 2px solid #fff!important; color: #fff!important; width:110px!important}
.client-logos li{display: inline-table; float:left;}
.dimin{width: 90px!important}
</style>





	<div class="content-wrap" style="background-color:#4C2658;">

	<!-- =========================
 SECTION: CLIENTS LOGOs
============================== -->
<div class="clients white-bg" id="clients" style="display: table; width: 100%; background-color:#4C2658; color: #fff;"><div class="container" style="display:table; width: 80%;">
<h2>Cadastro Instashare</h2>

<div class="reguad">


<span> Você está em: </span><span id="nome_geog">... </span>

</div>


</div>



<style>

.inl_left{display: inline-table; float: left;}
.reguad{width: 96%; text-align: left;; padding: 2%;}
</style>
<!--
<div class="row">
<span class="inl_left"><h4>Você éstá em: </h4></span><span id="pega_cidade" class="inl_left">, Belo Horizonte</span>

</div>

-->



</div>	<!-- =========================
 SECTION: SERVICES
============================== -->
		<section class="services" id="services">
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<div class="section-header">
						<h2 class="dark-text">Cadastre-se</h2><div class="colored-line"></div>
						<div class="sub-heading">Preeencha dados pessoais<br>ou<br><img src="../imagens/instashare login com facebbok.png" style="height: 40px; width:auto;"></div>					</div></div></div></section>
<!-- =========================
 SECTION: BRIEF LEFT
============================== -->
		<section class="brief text-left brief-design-one brief-left" id="story">
			


<fieldset><div class="row"><legend class="col-md-offset-1 col-md-11">Informações Pessoais</legend>        <div class="col-md-offset-1 form-spaced col-md-4 personal-form__input">
          <label for="user_first_name">
            <span>Nome</span>
            
          </label>
          <input id="user_first_name" name="user[first_name]" class="form-control requiredField validateInput" value="" type="text">
          
        </div>
        <div class="form-spaced col-md-4 personal-form__input">
          <label for="user_last_name">
            <span>Sobrenome</span>
            
          </label>
          <input id="user_last_name" name="user[last_name]" class="form-control requiredField validateInput" value="" type="text">
          
        </div>
        <div class="form-group form-spaced col-md-offset-1 col-md-4 ">
          <label for="user_email">
            <span>Data de nascimento</span>
            
          </label>
          <input id="user_email" name="user[birthday]" class="form-control requiredField validateInput" value="" type="text" data-mask="00/00/0000" autocomplete="off" maxlength="10">
          
        </div>
        <div class="form-spaced col-md-4 personal-form__input">
          <label for="user_email">
            <span>Email</span>
            
          </label>
          <input id="user_email" name="user[email]" class="form-control requiredField validateInput" value="" type="text">
          
        </div>
</div><div class="row">        <div class="col-md-4 col-md-offset-1 form-group form-spaced personal-form__input string">
          <label for="user_cpf">
            <span>CPF</span>
            
          </label>
          <input id="user_cpf" name="user[cpf]" class="form-control requiredField validateInput" value="" type="text" data-mask="000.000.000-00" maxlength="14" autocomplete="off">
          
        </div>
        <div class="form-spaced form_group col-md-4 personal-form__input">
          <label for="user_phone">
            <span>Telefone</span>
            
          </label>
          <input id="user_phone" name="user[phone]" class="form-control requiredField validateInput" value="" type="text" data-mask="(00) 90000-0000" maxlength="15" autocomplete="off">
          
        </div>








<!--gg-->
<input class="btn-peaked btn-fill btn-orange" name="commit" type="submit" value="Cadastrar"></fieldset>





		</section><!-- .brief-design-one -->


						
					
<!-- =========================
 SECTION: TEAM   
============================== -->
	
		
<!-- =========================
 SECTION: CUSTOMERS   
============================== -->
	<section class="testimonials" id="customers">
		<div class="section-overlay-layer">
			<div class="container">

				<!-- SECTION HEADER -->
									<div class="section-header">
						<h2 class="dark-text">Avaliações</h2><div class="colored-line"></div><div class="sub-heading">Cloud computing subscription model out of the box proactive solution.</div>					</div>
				<div id="happy_customers_wrap" class="testimonials-wrap">							<!-- SINGLE FEEDBACK -->
							<div class="testimonials-box">
								<div class="feedback border-bottom-hover">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php echo $ponto; ?>../wp-content/themes/Parallax-One/images/clients/1.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap">
																						<h5 class="colored-text">Sheila</h5>
																						<div class="small-text">
													Centro - Belo Horizonte	
												</div>
																						<p>
													No centro de Belo Horizonte, estacionamento é sempre um pesadelo! Meu prédio, como a maioria dos prédios antigos, não tem vaga de garagem. Contar com um carro compartilhado tem mudado meu dia-a-dia.												</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
											<!-- SINGLE FEEDBACK -->
							<div class="testimonials-box">
								<div class="feedback border-bottom-hover">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php echo $ponto; ?>../wp-content/themes/Parallax-One/images/clients/2.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap">
																						<h5 class="colored-text">Carla</h5>
																						<div class="small-text">
													Betânia - Belo Horizonte	
												</div>
																						<p>
													Até o Uber ficava caro para mim. Eu me movimento muito em função do meu trabalho. Ônibus, sem chance. Acessar um carro compartilhado tem sido a melhor e mais econômica experiência dos últimos tempos												</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
											<!-- SINGLE FEEDBACK -->
							<div class="testimonials-box">
								<div class="feedback border-bottom-hover">
									<div class="pic-container">
										<div class="pic-container-inner">
											<img src="<?php echo $ponto; ?>../wp-content/themes/Parallax-One/images/clients/3.jpg" alt="">										</div>
									</div>
																			<div class="feedback-text-wrap">
																						<h5 class="colored-text">Núbia</h5>
																						<div class="small-text">
													Eldorado - Contagem	
												</div>
																						<p>
													Antes eu tinha que me deslocar para a região central de BH para obter um veículo. Encontrei um bem pertinho de mim. Bom pra mim, bom para quem compartilha. Nunca imaginei tanta facilidade assim!											</p>
																				</div>
																	</div>
							</div><!-- .testimonials-box -->
				</div>			</div>
		</div>
	</section><!-- customers -->
<!-- =========================
 SECTION: RIBBON   
============================== -->
<!-- =========================
 SECTION: LATEST NEWS   
============================== -->
			<section class="brief timeline" id="latestnews">
				<div class="section-overlay-layer">
					<div class="container">
						<div class="row">

							<!-- TIMELINE HEADING / TEXT  -->
							
							<div class="parallax-slider-whole-wrap">
								<div class="controls-wrap">
									<a class="control_next"><div class="icon icon-arrow-carrot-down"></div></a>
									<a class="control_prev fade-btn"><div class="icon icon-arrow-carrot-up"></div></a>
								</div>
								<!-- TIMLEINE SCROLLER -->
								<div id="parallax_slider" class="col-md-12 timeline-section">
									<ul class="vertical-timeline" id="timeline-scroll">

										<li>
												<div class="timeline-box-wrap">
													<div class="date small-text strong">
													dez, 18													</div>
													<div class="icon-container white-text">
														<a href="2017/12/18/ola-mundo/" title="Olá, mundo!">
																																<img src="../wp-content/themes/Parallax-One/images/no-thumbnail-latest-news.jpg" width="150" height="150" alt="Olá, mundo!">
																													</a>
													</div>
													<div class="info">
														<header class="entry-header">
															<h1 class="entry-title">
																<a href="2017/12/18/ola-mundo/" rel="bookmark">Olá, mundo!</a>
															</h1>
															<div class="entry-meta">
																<span class="entry-date">
																	<a href="2017/12/18/" rel="bookmark">
																		<time class="entry-date" datetime="2017-12-18T21:14:13+00:00">dezembro 18, 2017</time>
																	</a>
																</span>
																<span> by </span>
																<span class="byline">
																	<span class="author vcard">
																		<a class="url fn n" href="author/alexandre/" rel="author">Alexandre </a>
																	</span>
																</span>
															</div><!-- .entry-meta -->
														</header>
														<div class="entry-content">
															<p>Bem-vindo ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e então comece a escrever!</p>
															<a href="2017/12/18/ola-mundo/" title="Olá, mundo!" class="read-more">Read more</a>
														</div>
													</div>
												</div>

																				</ul>
								</div>
							</div><!-- .parallax-slider-whole-wrap -->
						</div>
					</div>
				</div>
			</section>
	<!-- =========================
 SECTION: CONTACT INFO  
============================== -->
			<div class="contact-info" id="contactinfo">
				<div class="section-overlay-layer">
					<div class="container">

						<!-- CONTACT INFO -->
						<div class="row contact-links">

							<div class="col-sm-4 contact-link-box col-xs-12"><div class="icon-container"><span class="icon-basic-mail colored-text"></span></div><a href="#" class="strong">contato@instashare.me</a></div><div class="col-sm-4 contact-link-box col-xs-12"><div class="icon-container"><span class="icon-basic-geolocalize-01 colored-text"></span></div><a href="#" class="strong">(endereço)</a></div><div class="col-sm-4 contact-link-box col-xs-12"><div class="icon-container"><span class="icon-basic-tablet colored-text"></span></div><a href="#" class="strong">(telefone)</a></div>         
						</div><!-- .contact-links -->
					</div><!-- .container -->
				</div>
			</div><!-- .contact-info -->
<!-- =========================
INTERGEO MAPS 
============================== -->

	</div><!-- .content-wrap -->

	
    <footer class="footer grey-bg">

        <div class="container">
            <div class="footer-widget-wrap">
			
				
            </div><!-- .footer-widget-wrap -->

	        <div class="footer-bottom-wrap">
				<ul class="social-icons"><li><a href="#"><span class="icon-social-facebook transparent-text-dark"></span></a></li><li><a href="#"><span class="icon-social-twitter transparent-text-dark"></span></a></li><li><a href="#"><span class="icon-social-googleplus transparent-text-dark"></span></a></li></ul>	            
	        </div><!-- .footer-bottom-wrap -->

	        <div class="powered-by">
	            <a class="" href="https://themeisle.com/themes/parallax-one/" target="_blank" rel="nofollow">Parallax One </a> powered by <a class="" href="https://wordpress.org/" target="_blank" rel="nofollow">WordPress</a>
	        </div>

	    </div><!-- container -->

    </footer>

	<link rel='stylesheet' id='fm-jquery-ui-css'  href='../wp-content/plugins/form-maker/css/jquery-ui.custom.css?ver=1.12.8' type='text/css' media='all' />
<link rel='stylesheet' id='fm-frontend-css'  href='../wp-content/plugins/form-maker/css/form_maker_frontend.css?ver=1.12.8' type='text/css' media='all' />
<link rel='stylesheet' id='fm-googlefonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans|Oswald|Droid+Sans|Lato|Open+Sans+Condensed|PT+Sans|Ubuntu|PT+Sans+Narrow|Yanone+Kaffeesatz|Roboto+Condensed|Source+Sans+Pro|Nunito|Francois+One|Roboto|Raleway|Arimo|Cuprum|Play|Dosis|Abel|Droid+Serif|Arvo|Lora|Rokkitt|PT+Serif|Bitter|Merriweather|Vollkorn|Cantata+One|Kreon|Josefin+Slab|Playfair+Display|Bree+Serif|Crimson+Text|Old+Standard+TT|Sanchez|Crete+Round|Cardo|Noticia+Text|Judson|Lobster|Unkempt|Changa+One|Special+Elite|Chewy|Comfortaa|Boogaloo|Fredoka+One|Luckiest+Guy|Cherry+Cream+Soda|Lobster+Two|Righteous|Squada+One|Black+Ops+One|Happy+Monkey|Passion+One|Nova+Square|Metamorphous|Poiret+One|Bevan|Shadows+Into+Light|The+Girl+Next+Door|Coming+Soon|Dancing+Script|Pacifico|Crafty+Girls|Calligraffitti|Rock+Salt|Amatic+SC|Leckerli+One|Tangerine|Reenie+Beanie|Satisfy|Gloria+Hallelujah|Permanent+Marker|Covered+By+Your+Grace|Walter+Turncoat|Patrick+Hand|Schoolbell|Indie+Flower&#038;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' type='text/css' media='all' />
<link rel='stylesheet' id='fm-animate-css'  href='../wp-content/plugins/form-maker/css/fm-animate.css?ver=1.12.8' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/admin-bar.min.js?ver=4.4.13'></script>
<script type='text/javascript' src='../wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.14-6684'></script>
<script type='text/javascript' src='../wp-content/themes/Parallax-One/js/bootstrap.min.js?ver=3.3.5'></script>
<script type='text/javascript' src='../wp-content/themes/Parallax-One/js/custom.all.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/Parallax-One/js/plugin.home.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/Parallax-One/js/custom.home.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-content/themes/Parallax-One/js/skip-link-focus-fix.js?ver=1.0.0'></script>
<script type='text/javascript' src='../wp-includes/js/../wp-embed.min.js?ver=4.4.13'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/effect-shake.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var fm_objectL10n = {"states":{"":"","Alabama":"Alabama","Alaska":"Alaska","Arizona":"Arizona","Arkansas":"Arkansas","California":"California","Colorado":"Colorado","Connecticut":"Connecticut","Delaware":"Delaware","District Of Columbia":"District Of Columbia","Florida":"Florida","Georgia":"Georgia","Hawaii":"Hawaii","Idaho":"Idaho","Illinois":"Illinois","Indiana":"Indiana","Iowa":"Iowa","Kansas":"Kansas","Kentucky":"Kentucky","Louisiana":"Louisiana","Maine":"Maine","Maryland":"Maryland","Massachusetts":"Massachusetts","Michigan":"Michigan","Minnesota":"Minnesota","Mississippi":"Mississippi","Missouri":"Missouri","Montana":"Montana","Nebraska":"Nebraska","Nevada":"Nevada","New Hampshire":"New Hampshire","New Jersey":"New Jersey","New Mexico":"New Mexico","New York":"New York","North Carolina":"North Carolina","North Dakota":"North Dakota","Ohio":"Ohio","Oklahoma":"Oklahoma","Oregon":"Oregon","Pennsylvania":"Pennsylvania","Rhode Island":"Rhode Island","South Carolina":"South Carolina","South Dakota":"South Dakota","Tennessee":"Tennessee","Texas":"Texas","Utah":"Utah","Vermont":"Vermont","Virginia":"Virginia","Washington":"Washington","West Virginia":"West Virginia","Wisconsin":"Wisconsin","Wyoming":"Wyoming"},"plugin_url":"http:\/\/instashare.me\/testedez\/../wp-content\/plugins\/form-maker","form_maker_admin_ajax":"http:\/\/instashare.me\/testedez\/../wp-admin\/admin-ajax.php","fm_file_type_error":"Can not upload this type of file","fm_field_is_required":"Field is required","fm_min_max_check_1":"The ","fm_min_max_check_2":" value must be between ","fm_spinner_check":"Value must be between ","fm_clear_data":"Are you sure you want to clear saved data?","fm_grading_text":"Your score should be less than","time_validation":"This is not a valid time value.","number_validation":"This is not a valid number value.","date_validation":"This is not a valid date value.","year_validation":"The year must be between %%start%% and %%end%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/form-maker/js/main_div_front_end.js?ver=1.12.8'></script>
<style type="text/css">.dark-text { color: #444444 }.header{ background-image: url(../wp-content/uploads/2017/12/cropped-1.jpg);}</style>	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs">
							<a class="screen-reader-shortcut" href="#../wp-toolbar" tabindex="1">Pular para a barra de ferramentas</a>
						<div class="quicklinks" id="../wp-toolbar" role="navigation" aria-label="Barra de Ferramentas" tabindex="0">
				<ul id="../wp-admin-bar-root-default" class="ab-top-menu">
		<li id="../wp-admin-bar-../wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="../wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">Sobre o WordPress</span></a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-../wp-logo-default" class="ab-submenu">
		<li id="../wp-admin-bar-about"><a class="ab-item"  href="../wp-admin/about.php">Sobre o WordPress</a>		</li></ul><ul id="../wp-admin-bar-../wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="../wp-admin-bar-wporg"><a class="ab-item"  href="https://br.wordpress.org/">WordPress.org</a>		</li>
		<li id="../wp-admin-bar-documentation"><a class="ab-item"  href="https://codex.wordpress.org/pt-br:Página_Inicial">Documentação</a>		</li>
		<li id="../wp-admin-bar-support-forums"><a class="ab-item"  href="https://br.forums.wordpress.org">Fóruns de Suporte</a>		</li>
		<li id="../wp-admin-bar-feedback"><a class="ab-item"  href="https://br.forums.wordpress.org/forum/pedidos-e-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="../wp-admin/">InstaShare.Me - Compartilhamento Intelig&hellip;</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="../wp-admin-bar-dashboard"><a class="ab-item"  href="../wp-admin/">Painel</a>		</li></ul><ul id="../wp-admin-bar-appearance" class="ab-submenu">
		<li id="../wp-admin-bar-themes"><a class="ab-item"  href="../wp-admin/themes.php">Temas</a>		</li>
		<li id="../wp-admin-bar-widgets"><a class="ab-item"  href="../wp-admin/widgets.php">Widgets</a>		</li>
		<li id="../wp-admin-bar-menus"><a class="ab-item"  href="../wp-admin/nav-menus.php">Menus</a>		</li>
		<li id="../wp-admin-bar-background" class="hide-if-customize"><a class="ab-item"  href="../wp-admin/themes.php?page=custom-background">Fundo</a>		</li>
		<li id="../wp-admin-bar-header" class="hide-if-customize"><a class="ab-item"  href="../wp-admin/themes.php?page=custom-header">Cabeçalho</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="../wp-admin/customize.php?url=http%3A%2F%2Finstashare.me%2Ftestedez%2F">Personalizar</a>		</li>
		<li id="../wp-admin-bar-updates"><a class="ab-item"  href="../wp-admin/update-core.php" title="1 atualização de plugin, 6 atualização de temas"><span class="ab-icon"></span><span class="ab-label">7</span><span class="screen-reader-text">1 atualização de plugin, 6 atualização de temas</span></a>		</li>
		<li id="../wp-admin-bar-comments"><a class="ab-item"  href="../wp-admin/edit-comments.php" title="0 comentário aguarda moderação"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="../wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="../wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">Novo</span></a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="../wp-admin-bar-new-post"><a class="ab-item"  href="../wp-admin/post-new.php">Post</a>		</li>
		<li id="../wp-admin-bar-new-media"><a class="ab-item"  href="../wp-admin/media-new.php">Mídia</a>		</li>
		<li id="../wp-admin-bar-new-page"><a class="ab-item"  href="../wp-admin/post-new.php?post_type=page">Página</a>		</li>
		<li id="../wp-admin-bar-new-forum"><a class="ab-item"  href="../wp-admin/post-new.php?post_type=forum">Fórum</a>		</li>
		<li id="../wp-admin-bar-new-topic"><a class="ab-item"  href="../wp-admin/post-new.php?post_type=topic">Tópico</a>		</li>
		<li id="../wp-admin-bar-new-reply"><a class="ab-item"  href="../wp-admin/post-new.php?post_type=reply">Resposta</a>		</li>
		<li id="../wp-admin-bar-new-user"><a class="ab-item"  href="../wp-admin/user-new.php">Usuário</a>		</li></ul></div>		</li></ul><ul id="../wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="../wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Pesquisar</label><input type="submit" class="adminbar-button" value="Pesquisar"/></form></div>		</li>
		<li id="../wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/profile/edit/">Olá, Alexandre<img alt='' src='//www.gravatar.com/avatar/fc73cd06ca955cd467b9f14803a582d7?s=26&#038;r=g&#038;d=mm' srcset='//www.gravatar.com/avatar/fc73cd06ca955cd467b9f14803a582d7?s=26&#038;r=g&#038;d=mm 2x' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-user-actions" class="ab-submenu">
		<li id="../wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="membros/alexandre/profile/edit/"><img alt='' src='//www.gravatar.com/avatar/fc73cd06ca955cd467b9f14803a582d7?s=64&#038;r=g&#038;d=mm' srcset='//www.gravatar.com/avatar/fc73cd06ca955cd467b9f14803a582d7?s=64&#038;r=g&#038;d=mm 2x' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>Alexandre</span></a>		</li>
		<li id="../wp-admin-bar-edit-profile"><a class="ab-item"  href="membros/alexandre/profile/edit/">Editar Meu Perfil</a>		</li>
		<li id="../wp-admin-bar-logout"><a class="ab-item"  href="../wp-login.php?action=logout&#038;_wpnonce=934277444a&#038;redirect_to=http%3A%2F%2Finstashare.me%2Ftestedez%2F%3Floggedout%3Dtrue">Sair</a>		</li></ul><ul id="../wp-admin-bar-my-account-buddypress" class="ab-sub-secondary ab-submenu">
		<li id="../wp-admin-bar-my-account-activity" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/activity/">Atividade</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-my-account-activity-default" class="ab-submenu">
		<li id="../wp-admin-bar-my-account-activity-personal"><a class="ab-item"  href="membros/alexandre/activity/">Pessoal</a>		</li>
		<li id="../wp-admin-bar-my-account-activity-mentions"><a class="ab-item"  href="membros/alexandre/activity/mentions/">Menções</a>		</li>
		<li id="../wp-admin-bar-my-account-activity-favorites"><a class="ab-item"  href="membros/alexandre/activity/favorites/">Favoritos</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-my-account-xprofile" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/profile/">Perfil</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-my-account-xprofile-default" class="ab-submenu">
		<li id="../wp-admin-bar-my-account-xprofile-public"><a class="ab-item"  href="membros/alexandre/profile/">Ver</a>		</li>
		<li id="../wp-admin-bar-my-account-xprofile-edit"><a class="ab-item"  href="membros/alexandre/profile/edit/">Editar</a>		</li>
		<li id="../wp-admin-bar-my-account-xprofile-change-avatar"><a class="ab-item"  href="membros/alexandre/profile/change-avatar/">Mudar foto de perfil</a>		</li>
		<li id="../wp-admin-bar-my-account-xprofile-change-cover-image"><a class="ab-item"  href="membros/alexandre/profile/change-cover-image/">Mudar imagem de capa</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-my-account-notifications" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/notifications/">Notificações</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-my-account-notifications-default" class="ab-submenu">
		<li id="../wp-admin-bar-my-account-notifications-unread"><a class="ab-item"  href="membros/alexandre/notifications/">Não lida</a>		</li>
		<li id="../wp-admin-bar-my-account-notifications-read"><a class="ab-item"  href="membros/alexandre/notifications/read/">Ler</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-my-account-forums" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/forums/">Fóruns</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-my-account-forums-default" class="ab-submenu">
		<li id="../wp-admin-bar-my-account-forums-topics"><a class="ab-item"  href="membros/alexandre/forums/topics/">Tópicos iniciados</a>		</li>
		<li id="../wp-admin-bar-my-account-forums-replies"><a class="ab-item"  href="membros/alexandre/forums/replies/">Respostas criadas</a>		</li>
		<li id="../wp-admin-bar-my-account-forums-favorites"><a class="ab-item"  href="membros/alexandre/forums/favorites/">Tópicos favoritos</a>		</li>
		<li id="../wp-admin-bar-my-account-forums-subscriptions"><a class="ab-item"  href="membros/alexandre/forums/subscriptions/">Tópicos assinados</a>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-my-account-settings" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/settings/">Configurações</a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-my-account-settings-default" class="ab-submenu">
		<li id="../wp-admin-bar-my-account-settings-general"><a class="ab-item"  href="membros/alexandre/settings/">Geral</a>		</li>
		<li id="../wp-admin-bar-my-account-settings-notifications"><a class="ab-item"  href="membros/alexandre/settings/notifications/">Email</a>		</li>
		<li id="../wp-admin-bar-my-account-settings-profile"><a class="ab-item"  href="membros/alexandre/settings/profile/">Perfil</a>		</li></ul></div>		</li></ul></div>		</li>
		<li id="../wp-admin-bar-bp-notifications" class="menupop"><a class="ab-item"  aria-haspopup="true" href="membros/alexandre/notifications/"><span id="ab-pending-notifications" class="count no-alert">0</span></a><div class="ab-sub-wrapper"><ul id="../wp-admin-bar-bp-notifications-default" class="ab-submenu">
		<li id="../wp-admin-bar-no-notifications"><a class="ab-item"  href="membros/alexandre/notifications/">Não há novas notificações</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="../wp-login.php?action=logout&#038;_wpnonce=934277444a&#038;redirect_to=http%3A%2F%2Finstashare.me%2Ftestedez%2F%3Floggedout%3Dtrue">Sair</a>
					</div>


<div id="alfa" class='dnone' onclick='fechpop()'>

</div>

<div id="alfa1" class='dnone'>

</div>


<div id='login_p' class="popup central boldim">
<br>
Digite login e senha<br>

<br><br>

<input id="concha_login" placeholder="LOGIN" class="input_frango"> &nbsp; &nbsp;

<input id="concha_pass" placeholder="SENHA" class="input_frango"><br>
<br>
<button id="loga_logo" class="btn-orange">ENTRAR</button>
<br><br>
Ou<br>

<img src="../imagens/instashare login com facebbok.png" style="height: 40px; width:auto;">

<fb:login-button
     scope="email,public_profile" onlogin="checkLoginState();" >
</fb:login-button>

<br><br>
</div>



<div id='demonst_p' class="popup central boldim">

<br><br><center>[VIDEO DEMONSTRATIVO YOUTUBE]</center>




</div>


<div id='aguard' class="popup central boldim">

<table border="0" cellspacing="0"><tr>
	

<td>


</td>
<img src="../imagens/compartilhamento aluguel carro aguarde.png" title="compartilhamento aluguel carro aguarde" alt="compartilhamento aluguel carro aguarde">
<td>

<center>
Aguarde...
</center>
</td>


</tr></table>


<br>



</div>

		
</body>
</html>