<?php
/*
Template Name: 実績一覧
*/
?>

<?php get_header(); ?>
	
<main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="container header-hero">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contenet-hero">
                                <h5>Our WOrk</h5>
                                <h1>portfolio</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-work">
                    <div class="container ">
                        <div class="box-title" data-dsn-title="cover">
                            <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                        </div>

                        <div class="filterings">
                            <div class="filtering-wrap">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">
                                        All
                                    </button>
                                    <button type="button" data-filter=".ec">EC</button>
                                    <button type="button" data-filter=".corporate">corporate</button>
                                    <button type="button" data-filter=".recruit">recruit</button>
                                </div>
                            </div>
                        </div>

                        <div class="projects-list gallery">
                            <div class="item recruit">
                                <a href="https://s-nichiei-recruit.com/" class="effect-ajax" data-dsn-ajax="work"
                                    data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/project/nichiei-recruit-work.jpg" alt="" />
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <h5 class="cat">recruit</h5>
                                        <h4>日栄建設様<br>採用サイト</h4>
                                        <span><span>Veiw Project</span></span>
                                    </div>
                                </a>
                            </div>

                            <div class="item corporate">
                                <a href="http://www.s-nichiei.jp/" class="effect-ajax" data-dsn-ajax="work"
                                    data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/project/nichiei-company-work.jpg" alt="" />
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <h5 class="cat">corporate</h5>
                                        <h4>日栄建設様<br>企業サイト</h4>
                                        <span><span>Veiw Project</span></span>
                                    </div>
                                </a>
                            </div>

                            <div class="item corporate">
                                <a href="https://www.doggy-life.jp/" data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/project/doggy-life-work.jpg" alt="" />
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <h5 class="cat">corporate</h5>
                                        <h4>Doggy-life様</h4>
                                        <span><span>Veiw Project</span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="contact-up section-margin section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="effect-ajax">
                                <span class="hiring">
                                    Contact
                                </span>
                                <span class="career">
																		お気軽にご相談ください！
                                </span>
                            </a>
                        </div>
												<div class="link-custom sp_center_link">
														<a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="image-zoom effect-ajax" data-dsn="parallax"
																data-dsn-ajax="slider">
																<span>To Contact</span>
														</a>
												</div>
                    </div>
                </section>
            </div>

<?php get_footer(); ?>