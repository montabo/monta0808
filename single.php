<?php get_header(); ?>
  
  <main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="header-single-post" data-dsn-header="project">
                <div class="post-parallax-wrapper" data-overlay="3">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img id="dsn-hero-parallax-img" class="w-100 has-top-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/1.jpg" alt="アイキャッチ画像"
                    data-dsn-header="blog" data-dsn-ajax="img">
                    <?php endif; ?>
                </div>
                
                <div class="container">

                    <div class="inner-box m-section">
                        <div class="post-info">
                            <a href="<?php the_time('Y.m.d'); ?>" class="blog-post-date dsn-link"><?php the_time('Y.m.d');?></a>
                            <div class="blog-post-cat dsn-link">
                                <a href="#"><?php the_category(); ?></a>
                            </div>
                        </div>

                        <h3 class="title-box mt-10"><?php the_title( ); ?></h3>
                    </div>

                </div>

            </div>
        </header>

        <div class="wrapper">
            <div class="container">
                <div class="news-content">
                    <div class="news-content-inner">
                        <div class="post-content">
                          <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

<?php get_footer(); ?>