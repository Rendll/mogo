<?php

get_header(); ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<div class="pb-4 pb-md-0 col-md-4">
						<article class="post-card">
							<div class="post-card__body">
								<div class="post-card__inner">
									<a class="post-card__link" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('latest-posts','class="post-card__img"'); ?>
									</a>
									<div class="post-card__date">
										<span class="post-card__day"><?php the_time('j'); ?></span>
										<span class="post-card__month"><?php the_time('M') ?></span>
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
				<?php endwhile;
				endif; ?>
			</div>
		</div>
	</div>
<?php get_footer();

