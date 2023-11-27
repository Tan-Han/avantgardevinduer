<?php get_header() ?>

<!-- hero -->
<div class="ten-percent pt-5 pb-5">
    <div class="flex gap-18 responsive-col">
        <div class="flex-col w-half">
            <!-- titel -->
            <div class="pb-2">
                <h2 class="pb-2"><?php the_field("produkt_navn")?></h2>
                <p><?php the_field("kort_beskrivelse")?></p>
            </div>
 
            <!-- specifikationer -->
            <div class="flex parameter">
                <div class="flex-col w-half pb-5 parameter">
                    <div>
                        <hr class="hr-small">
                        <h5 class="pb-2"><?php the_field("parameter_titel_1")?></h5>
                        <p><?php the_field("parameter_tekst_1")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h5 class="pb-2"><?php the_field("parameter_titel_2")?></h5>
                        <p><?php the_field("parameter_tekst_2")?></p>
                    </div>
                    
                </div>
                <div class="flex-col w-half pb-5 parameter">
                    <div>
                        <hr class="hr-small">
                        <h5 class="pb-2"><?php the_field("parameter_titel_3")?></h5>
                        <p><?php the_field("parameter_tekst_3")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h5 class="pb-2"><?php the_field("parameter_titel_4")?></h5>
                        <p><?php the_field("parameter_tekst_4")?></p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- img -->
        <div class="flex-col w-half">
            <div>
                <img src="<?php the_field("produkt_billede")?>" alt="" width="100%">
            </div>
        </div>
    </div>
</div>

<!-- farver -->
<div class="ten-percent pb-5">
    <div class="flex">
        <div class="flex-col">
        <hr class="hr-small">
        <h3><?php the_field("farve_titel")?></h3>
        <p><?php the_field("farve_beskrivelse")?></p>
        </div>
    </div>
</div>

<div class="ten-percent">
    <div class="flex">
        <div class="flex-col">
            <!-- loop med farver -->
            <?php $farvegrupper = get_field("farvegrupper") ?>
            <?php foreach( $farvegrupper as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <h3 class="pb-2"><?php the_title() ?></h3>

                <div class="flex flex-wrap pb-5 gap farver">
                    <?php $farver = get_field("farver") ?> 
                    <?php foreach($farver as $post):
                        setup_postdata($post) ?>
                            <div class="flex flex-col">
                                <?php if (get_field("hex_color")) : ?>
                                    <div style="background-color: <?php the_field("hex_color") ?>; width: 140px; height: 80px;"></div>

                                    <?php elseif (get_field("img_color")) : ?>
                                        <img src="<?php the_field("img_color") ?>" alt="farve-billede" style="width: 140px; height: 80px;">
                                <?php endif; ?>

                                <span><?php the_title() ?></span>
                            </div>
                        
                    <?php endforeach ?>
                </div>
            <?php endforeach; ?>
 
            <?php wp_reset_postdata(); ?>

            <!-- <img src="<?php the_field("billede_af_farve") ?>" alt="">
            <p><?php the_field("farve_navn") ?></p> -->
        </div>
    </div>
</div>

<!-- fordele -->
<div class="secondary-bg">
    <div>
        <h2 class="text-center pt-5 pb-3 ten-percent"><?php the_field("fordele_ved_produktet_titel") ?></h2>
    </div>

    <!-- fordel 1 -->
    <div class="ten-percent pb-5">
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
            <div class="flex-col w-half align-center">
                <img src="<?php the_field("fordel_billede_1") ?>" alt="" width="100%">
            </div>
        </div>
    </div>

    <!-- fordel 2 -->
    <div class="ten-percent pb-5">
        <div class="flex fordel col-reverse gap-18">
            <!-- billede -->
            <div class="flex-col w-half align-center">
                <img src="<?php the_field("fordel_billede_2") ?>" alt="" width="100%">
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
    </div>

    <!-- fordel 3 -->
    <div class="ten-percent pb-5">
        <div class="flex fordel">
            <div class="flex-col">
                <hr class="hr-small">
                <h3 class="pb-2"><?php the_field("fordel_3") ?></h3>
                <h4 class="pb-1"><?php the_field("fordel_subheadline_3") ?></h4>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_3") ?></p>
                <img src="<?php the_field("fordel_billede_3") ?>" alt="" width="100%" class="fordel-3">
            </div> 
        </div>
    </div>

    <!-- fordel 4 -->
    <div class="ten-percent pb-5">
        <div class="flex fordel gap-18 responsive-col">
            <div class="flex-col w-half">
                <hr class="hr-small">
                <h3 class="pb-1"><?php the_field("fordel_4") ?></h3>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_4") ?></p>
            </div>  
            <div class="flex-col w-half">
                <img src="<?php the_field("fordel_billede_4") ?>" alt="" width="100%">
            </div>
        </div>
    </div>

    <!-- fordel 5 -->
    <div class="ten-percent pb-5">
        <div class="flex fordel col-reverse gap-18">
            <div class="flex-col w-half">
                <img src="<?php the_field("fordel_billede_5") ?>" alt="" width="100%">
            </div>

            <div class="flex-col w-half">
                <hr class="hr-small">
                <h3 class="pb-1"><?php the_field("fordel_5") ?></h3>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_5") ?></p>
            </div>
        </div>
    </div>

    <!-- fordel 6 -->
    <div class="ten-percent pb-5"> 
        <div class="flex fordel">
            <div class="flex-col">
                <hr class="hr-small">
                <h3 class="pb-1"><?php the_field("fordel_6") ?></h3>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_6") ?></p>
                <img src="<?php the_field("fordel_billede_6") ?>" alt="" width="100%">
            </div>
        </div>
    </div>
</div>

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

    .gap-18 {
        gap: 18px;
    }

    .align-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .responsive-col{
        display: flex;
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
    }

    @media screen and (max-width: 500px) {
        .farver {
            flex-direction: column;
        }

        .parameter {
            display: flex;
            flex-direction: column;
            padding-bottom: 0 !important;
        }
    }

</style>



<?php get_footer() ?>