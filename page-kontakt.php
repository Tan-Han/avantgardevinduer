<?php get_header() ?>

<main>
  <div class="contact-headline-box">
    <h1>Kontakt os</h1>
    <h2>Og få et godt tilbud</h2>

    <hr>
  </div>

  <article class="content-contact">
    <section class="contact-info">
      <div class="telephone">
        <div class="info">
          <p class="contact-info-headline">Telefon</p>
          <a href="tel:<?php the_field("telephone") ?>">
            <p>
              <?php the_field("telephone") ?>
            </p>
          </a>
        </div>
        <div class="icon">
          <span class="material-symbols-outlined">smartphone</span>
        </div>
      </div>
      <div class="address">
        <div class="info">
          <p class="contact-info-headline">Adresse</p>
          <a href="<?php the_field("address-link") ?>" target=”_blank”>
            <p>
              <?php the_field("address") ?>
            </p>
          </a>
        </div>
        <div class="icon">
          <span class="material-symbols-outlined">pin_drop</span>
        </div>
      </div>
      <div class="mail">
        <div class="info">
          <p class="contact-info-headline">E-mail</p>
          <a href="mailto:<?php the_field("mail") ?>">
            <p>
              <?php the_field("mail") ?>
            </p>
          </a>
        </div>
        <div class="icon">
          <span class="material-symbols-outlined">mail</span>
        </div>
      </div>
    </section>

    <section class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="feb7891" title="Kontaktformular"]'); ?>
    </section>
  </article>

</main>


<style>
  .contact-headline-box {
    text-align: center;
    padding: 3rem 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .contact-headline-box h1 {
    font-size: 70px;
    font-weight: 700;
  }

  .contact-headline-box h2 {
    font-size: 25px;
    font-style: italic;
  }

  hr {
    width: 40%;
    border-top: 3px solid #333333;
    opacity: 100%;
  }

  @media screen and (max-width: 1300px) {
    hr {
      width: 55%;
    }
  }

  @media screen and (max-width: 1000px) {
    .contact-headline-box h1 {
      font-size: 60px;
    }

    .contact-headline-box h2 {
      font-size: 22px;
    }

    hr {
      width: 70%;
    }
  }

  @media screen and (max-width: 700px) {
    .contact-headline-box h1 {
      font-size: 55px;
    }

    hr {
      width: 80%;
    }
  }

  @media screen and (max-width: 570px) {
    .contact-headline-box h1 {
      font-size: 50px;
    }
  }

  @media screen and (max-width: 480px) {
    .contact-headline-box h1 {
      font-size: 45px;
    }

    .contact-headline-box h2 {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 400px) {
    .contact-headline-box h1 {
      font-size: 38px;
    }
  }

  .content-contact {
    padding: 0 10% 3rem 10%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .contact-info {
    width: 40%;
    padding-right: 12rem;
  }

  .telephone,
  .address,
  .mail {
    display: flex;
    justify-content: right;
    align-items: center;
    padding: 1rem 0;
    font-size: 18px;
  }

  .contact-info-headline {
    font-weight: 700;
  }

  .contact-info a {
    text-decoration: none;
    color: var(--black);
  }

  .contact-info a:hover {
    color: var(--tertiary-color);
    text-decoration: underline;
  }

  .info {
    padding: 1rem;
    text-align: right;
  }

  .icon {
    border-left: #333333 solid 2px;
    display: flex;
    justify-content: left;
    align-items: center;
    padding: 1rem 1rem;
  }

  .icon span {
    font-size: 40px;
  }

  .contact-form {
    width: 60%;
  }

  .contact-form span {
    display: flex;
    flex-direction: column;
  }

  .contact-form span .wpcf7-not-valid-tip {
    font-size: 14px;
  }

  .contact-form-info {
    display: flex;
    justify-content: left;
    gap: 1rem;
  }

  .contact-form-info p {
    width: 33%;
  }

  .contact-form-info p label span {
    width: 100%;
    display: flex;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    border: 2px solid #333333;
    border-radius: 0;
    padding: .2rem .5rem;
  }

  .contact-form label {
    width: 100%;
  }

  .submit-btn p {
    width: 100%;
    display: flex;
    justify-content: right;
    align-items: center;
    flex-direction: row-reverse;
    padding: 1rem 0;
  }

  .submit-btn input {
    width: fit-content;
    padding: .2rem .5rem;
    background-color: var(--quaternary-color);
    color: #f5f5f5;
  }

  .submit-btn input:hover {
    background-color: var(--tertiary-color);
    color: #f5f5f5;
  }

  .wpcf7 form .wpcf7-response-output {
    margin: 0;
    padding: 0;
  }

  .wpcf7 form.sent .wpcf7-response-output,
  .wpcf7 form.invalid .wpcf7-response-output {
    border: none;
    text-align: right;
  }

  @media screen and (max-width: 1300px) {

    h1 {
      font-size: 55px;
    }

    h2 {
      font-size: 25px;
    }

    .contact-info {
      padding-right: 5rem;
    }
  }

  @media screen and (max-width: 1150px) {

    .telephone,
    .address,
    .mail {
      justify-content: center;
      align-items: center;
      padding: 1rem 5%;
      font-size: 16px;
      flex-direction: column-reverse;
    }

    .info {
      text-align: center;
      width: 100%;
      padding: 1rem 0;
    }

    .icon {
      border-left: none;
      border-bottom: #333 solid 2px;
      justify-content: center;
      width: 100%;
    }
  }

  @media screen and (max-width: 1000px) {
    .content-contact {
      flex-direction: column;
    }

    .contact-info {
      display: flex;
      justify-content: space-between;
      width: 100%;
      column-gap: 15%;
      padding-right: 0;
    }

    .telephone,
    .address,
    .mail {
      font-size: 12px;
      flex: 1;
      padding: 0;
    }

    .info,
    .icon {
      padding: .5rem 0;
    }

    .icon span {
      font-size: 35px;
    }

    .contact-form {
      width: 100%;
    }
  }

  @media screen and (max-width: 760px) {
    .contact-info {
      column-gap: 10%;
    }
  }

  @media screen and (max-width: 665px) {
    .contact-info {
      flex-direction: column;
      justify-content: center;
      column-gap: 0;
      padding: 0 30% 2rem 30%;
    }

    .contact-form-info {
      flex-direction: column;
      gap: 0;
    }

    .contact-form-info p {
      width: 100%;
    }
  }

  @media screen and (max-width: 520px) {
    .contact-info {
      padding: 0 25% 2rem 25%;
    }

  }

  @media screen and (max-width: 410px) {
    .contact-info {
      padding: 0 20% 2rem 20%;
    }

  }
</style>

<?php get_footer() ?>