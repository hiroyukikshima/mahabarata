<?php get_header(); ?>

  <div class="top-child">
    <div class="top-child-inner">
      <div class="top-child-container">
        <div class="top-container-child-left">
          <img src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/child-title.png" alt="">
        </div>
        <div class="top-container-child-right">
          <img src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/chile-date.png" alt="">
        </div>
      </div>
      <div class="btn-container">
        <a href="/reserv" class="btn">チケット予約サイトへ</a>
      </div>
    </div>
  </div>
  <!-- /.top -->

  <div class="breadcrumb">
    <div class="inner">
    <?php
    if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
    }
    ?>
    </div>
  </div>
  <!-- /.breadcrumb -->

  <section class="news news-child-single wow fadeIn">
    <h2 class="section-title">NEWS</h2>
    <div class="inner">
      <div class="news-item-container">
        <div class="news-item-container-img-wrap">

        <div class="news-list-item-img-single" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">

        </div>
        <div class="news-item-title-container">
          <time datetime="<?php the_time('c');?>"><?php the_time('Y.n.j'); ?></time>
          <h3 class="news-item-title"><?php the_title(); ?></h3>
        </div>
        <div class="news-item-text-container">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="news-item-footer wow fadeIn">
        <div class="news-item-footer-left">
          <?php previous_post_link('%link', '<i class="fas fa-chevron-circle-left fa-2x"></i> <div class="post-container-left"><div class=date-container>%date</div> <div class="title-container">%title</div></div>'); ?>
        </div>
        <div class="news-item-footer-right">
          <?php next_post_link('%link', '<div class="post-container-right"><div class=date-container>%date</div> <div class="title-container">%title</div></div> <i class="fas fa-chevron-circle-right fa-2x"></i>'); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- /.news -->

<?php get_footer(); ?>