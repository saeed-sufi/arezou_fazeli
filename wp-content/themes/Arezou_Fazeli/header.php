<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

  <header class="site-header">
    <div class="wrapper wrapper--large wrapper--overflow-visible">
      <div class="site-header__content">
        <div class="site-header__logo">
          <a href="<?php echo site_url() ?>">
            دکتر فاطمه فاضلی ثانی
            <p>ارائه خدمات مشاوره حضوری و آنلاین</p>
          </a>
        </div>
        <nav class="site-menu">
          <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> 
          <hr>
          <hr>
          <hr>
          </a>
          <ul class="menu">
            <li><a <?php if(is_page('home')) echo 'class="homer"' ?> href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> خانه</a>
            </li>
            <li><a <?php if(is_page('about-me')) echo 'class="homer"' ?>   href="<?php echo site_url('/about-me') ?>"><i class="fa fa-user"></i> درباره من</a></li>
            <li><a <?php if(is_page('eft')) echo 'class="homer"' ?>><i class="fas fa-spa"></i> روش‌های درمانی</a>
              <ul class="sub-menu">
                <li><a href="<?php echo site_url('\eft') ?>"> درمان هیجان مدار (EFT)</a></li>

              </ul>
            </li>
            <li><a <?php if(is_page('contact-me')) echo 'class="homer"' ?> href="<?php echo site_url('contact-me') ?>"><i class="fa fa-envelope"></i> تماس با من</a></li>
            <li><a <?php if(is_page('books-papers')) echo 'class="homer"' ?> href="<?php echo site_url('\books-papers') ?>"><i class="fas fa-book"></i> کتاب‌ها و مقالات</a></li>
            <li><a <?php if(get_post_type() == 'post') echo 'class="homer"' ?> href="<?php echo site_url('/blog') ?>"><i class="fas fa-blog"></i> بلاگ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>