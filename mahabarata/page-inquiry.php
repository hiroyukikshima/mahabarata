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

  <section id="contact" class="inquiry wow fadeIn">
    <h2 class="section-title">INQUIRY</h2>
    <div class="contact-form">
      <p class="contact-text">
        小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
        公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
        お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
      </p>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <!-- /.inquiry -->

<?php get_footer(); ?>