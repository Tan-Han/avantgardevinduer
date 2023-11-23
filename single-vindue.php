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
                        <h4><?php the_field("parameter_titel_1")?></h4>
                        <p><?php the_field("parameter_tekst_1")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h4><?php the_field("parameter_titel_2")?></h4>
                        <p><?php the_field("parameter_tekst_2")?></p>
                    </div>
                    
                </div>
                <div class="col">
                    <div>
                        <hr class="hr-small">
                        <h4><?php the_field("parameter_titel_3")?></h4>
                        <p><?php the_field("parameter_tekst_3")?></p>
                    </div>
                    <div>
                        <hr class="hr-small">
                        <h4><?php the_field("parameter_titel_4")?></h4>
                        <p><?php the_field("parameter_tekst_4")?></p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- img -->
        <div class="col">
            <div>
                <img src="<?php the_field("produkt_billede")?>" alt="">
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
        <h5><?php the_field("farve_navn")?></h5>

        <!-- loop med farver -->

        <?php $farvegrupper = get_field("farvegrupper") ?>
         <?php foreach( $farvegrupper as $post ): 

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <h2><?php the_title() ?></h2>

            <?php $farver = get_field("farver") ?>
            <?php foreach($farver as $post):
                setup_postdata($post) ?>
                <div style="background-color: <?php the_field("hex_color") ?>px; width: 50px; height: 50px;"></div>
            <?php endforeach ?>

        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>

        <!-- <img src="<?php the_field("billede_af_farve") ?>" alt="">
        <p><?php the_field("farve_navn") ?></p> -->
    </div>
</div>

<!-- benefits -->
<div class="secondary-bg pb-5">
    <div>
        <h2 class="text-center pt-5 pb-5"><?php the_field("fordele_ved_produktet_titel") ?></h2>
    </div>

    <div class="container ten-percent">
        <div class="row">
            <!-- billede -->
            <div class="col">
                <img src="<?php the_field("fordel_billede") ?>" alt="">
            </div>

            <!-- information -->
            <div class="col">
                <hr class="hr-small">
                <h3><?php the_field("fordel") ?></h3>
                <!-- loop med teksten omkring fordelene -->
                <div>
                    <h4><?php the_field("fordel_subheadline") ?></h4>
                    <p><?php the_field("fordel_beskrivelse") ?></p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container ten-percent pb-5">
        <div class="row">
            <!-- billede -->
            <div class="col">
                <hr class="hr-small">
                <h3>S 9000 plus</h3>
                <!-- loop med teksten omkring fordelene -->
                <div>
                    <h4>System with rigid central gasket</h4>
                    <p>S 9000 is the new GEALAN central gasket system with a stable bar in the window frame. The central gasket bar effectively protects the mechanical parts in the window from external factors. Central gasket systems stand out for their excellent insulation qualities.</p>
                </div>
            </div>

            <!-- information -->
            <div class="col">
                <img src="" alt="">
            </div>
        </div>
    </div>

    <div class="container ten-percent pb-5">
        <div class="row">
            <div class="col">
                <hr class="hr-small">
                <h3>GEALAN-LUMAXX®</h3>
                <h4>Optimised geometries</h4>
                <p>During development of GEALAN-LUMAXX®, the entire frame geometry was optimised while the profile widths were compressed to a minimum. The designers paid special attention to achieving a balanced relationship between insulating properties and statics, as well as a perfect interplay of components. The symmetrical effect of the narrow single mullion also adds to the flexibility of use in window construction.</p>
                <img src="" alt="">
            </div>
        </div>
    </div>

    <div class="container ten-percent pb-5">
        <div class="row">
            <div class="col">
                <hr class="hr-small">
                <h3>Visibly less frame</h3>
                <p>A direct comparison proves it: The new GEALAN-LUMAXX® is significantly narrower than previous frame combinations. In the past, mullion designs often required a width of up to 150 mm and above. Heavy, unattractive bars ruined the window outline and let far less light into the room. Slim sightlines can finally be achieved with the new system, without forgoing ease-of-use and security.</p>
            </div>  
            <div class="col">
                <img src="" alt="">
            </div>
        </div>
    </div>

    <div class="container ten-percent pb-5">
        <div class="row">
            <div class="col">
                <img src="" alt="">
            </div>
            <div class="col">
                <hr class="hr-small">
                <h3>No compromise</h3>
                <p>Despite the focus on narrow sightlines, the new sash/mullion profile doesn’t compromise when it comes to statics. Both use a particular steel which, due to its static properties, allows for elements of up to 2.30 m in white and 2.20 m in colour. In combination with STV® bonding technology, element sizes up to 2.50 m in white and 2.40 m in colour are possible.</p>
            </div>
        </div>
    </div>

    <div class="container ten-percent pb-5">
        <div class="row">
            <div class="col">
                <hr class="hr-small">
                <h3>Optimised heat insulation</h3>
                <p>Developing a system with the best heat insulation properties does not happen by accident, but rather as a result of focused development work. Our success proves us right. Numerous calculations have produced outstanding heat insulation values. Right from the beginning, the goal of development was to achieve a heat insulation value of Uf - 0.92 W/m²K for the standard combination with steel, making the system suitable for use in passive houses. This was accomplished through the sum of the innovative system design details.</p>
                <img src="" alt="">
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
</style>



<?php get_footer() ?>