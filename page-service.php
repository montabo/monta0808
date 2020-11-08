<?php
/*
Template Name: サービス
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="Design for your Story" />
    <meta name="keyword"
        content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

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
                        <a href="https://last-man-standing.jp/">
                            <img class="light-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <nav class=" accent-menu main-navigation">
                    <ul class="extend-container">
											<li><a href="<?php echo esc_url( home_url( ) ); ?>">Home</a></li>
											<li><a href="<?php echo esc_url( home_url( ) ); ?>/about/">About</a></li>
											<li><a href="<?php echo esc_url( home_url( ) ); ?>/service/">Service</a></li>
											<li><a href="<?php echo esc_url( home_url( ) ); ?>/works/">Works</a></li>
											<li><a href="<?php echo esc_url( home_url( ) ); ?>/blog/">Blog</a></li>
											<li><a href="<?php echo esc_url( home_url( ) ); ?>/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo">
                    <a href="https://last-man-standing.jp/">
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
	
<main class="main-root">
        <div id="dsn-scrollbar">
            <div class="dsn-slider demo3" data-dsn-header="project">
                <div class="dsn-root-slider" id="dsn-hero-parallax-img">
                    <div class="slide-inner">
                        <div class="swiper-wrapper">

                            <div class="slide-item swiper-slide">
                                <div class="slide-content">
                                    <div class="slide-content-inner">
                                        <div class="project-metas">
                                            <div class="project-meta-box project-work cat">
                                                <span>Main Service</span>
                                            </div>
                                        </div>

                                        <div class="title-text-header">
                                            <div class="title-text-header-inner">
                                                <a href="https://last-man-standing.jp/" class="effect-ajax" data-dsn-ajax="slider">
                                                    ECサイト制作
                                                </a>
                                            </div>
                                        </div>

                                        <p>お客様のご要望・目的に合った、ECサイトを制作し、オンラインでのビジネスをサポートします。最近では、特にShopifyを中心に制作を行っております。</p>

                                        <div class="link-custom">
                                            <a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="image-zoom effect-ajax" data-dsn="parallax"
                                                data-dsn-ajax="slider">
                                                <span>To Contact</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-container">
                                    <div class="image-bg cover-bg" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/main-iamge2.jpg"
                                        data-overlay="6">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-iamge2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dsn-slider-content"></div>


                <div class="nav-slider">
                    <div class="swiper-wrapper" role="navigation">
                        <div class="swiper-slide">
                            <div class="image-container">
                                <div class="image-bg cover-bg" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/main-iamge2.jpg"
                                    data-overlay="2">
                                </div>
                            </div>
                            <div class="content">
                                <p>01</p>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="footer-slid" id="descover-holder">
                    <div class="main-social">
                        <div class="social-icon">
                            <div class="social-btn">
                                <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                                        <path
                                            d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <ul class="social-network">
                            <li>
                                <a href="https://www.facebook.com/monden.shogo/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/MondenShogo">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/monden_shogo/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="control-num">
                        <span class="sup active">01</span>
                    </div>
                    <div class="control-nav">
                        <div class="prev-container" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>

                        <div class="next-container" data-dsn="parallax">
                            <svg viewBox="0 0 40 40">
                                <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                                <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                            </svg>
                        </div>
                    </div>
                </section>
            </div>

        <!-- Wait Loader -->
        <div class="wait-loader">
            <div class="loader-inner">
                <div class="loader-circle">
                    <div class="loader-layer"></div>
                </div>
            </div>
        </div>
        <!-- // Wait Loader -->
    </main>

    <!-- Wait Loader -->
    <div class="wait-loader">
        <div class="loader-inner">
            <div class="loader-circle">
                <div class="loader-layer"></div>
            </div>
        </div>
    </div>
    <!-- // Wait Loader -->


    <!-- cursor -->
    <div class="cursor">

        <div class="cursor-helper cursor-view">
            <span>VIEW</span>
        </div>

        <div class="cursor-helper cursor-close">
            <span>Close</span>
        </div>

        <div class="cursor-helper cursor-link"></div>
    </div>
    <!-- End cursor -->

    <!-- Optional JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsn-grid.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    
    <?php wp_footer(); ?>

</body>

</html>