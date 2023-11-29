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
    html body.customize-support main section article.p-5.pt-3 div.wpcp-carousel-wrapper.wpcp-wrapper-149.wpcp-loaded div.wpcp-carousel-content-wrapper div#sp-wp-carousel-free-id-149.wpcp-carousel-section.sp-wpcp-149.nav-vertical-center.wpcp-image-carousel.wpcp-preloader.wpcp-standard.swiper-initialized.swiper-horizontal.swiper-pointer-events div#swiper-wrapper-11884921b84610dad.swiper-wrapper div.swiper-slide div.wpcp-single-item a.wcp-light-box figure img {
        height: 550px;
        width: 100%;
        object-fit: cover;
        max-width: none;
    }

</style>

<?php get_footer() ?>