<?php get_header() ?>

<main class="main-root">
        <div id="dsn-scrollbar">
            <header>
                <div class="container header-hero">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contenet-hero">
                                <h5>NEWS & IDEAS</h5>
                                <h1>Our Blog</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-blog">
                    <div class="container">
                    
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

										  <article class="post-list-item">
                        <figure>
                          <a class="image-zoom effect-ajax" href="<?php the_permalink(); ?>" data-dsn-animate="up">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/4.jpg" alt="アイキャッチ画像">
                            <?php endif; ?>
                          </a>
                        </figure>
                        <div class="post-list-item-content">
                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <!-- <span></span> -->
                                    <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d');?></time>
                                </div>

                                <div class="post-info-category">
                                    <a href=""><?php the_category(); ?></a>
                                </div>
                            </div>
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom effect-ajax" href="<?php the_permalink(); ?>" data-dsn="parallax">
                                    <span>Read More</span>
                                </a>
                            </div>
                          </div>
                        </article>
												<?php endwhile; ?>

                        <!-- ページネーション  -->
                        <?php 
                        if ( function_exists( 'pagination' ) ) :
                        pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
                        endif;
                        ?>
                        <?php else : ?>
                        
                        <!-- 記事が存在しない場合の表記 -->
                          <?php echo 'まだ記事がありません。'; ?>
                        <? endif; ?>

                    </div>
                </div>

          <?php get_footer(); ?>