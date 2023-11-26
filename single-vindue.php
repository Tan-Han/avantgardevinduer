<?php get_header() ?>

<!-- hero -->
<div class="container ten-percent pt-5 pb-5">
    <div class="row">
        <div class="col">
            <!-- titel -->
            <div class="pt-5 pb-2">
                <h2><?php the_field("produkt_navn")?></h2>
                <p><?php the_field("kort_beskrivelse")?></p>
            </div>

            <!-- specifikationer -->
            <div class="row">
                <div class="col pb-5">
                    <div>
                        <hr class="hr-small">
                        <h5><?php the_field("parameter_titel_1")?></h5>
                        <p><?php the_field("parameter_tekst_1")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h5><?php the_field("parameter_titel_2")?></h5>
                        <p><?php the_field("parameter_tekst_2")?></p>
                    </div>
                    
                </div>
                <div class="col pb-5">
                    <div>
                        <hr class="hr-small">
                        <h5><?php the_field("parameter_titel_3")?></h5>
                        <p><?php the_field("parameter_tekst_3")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h5><?php the_field("parameter_titel_4")?></h5>
                        <p><?php the_field("parameter_tekst_4")?></p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- img -->
        <div class="col">
            <div>
                <img src="<?php the_field("produkt_billede")?>" alt="" style="height: 400px;">
            </div>
        </div>
    </div>
</div>

<!-- farver -->
<div class="container ten-percent pb-5">
    <div class="row">
        <div class="col">
        <hr class="hr-small">
        <h3><?php the_field("farve_titel")?></h3>
        <p><?php the_field("farve_beskrivelse")?></p>
        </div>
    </div>
</div>

<div class="container ten-percent">
    <div class="row">
        <div class="col">
            <!-- loop med farver -->
            <?php $farvegrupper = get_field("farvegrupper") ?>
            <?php foreach( $farvegrupper as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <h2 class="pb-2"><?php the_title() ?></h2>

                <div class="flex flex-wrap pb-5 gap">
                    <?php $farver = get_field("farver") ?> 
                    <?php foreach($farver as $post):
                        setup_postdata($post) ?>
                            <div class="flex flex-col">
                                <?php if (get_field("hex_color")) : ?>
                                    <div style="background-color: <?php the_field("hex_color") ?>; width: 50px; height: 50px;"></div>

                                    <?php elseif (get_field("img_color")) : ?>
                                        <img src="<?php the_field("img_color") ?>" alt="farve-billede" style="width: 50px; height: 50px;">
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
<div class="secondary-bg pb-5">
    <div>
        <h2 class="text-center pt-5"><?php the_field("fordele_ved_produktet_titel") ?></h2>
    </div>

    <!-- fordel 1 -->
    <div class="container ten-percent responsive-col">
        <div class="flex fordel">
            <!-- billede -->
            <div class="flex-col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_1") ?></h3>
                <div>
                    <h4><?php the_field("fordel_subheadline_1") ?></h4>
                    <p><?php the_field("fordel_beskrivelse_1") ?></p>
                </div>
            </div>

            <!-- information -->
            <div class="flex-col">
                <img src="<?php the_field("fordel_billede_1") ?>" alt="">
            </div>
        </div>
    </div>

    <!-- fordel 2 -->
    <div class="container ten-percent pb-5 col-reverse">
        <div class="row fordel col-reverse">
            <!-- billede -->
            <div class="col">
                <img src="<?php the_field("fordel_billede_2") ?>" alt="">
            </div>

            <!-- information -->
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_2") ?></h3>
                <div>
                    <h4><?php the_field("fordel_2_subheadine_1") ?></h4>
                    <p><?php the_field("fordel_2_beskrivelse_1") ?></p>

                    <h4><?php the_field("fordel_2_subheadine_2") ?></h4>
                    <p><?php the_field("fordel_2_beskrivelse_2") ?></p>

                    <h4><?php the_field("fordel_2_subheadine_3") ?></h4>
                    <p><?php the_field("fordel_2_beskrivelse_3") ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- fordel 3 -->
    <div class="container ten-percent pb-5">
        <div class="row fordel">
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_3") ?></h3>
                <h4><?php the_field("fordel_subheadline_3") ?></h4>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_3") ?></p>
                <img src="<?php the_field("fordel_billede_3") ?>" alt="">
            </div> 
        </div>
    </div>

    <!-- fordel 4 -->
    <div class="container ten-percent pb-5 responsive-col">
        <div class="row fordel">
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_4") ?></h3>
                <p><?php the_field("fordel_beskrivelse_4") ?></p>
            </div>  
            <div class="col">
                <img src="<?php the_field("fordel_billede_4") ?>" alt="">
            </div>
        </div>
    </div>

    <!-- fordel 5 -->
    <div class="container ten-percent pb-5 col-reverse">
        <div class="row fordel col-reverse">
            <div class="col">
                <img src="<?php the_field("fordel_billede_5") ?>" alt="">
            </div>

            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_5") ?></h3>
                <p><?php the_field("fordel_beskrivelse_5") ?></p>
            </div>
        </div>
    </div>

    <!-- fordel 6 -->
    <div class="container ten-percent pb-5">
        <div class="row fordel">
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_6") ?></h3>
                <p class="pb-3"><?php the_field("fordel_beskrivelse_6") ?></p>
                <img src="<?php the_field("fordel_billede_6") ?>" alt="">
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


    /* responsive design */
    @media screen (max-width: 1000px) {
        .responsive-col {
            display: flex;
            flex-direction: row; 
        }

        .col-reverse {
            display: flex;
            flex-direction: column-reverse;
        }
    }


</style>



<?php get_footer() ?>