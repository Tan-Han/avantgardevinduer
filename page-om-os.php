<?php get_header() ?>

<div class="about-headline">
  <h1>Om Avantgardevinduer</h1>
  <h2>Læs mere om firmaet og manden bag</h2>

  <hr>
</div>

<div class="about-content">
  <div class="about-content-inner">
    <div class="text-box">
      <h3>Firmaets historie</h3>
      <p>
        <?php the_field("company") ?>
      </p>
    </div>
    <div class="image-box">
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
    font-size: 25px;
    font-style: italic;
  }

  hr {
    width: 50%;
    border-top: 3px solid var(--primary-color);
    opacity: 100%;
  }

  .about-content {
    padding: 0 10% 3rem 10%;
  }

  .about-content-inner {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .about-content-inner h3 {
    font-style: normal;
    font-weight: 700;
  }

  .about-content-inner p {
    font-size: 20px;
  }

  .text-box {
    width: 50%;
    padding-right: 5rem;
  }

  .image-box {
    width: 50%;
    padding-left: 5rem;
  }

  .image-box img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }

  @media screen and (max-width: 1300px) {

    .about-headline h1 {
      font-size: 55px;
    }

    .about-headline h2 {
      font-size: 25px;
    }

    .about-content-inner p {
      font-size: 16px;
    }

    .text-box {
      padding-right: 3rem;
    }

    .image-box {
      padding-left: 3rem;
    }

    .image-box img {
      height: 300px;
    }

    hr {
      width: 55%;
    }
  }

  @media screen and (max-width: 1000px) {
    .about-headline-box h1 {
      font-size: 60px;
    }

    .about-headline-box h2 {
      font-size: 22px;
    }

    hr {
      width: 70%;
    }

    .about-content-inner {
      flex-direction: column-reverse;
    }

    .about-content-inner h3 {
      
    }

    .about-content-inner p {
      
    }

    .text-box {
      width: 100%;
      padding-right: 0;
    }

    .image-box {
      width: 100%;
      padding-left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-box img {
      width: 80%;
      height: 350px;
    }
  }

  @media screen and (max-width: 700px) {
    .about-headline-box h1 {
      font-size: 55px;
    }

    hr {
      width: 80%;
    }
  }

  @media screen and (max-width: 570px) {
    .about-headline-box h1 {
      font-size: 50px;
    }
  }

  @media screen and (max-width: 480px) {
    .about-headline-box h1 {
      font-size: 45px;
    }

    .about-headline-box h2 {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 400px) {
    .about-headline-box h1 {
      font-size: 38px;
    }
  }
</style>

<?php get_footer() ?>