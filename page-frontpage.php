<?php get_header() ?>

<main>
  <div class="hero">
    <div class="hero-logo">
      <?php $heroImage = get_field("logo_hero") ?>
      <img src="<?php echo $heroImage["sizes"]["large"] ?>" alt="">

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

<style>
  .hero {
    background-color: var(--quaternary-color);
    width: 100%;
    height: 685px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 3rem 10%;
    gap: 5rem;
  }

  .hero-logo {
    width: 35%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-logo img {
    max-height: 400px;
  }

  .hero-tekst {
    width: 65%;
  }

  h1 {
    padding: 1rem 0;
    color: var(--white);
    font-size: 85px;
    text-shadow: #333 3px 3px 3px;
    margin: 0;
    width: 100%;
    text-align: left;
  }

  h3 {
    color: var(--white);
    padding: 1rem 0;
    font-size: 55px;
    font-weight: 400;
    text-shadow: #333 3px 3px 3px;
    text-align: left;
  }

  .hr-frontpage {
    border-top: 3px solid var(--primary-color) !important;
    width: 100%;
    border-top: 3px solid;
    opacity: 100%;
    align-self: center;
  }

  .hero-tekst {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .frontpage-mini-nav {
    width: 100%;
    background-color: var(--primary-color);
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

  @media screen and (max-width: 1610px) {
    .hero {
      height: 600px;
    }

    h1 {
      font-size: 65px;
    }

    h3 {
      font-size: 45px;
    }

    .frontpage-content .text-box h2 {
      font-size: 35px;
    }
  }

  @media screen and (max-width: 1300px) {

    .hero {
      height: 475px;
    }

    .hero-logo img {
      max-height: 350px;
    }

    .frontpage-mini-nav p {
      font-size: 20px;
    }

    h1,
    h3 {
      padding: .5rem 0;
    }

    h3 {
      font-size: 35px;
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

    .hero-logo img {
      max-height: 300px;
    }

    h1,
    h3 {
      padding: .25rem 0;
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

  @media screen and (max-width: 1080px) {
    .hero {
      height: 450px;
      gap: 2rem;
    }

    .hero-logo img {
      max-height: 275px;
    }

    h1 {
      font-size: 55px;
    }

    h3 {
      font-size: 28px;
    }

    .frontpage-mini-nav p {
      font-size: 18px;
    }

  }

  @media screen and (max-width: 900px) {

    .hero {
      height: 400px;
    }

    .hero-logo img {
      max-height: 250px;
    }

    h1,
    h3 {
      padding: 0 0;
    }

    h1 {
      font-size: 45px;
    }

    h3 {
      font-size: 25px;
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

  @media screen and (max-width: 800px) {

    .hero-logo img {
      max-height: 200px;
    }

    h1 {
      font-size: 40px;
    }

    h3 {
      font-size: 22px;
    }

    .frontpage-content .text-box h2 {
      font-size: 30px;
    }

  }


  @media screen and (max-width: 700px) {
    .hero {
      gap: 1rem;
    }

    .hero-logo img {
      max-height: 175px;
    }

    h1 {
      font-size: 38px;
    }

    h3 {
      font-size: 18px;
    }

    .frontpage-content .text-box h2 {
      font-size: 28px;
    }

    .frontpage-content .text-box p {
      font-size: 14px;
    }

    .frontpage-content .image-box img {
      height: 250px;
    }
  }

  @media screen and (max-width: 600px) {

    .hero {
      flex-direction: column;
    }

    .hero-logo img {
      max-height: 175px;
      width: 100%;
    }

    .hero-tekst {
      width: 100%;
    }

    h1 {
      font-size: 45px;
      text-align: center;
    }

    h3 {
      font-size: 25px;
      text-align: center;
    }

    .frontpage-mini-nav p {
      font-size: 16px;
    }

    .frontpage-content .image-box img {
      height: 250px;
      width: 100%;
    }
  }

  @media screen and (max-width: 540px) {
   
    .hero-logo img {
      max-height: 150px;
    }

    h3 {
      font-size: 22px;
    }
    
    .frontpage-mini-nav p {
      font-size: 14px;
    }
    }


  @media screen and (max-width: 480px) {

    .hero-logo img {
      max-height: 125px;
    }

    h1 {
      font-size: 35px;
    }

    h3 {
      font-size: 18px;
    }

    
    .frontpage-mini-nav p {
      font-size: 12px;
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