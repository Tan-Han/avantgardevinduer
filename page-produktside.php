<?php get_header() ?>

    <?php $productLoop = new WP_Query(array("post_type" => "vindue", "posts_per_page" => -1)) ?>
    <?php while($productLoop->have_posts()): $productLoop->the_post() ?>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    <?php endwhile ?>

<?php get_footer() ?>