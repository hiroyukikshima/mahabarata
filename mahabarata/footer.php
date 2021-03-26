  <section class="schedule">
    <div class="inner wow fadeIn">
      <h2 class="section-title">SCHEDULE</h2>
      <div class="schedule-list-container">
      <?php
      $group = SCF::get('repeat_schedule', 2);
      foreach ($group as $fields ) {
      echo '<div class="schedle-list-item-container"><div class="schedle-list-item">'.$fields['repeatschedule1'].'</div><a href="/resev" class="schedle-list-item-link">チケット予約受付中</a></div>';
      echo '<div class="schedle-list-item-container"><div class="schedle-list-item">'.$fields['repeatschedule2'].'</div><a href="/resev" class="schedle-list-item-link">チケット予約受付中</a></div>';
      echo '<div class="schedle-list-item-container"><div class="schedle-list-item">'.$fields['repeatschedule3'].'</div><a href="/resev" class="schedle-list-item-link">チケット予約受付中</a></div>';
      echo '<div class="schedle-list-item-container"><div class="schedle-list-item">'.$fields['repeatschedule4'].'</div><a href="/resev" class="schedle-list-item-link">チケット予約受付中</a></div>';
      echo '<div class="schedle-list-item-container"><div class="schedle-list-item">'.$fields['repeatschedule5'].'</div><a href="/resev" class="schedle-list-item-link">チケット予約受付中</a></div>';
      }
      ?>
      </div>
      <div class="schedule-footer">
        <div class="btn-container">
          <a href="/inquiry" class="btn btn-contact">お問い合わせはこちら</a>
        </div>
        <div class="btn-container">
          <a href="/reserv" class="btn btn-chicket">チケット予約サイトへ</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.schedule -->

<footer class="footer">
      <p class="copyright">Copyright © 2019 完全版マハーバーラタ<br class="is-sp"> All Rights Reserved.</p>
</footer>
<!-- /.footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>