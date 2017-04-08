<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-exam
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="blog-top">
                Best Phons Of all Time in the World
            </div>
            <div class="single-post-section">
                <div class="my-container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                            while (have_posts()) : the_post(); ?>

                                <div class="blog-img">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-name">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="blog-descr">
                                        <?php the_content() ?>
                                    </div>
                                </div>

                            <?php endwhile; // End of the loop.
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php get_sidebar() ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clients">
                <div class="my-container">
                    <div class="section-name">
                        Featured Clients
                    </div>
                    <?php
                    // the query
                    $query = new WP_Query(array('post_type' => 'clients', 'post_status' => 'publish', 'posts_per_page' => 20)); ?>
                    <?php if ($query->have_posts()) : ?>
                        <div class="owl-carousel owl-theme clients-slider">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div>
                                    <img src="<?php the_field('client_logo') ?>" alt="logo">
                                </div>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="contact-us">
                <div class="my-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-name">
                                Contact Us:
                            </div>
                            <div class="section-descr">
                                It is a long established fact that a reader will be distracted by
                                the readable content of a page when looking at its layout.
                            </div>
                            <div class="contact-phone">
                                <?php echo get_theme_mod('contact-phone') ?>
                            </div>
                            <div class="contact-address">
                                123 Office, Street No 2, Parkview.<br>
                                Sednney, Australia.
                            </div>
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d106139.8436528139!2d150.7518193!3d-33.7640221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b1285117575b7dd%3A0x8f39936b03b644ee!2s123%2F2+Parkside+Ave%2C+Werrington+Downs+NSW+2747%2C+Australia!5e0!3m2!1sen!2s!4v1491645339374"
                                        width="560" height="385" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php echo do_shortcode("[contact-form-7 id=\"64\" title=\"Contact form 1\"]"); ?>
                        </div>
                    </div>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
