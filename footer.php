            <footer class="footer">
                <div class="container">
                    <div class="footer-links p-relative">
                        <div class="row">
                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block">
                                    <div class="footer-logo">
                                        <a href="<?php echo esc_url( home_url( ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dark.png" alt=""></a>
                                    </div>

                                    <div class="footer-social">
                                        <ul>
																					<li><a href="https://twitter.com/MondenShogo"><i class="fab fa-twitter"></i></a></li>	
																					<li><a href="https://www.facebook.com/monden.shogo/"><i class="fab fa-facebook-f"></i></a></li>
																					<li><a href="https://www.instagram.com/monden_shogo/"><i class="fab fa-instagram"></i></a></li>
																					<li><a href="https://note.com/monden_shogo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/note.png"></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block col-menu">
                                    <h4 class="footer-title">Navigation</h4>
                                    <nav>
                                        <ul>
																						<li><a href="<?php echo esc_url( home_url( ) ); ?>/about/">About</a></li>
																						<li><a href="<?php echo esc_url( home_url( ) ); ?>/service/">Service</a></li>
                                            <li><a href="<?php echo esc_url( home_url( ) ); ?>/work/">Works</a></li>
                                            <li><a href="<?php echo esc_url( home_url( ) ); ?>/news/">Blog</a></li>
                                            <li><a href="<?php echo esc_url( home_url( ) ); ?>/contact/">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block col-contact">
                                    <h4 class="footer-title">Contact</h4>
                                    <p class="mail"><strong>Tel</strong><br><a href="tel:08060696197">080-6069-6197</a></p>
                                    <p class="over-hidden mail"><strong>Mail</strong><br><a class="link-hover"
                                       href="mailto:mshogo@last-man-standing.jp">mshogo@last-man-standing.jp</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="col-address">
                                    <h4 class="footer-title">Address</h4>

                                    <p>Sapporo, Kita Ward, Kita 13 Jonishi, 4 Chome−1−2<br>
																				第一志水ビル 2階</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        <div class="text-center">
                            <p>© 2020 Last Man Standing</p>
                        </div>
                    </div>
								</div>
            </footer>
        </div>
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