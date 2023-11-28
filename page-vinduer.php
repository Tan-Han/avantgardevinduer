<?php get_header() ?>

<div class="headline-productlist">
    <h1>Vinduer</h1>
    <h2>Her kan du læse mere om de vinduer vi tilbyder</h2>

    <hr>
</div>

<div class="content-productlist">
    <?php $productLoop = new WP_Query(array("post_type" => "vindue", "posts_per_page" => -1)) ?>
    <?php while ($productLoop->have_posts()):
        $productLoop->the_post() ?>

        <div class="card" style="width: 18rem;">
            <?php $image = get_field("produkt_billede") ?>
            <img src="<?php echo $image["sizes"]["medium"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="<?php the_permalink() ?>">
                    <h3>
                        <?php the_title() ?>
                    </h3>
                </a>
                <p class="card-text">
                    <?php the_field("kort_beskrivelse") ?>
                </p>
            </div>
        </div>

    <?php endwhile ?>

</div>

<?php get_footer() ?>