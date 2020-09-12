<?php get_header(); ?>

    <main id="tutorial-content">
        <div class="container wider">
            <div class="content-wrapper">
                <div id="intro">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>

                <?php if (have_rows('steps')): ?>
                    <?php $step_iteration = 1; ?>
                    <?php while (have_rows('steps')): the_row(); ?>
                        <?php
                            $title        = get_sub_field('title');
                            $instructions = get_sub_field('instructions');
                        ?>

                        <div class="step" id="step-<?php echo $step_iteration++; ?>">
                            <h2><?php echo $title; ?></h2>
                            <?php echo apply_filters('the_content', $instructions); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>