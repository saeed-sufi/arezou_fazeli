<?php get_header() ?>

<?php while(have_posts()) {
  the_post();
  page_banner();
}
?>

<div class="interior-page-section page-section">
    <div class="wrapper">

          <div>
            <h1 class="section-title section-title--right-aligned section-title--no-t-margin"><?php the_title() ?></h1>
          </div>
          <div class="metabox">
            <p>نوشته شده توسط <?php the_author_posts_link(); ?> در تاریخ <?php the_time('Y.n.j') ?> </p>
    </div>
          <div class="generic-content-container generic-content-container--justified">
        <?php the_content(); ?>

      </div>
    </div>


  </div>

<?php get_footer() ?>