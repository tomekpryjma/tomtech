<?php
    $split_this_post_into_columns = get_field('split_this_post_into_columns');

    get_header();
?>

    <article id="tutorial-content">
        <div class="container wider">
            <div class="content-wrapper <?php echo $split_this_post_into_columns ? 'with-columns' : ''; ?>">
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

                        <h2 id="step-<?php echo $step_iteration++; ?>"><?php echo $title; ?></h2>
                        <?php echo apply_filters('the_content', $instructions); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </article>

<?php get_footer(); ?>