<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage LevelUp
 * @since LevelUp 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
	<meta name="google-site-verification" content="wlhz5ESa9pz3ZH9FbWKSDfOWbg3hCS_SXwIAhHXs5Q4" />
	<link rel="stylesheet"  href="/wp-content/themes/LevelUp/video-js/video-js.min.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="text/html;charset=<?php bloginfo( 'charset' ); ?>" http-equiv="Content-Type">
    <meta content="<?php bloginfo( 'charset' ); ?>" http-equiv="encoding">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0,  user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css?3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css?3">
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" crossorigin="anonymous">

    <!--Сброс стилей-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css?4">
    <!--Шрифты Google (Roboto, Montserrat)-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <!--Иконки FontAwesome-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/guttenberg.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?<?php echo date(get_option('date_format')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slide.min.css?3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/navigation.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/saas-style.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/search-form.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/dev.css?<?php echo date(get_option('date_format')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/it-english.css?<?php echo date(get_option('date_format')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hr-page.css?<?php echo date(get_option('date_format')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/event.css?<?php echo date(get_option('date_format')); ?>">
      
    <?php wp_head(); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-editor.css?<?php echo date(get_option('date_format')); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pm.css?<?php echo date(get_option('date_format')); ?>">


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/greensock.js?ver=1.19.0"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPKXSQS');</script>
<!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMPZ66C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</head>

<body <?php body_class(); ?>>

<svg class="hidden">
            <symbol id="icon-menu" viewBox="0 0 119 25">
                <title>menu</title>
                <path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/>
            </symbol>
            <symbol id="icon-close" viewBox="0 0 24 24">
                <title>close</title>
                <path d="M24 1.485L22.515 0 12 10.515 1.485 0 0 1.485 10.515 12 0 22.515 1.485 24 12 13.484 22.515 24 24 22.515 13.484 12z"/>
            </symbol>
        </svg>
<div>
<?php if (current_user_can('level_10')) { ?><div class="for_adm"><?php } ?>

<header id="header" class="fixed-top header-color">



 <nav class="navbar navbar-expand-lg navbar-dark bg-kirpichik static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo_desktop" alt="LevelUp" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.svg" class="logo_mobile" alt="LevelUp" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/Logo-white.svg" class="dev-logo" alt="LevelUp" />
    </a>

	  <div class="header-phone">
	<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380960842513">(096) 084 25 13</a>
		  <div class="header-phone_last"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380997318385">(099) 731 83 85</a></div>
	  </div>
    <button class="navbar-toggler snj_sandwitch_btn_show" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>





<div id="snj_sandwitch"><div class="snj_sandwitch_btn_hide"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>

	</div><div class="snj_sandwitch-menu text-center">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>otkryt-nabor/">Открыт набор</a>
							<a href="#" data-toggle="modal" data-target="#all_courses">Все курсы</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>novosti/">Новости и события</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">IT-блог</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakty/">Контакты</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>reviews/">Отзывы</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>aboutus/">О нас</a>
						</div>
</div>


<div class="modal fade" id="all_courses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class="modal-title reviews_name" id="exampleModalCenterTitle">Все курсы Level Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  						<div class="cat_menu_title cat_1">Программирование</div>
                                <?php
                                $menuParameters = array(
                                //     Основы программирования
                                    'menu'            => '25',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>

		  						<div class="cat_menu_title cat_2">Дизайн и верстка</div>
                                <?php
                                $menuParameters = array(
                                //     Дизайн и верстка
                                    'menu'            => '26',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>

		  						<div class="cat_menu_title cat_3">Маркетинг и IT-менеджмент</div>
		                      <?php
                                $menuParameters = array(
                                //     Маркетинг и IT-менеджмент
                                    'menu'            => '27',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
		  						<div class="cat_menu_title cat_4">Поддержка и аналитика</div>
		  		                      <?php
                                $menuParameters = array(
                                //     Поддержка и аналитика
                                    'menu'            => '28',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
		  		  						<div class="cat_menu_title cat_5">Индивидуальные курсы</div>
		  		  		      <?php
                                $menuParameters = array(
                                //     Индивидуальные курсы
                                    'menu'            => '29',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>


      </div>
    </div>
  </div>
</div>



    <div class="collapse navbar-collapse" id="navbarResponsive">

            <?php
            wp_nav_menu( array(
                'menu'            => '2',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                'add_li_class'  => 'nav-item',
                'link_class'   => 'nav-link',
                  'walker_nav_menu_start_el'          => '',
            ) );
            ?>

    </div>


<button style="border: 0; background: none; display: none;" class="action action--menu no-open"><span style="float: left; line-height: 38px; padding: 0 6px; font-size: 14px; font-weight: 600; text-transform: uppercase; color: #fff;">Меню</span><svg class="icon icon--menu" style="float: right;height: 38px !important;"><use xlink:href="#icon-menu"></use></svg></button>
                <nav style="display: none;" class="menu">
                <div class="menu__item menu__item--1" data-direction="bt">
                    <div class="menu__item-inner">
                        <div class="mainmenu">
							<div>
		  						<div class="cat_menu_title cat_1">Программирование</div>
                                <?php
                                $menuParameters = array(
                                //     Основы программирования
                                    'menu'            => '25',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
							</div>
								<div>
		  						<div class="cat_menu_title cat_2">Дизайн и верстка</div>
                                <?php
                                $menuParameters = array(
                                //     Дизайн и верстка
                                    'menu'            => '26',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
							</div>
								<div>
		  						<div class="cat_menu_title cat_3">Маркетинг и IT-менеджмент</div>
		                      <?php
                                $menuParameters = array(
                                //     Маркетинг и IT-менеджмент
                                    'menu'            => '27',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
								</div>
								<div>
		  						<div class="cat_menu_title cat_4">Поддержка и аналитика</div>
		  		                      <?php
                                $menuParameters = array(
                                //     Поддержка и аналитика
                                    'menu'            => '28',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
								</div>
							<div>

		  		  						<div class="cat_menu_title cat_5">Индивидуальные курсы</div>
		  		  		      <?php
                                $menuParameters = array(
                                //     Индивидуальные курсы
                                    'menu'            => '29',
                                    'container'       => false,
                                    'echo'            => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
							</div>
                        </div>
                        <p class="label label--topleft label--vert-mirror">Учебный IT-центр Level Up</p>
                        <p class="label label--bottomright label--vert">Профессиональная IT-подготовка</p>
                    </div>
                </div>
                <div class="menu__item menu__item--2" data-direction="lr">
                    <div class="menu__item-inner">
<!-- 						<div class="mask-map"></div> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2645.8589966414834!2d35.039444!3d48.4592349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dfeea55555%3A0xb4637f658c8cf549!2z0KPRh9C10LHQvdGL0LkgSVQt0YbQtdC90YLRgCBMZXZlbCBVcA!5e0!3m2!1sru!2sua!4v1544525641874" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--                         <a href="https://www.google.com/maps/place/%D0%A3%D1%87%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9+IT-%D1%86%D0%B5%D0%BD%D1%82%D1%80+Level+Up/@48.4592349,35.039444,17.01z/data=!4m5!3m4!1s0x40dbe2dfeea55555:0xb4637f658c8cf549!8m2!3d48.458738!4d35.0404627" target="_blank"><div class="menu__item-map"></div></a> -->
<!--                         <a href="#" class="menu__item-hoverlink">Наша локация</a> -->
                    </div>
                </div>
                <div class="menu__item menu__item--3" data-direction="bt">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Основное меню</p>



						                        <div class="menu__item-link">
                        <ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>otkryt-nabor/"><i class="fa fa-angle-right" aria-hidden="true"></i> Открыт набор</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>dev-studio"><i class="fa fa-angle-right" aria-hidden="true"></i> Стажировка в DEV Studio</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>aboutus/"><i class="fa fa-angle-right" aria-hidden="true"></i> О нас</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>reviews/"><i class="fa fa-angle-right" aria-hidden="true"></i> Отзывы</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>novosti/"><i class="fa fa-angle-right" aria-hidden="true"></i> Новости и мероприятия</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><i class="fa fa-angle-right" aria-hidden="true"></i> IT-блог</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>vakansii/"><i class="fa fa-angle-right" aria-hidden="true"></i> Вакансии</a></li>

                        </ul>
                        </div>


                    </div>
                </div>
                <div class="menu__item menu__item--4" data-direction="rl">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Мы в сети</p>

<div class="menu__item-link" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="sidemenu">
                            <ul>
                            <li><a href="https://www.instagram.com/levelup_ua/" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</span></a></li>
                            <li><a href="https://t.me/levelupit" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-telegram" aria-hidden="true"></i> telegram</span></a></li>
                            <li><a href="https://www.facebook.com/levelupdpua/" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</span></a></li>
                            </ul>

                        </div> </div>
                    </div>
                </div>


                <div class="menu__item menu__item--5" data-direction="tb">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Наши контакты</p>
                        <ul class="full_contacts">
                            <li><i class="fa fa-location-arrow" aria-hidden="true"></i> г. Днепр, ул. Троицкая, 21Г.,</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +38 (099) 731 83 85, +38 (096) 084 25 13</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> info@levelup.ua</li>
                            <li class="read-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakty/">Подробнее</a></li>
                        </ul>
                    </div>
                </div>
                <button class="action action--menu" style="border: 0; background: none;"><span class="">Меню</span><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
                <button class="action action--close"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></button>
            </nav>

        <!-- Поиск 15.02.2019 by Alexander O. -->
            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
        <!-- Поиск 15.02.2019 by Alexander O. -->
  </div>


  
</nav>
</header>
<?php if (current_user_can('level_10')) { ?></div><?php } ?>

	<div>
