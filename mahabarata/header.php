<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <title>マハーバーラタ</title>
</head>
<body <?php body_class( ['drawer', 'drawer--right'] ); ?>>
  <!-- pc-header -->
  <header class="header">
    <nav class="header-nav is-pc">
      <ul class="header-nav-list">
        <li class="header-nav-list-item">
          <a href="/" class="header-nav-list-item-link">トップ</a>
        </li>
        <li class="header-nav-list-item">
          <a href="/news" class="header-nav-list-item-link">ニュース</a>
        </li>
        <li class="header-nav-list-item">
          <a href="/story" class="header-nav-list-item-link">ストーリー</a>
        </li>
        <li class="header-nav-list-item">
          <a href="/comments" class="header-nav-list-item-link">著名人コメント</a>
        </li>
        <li class="header-nav-list-item">
          <a href="/cast" class="header-nav-list-item-link">キャスト</a>
        </li>
        <li class="header-nav-list-item">
          <a href="/inquiry" class="header-nav-list-item-link">お問い合わせ</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- /.header -->

    <!-- sp-header -->
    <header class="sp-header is-sp" role="banner">
      <h1 class="sp-header-title">完全版マハーバーラタ</h1>
      <!-- ハンバーガーボタン -->
      <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <!-- ナビゲーションの中身 -->
      <nav class="drawer-nav" role="navigation">
        <!-- メニューの読み込み -->
        <?php wp_nav_menu( array( 'theme_location' => 'my-drawer', 'menu_class' => 'drawer-menu', 'container' => false, 'depth' => 1 ) ); ?>
      </nav>
    </header>
    <!-- /.header -->