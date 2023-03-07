<?php

get_header(); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="col-sm-4 pb-4 pb-5">
                    <div class="team-card">
                        <div class="team-card__body">
                            <div class="team-card__inner">
                                <img class="team-card__img" src="<?php echo get_field('photo')['sizes']['team-card'] ?>" alt="">
                                <div class="team-card__overlay">
                                    <div class="team-card__hover">
                                        <?php $social_links = get_field('member_info'); ?>
                                        <div class="social-bar">
                                            <a class="social-bar__link" href="<?php echo esc_url($social_links['facebook_link']); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/facebook.svg" alt="">
                                            </a>
                                            <a class="social-bar__link" href="<?php echo esc_url($social_links['twitter_link']); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/twitter.svg" alt="">
                                            </a>
                                            <a class="social-bar__link" href="<?php echo esc_url($social_links['pinterest_link']); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/pinterest.svg" alt="">
                                            </a>
                                            <a class="social-bar__link" href="<?php echo esc_url($social_links['instagram_link']); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/instagram.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-card__footer">
                            <span class="team-card__title"><?php the_title(); ?></span>
                            <span class="team-card__position"><?php the_field('position'); ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer();
