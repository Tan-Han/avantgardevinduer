<?php get_header() ?>


<main>
    <!-- produkt info sektion -->
    <article class="ten-percent pt-5 pb-5">
        <div class="flex gap-18 responsive-col">
            <div class="flex-col w-half">
                <!-- titel -->
                <div class="pb-2">
                    <h1 class="pb-2">
                        <?php the_field("produkt_navn") ?>
                    </h1>
                    <p>
                        <?php the_field("kort_beskrivelse") ?>
                    </p>
                </div>

                <!-- specifikationer -->
                <div class="flex parameter gap-18">
                    <div class="flex w-half pb-5 parameter">
                        <div>
                            <hr class="hr-small">
                            <h5 class="pb-2">
                                <?php the_field("parameter_titel_1") ?>
                            </h5>
                            <p>
                                <?php the_field("parameter_tekst_1") ?>
                            </p>
                        </div>
                        <div>
                            <hr class="hr-small">
                            <h5 class="pb-2">
                                <?php the_field("parameter_titel_2") ?>
                            </h5>
                            <p>
                                <?php the_field("parameter_tekst_2") ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex w-half pb-5 parameter">
                        <div>
                            <hr class="hr-small">
                            <h5 class="pb-2">
                                <?php the_field("parameter_titel_3") ?>
                            </h5>
                            <p>
                                <?php the_field("parameter_tekst_3") ?>
                            </p>
                        </div>
                        <div>
                            <hr class="hr-small">
                            <h5 class="pb-2">
                                <?php the_field("parameter_titel_4") ?>
                            </h5>
                            <p>
                                <?php the_field("parameter_tekst_4") ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- img -->
            <div class="flex-col w-half">
                <div>
                    <?php $image = get_field("produkt_billede") ?>
                    <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" width="100%">
                </div>
            </div>
        </div>
    </article>

    <!-- Gealant -->
    <!-- farve sektion -->
    <?php if (get_field("farve_titel")) : ?>
        <section>
            <!-- farver -->
            <article class="ten-percent pb-5">
                <div class="flex">
                    <div class="flex-col">
                    <hr class="hr-small">
                    <h3><?php the_field("farve_titel")?></h3>
                    <p><?php the_field("farve_beskrivelse")?></p>
                    </div>
                </div>
            </article>

            <!-- farvegrupper -->
            <article class="ten-percent">
                <div class="flex">
                    <div class="flex-col">
                        <!-- loop med farver -->
                        <?php $farvegrupper = get_field("farvegrupper") ?>
                        <?php foreach( $farvegrupper as $post ): 

                            setup_postdata($post); ?>
                            <h3 class="pb-2"><?php the_title() ?></h3>

                            <div class="flex flex-wrap pb-5 gap farver">
                                <?php $farver = get_field("farver") ?> 
                                <?php foreach($farver as $post):
                                    setup_postdata($post) ?>
                                        <div class="flex flex-col">
                                            <!-- baggrundsfarve eller billede med farven -->
                                            <?php if (get_field("hex_color")) : ?>
                                                <div style="background-color: <?php the_field("hex_color") ?>" class="farve-storrelse"></div>

                                                <?php elseif (get_field("img_color")) : ?>
                                                    <?php $imageFarver = get_field("img_color") ?>
                                                    <img src="<?php echo $imageFarver["sizes"]["thumbnail"] ?>" alt="<?php echo $imageFarver["alt"] ?>" class="farve-storrelse">
                                            <?php endif; ?> 

                                            <!-- navn på farve -->
                                            <div class="farve-storrelse flex-wrap">
                                                <p><?php the_title() ?></p>
                                            </div>
                                        </div>

                                    <?php endforeach ?>

                                </div>

                        <?php endforeach; ?>
            
                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>

                <div class="pb-5">
                    <h4>* RealWood - exclusive wood decor foil</h4>
                    <p>These foils are not made of real wood.</p>
                </div>
            </article>
        </section>

        <!-- fordele sektion -->
        <section class="secondary-bg">
            <div>
                <h2 class="text-center pt-5 pb-3 ten-percent"><?php the_field("fordele_ved_produktet_titel") ?></h2>
            </div>

            <!-- fordel 1 -->
            <article class="ten-percent pb-5">
                <div class="flex fordel gap-18 responsive-col">
                    <!-- billede -->
                    <div class="flex-col w-half">
                        <hr class="hr-small">
                        <h3 class="pb-2"><?php the_field("fordel_1") ?></h3>
                        <div>
                            <h4 class="pb-1"><?php the_field("fordel_subheadline_1") ?></h4>
                            <p class="pb-3"><?php the_field("fordel_beskrivelse_1") ?></p>
                        </div>
                    </div>

                    <!-- information -->
                    <div class="flex-col w-half ten-percent img-size-adjust align-center img-skak">
                        <?php $image1 = get_field("fordel_billede_1") ?>
                        <img src="<?php echo $image1["sizes"]["large"] ?>" alt="<?php echo $image1["alt"] ?>" width="100%">
                    </div>
                </div>
            </article>

            <!-- fordel 2 -->
            <article class="ten-percent pb-5">
                <div class="flex fordel col-reverse gap-18">
                    <!-- billede -->
                    <div class="flex-col w-half ten-percent align-center img-size-adjust img-skak">
                        <?php $image2 = get_field("fordel_billede_2") ?> 
                        <img src="<?php echo $image2["sizes"]["large"] ?>" alt="<?php echo $image2["alt"] ?>" width="100%">
                    </div>

                    <!-- information -->
                    <div class="flex-col w-half">
                        <hr class="hr-small">
                        <h3 class="pb-2"><?php the_field("fordel_2") ?></h3>
                        <div class="pb-3">
                            <h4 class="pb-1"><?php the_field("fordel_2_subheadine_1") ?></h4>
                            <p class="pb-3"><?php the_field("fordel_2_beskrivelse_1") ?></p>

                            <h4 class="pb-1"><?php the_field("fordel_2_subheadine_2") ?></h4>
                            <p class="pb-3"><?php the_field("fordel_2_beskrivelse_2") ?></p>

                            <h4 class="pb-1"><?php the_field("fordel_2_subheadine_3") ?></h4>
                            <p><?php the_field("fordel_2_beskrivelse_3") ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- fordel 3 -->
            <article class="ten-percent pb-5">
                <div class="flex fordel">
                    <div class="flex-col">
                        <hr class="hr-small">
                        <h3 class="pb-2"><?php the_field("fordel_3") ?></h3>
                        <h4 class="pb-1"><?php the_field("fordel_subheadline_3") ?></h4>
                        <p class="pb-3"><?php the_field("fordel_beskrivelse_3") ?></p>

                        <?php $image3 = get_field("fordel_billede_3") ?>
                        <img src="<?php echo $image3["sizes"]["large"] ?>" alt="<?php echo $image3["alt"] ?>" width="100%">
                    </div> 
                </div>
            </article>

            <!-- fordel 4 -->
            <article class="ten-percent pb-5">
                <div class="flex fordel gap-18 responsive-col">
                    <div class="flex-col w-half">
                        <hr class="hr-small">
                        <h3 class="pb-1"><?php the_field("fordel_4") ?></h3>
                        <p class="pb-3"><?php the_field("fordel_beskrivelse_4") ?></p>
                    </div>  
                    <div class="flex-col w-half">
                        <?php $image4 = get_field("fordel_billede_4") ?>
                        <img src="<?php echo $image4["sizes"]["large"] ?>" alt="<?php echo $image4["alt"] ?>" width="100%">
                    </div>
                </div>
            </article>

            <!-- fordel 5 -->
            <article class="ten-percent pb-5">
                <div class="flex fordel col-reverse gap-18">
                    <div class="flex-col w-half">
                        <?php $image5 = get_field("fordel_billede_5") ?> 
                        <img src="<?php echo $image5["sizes"]["large"] ?>" alt="<?php echo $image5["alt"] ?>" width="100%">
                    </div>

                    <div class="flex-col w-half">
                        <hr class="hr-small">
                        <h3 class="pb-1"><?php the_field("fordel_5") ?></h3>
                        <p class="pb-3"><?php the_field("fordel_beskrivelse_5") ?></p>
                    </div>
                </div>
            </article>

            <!-- fordel 6 -->
            <article class="ten-percent pb-5"> 
                <div class="flex fordel">
                    <div class="flex-col">
                        <hr class="hr-small">
                        <h3 class="pb-1"><?php the_field("fordel_6") ?></h3>
                        <p class="pb-3"><?php the_field("fordel_beskrivelse_6") ?></p>

                        <div class="w-3 img-size-adjust">
                            <?php $image6 = get_field("fordel_billede_6") ?>
                            <img src="<?php echo $image6["sizes"]["large"] ?>" alt="<?php echo $image6["alt"] ?>" width="100%">
                        </div>
                    </div>
                </div>
            </article>
        </section>

    <?php endif; ?>
