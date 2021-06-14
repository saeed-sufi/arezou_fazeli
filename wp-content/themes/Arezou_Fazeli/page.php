<?php get_header() ?>

<?php while(have_posts()) {
  the_post();
  page_banner(); 
}
?>

<div class="interior-page-section page-section">
    <div class="wrapper">
      <div class="row row__gutters--large">
        <div class="row__medium-6">
          <div>
            <h1 class="section-title section-title--no-t-margin"><?php the_title() ?></h1>
          </div>

          <div class="generic-content-container generic-content-container--justified">
        <?php the_content(); ?>
          </div>
        </div>
        <div class="row__medium-6">
          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
        </div>
      </div>
    </div>


  </div>

<?php get_footer() ?>