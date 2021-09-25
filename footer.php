<footer class="footer text-center">
  <div class="container pt-4">
    <section class="footer__social" id="contact">
      <a class="footer__link" href="<?php the_field('instagram_link') ?>" target="_blank"><img src="<?php the_field('instagram_logo') ?>" alt="" class="footer__logo"></a>

      <a class="footer__link" href="<?php the_field('telegram_link') ?>" target="_blank"><img src="<?php the_field('telegram_logo') ?>" alt="" class="footer__logo"></a>

      <a class="footer__link" href="<?php the_field('whatsapp_link') ?>" target="_blank"><img src="<?php the_field('whatsapp_logo') ?>" alt="" class="footer__logo"></i></a>
    </section>
  </div>

  <div class="footer__content">
    <a href="mailto:<?php the_field('footer__email') ?>" class="footer__email">
      <?php the_field('footer__email') ?>
    </a>
    <a href="tel:<?php the_field('footer__phone') ?>" class="footer__phone">
      <?php the_field('footer__phone') ?>
    </a>
  </div>

</footer>

</main>

<a href="" class="scroll__top">
<img src="<?php the_field('scroll__top') ?>" alt="вверх" class="scroll__img">
</a>

<?php wp_footer(); ?>

</body>

</html>
