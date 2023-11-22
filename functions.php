<?php
  function mt_register_stylesheets() {
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
  }
  add_action( "wp_enqueue_scripts", "mt_register_stylesheets" );