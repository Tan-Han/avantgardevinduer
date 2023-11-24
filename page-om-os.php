<?php get_header() ?>

<div class="about-headline">
  <h1>Om Avantgardevinduer</h1>
  <h2>Læs mere om firmaet og manden bag</h2>

  <hr>
</div>

<div class="about-content">
  <div class="about-part-one">
    <div class="text-box">
    <h3>Firmaets historie</h3>
    <p><?php the_field("company") ?></p>
    </div>
    <div class="image-one">
      <img src="<?php the_field("image_company") ?>" alt="">
    </div>
  </div>
</div>

<style>
  .about-headline {
    text-align: center;
    padding: 3rem 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .about-headline h1 {
    font-size: 70px;
    font-weight: 700;
  }

  .about-headline h2 {
    font-size: 30px;
    font-style: italic;
  }

  hr {
    width: 40%;
    border-top: 3px solid #333333;
    opacity: 100%;
  }
</style>

<?php get_footer() ?>