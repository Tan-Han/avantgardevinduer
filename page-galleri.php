<header>
    <?php get_header() ?>
</header>

<main>
    <section>
        <!-- titel -->
        <article class="headline-galleri">
            <h1>Galleri</h1>
            <h2>Her kan du se billeder af projekter vi har udført</h2>

            <hr>
        </article>

        <!-- galleri slider -->
        <article class="p-5 pt-3">
            <?php echo do_shortcode('[sp_wpcarousel id="149"]'); ?>
        </article>
    </section>
</main>

<footer>
    <?php get_footer() ?>
</footer>