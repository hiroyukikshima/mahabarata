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

  <section id="contact" class="inquiry inquiry-confilm wow fadeIn">
    <h2 class="section-title">INQUIRY</h2>
    <div class="inner">
      <p class="contact-message">
        お問い合わせありがとうございました。<br>
        メッセージは正常に送信されました。
      </p>
    </div>
  </section>
  <!-- /.inquiry -->

  <section class="news latest-news">
    <h2 class="section-title">LATEST NEWS</h2>
    <div class="inner">
      <div class="btn-container btn-right is-pc">
        <a href="/news" class="btn btn-small">ニュース一覧へ</a>
      </div>
      <div class="news-list">
      <?php
        $args = array(
          'posts_per_page' => 5 // 表示件数の指定
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
      ?>
        <article class="news-list-item">
          <a href="<?php the_permalink(); ?>" class="news-list-item-link">
            <div class="news-inner">
              <div class="news-list-item-img" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
              </div>
              <div class="news-list-item-contents">
                <time datetime="<?php the_time('c');?>"><?php the_time('Y.n.j'); ?></time>
                <h5 class="news-list-item-contents-text">
                  <?php the_title(); ?>
                </h5>
              </div>
            </div>
          </a>
        </article>
        <?php
          endforeach; // ループの終了
          wp_reset_postdata(); // 直前のクエリを復元する
        ?>
      </div>
    </div>
    <div class="btn-container is-sp">
      <a href="#" class="btn btn-small">ニュース一覧へ</a>
    </div>
  </section>
  <!-- /.news -->

<?php get_footer(); ?>