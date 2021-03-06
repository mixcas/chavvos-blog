<?php
get_header();
?>

<!-- main content -->

<main id="main-content">

  <!-- main posts loop -->
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <a href="<?php the_permalink() ?>">
    <?php
    if(get_post_meta($post->ID, 'vid', true)) {
      echo '<div class="u-video-wrapper">';
      echo get_post_meta($post->ID, 'vid', true);
      echo '</div>';
    } elseif(has_post_thumbnail())
      the_post_thumbnail('post-thumb');
    ?>
    <h2><?php the_title(); ?></h2>
    </a>
    <?php the_content(); ?>

    </article>

<?php
  }
} else {
?>
    <article class="u-alert"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

  <!-- end posts -->
  </section>

  <?php get_template_part('partials/pagination'); ?>

<!-- end main-content -->

</main>

<?php
  get_footer();
?>
