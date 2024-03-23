<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<?php
$footer_image = get_field('footer_image', 'options');
$footer_description = get_field('footer_description', 'options');
$title_col_2 = get_field('title_col_2', 'options');
$title_col_3 = get_field('title_col_3', 'options');
$title_col_4 = get_field('title_col_4', 'options');
?>
<?php if ($footer_image || $footer_description || $title_col_2 || $title_col_3 || $title_col_4): ?>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-row d-flex f-wrap">
                <div class="left-col-block">
                    <div class="footer-logo">
                        <?php if ($footer_image): ?>
                            <a href="<?php echo get_home_url(); ?>" rel="home">
                                <img src="<?php echo $footer_image['url']; ?>" alt="<?php echo $footer_image['alt']; ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="footer-text-block">
                        <?php if ($footer_description): ?>
                            <p>
                                <?php echo $footer_description; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('social_icons', 'options')): ?>
                        <ul class="social-links d-flex align-items-center">
                            <?php while (have_rows('social_icons', 'options')):
                                the_row();
                                $social_icon = get_sub_field('social_icon');
                                $social_link = get_sub_field('social_link');
                                ?>
                                <?php if ($social_icon || $social_link): ?>
                                    <li>
                                        <?php if ($social_link) { ?>
                                            <a href="<?php echo $social_link; ?>" target="_blank">
                                                <i class="<?php echo $social_icon; ?>"></i>
                                            </a>
                                        <?php } else { ?>
                                            <i class="<?php echo $social_icon; ?>"></i>
                                        <?php } ?>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="right-col-block f-wrap">
                    <div class="footer-col">
                        <?php if ($title_col_2): ?>
                            <h4>
                                <?php echo $title_col_2; ?>
                            </h4>
                        <?php endif; ?>
                        <div class="footer-menu">
                            <?php wp_nav_menu(array('menu' => 'Location Menu', 'container' => '', 'menu_class' => 'menu-item', 'container_class' => '')); ?>
                        </div>
                    </div>
                    <div class="footer-col">
                        <?php if ($title_col_3): ?>
                            <h4>
                                <?php echo $title_col_3; ?>
                            </h4>
                        <?php endif; ?>
                        <div class="footer-menu">
                            <?php wp_nav_menu(array('menu' => 'Contact Menu', 'container' => '', 'menu_class' => 'menu-item', 'container_class' => '')); ?>
                        </div>
                    </div>
                    <div class="footer-col">
                        <?php if ($title_col_4): ?>
                            <h4>
                                <?php echo $title_col_4; ?>

                            </h4>
                        <?php endif; ?>
                        <div class="footer-menu">
                            <?php wp_nav_menu(array('menu' => 'Legals Menu', 'container' => '', 'menu_class' => 'menu-item', 'container_class' => '')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

    <!-- Back To Top -->
    <a href="javascript:void(0)" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    <!-- Page Scroll Progress Bar -->
    <div class="progressbar"><span id="progressBar"></span></div>

<?php wp_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/magnific-popup.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custome.js"></script>

<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('body').addClass('fixed-header');
        }
        else {
            $('body').removeClass('fixed-header')
        }
    });
    $(document).ready(function () {
        $('.menu-bar').click(function () {
            $('.header-main').toggleClass('open-menu')
        });
    });
</script>

</body>

</html>