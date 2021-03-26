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

  <section class="cast">
    <div class="inner wow fadeIn">
      <h2 class="section-title">CAST</h2>
      <div class="cast-container">
      <?php 
        $group = SCF::get('cast', 66);
        foreach ($group as $fields ) {
          $img = wp_get_attachment_image_src($fields['cast_img'], 'large');
      ?>
        <div class="cast-container-contents">
          <div class="cast-container-img">
            <img src="<?php echo $img[0]; ?>" alt="顔写真">
          </div>
          <div class="cast-container-int">
            <p class="cast-container-int-text"><?php echo $fields['cast_country']; ?></p>
            <p class="cast-container-int-name"><?php echo $fields['cast_name']; ?></p>
            <p class="cast-container-int-text"><?php echo $fields['cast_title']; ?></p>
          </div>
          <div class="cast-container-footer">
            <p class="cast-container-footer-text">
              <?php echo $fields['cast_introduction']; ?>
            </p>
          </div>
        </div>
        <?php }; ?>
      </div>
    </div>
  </section>
  <!-- /.cast -->

  <div class="cast-list1">
    <div class="cast-list1-container">
      <?php 
        $group = SCF::get('cast_list', 66);
        foreach ($group as $fields ) {
          $img = wp_get_attachment_image_src($fields['cast_list_img'], 'large');
      ?>
      <div class="cast-list1-item wow fadeIn">
        <div class="cast-face">
          <img src="<?php echo $img[0]; ?>" alt="cast-face">
        </div>
        <div class="cast-contents-container">
          <div class="cast-contents-head">
            <p class="cast-job"><?php echo $fields['cast_list_country']; ?></p>
            <p class="cast-name"><?php echo $fields['cast_list_name']; ?></p>
            <p class="cast-position"><?php echo $fields['cast_list_title']; ?></p>
          </div>
          <div class="cast-contents-body">
            <p class="cast-text">
              <?php echo $fields['cast_list_introduction']; ?>
            </p>
          </div>
        </div>
      </div>
      <?php }; ?>
    </div>
  </div>
  <!-- /.cast-list1 -->

  <div class="cast-list1 cast-list2">
  <h2 class="section-title cast-list-title">MUSICIAN</h2>
    <div class="cast-list1-container">
      <?php 
        $group = SCF::get('musician', 66);
        foreach ($group as $fields ) {
          $img = wp_get_attachment_image_src($fields['musician_img'], 'large');
      ?>
      <div class="cast-list1-item wow fadeIn">
        <div class="cast-face">
          <img src="<?php echo $img[0]; ?>" alt="musician-face">
        </div>
        <div class="cast-contents-container">
          <div class="cast-contents-head">
            <p class="cast-job"><?php echo $fields['musician_country']; ?></p>
            <p class="cast-name"><?php echo $fields['musician_name']; ?></p>
            <p class="cast-position"><?php echo $fields['musician_title']; ?></p>
          </div>
          <div class="cast-contents-body">
            <p class="cast-text">
              <?php echo $fields['musician_introduction']; ?>
            </p>
          </div>
        </div>
      </div>
      <?php }; ?>
    </div>
  </div>
  <!-- /.musician -->

  <div class="cast-list staff-list">
  <h2 class="section-title cast-list-title">STAFF</h2>
    <div class="cast-list1-container">
      <?php 
        $group = SCF::get('staff', 66);
        foreach ($group as $fields ) {
          $img = wp_get_attachment_image_src($fields['staff_img'], 'large');
      ?>
      <div class="cast-list1-item wow fadeIn">
        <div class="cast-face">
          <img src="<?php echo $img[0]; ?>" alt="cast-face">
        </div>
        <div class="cast-contents-container">
          <div class="cast-contents-head">
            <p class="cast-job"><?php echo $fields['staff_country']; ?></p>
            <p class="cast-name"><?php echo $fields['staff_name']; ?></p>
            <p class="cast-position"><?php echo $fields['staff_title']; ?></p>
          </div>
          <div class="cast-contents-body">
            <p class="cast-text">
              <?php echo $fields['staff_introduction']; ?>
            </p>
          </div>
        </div>
      </div>
      <?php }; ?>
    </div>
  </div>
  <!-- /.staff -->

<?php get_footer(); ?>