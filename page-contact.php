<?php
/*
Template Name: お問い合わせ
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
                <h5>Lat's Talk</h5>
                <h1>Contact</h1>
              </div>
            </div>
          </div>
        </div>
		</header>

		<?php echo do_shortcode('[mwform_formkey key="29"]'); ?>

    <section class="contact-up section-margin section-padding">
          <div class="container">
            <div class="c-wapp">
              <a href="<?php echo esc_url( home_url( ) ); ?>/work/" class="effect-ajax">
                <span class="hiring">
                  portfolio
                </span>
                <span class="career">
                  see more works
                </span>
              </a>
            </div>
          </div>
        </section>

<?php get_footer(); ?>