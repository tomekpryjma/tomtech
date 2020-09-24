<?php
    $tutorial_arguments = array(
        'post_type'      => 'tutorial',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    );
    $tutorials          = new WP_Query($tutorial_arguments);
    get_header();
?>

<section id="banner">
    <div class="container flex flex-row align-center justify-center">
        <h2><?php do_action('tomtech_homepage_banner_text'); ?></h2>
    </div>
</section>

<section id="latest-tutorials">
    <div class="container text-center">
        <h3><?php echo apply_filters('tomtech_latest_tutorials_text', 'Latest Tutorials'); ?></h3>
    </div>
    <div class="container">
        <div class="content-wrapper">
            <?php if ( $tutorials->have_posts() ): ?>
                <?php $date_to_display = false; ?>

                <ul id="post-listing">

                <?php while ( $tutorials->have_posts() ): $tutorials->the_post(); ?>
                    <?php
                        $title  = get_the_title();
                        $link   = get_the_permalink();
                        $date   = get_the_date('Y-m');
                    ?>

                    <?php if ( ! $date_to_display || $date_to_display !== $date ): ?>
                        <?php $date_to_display = $date; ?>
                        <li class="date-item">
                            <h2 class="date-heading"><?php echo $date_to_display; ?></h2>
                        </li>
                    <?php endif; ?>

                    
                    <li>
                        <span class="post-date">
                            <?php the_date('Y-m-d'); ?>
                        </span>
                        <a class="post-link" href="<?php echo esc_url( $link ); ?>">
                            <?php echo $title; ?>
                        </a>
                    </li>

                <?php endwhile; ?>

                </ul>

                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>