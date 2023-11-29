<?php get_header() ?>

<main>
  <div class="hero">
    <div class="hero-logo">
    <?php $heroImage = get_field("logo_hero") ?>
    <img src="<?php echo $heroImage["sizes"]["medium"] ?>" alt="">

    </div>
    <div class="hero-tekst">
      <h1> Avantgardevinduer </h1>
      <hr class="hr-frontpage">
      <h3>
        <?php the_field("slogan") ?>
      </h3>
    </div>
  </div>

  <section class="frontpage-mini-nav">
    <p>
      <?php the_field("frontpage_highlight") ?>
    </p>
  </section>

  <article class="frontpage-content">
    <section class="text-box">
      <h2 class="company-name">Avantgardevinduer & Døre</h2>
      <p class="company-description">
        <?php the_field("frontpage_description") ?>
      </p>
    </section>
    <div class="image-box">
      <img src="<?php the_field("frontpage_description_image") ?>" alt="">
    </div>
  </article>
</main>


<!-- Linking to hero image -->


<style>
  .hero {
    /* Inserting hero image as background */
    /* background-image: url(<?php echo $heroImage["sizes"]["large"]; ?>); */
    /* background-size: cover;
    background-position: center;
    background-repeat: no-repeat; */
    background-color: var(--secondary-color);
    width: 100%;
    height: 685px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3rem 10%;
  }

  .hero-logo {
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-tekst {
    width: 50%;
    text-align: left;
  }

  h1 {
    padding: 1rem 0;
    color: var(--white);
    font-size: 85px;
    text-shadow: #333 3px 3px 3px;
    margin: 0;
  }

  h3 {
    color: var(--white);
    padding: 1rem 0;
    font-size: 60px;
    font-weight: 400;
    text-shadow: #333 3px 3px 3px;
  }

  .hr-frontpage {
    border-top: 3px solid var(--white) !important;
    width: 100%;
    border-top: 3px solid;
    opacity: 100%;
    align-self: center;
  }

  .hero-tekst {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .frontpage-mini-nav {
    width: 100%;
    background-color: var(--tertiary-color);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .frontpage-mini-nav p {
    color: var(--white);
    font-size: 25px;
    font-weight: 700;
    padding: .8rem 0;
  }

  .frontpage-content {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .frontpage-content .text-box {
    width: 50%;
    padding: 3rem 5% 3rem 10%;
  }

  .frontpage-content .text-box h2 {
    font-size: 50px;
  }

  .frontpage-content .text-box p {
    font-size: 20px;
  }

  .frontpage-content .image-box {
    width: 50%;
    padding: 3rem 10% 3rem 5%;
  }

  .frontpage-content .image-box img {
    width: 100%;
    height: 400px;
    object-fit: cover;
  }

  /* MEDIA QUERIES */

  @media screen and (max-width: 1600px) {
    h3 {
      font-size: 55px;
    }
  }

  @media screen and (max-width: 1480px) {

    .hero {
      height: 600px;
    }

    h1 {
      font-size: 65px;
    }

    h3 {
      font-size: 40px;
    }

    hr {
      width: 70%;
    }

    .frontpage-content .text-box h2 {
      font-size: 35px;
    }
  }

  @media screen and (max-width: 1300px) {

    .hero {
      height: 500px;
    }

    hr {
      width: 75%;
    }

    .frontpage-mini-nav p {
      font-size: 20px;
    }

    h1,
    h3 {
      padding: .5rem 0;
    }

    .frontpage-content .text-box h2 {
      font-size: 30px;
      padding: .5rem 0;
    }

    .frontpage-content .text-box p {
      font-size: 16px;
    }

    .frontpage-content .image-box img {
      height: 300px;
    }

  }

  @media screen and (max-width: 1150px) {

    h1,
    h3 {
      padding: .25rem 0;
    }

    hr {
      width: 80%;
    }

    .frontpage-content .text-box h2 {
      font-size: 25px;
    }

    .frontpage-content .text-box p {
      font-size: 14px;
    }

    .frontpage-content .image-box img {
      height: 250px;
    }
  }

  @media screen and (max-width: 1050px) {
    .hero {
      height: 450px;
    }

    h1 {
      font-size: 50px;
    }

    h3 {
      font-size: 35px;
    }

    .frontpage-mini-nav p {
      font-size: 18px;
    }

  }

  @media screen and (max-width: 900px) {

    h1,
    h3 {
      padding: 0 0;
    }

    hr {
      width: 85%;
    }

    .frontpage-content {
      flex-direction: column;
    }

    .frontpage-content .text-box {
      width: 100%;
      padding: 3rem 10%;
    }

    .frontpage-content .text-box h2 {
      font-size: 35px;
    }

    .frontpage-content .text-box p {
      font-size: 16px;
    }

    .frontpage-content .image-box {
      width: 100%;
      padding: 0rem 10% 3rem 10%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: fit-content;
    }

    .frontpage-content .image-box img {
      width: 80%;
      height: 300px;
    }
  }

  @media screen and (max-width: 860px) {
    h1 {
      font-size: 45px;
    }

    h3 {
      font-size: 30px;
    }
  }

  @media screen and (max-width: 760px) {
    h1 {
      font-size: 42px;
    }

    h3 {
      font-size: 27px;
    }

    hr {
      margin: .5rem 0;
    }
  }

  @media screen and (max-width: 680px) {

    hr {
      width: 95%;
    }

  }

  @media screen and (max-width: 660px) {

    .frontpage-content .text-box h2 {
      font-size: 30px;
    }

    .frontpage-content .text-box p {
      font-size: 14px;
    }

    .frontpage-content .image-box img {
      height: 250px;
    }
  }

  @media screen and (max-width: 600px) {
    h3 {
      font-size: 22px;
    }

    hr {
      width: 100%;
    }
  }

  @media screen and (max-width: 550px) {
    h1 {
      font-size: 38px;
    }

    h3 {
      font-size: 25px;
    }

    .frontpage-mini-nav p {
      font-size: 16px;
    }

    .frontpage-content .image-box img {
      height: 250px;
      width: 100%;
    }
  }

  @media screen and (max-width: 460px) {
    h1 {
      font-size: 35;
    }

    h3 {
      font-size: 20px;
    }

    .frontpage-mini-nav p {
      font-size: 14px;
    }

    .frontpage-content .text-box h2 {
      font-size: 25px;
      font-weight: 700;
    }

    .frontpage-content .image-box img {
      height: 250px;
    }
  }

  @media screen and (max-width: 380px) {

    h1 {
      font-size: 32px;
    }

    .frontpage-content .text-box h2 {
      font-size: 23px;
    }

    .frontpage-content .text-box p {
      font-size: 12px;
    }
  }

  @media screen and (max-width: 350px) {
    .frontpage-mini-nav p {
      font-size: 12px;
    }

  }
</style>


<?php get_footer() ?>