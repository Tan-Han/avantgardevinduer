<?php get_header() ?>

<div class="contact-headline-box">
  <h1>Kontakt os</h1>
  <h2>Og få et godt tilbud</h2>

  <hr>
</div>

<div class="content-contact">
  <div class="contact-info">
    <div class="telephone">
      <div class="info">
        <p class="contact-info-headline">Telefon</p>
        <p>
          <a href="<?php the_field("telephone") ?>">
            <?php the_field("telephone") ?>
        </p></a>
      </div>
      <div class="icon">
        <span class="material-symbols-outlined">smartphone</span>
      </div>
    </div>
    <div class="address">
      <div class="info">
        <p class="contact-info-headline">Adresse</p>
        <p>
          <a href="<?php the_field("address-link") ?>"><?php the_field("address") ?></a>
        </p>
      </div>
      <div class="icon">
        <span class="material-symbols-outlined">pin_drop</span>
      </div>
    </div>
    <div class="mail">
      <div class="info">
        <p class="contact-info-headline">E-mail</p>
        <a href="<?php the_field("mail") ?>">
          <p>
            <?php the_field("mail") ?>
          </p>
        </a>
      </div>
      <div class="icon">
        <span class="material-symbols-outlined">mail</span>
      </div>
    </div>
  </div>

  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="feb7891" title="Kontaktformular"]'); ?>
  </div>
</div>

<style>
  .contact-headline-box {
    text-align: center;
    padding: 3rem 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  h1 {

  }

  h3 {

  }

  hr {
    width: 40%;
    border-top: 3px solid #333333;
  }

  .content-contact {
    padding: 3rem 10%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .contact-info {
    width: 40%;
    padding-right: 5rem;
  }

  .telephone,
  .address,
  .mail {
    display: flex;
    justify-content: right;
    align-items: center;
    padding: 1rem 0;
  }

  .contact-info a {
    text-decoration: none;
    color: #333333;
  }

  .contact-info a:hover {
    color: #708090;
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

  .material-symbols-outlined {
    font-variation-settings:
      'FILL' 0,
      'wght' 200,
      'GRAD' 0,
      'opsz' 24
  }

  .contact-form {
    width: 60%;
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

  .contact-form input, .contact-form textarea {
    width: 100%;
    border: 2px solid #333333;
  border-radius: 0;
  }

  .contact-form label {
    width: 100%;
  }

  .submit-btn p {
    width: 100%;
    display: flex;
    justify-content: right;
    flex-direction: row-reverse;
    padding: 1rem 0;
  }

  .submit-btn input {
    width: fit-content;
    padding: .2rem .5rem;

  }
</style>

<?php get_footer() ?>