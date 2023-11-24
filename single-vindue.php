<?php get_header() ?>

<!-- hero -->
<div class="container ten-percent pb-5">
    <div class="row">
        <div class="col">
            <!-- titel -->
            <div class="pt-5 pb-2">
                <h2><?php the_field("produkt_navn")?></h2>
                <p><?php the_field("kort_beskrivelse")?></p>
            </div>

            <!-- specifikationer -->
            <div class="row">
                <div class="col">
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
                <div class="col">
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
                <img src="<?php the_field("produkt_billede")?>" alt="" style="width: 100px; height: 100px;">
            </div>
        </div>
    </div>
</div>

<!-- farver -->
<div class="container ten-percent pb-2">
    <div class="row">
        <div class="col">
        <hr class="hr-small">
        <h3><?php the_field("farve_titel")?></h3>
        <p><?php the_field("farve_beskrivelse")?></p>
        </div>
    </div>
</div>

<div class="container ten-percent pb-5">
    <div class="row">
        <div class="col">
            <!-- loop med farver -->
            <?php $farvegrupper = get_field("farvegrupper") ?>
            <?php foreach( $farvegrupper as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <h2><?php the_title() ?></h2>

                <?php $farver = get_field("farver") ?>
                <?php foreach($farver as $post):
                    setup_postdata($post) ?>
                        <div style="background-color: <?php the_field("hex_color") ?>; width: 50px; height: 50px;"></div>
                        <div><img src="<?php the_field("img_color") ?>" alt="farve-billede" style="width: 50px; height: 50px;"></div>
                        <span><?php the_title() ?></span>
                    
                <?php endforeach ?>

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
        <h2 class="text-center pt-5 pb-5"><?php the_field("fordele_ved_produktet_titel") ?></h2>
    </div>

    <!-- fordel 1 -->
    <div class="container ten-percent">
        <div class="row fordel">
            <!-- billede -->
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel_1") ?></h3>
                <div>
                    <h4><?php the_field("fordel_subheadline_1") ?></h4>
                    <p><?php the_field("fordel_beskrivelse_1") ?></p>
                </div>
            </div>

            <!-- information -->
            <div class="col">
                <img src="<?php the_field("fordel_billede_1") ?>" alt="">
            </div>
        </div>
    </div>

    <!-- fordel 2 -->
    <div class="container ten-percent pb-5">
        <div class="row fordel">
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
                <p><?php the_field("fordel_beskrivelse_3") ?></p>
                <img src="<?php the_field("fordel_billede_3") ?>" alt="">
            </div> 
        </div>
    </div>

    <!-- fordel 4 -->
    <div class="container ten-percent pb-5">
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
    <div class="container ten-percent pb-5">
        <div class="row fordel">
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
                <p><?php the_field("fordel_beskrivelse_6") ?></p>
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


    /* responsive design */
    /* @media screen (max-width: 950px) {
        .fordel {
            flex-direction: row;
        }
    } */


</style>



<?php get_footer() ?>