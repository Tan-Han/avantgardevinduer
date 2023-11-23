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
          <?php the_field("") ?>
        </p>
      </div>
      <div class="icon">
      <i class="material-icons">smartphone</i>
      </div>
    </div>
    <div class="address">
      <div class="info">
        <p class="contact-info-headline">Adresse</p>
        <p>
          <?php the_field("") ?>
        </p>
      </div>
      <div class="icon">
        <span class="material-symbols-outlined">pin_drop</span>
      </div>
    </div>
    <div class="mail">
      <div class="info">
        <p class="contact-info-headline">E-mail</p>
        <p>
          <?php the_field("") ?>
        </p>
      </div>
      <div class="icon">
        <span class="material-symbols-outlined">mail</span>
      </div>
    </div>
  </div>

  <div class="contact-form">

  </div>
</div>

<style>

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 200,
  'GRAD' 0,
  'opsz' 24
}
</style>

<?php get_footer() ?>