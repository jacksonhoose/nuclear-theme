<?php
/*!
 * front page template
 */

Nuclear::render_template($header_templates);

	if (have_posts()) while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('cf entry'); ?> role="article">

			<header class="entry-header">
				<h1 class="entry-title single-title">
					<a href="<?php esc_url(the_permalink()); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h1>
			</header>

			<section class="cf entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages([
					'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:') . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
                ]); ?>
			</section>

		</article>

	<?php endwhile;

Nuclear::render_template($footer_templates);
