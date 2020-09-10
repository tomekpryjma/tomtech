<?php get_header(); ?>

    <section class="post-banner tutorial-banner">
        <div class="container flex flex-row align-center justify-center h-100">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <main id="tutorial-content">
        <div class="container">
            <div class="content-wrapper">
                <?php the_content(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>