</main>


<style>
    .ten-percent {
        padding: 0 10%;
    }

    .hr-small {
        width: 100px;
    }

    .flex {
        display: flex;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .flex-col {
        flex-direction: column;
    }

    .gap {
        gap: 24px;
    }

    .w-half {
        width: 50%;
    }

    .w-3 {
        width: 33%;
    }

    .h-half {
        max-height: 400px;
    }

    .gap-18 {
        gap: 18px;
    }

    .align-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .responsive-col {
        display: flex;
    }

    .farve-storrelse {
        width: 140px;
        height: 80px;
    }


    /* responsive design */
    @media screen and (max-width: 900px) {
        .responsive-col {
            display: flex;
            flex-direction: column !important;
        }

        .col-reverse {
            display: flex;
            flex-direction: column-reverse;
        }

        .w-half {
            width: 100%;
        }

        .align-center {
            align-items: flex-start;
            justify-content: flex-start;
        }

        .img-size-adjust {
            width: 50%;
        }

        .img-skak {
            padding: 0;
        }

        .parameter {
            padding-bottom: 0 !important;
        }
    }

    @media screen and (max-width: 500px) {
        .farver {
            flex-direction: column;
        }

        .parameter {
            display: flex;
            flex-direction: column;
        }
    }
</style>


<?php get_footer() ?>
