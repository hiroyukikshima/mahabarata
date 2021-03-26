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

  <section class="comments comments-single wow fadeIn">
    <h2 class="section-title">COMMENTS</h2>
    <p class="comments-text">舞台関係者のみならず各界著名人からコメントが届いています！</p>
    <div class="inner comments-single-inner">
      <div class="comments-img is-sp">
        <img src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/comments-bg.png" alt="">
      </div>
      <div class="comments-container">
        <div class="comments-container-head">
          <p class="comments-container-head-title">京都佛立ミュージアム館長<br class="is-sp"><span>長松清潤</span></p>
        </div>
        <div class="conmments-container-body">
          <p class="comments-container-body-text">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
          </p>
        </div>
        <div class="btn-container is-sp">
          <a href="#" class="btn btn-small">もっと見る</a>
        </div>
      </div>
  </section>
  <!-- /.comments -->
  <div class="inner">
    <div class="comments-list">
    <?php
    $comments = SCF::get('comments', 70);
    foreach ($comments as $fields ) {
    ?>
      <div class="comments-list-item wow fadeIn">
        <p class="commenter-name"><?php echo $fields['comment_name']; ?></p>
        <p class="commenter-job"><?php echo $fields['comment_title']; ?></p>
        <p class="comment-text">
          <?php echo $fields['comment_text']; ?>
        </p>
      </div>
    <?php }; ?>
    </div>
  </div>

<?php get_footer(); ?>