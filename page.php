<?php
get_header();
$options = get_site_option('_igv_site_options');
?>

<main id="main-content">
  <section id="page">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

      <article <?php post_class('grid-row padding-top-basic padding-bottom-basic'); ?> id="post-<?php the_ID(); ?>">

        <div class="grid-item item-s-12 item-m-6 margin-bottom-basic">

          <?php the_content(); ?>

        </div>

        <?php
          if ($post->post_name === 'acercade') {
        ?>
        <div class="grid-item item-s-12 item-m-6 margin-bottom-basic">
        <?php
            if (!empty($options['mailchimp_url'])) {
        ?>
          <div>
            <form id="mailchimp-form" class="grid-row margin-top-small" novalidate="true">
              <div class="grid-item item-s-12 margin-bottom-micro">Join our mailing list:</div>
              <div class="grid-item item-s-12 grid-row no-gutter">
                <div class="grid-item item-s-5 item-m-3">
                  <input id="mailchimp-email" type="email" placeholder="Email" name="EMAIL" class="item-s-5 item-m-3">
                </div>
                <div>
                  <button id="mailchimp-submit" type="submit" class="font-bold u-pointer">Subscribe</button>
                </div>
              </div>
              <div id="mailchimp-response" class="grid-item item-s-12 margin-top-micro">&nbsp;</div>
            </form>
          </div>
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
