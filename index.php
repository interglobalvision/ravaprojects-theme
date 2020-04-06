<?php
get_header();
?>

<main id="main-content">
  <section id="posts">
    <div class="grid-row">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

      <article <?php post_class('grid-item item-s-12 padding-top-basic padding-bottom-large'); ?> id="post-<?php the_ID(); ?>">

        <h1 class="u-visuallyhidden"><?php the_title(); ?></h1>

        <div class="entry-content">

          <?php the_content(); ?>

        </div>

      </article>

<?php
  }
}
?>

    </div>
  </section>

  <?php //get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
