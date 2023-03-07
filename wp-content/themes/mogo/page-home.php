<?php
/*
 * Template Name: Home
 * Template Post Type: page
 */

get_header(); ?>

<?php if ( get_field( 'hero_slider' ) ): ?>
    <section class="hero">
        <div class="hero__slider slider-hero">
			<?php if ( have_rows( 'hero_slider' ) ):
				while ( have_rows( 'hero_slider' ) ) : the_row(); ?>
                    <div class="hero__slide-inner">
                        <div class="hero__bg">
                            <img class="hero__img" src="<?php echo get_sub_field( 'image' )['url']; ?>" alt="Slide Image">
                        </div>
                        <div class="hero__content">
                            <div class="container">
                                <div class="hero__wrapper">
                                    <div class="hero__slide text-center" data-title="<?php the_sub_field( 'title' ); ?>">
                                        <div class="hero__slide-title"><p><?php the_sub_field( 'subtitle' ); ?></p></div>
                                        <div class="hero__slide-content"><?php the_sub_field( 'title' ); ?></div>
										<?php if ( $button = get_sub_field( 'button' ) ): ?>
                                            <a href="<?php echo $button['link'] ?>" class="btn btn-default hero__slide-btn"><?php echo $button['text'] ?></a>
										<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile;
			endif; ?>
        </div>
        <div class="hero__nav">
            <div class="container">
                <div class="hero__slick-nav"></div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section class="about-us">
        <div class="container">
            <div class="section-heading">
                <div class="section-heading__subtitle">What we do</div>
                <div class="section-heading__title">Story about us</div>
                <div class="section-heading__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim
                    ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 pb-4 pb-md-0">
                    <div class="team-card">
                        <div class="team-card__body">
                            <div class="team-card__inner">
                                <img class="team-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/about-us/about-1.jpg" alt="">
                                <div class="team-card__overlay">
                                    <div class="team-card__hover">
                                        <img class="team-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/user-icon.svg" alt="">
                                        <p class="team-card__text">super team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-4 pb-md-0">
                    <div class="team-card">
                        <div class="team-card__body">
                            <div class="team-card__inner">
                                <img class="team-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/about-us/about-2.jpg" alt="">
                                <div class="team-card__overlay">
                                    <div class="team-card__hover">
                                        <img class="team-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/user-icon.svg" alt="">
                                        <p class="team-card__text">super team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-4 pb-md-0">
                    <div class="team-card">
                        <div class="team-card__body">
                            <div class="team-card__inner">
                                <img class="team-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/about-us/about-3.jpg" alt="">
                                <div class="team-card__overlay">
                                    <div class="team-card__hover">
                                        <img class="team-card__icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/user-icon.svg" alt="">
                                        <p class="team-card__text">super team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="stats">
        <div class="stats__wrapper">
            <div class="container">
                <div class="stats__items">
                    <div class="stats__item">
                        <div class="stats__counter">42</div>
                        <div class="stats__name">Web Design Projects</div>
                    </div>
                    <div class="stats__item">
                        <div class="stats__counter">123</div>
                        <div class="stats__name">happy client</div>
                    </div>
                    <div class="stats__item">
                        <div class="stats__counter">15</div>
                        <div class="stats__name">award winner</div>
                    </div>
                    <div class="stats__item">
                        <div class="stats__counter">99</div>
                        <div class="stats__name">cup of coffee</div>
                    </div>

                    <div class="stats__item">
                        <div class="stats__counter">24</div>
                        <div class="stats__name">members</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services">
        <div class="container">
            <div class="section-heading">
                <div class="section-heading__subtitle">We work with</div>
                <div class="section-heading__title">Amazing Services</div>
            </div>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/clock.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/picture.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/pc.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/book.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/home.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-5">
                    <div class="services__item">
                        <div class="services__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/target.svg" alt="">
                        </div>
                        <div class="services__content">
                            <div class="services__item-title">Photography</div>
                            <div class="services__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="devices">
        <div class="container position-relative">
            <div class="section-heading devices--heading">
                <div class="section-heading__subtitle">For all devices</div>
                <div class="section-heading__title">Unique design</div>
            </div>
            <div class="devices__images">
                <div class="devices__tablet">
                    <img class="devices__tablet-img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/devices/ipad.png" alt="">
                </div>
                <div class="devices__phone">
                    <img class="devices__phone-img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/devices/iphone.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="section-heading">
                <div class="section-heading__subtitle">Service</div>
                <div class="section-heading__title">what we do</div>
                <div class="section-heading__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <div class="service__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/service/photography.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div id="mogo-accordion" class="accordion">
                        <div class="card card--service mb-2">
                            <div class="card-header card-header--service d-flex align-items-center" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                                 aria-controls="collapse-1">
                                <img class="card-header-icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/picture.svg" alt="">
                                <h3 class="mr-auto card-header-title">Photography</h3>
                                <span class="arrow"></span>
                            </div>
                            <div id="collapse-1" class="collapse show" data-parent="#mogo-accordion">
                                <div class="card-body">
                                    <div class="cart-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui
                                        officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card--service mb-2">
                            <div class="card-header card-header--service d-flex align-items-center" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true"
                                 aria-controls="collapse-2">
                                <img class="card-header-icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/picture.svg" alt="">
                                <h3 class="mr-auto card-header-title">Photography</h3>
                                <span class="arrow"></span>
                            </div>
                            <div id="collapse-2" class="collapse" data-parent="#mogo-accordion">
                                <div class="card-body">
                                    <div class="cart-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui
                                        officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card--service mb-2">
                            <div class="card-header card-header--service d-flex align-items-center" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true"
                                 aria-controls="collapse-3">
                                <img class="card-header-icon" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/picture.svg" alt="">
                                <h3 class="mr-auto card-header-title">Photography</h3>
                                <span class="arrow"></span>
                            </div>
                            <div id="collapse-3" class="collapse" data-parent="#mogo-accordion">
                                <div class="card-body">
                                    <div class="cart-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa
                                        qui
                                        officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="quote bg-grey">
        <div class="container">
            <div class="quote-slider mogo-slider">
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/testimonials/quote.png" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/testimonials/quote.png" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/quote.svg" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$team_posts       = new WP_Query( [
	"post_type"      => 'team',
	"posts_per_page" => 3,
	'order'          => 'ASC',
	'orderby'        => 'date'
] );
$count_team_posts = wp_count_posts( 'team' )->publish;
?>
    <section class="team">
        <div class="container">
            <div class="section-heading">
                <div class="section-heading__subtitle">Who we are</div>
                <div class="section-heading__title">Meet our team</div>
                <div class="section-heading__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim
                    ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
			<?php if ( $team_posts->have_posts() ) : ?>
                <div class="row">
					<?php while ( $team_posts->have_posts() ) : $team_posts->the_post(); ?>
                        <div class="col-sm-4 pb-4 pb-md-0">
                            <div class="team-card">
                                <div class="team-card__body">
                                    <div class="team-card__inner">
                                        <img class="team-card__img" src="<?php echo get_field( 'photo' )['sizes']['team-card'] ?>" alt="">
                                        <div class="team-card__overlay">
                                            <div class="team-card__hover">
												<?php $social_links = get_field( 'member_info' ); ?>
                                                <div class="social-bar">
                                                    <a class="social-bar__link" href="<?php echo esc_url( $social_links['facebook_link'] ); ?>">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/facebook.svg" alt="">
                                                    </a>
                                                    <a class="social-bar__link" href="<?php echo esc_url( $social_links['twitter_link'] ); ?>">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/twitter.svg" alt="">
                                                    </a>
                                                    <a class="social-bar__link" href="<?php echo esc_url( $social_links['pinterest_link'] ); ?>">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/pinterest.svg" alt="">
                                                    </a>
                                                    <a class="social-bar__link" href="<?php echo esc_url( $social_links['instagram_link'] ); ?>">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/instagram.svg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-card__footer">
                                    <span class="team-card__title"><?php the_title(); ?></span>
                                    <span class="team-card__position"><?php the_field( 'position' ); ?></span>
                                </div>
                            </div>
                        </div>
					<?php endwhile; ?>
					<?php if ( $count_team_posts > 3 ): ?>
                        <div class="col-12">
                            <div class="team__btn">
                                <a href="<?php echo get_post_type_archive_link( 'team' ) ?>" class="btn btn-default btn-load-more">View All</a>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </section>

    <section class="partners bg-grey">
        <div class="container">
            <div class="partners__slider">
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/1.png" alt="">
                </div>
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/2.png" alt="">
                </div>
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/3.png" alt="">
                </div>
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/4.png" alt="">
                </div>
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/5.png" alt="">
                </div>
                <div class="partners__slider-item">
                    <img class="partners__slider-logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/partners/6.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h3 class="section-heading__subtitle">What we do</h3>
                <h2 class="section-heading__title">some of our work</h2>
                <div class="section-heading__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class="works">
            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/1.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/2.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/3.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/4.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/5.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/6.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/works/7.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">creatively designed</div>
                        <div class="works__text">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial">
        <div class="container">
            <div class="quote-slider mogo-slider">
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/testimonials/testimonial.png" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/testimonials/testimonial.png" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
                <div class="quote-slider__item">
                    <div class="quote-slider__wrapper">
                        <div class="quote-slider__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/testimonials/testimonial.png" alt="">
                        </div>
                        <div class="quote-slider__content">
                            <div class="quote-slider__text">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            </div>
                            <span class="quote-slider__author">Jon Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="clients">
        <div class="clients__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-heading">
                            <div class="section-heading__subtitle">Happy Clients</div>
                            <div class="section-heading__title">What people say</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-card">
                            <div class="client-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/clients/matthew-dix.png" alt="">
                            </div>
                            <div class="client-card__content">
                                <div class="client-card__name">Matthew Dix</div>
                                <div class="client-card__position">Graphic Design</div>
                                <div class="client-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-card">
                            <div class="client-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/clients/nick-karvounis.png" alt="">
                            </div>
                            <div class="client-card__content">
                                <div class="client-card__name">Nick Karvounis</div>
                                <div class="client-card__position">Graphic Design</div>
                                <div class="client-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                    Ut enim ad minim.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-card">
                            <div class="client-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/clients/jaelynn-castillo.png" alt="">
                            </div>
                            <div class="client-card__content">
                                <div class="client-card__name">Matthew Dix</div>
                                <div class="client-card__position">Graphic Design</div>
                                <div class="client-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                    Ut enim ad minim.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-card">
                            <div class="client-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/content/clients/mike-petrucci.png" alt="">
                            </div>
                            <div class="client-card__content">
                                <div class="client-card__name">Matthew Dix</div>
                                <div class="client-card__position">Graphic Design</div>
                                <div class="client-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                    Ut enim ad minim.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$blog_posts       = new WP_Query( [
	"posts_per_page" => 3,
	'order'          => 'ASC',
	'orderby'        => 'date'
] );
$blog_posts_count = wp_count_posts()->publish;
?>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <div class="section-heading__subtitle">Our stories</div>
                        <div class="section-heading__title">Latest blog</div>
                    </div>
                </div>
            </div>
			<?php if ( $blog_posts->have_posts() ) : ?>
                <div class="row">
					<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                        <div class="pb-4 pb-md-0 col-md-4">
                            <article class="post-card">
                                <div class="post-card__body">
                                    <div class="post-card__inner">
                                        <a class="post-card__link" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'team-card', array('class' => 'post-card__img') ); ?>
                                        </a>
                                        <div class="post-card__date">
                                            <span class="post-card__day"><?php the_time( 'j' ); ?></span>
                                            <span class="post-card__month"><?php the_time( 'M' ) ?></span>
                                        </div>
                                    </div>
                                    <div class="post-card__info">
                                        <h3 class="post-card__title"><a href="<?php the_permalink(); ?>" class="post-card__link"><?php the_title(); ?></a></h3>
                                        <div class="post-card__excerpt"><p><?php the_excerpt(); ?></p></div>
                                    </div>
                                </div>
                                <div class="post-card__footer">
                                    <span class="post-card__views">542</span>
                                    <span class="post-card__comments">17</span>
                                </div>
                            </article>
                        </div>
					<?php endwhile; ?>
					<?php if ( $blog_posts_count > 3 ): ?>
                        <div class="col-12">
                            <div class="latest-news__btn">
                                <a href="<?php echo get_post_type_archive_link( 'post' ) ?>" class="btn btn-default btn-load-more">View All</a>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </section>

    <div class="google-map">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="google-map__content">
                        <a class="google-map__link" href="https://goo.gl/maps/q9o4m3Z8GY25G5wh7">Open map</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
