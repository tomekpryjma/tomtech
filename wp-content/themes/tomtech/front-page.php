<?php
    $tutorials = get_posts(array(
        'post_type'      => 'tutorial',
        'post_status'    => 'publish',
        'posts_per_page' => 4,
    ));
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
    <div class="container flex flex-row">
        <?php if ($tutorials): ?>
            <?php foreach ($tutorials as $tutorial): ?>
                <?php
                    $title  = $tutorial->post_title;
                    $link   = get_the_permalink($tutorial->ID);
                ?>

                <article class="tutorial-clickthrough inline-block card">
                    <div class="card-body">
                        <a href="<?php echo esc_url($link); ?>">
                            <h4><?php echo $title; ?></h4>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>