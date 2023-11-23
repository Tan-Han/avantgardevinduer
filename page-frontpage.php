<?php get_header() ?>

<div class="hero">
  <h1> Avantgardevinduer </h1>
  <hr>
  <h3><?php the_field("slogan") ?></h3>
</div>

<div class="frontpage-mini-nav">
  <p><?php the_field("frontpage_highlight") ?></p>
</div>

<div class="frontpage-content">
  <div class="text-box">
    <h2 class="company-name">Avantgardevinduer & Døre</h2>
    <p class="company-description"><?php the_field("frontpage_description") ?></p>
  </div>
  <div class="image-box">
    <img src="<?php the_field("frontpage_description_image") ?>" alt="">
  </div>
</div>

<style>
  .hero {
    background-image: url(https://avantgardevinduer.trshansen.com/wp-content/uploads/2023/11/IMG_3700.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 685px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  h1 {
    padding: 1rem 0;
    color: #f5f5f5;
    font-size: 85px;
    text-shadow: #333 3px 3px 3px;
  }

  h3 {
    color: #f5f5f5;
    padding: 1rem 0;
    font-size: 60px;
    font-weight: 400;
    text-shadow: #333 3px 3px 3px;
  }

  hr {
    color: #f5f5f5;
    width: 60%;
    border-top: 3px solid;
  }

  .frontpage-mini-nav {
    width: 100%;
    background-color: #708090;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .frontpage-mini-nav p {
    color: #f5f5f5;
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
    height: 300px;
    object-fit: cover;
  }

  @media screen and (max-width: 1300px) {
    .hero {
      height: 500px;
    }

    h1 {
      font-size: 65px;
      padding: .5rem 0;
    }

    h3 {
      font-size: 40px;
      padding: .5rem 0;
    }

    .frontpage-mini-nav p {
    color: #f5f5f5;
    font-size: 20px;
    font-weight: 700;
    padding: .8rem 0;
    }

    .frontpage-content .text-box h2 {
    font-size: 30px;
  }

  .frontpage-content .text-box p {
    font-size: 16px;
  }
    
  }
</style>


<?php get_footer() ?>