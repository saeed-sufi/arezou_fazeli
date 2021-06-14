<?php get_header() ?>

<div class="page-banner">
  <img class="page-banner__img" src="<?php echo get_theme_file_uri('/assets/images/ocean_view.jpg') ?>"
    alt="Ocean View">
</div>

<div class="wrapper">
<?php
  while(have_posts()) {
    the_post(); ?>
<div class="interior-page-section page-section">
   
      <a href="<?php the_permalink() ?>">
    <h1 class="section-title section-title--right-aligned"><?php the_title(); ?></h1></a>
    <div class="metabox">
            <p>نوشته شده توسط <?php the_author_posts_link(); ?> در تاریخ <?php the_time('Y.n.j') ?> </p>
    </div>
    <div class="generic-content-container"><?php the_content();
    ?></div>

</div>

    <?php
  }
  echo paginate_links();
?>
</div>
<?php get_footer() ?>