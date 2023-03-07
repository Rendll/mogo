<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header <?php echo header_class(); ?>">
    <div class="container">
        <nav class="navbar navbar-expand-md p-0 ">
            <div class="logo">
		        <?php if (has_custom_logo()): ?>
			        <?php the_custom_logo(); ?>
		        <?php else: ?>
                    <span class="logo__text logo__text--white logo__text--small">MoGo</span>
		        <?php endif; ?>
            </div>
            <button class="navbar-toggler nav-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="nav-toggle__item"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	            <?php if ( has_nav_menu('header-menu') ): ?>
		            <?php wp_nav_menu([
				            'theme_location' => 'header-menu',
				            'container_class' => false,
				            'menu_class' => 'navbar-nav header__navbar nav'
			            ]
		            );
		            ?>
	            <?php endif; ?>
                <div class="header__navigation">
                    <div class="header__cart">
                        <button class="btn btn-svg" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15">
                                <path fill="#fff"
                                      d="M17.726 3.663h.001l-2.475 5.5a.824.824 0 0 1-.697.485l-7.128.475.412 1.176H15.6a1.65 1.65 0 1 1-1.65 1.65h-7.7A1.65 1.65 0 1 1 4.6 11.3h1.49L2.916 2.225h-1.89a.825.825 0 0 1 0-1.65H3.5c.36 0 .663.232.776.554l.003-.002.48 1.373h12.216a.825.825 0 0 1 .751 1.163zm-12.39.487 1.526 4.357 7.089-.473 1.748-3.884z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="header__search">
                        <button class="btn btn-svg" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                <path fill="#fff"
                                      d="M17.8 16.15a1.65 1.65 0 0 1-2.817 1.166l-4.836-4.835A6.56 6.56 0 0 1 6.8 13.4a6.6 6.6 0 1 1 6.6-6.6 6.558 6.558 0 0 1-.919 3.347l4.836 4.836c.298.298.483.71.483 1.167zm-11-14.3a4.95 4.95 0 1 0 0 9.9 4.95 4.95 0 0 0 0-9.9z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<main class="main">
