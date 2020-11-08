<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="keyword"
        content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon" />

    <!-- custom styles (optional) -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177943179-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-177943179-1');
		</script>

	<?php wp_head(); ?>
</head>

<!-- ヌルッとスクロール するのは、dsn-effect-scroll  -->

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
    <div data-dsn-temp="light"></div>

    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">Last Man Standing</div>
            <div class="percent">0</div>
            <div class="loading">loading...</div>
        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>

    <!-- Nav Bar -->
    <div class="dsn-nav-bar">
        <div class="site-header">
            <div class="extend-container">
                <div class="inner-header">
                    <div class="main-logo">
                        <a href="<?php echo esc_url( home_url( ) ); ?>">
                            <img class="light-logo" src="assets/img/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <nav class=" accent-menu main-navigation">
                    <ul class="extend-container">
                        <li><a href="<?php echo esc_url( home_url( ) ); ?>">Home</a></li>
												<li><a href="<?php echo esc_url( home_url( ) ); ?>/about/">About</a></li>
												<li><a href="<?php echo esc_url( home_url( ) ); ?>/service/">Service</a></li>
                        <li><a href="<?php echo esc_url( home_url( ) ); ?>/works/">Works</a></li>
                        <li><a href="<?php echo esc_url( home_url( ) ); ?>/news/">Blog</a></li>
												<li><a href="<?php echo esc_url( home_url( ) ); ?>/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo">
                    <a href="<?php echo esc_url( home_url( ) ); ?>/">
                        <img class="dark-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark.png" alt="" />
                        <img class="light-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
                    </a>
                </div>

                <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                    <div class="icon-m">
                        <i class="menu-icon-close fas fa-times"></i>
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>

                    <div class="text-menu">
                        <div class="text-button">Menu</div>
                        <div class="text-open">Open</div>
                        <div class="text-close">Close</div>
                    </div>
                </div>

                <div class="nav">
                    <div class="inner">
                        <div class="nav__content">

                        </div>
                    </div>
                </div>
                <div class="nav-content">
                    <div class="inner-content">
                        <address class="v-middle">
                            <span>Last Man Standing with You</span>
														<span>お客様と、最後まで、こだわる。 そして、遂げる。</span>
                        </address>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Bar -->