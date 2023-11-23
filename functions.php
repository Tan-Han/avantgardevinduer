<?php
  function mt_register_stylesheets() {
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js");

    wp_enqueue_style("https://use.typekit.net/tmr5ico.css");
    wp_enqueue_style("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
  }
  add_action( "wp_enqueue_scripts", "mt_register_stylesheets" );
  