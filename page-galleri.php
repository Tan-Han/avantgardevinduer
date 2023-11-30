<?php get_header() ?>

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

<style>
    .wpcp-carousel-section .wpcp-single-item img {
        height: 550px;
        width: 100%;
        object-fit: cover;
        max-width: none;
    }

@media screen and (max-width: 1500px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 450px;
    }
}

@media screen and (max-width: 1300px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 400px;
    }
}

@media screen and (max-width: 1200px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 300px;
    }
}

@media screen and (max-width: 1000px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 250px;
    }
}

@media screen and (max-width: 850px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 200px;
    }
}

@media screen and (max-width: 719px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 250px;
    }
}

@media screen and (max-width: 600px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 150px;
    }
}
@media screen and (max-width: 465px) {
    .wpcp-carousel-section .wpcp-single-item img {
        height: 250px;
    }
}
</style>

<?php get_footer() ?>