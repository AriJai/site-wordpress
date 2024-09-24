<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blank Canvas
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section>
                    <h1><?php the_title(); ?></h1>
                    <div><?php the_content(); ?></div>
                </section>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No content found.</p>
        <?php endif; ?>

        <h2 class="text-center text-2xl">Hello, World!</h2>
        <p>Test zone, working on site development</p>
        <p>Howdy!</p>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
