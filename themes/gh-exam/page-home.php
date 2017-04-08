<?php
/**
 * Template Name: HomePage
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="about">
                <div class="my-container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php bloginfo('template_url'); ?>/images/destop-items.png" alt="destop-items">
                        </div>
                        <div class="col-md-6">
                            <h1>WHY <span>US</span>?</h1>
                            <div class="prof">
                                We are Professional
                            </div>
                            <div class="about-info">
                                1000+ Clients, <span>Live Support</span>
                            </div>
                            <div class="about-descr">
                                <?php echo get_theme_mod('about-descr') ?>
                            </div>
                        </div>
                    </div>
                    <div class="link-down">
                        <a href="#welcome" class="down"></a>
                    </div>
                </div>
            </div>


            <div id="welcome" class="welcome">
                <div class="my-container">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?php bloginfo('template_url'); ?>/images/welcome-photo.png" alt="welcome">
                        </div>
                        <div class="col-md-7">
                            <div class="welcome-name">
                                Welcome Here.
                            </div>
                            <div class="welcome-descr">
                                <?php echo get_theme_mod('welcome-descr') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services">
                <div class="my-container">
                    <div class="section-name">
                        We are Offering....
                    </div>
                    <div class="section-descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                    </div>
                    <?php
                    // the query
                    $query = new WP_Query(array('post_type' => 'services', 'post_status' => 'publish', 'posts_per_page' => 3)); ?>
                    <?php if ($query->have_posts()) : ?>
                        <ul class="services-list">
                            <!-- the loop -->
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <li>
                                    <div class="service-icon ">
                                        <img src="<?php the_field('service-icon') ?>" alt="">
                                    </div>
                                    <div class="service-name">
                                        <?php the_title() ?>
                                    </div>
                                    <div class="service-descr">
                                        <?php the_content() ?>
                                    </div>

                                </li>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="portfolio">
                <div class="my-container">
                    <div class="section-name">
                        Some of latest Work...
                    </div>
                    <div class="section-descr">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                    </div>
                    <div class="button-group filter-button-group">
                        <button data-filter="*">All</button>
                        <button data-filter=".design">Design</button>
                        <button data-filter=".development">Development</button>
                        <button data-filter=".seo">SEO</button>
                        <button data-filter=".other">Other</button>
                    </div>
                    <div class="grid">
                        <div class="element-item design seo"><img src="<?php echo get_theme_mod('portfolio1');?>"></div>
                        <div class="element-item development"><img src="<?php echo get_theme_mod('portfolio2');?>"></div>
                        <div class="element-item development seo"><img src="<?php echo get_theme_mod('portfolio3');?>"></div>
                        <div class="element-item others seo"><img src="<?php echo get_theme_mod('portfolio4');?>"></div>
                        <div class="element-item design"><img src="<?php echo get_theme_mod('portfolio5');?>"></div>
                        <div class="element-item other"><img src="<?php echo get_theme_mod('portfolio6');?>"></div>
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
