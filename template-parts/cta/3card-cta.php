
<div id="card-cta-container">
    <div>
        <div id="card-title-wrapper">
            <h2><?= get_field('post_card_block_tittle') ?></h2>
            <p><?= get_field('post_card_block_text') ?></p>
        </div>
        <div id="card-card-container" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/images/4.jpg');">
            <?php
            $args = [
                'order_by' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3,
            ];
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part('template-parts/post/post-card') ?>


            <?php endwhile; ?>

            <?php else: ?>

                <p>Aucun article trouvé !</p>

            <?php endif; ?>
            <?php wp_reset_postdata() ?>

        </div>
    </div>

</div>
