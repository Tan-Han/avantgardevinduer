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
            <img src="<?php the_field("produkt_billede") ?>" class="card-img-top" alt="...">
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

<style>
    .headline-productlist {
        text-align: center;
        padding: 3rem 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .headline-productlist h1 {
        font-size: 70px;
        font-weight: 700;
    }

    .headline-productlist h2 {
        font-size: 25px;
        font-style: italic;
    }

    hr {
        width: 45%;
        border-top: 3px solid #333333;
        opacity: 100%;
    }

    .content-productlist {
        padding: 0 10% 3rem 10%;
    }

    .content-productlist .card {
        border: none;
        border-radius: 0;
    }

    .content-productlist a {
        text-decoration: none;
        color: var(--black);
    }

    .content-productlist a:hover {
        color: var(--tertiary-color);
    }

    .content-productlist h3 {
        font-style: normal;
    }

</style>

<?php get_footer() ?>