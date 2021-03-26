<?php get_header(); ?>
        <?php
        $group = SCF::get('story', 74);
          $img1 = get_post_meta($post->ID, 'story_img1', true);
          $img2 = get_post_meta($post->ID, 'story_img2', true);
          $img3 = get_post_meta($post->ID, 'story_img3', true);
          $img4 = get_post_meta($post->ID, 'story_img4', true);
          foreach ($group as $fields ) {
          }
        ?>  

  <div class="story story-child-top" style="background-image: url('<?php echo wp_get_attachment_url($img1); ?>')">
    <div class="top-child">
      <div class="top-child-story-inner">
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
  
    <div class="breadcrumb white">
      <div class="inner">
      <?php
      if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
      }
      ?>
      </div>
    </div>
    <!-- /.breadcrumb -->

    <section class="story-child wow fadeIn">
      <h2 class="section-title">STORY</h2>
      <div class="section-contents">
        <div class="section-left">
          <h3 class="section-title"><?php echo $fields['story_title']; ?></h3>
        </div>
        <div class="section-right">
          <p class="section-text">
            <?php echo $fields['story_introduction1']; ?>
          </p>
        </div>
      </div>
    </section>
    <!-- /.story-child -->
  </div>
  <!-- /.story -->

  <section class="story-section2" style="background-image: url('<?php echo wp_get_attachment_url($img2); ?>')">
    <div class="inner wow fadeIn">
      <div class="story-text-container-left">
        <p class="story-text">
          <?php echo $fields['story_introduction2']; ?>
        </p>
      </div>
    </section>
    </div>
  <!-- /.story-section2 -->

  <section class="story-section3" style="background-image: url('<?php echo wp_get_attachment_url($img3); ?>')">
    <div class="inner wow fadeIn">
      <div class="story-text-container-right">
        <p class="story-text">
          <?php echo $fields['story_introduction3']; ?>
        </p>
      </div>
    </div>
  </section>
  <!-- /.story-section3 -->

  <section class="story-section4" style="background-image: url('<?php echo wp_get_attachment_url($img4); ?>')">
    <div class="inner wow fadeIn">
      <div class="story-text-container-left">
        <p class="story-text">
          <?php echo $fields['story_introduction4']; ?>
        </p>
      </div>
    </div>
  </section>
  <!-- /.story-section4 -->

<?php get_footer(); ?>