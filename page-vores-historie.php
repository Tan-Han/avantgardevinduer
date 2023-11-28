<?php get_header() ?>
<main>
  <div class="about-headline">
    <h1>Vores historie</h1>
    <h2>Læs mere om Avantgardevinduer og manden bag</h2>

    <hr>
  </div>

  <article class="about-content">
    <div class="about-content-inner">
      <div class="text-box">
        <h3>Firmaets historie</h3>
        <section>
          <p>
            <?php the_field("company") ?>
          </p>
        </section>
      </div>
      <div class="image-box">
        <?php $image = get_field("image_company") ?>
        <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>">
      </div>
    </div>
  </article>
</main>

<style>
  .about-headline {
    text-align: center;
    padding: 3rem 10%;
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
    font-size: 35px;
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

    .about-content-inner h3 {
      font-size: 30px;
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
    .about-headline h2 {
      font-size: 22px;
    }

    hr {
      width: 70%;
    }

    .about-content-inner {
      flex-direction: column-reverse;
    }

    .about-content-inner h3 {
      font-size: 35px;
    }

    .about-content-inner p {
      font-size: 18px;
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
      padding-bottom: 3rem;
    }

    .image-box img {
      width: 80%;
      height: 350px;
    }
  }

  @media screen and (max-width: 850px) {
    .about-headline h1 {
      font-size: 45px;
    }

    .about-content-inner h3 {
      font-size: 30px;
    }

    .about-content-inner p {
      font-size: 16px;
    }
  }

  @media screen and (max-width: 700px) {
    .about-headline h2 {
      font-size: 22px;
    }

    hr {
      width: 100%;
    }

    .image-box img {
      width: 100%;
    }
  }

  @media screen and (max-width: 580px) {
    .about-headline h1 {
      font-size: 40px;
    }

    .about-content-inner h3 {
      font-size: 35px;
    }

    .about-content-inner p {
      font-size: 15px;
    }

    .image-box img {
      height: 300px;
    }
  }

  @media screen and (max-width: 480px) {

    .about-headline h2 {
      font-size: 18px;
    }

    .image-box img {
      height: 250px;
    }
  }

  @media screen and (max-width: 400px) {
    .about-headline h1 {
      font-size: 38px;
    }

    .about-content-inner h3 {
      font-size: 25px;
    }

    .about-content-inner p {
      font-size: 14px;
    }

    .image-box img {
      height: 200px;
    }
  }
</style>

<?php get_footer() ?>