<?php
get_header();
$options = get_site_option('_igv_site_options');
?>

<main id="main-content">
  <section id="page" class="container">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

      <article <?php post_class('grid-row padding-top-basic padding-bottom-basic'); ?> id="post-<?php the_ID(); ?>">

        <div class="grid-item item-s-12 item-m-5 margin-bottom-basic">

          <?php the_content(); ?>

        </div>

        <?php
          if ($post->post_name === 'acercade') {
        ?>
        <div class="grid-item no-gutter item-s-12 offset-m-1 item-m-6 margin-bottom-basic">
        <?php
          if (!empty($options['contact_email'])) {
        ?>
          <div class="margin-bottom-small grid-row">
            <div class="grid-item font-size-mid">
              <a href="mailto:<?php echo $options['contact_email']; ?>"><?php echo $options['contact_email']; ?></a>
            </div>
          </div>
        <?php
          }
          if (!empty($options['mailchimp_url'])) {
        ?>
          <form id="mailchimp-form" class="grid-row margin-bottom-small align-items-center" novalidate="true">
            <div class="grid-item item-s-12 margin-bottom-micro">Suscríbete a nuestro boletín</div>
            <div class="grid-item item-s-8 item-m-6">
              <input id="mailchimp-email" type="email" placeholder="Email" name="EMAIL" class="item-s-5 item-m-3">
            </div>
            <div>
              <button id="mailchimp-submit" type="submit">Suscríbete</button>
            </div>
            <div id="mailchimp-response" class="grid-item item-s-12 item-m-10 margin-top-micro">&nbsp;</div>
          </form>
        <?php
          }
        ?>
        </div>
        <?php
          }
        ?>

      </article>

<?php
  }
}
?>

  </section>

  <?php //get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
