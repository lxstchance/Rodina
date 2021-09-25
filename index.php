<?php get_header(); ?>

  <main class="main">

    <div class="container">
      <section class="about row">
        <div class="col-lg-6 ">
          <img src="<?php the_field('main__img') ?>" alt="" class="main__img">
        </div>
        <div class="col-lg-6 ">
          <p class="about__text">
            <?php the_field('about__text') ?>
           </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section class="works" id="work">

        <div class="work__items row" data-aos="fade-right">

          <div class="col-lg-6">
            <div class="work__content">
              <!-- <h2 class="work__title">Тематик</h2> -->
              <p class="work__text">
                <?php the_field('first') ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <a href="<?php the_field('first_img') ?>" class="work__gallery" data-fancybox="gallery">
              <img src="<?php the_field('first_img') ?>" alt="" class="work__img">
            </a>

            <div class="work__wrapper" style="display: none;">

              <a href="<?php the_field('array_1') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_1') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_2') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_2') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_3') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_3') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_4') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_4') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_5') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_5') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_6') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_6') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_7') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_7') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_8') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_8') ?>" alt="" class="work__img">
              </a>

              <a href="<?php the_field('array_9') ?>" class="work__gallery" data-fancybox="gallery">
                <img src="<?php the_field('array_9') ?>" alt="" class="work__img">
              </a>


            </div>
          </div>
        </div>

        <div class="work__items flex-row-reverse row"  data-aos="fade-left">

          <div class="col-lg-6">
            <div class="work__content">
              <!-- <h2 class="work__title">Тематик</h2> -->
              <p class="work__text">
                <?php the_field('second') ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <a href="<?php the_field('second_img') ?>" class="work__gallery" data-fancybox="gallery">
              <img src="<?php the_field('second_img') ?>" alt="" class="work__img">
            </a>
          </div>
        </div>

        <div class="work__items row" data-aos="fade-right">

          <div class="col-lg-6">
            <div class="work__content">
              <!-- <h2 class="work__title">Тематик</h2> -->
              <p class="work__text">
                <?php the_field('third') ?>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <a href="<?php the_field('third_img') ?>" class="work__gallery" data-fancybox="gallery">
              <img src="<?php the_field('third_img') ?>" alt="" class="work__img">
            </a>
      </section>
    </div>
    </div>

    <div class="container">
      <section class="price row" id="price">
        <div class="col-12">
          <h2 class="price__title">
            <?php the_field('price__title') ?>
          </h2>
        </div>

        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col table__title">
                  <?php the_field('table__title') ?>
                </th>
                <th class="price__cost" scope="col">
                  <?php the_field('price') ?>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="services " scope="row">
                  <?php the_field('services_1') ?>
                </th>
                <td class="price__cost">
                  <?php the_field('price__cost_1') ?>
                </td>
              </tr>
              <tr>
                <th class="services" scope="row">
                  <?php the_field('services_2') ?>
                </th>
                <td class="price__cost">
                  <?php the_field('price__cost_2') ?>
                </td>
              </tr>
              <tr>
                <th class="services" scope="row">
                  <?php the_field('services_3') ?>
                </th>
                <td class="price__cost">
                  <?php the_field('price__cost_3') ?>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="price__footnote">
            <?php the_field('price__footnote') ?>
        </div>
      </section>
    </div>


    <!-- <div class="container">
      <section class="reviews row" id="reviews">
        <div class="col-12">
          <h2 class="reviews__title">отзывы</h2>
        </div>
        <div class="col-12">
          <div class="reviews__slider">
            <img src="./img/no-foto.png" alt="" class="review__item">
            <img src="./img/no-foto.png" alt="" class="review__item">
            <img src="./img/no-foto.png" alt="" class="review__item">
            <img src="./img/no-foto.png" alt="" class="review__item">
            <img src="./img/no-foto.png" alt="" class="review__item">
          </div>
        </div>
      </section>
    </div> -->

<?php get_footer(); ?>
