<?php get_header(); ?>

  <div class="top">
    <div class="top-container">
      <h1 class="top-container-img-wrap">
        <img src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/title.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
      </h1>
      <div class="top-container-body">
        <div class="top-container-body-left">
          <div class="top-container-left-date">
            <img src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/schedule.png" alt="2020年7月4日〜7日 なかのZERO大ホール">
          </div>
        </div>
        <div class="top-container-body-right">
          <p class="top-container-right-text">
            小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
          </p>
        </div>
      </div>
    </div>
    <div class="btn-container">
      <a href="/reserv" class="btn btn-large">チケット予約サイトへ</a>
    </div>
  </div>
  <!-- /.top -->

  <section class="introduction">
    <div class="inner wow fadeIn">
      <div class="introduction-container">
        <h2 class="section-title">INTRODUCTION</h2>
        <h3 class="section-subtitle">なぜ今「マハーバーラタ」なのか？</h3>
        <div class="introduction-text-container">
          <div class="introduction-text-container-left">
            <p class="introduction-text">
              「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
            </p>
          </div>
          <div class="introduction-text-container-right">
            <p class="introduction-text">
              現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.introduction -->
  

  <section class="news wow fadeIn">
    <h2 class="section-title">NEWS</h2>
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
      <a href="/news" class="btn btn-small">ニュース一覧へ</a>
    </div>
  </section>
  <!-- /.news -->

  <section class="story">
    <div class="inner wow fadeIn">
      <h2 class="section-title">STORY</h2>
      <div class="story-container">
        <div class="story-container-right">
          <p class="story-container-right-text">
            マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。
          </p>
          <p class="story-container-right-text">
            世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
          </p>
          <p class="story-container-right-text">
            インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。
          </p>
          <p class="story-container-right-text">
            日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。
          </p>
        </div>
      </div>
      <div class="btn-container">
        <a href="/story" class="btn btn-small">もっと詳しく</a>
      </div>
    </div>
  </section>
  <!-- /.story -->

  <section class="comments wow fadeIn">
    <h2 class="section-title">COMMENTS</h2>
    <p class="comments-text">舞台関係者のみならず各界著名人からコメントが届いています！</p>
    <div class="inner">
      <div class="comments-sp-img-container">
        <img class="is-sp" src="<?php echo get_template_directory_uri() ?>/Mahabarata/img/comments-bg.png" alt="">
      </div>
      <div class="comments-container">
        <div class="comments-container-head">
          <p class="comments-container-head-title">京都佛立ミュージアム館長<br class="is-sp"><span>長松清潤</span></p>
        </div>
        <div class="comments-container-body">
          <p class="comments-container-body-text">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
          </p>
        </div>
        <div class="btn-container is-sp">
          <a href="/comments" class="btn btn-small">もっと見る</a>
        </div>
      </div>
      <div class="btn-container is-pc">
        <a href="/comments" class="btn btn-small">もっと見る</a>
      </div>
    </div>
  </section>
  <!-- /.comments -->

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
      <div class="btn-container">
        <a href="/cast" class="btn btn-small">もっと見る</a>
      </div>
    </div>
  </section>
  <!-- /.cast -->

<?php get_footer(); ?>