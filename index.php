<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo get_template_directory_uri(); ?>/ress.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>"
    rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php wp_title( ' | ', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <?php wp_head(); ?>
</head>
  
<?php get_header(); ?>
<body>

  <!-- main contents -->
  <main class="main">
    <div class="containerr">
      <section>
        <h2 class="top_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/27.png" alt="トップ画像">
            <p class="fade_title animation1">もう病院に通えない。</p>
            <p class="fade_title animation2">どうすればいい？</p>
            <p class="fade_title animation3">
              ・・・　・・<br>
              おうちで透析という選択肢
            </p>
        </h2>
      </section>
    </div>

    <div class="container">
      <div class="article_wrap1">
        <div class="main_title">
          <p><span>おうちで透析は</span></p>
          <p><span>透析に通うのがつらくなってきたあなたのために</span></p>
          <p><span>「腹膜透析」の選択肢について情報提供をするサイトです。</span></p>
        </div>
        <div class="topic1">
          <span class="topic_title">透析に通うのがつらいと思ったら</span>
          <div class="topic_content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="車椅子">
            <p>「週３回、人工透析に通うのがつらくなってきた。
              ４時間もじっと座り続けているとからだに負担がかかる。
              針が入りにくくなってきた・・・。」<br>
              そんな実感のあるあなたに、おうちで透析ができる腹膜透析の選択肢を。
              <!-- 文字揃え -->
            </p>
          </div>
          <div class="detail_btn">
            <a href="<?php echo home_url(); ?>/kayou">
              詳しくはこちら
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="topic2">
          <span class="topic_title">おうちでできる腹膜透析</span>
          <div class="topic_content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="握手">
            <p>
              腹膜透析はおうちでできる透析です。<br>
              お腹の中にある「腹膜」の性質を利用して血液中の老廃物や余計な水分をとります。
              血液透析のように大きな機会が必要ないため、自宅で患者さんやご家族の手で行える利点があります。
            </p>
          </div>
          <div class="detail_btn">
            <a href="<?php echo home_url(); ?>/at-home">
              詳しくはこちら
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="topic3">
          <span class="topic_title">腹膜透析の基礎知識</span>
          <div class="topic_content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="病床">
            <p>
              腹膜透析の基本的なやり方や必要な器材、原理などを説明します。<br>
              血液透析とくらべて患者さんやご家族の負担のあり方が違ってきますので、
              １日のスケジュールや病院・地域医療との付き合い方などについても整理します。
            </p>
          </div>
          <div class="detail_btn">
            <a href="<?php echo home_url(); ?>/basic-knowledge">
              詳しくはこちら
              <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="white_wrap">
      <div class="container">
        <div class="article_wrap2">
          <span class="topic_title">「おうちで透析」の記事</span>
          <div class="new">
            <span class="new_btn">NEW</span>
          </div>
          <div class="articles_wrap">
            <div class="articles">
              <a href="<?php echo home_url(); ?>/" class="article">
                <time datetime="2020-07-29T10:00">2020.07.29</time>
                <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="イメージ">
                <p>ここにテキストが入ります。</p>
              </a>
              <a href="<?php echo home_url(); ?>/" class="article">
                <time datetime="2020-07-29T10:00">2020.07.29</time>
                <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="イメージ">
                <p>ここにテキストが入ります。</p>
              </a>
              <a href="<?php echo home_url(); ?>/" class="article">
                <time datetime="2020-07-29T10:00">2020.07.29</time>
                <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="イメージ">
                <p>ここにテキストが入ります。</p>
              </a>
              <a href="<?php echo home_url(); ?>/" class="article">
                <time datetime="2020-07-29T10:00">2020.07.29</time>
                <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="イメージ">
                <p>ここにテキストが入ります。</p>
              </a>
            </div>
            <div class="sidebar">
              <div class="sidebar_content">
                <div class="new_article">■新着・人気の記事</div>
                  <p><a href="">新着記事</a></p>
                  <p><a href="">人気の記事</a></p>
                <div class="category">■カテゴリ</div>
                  <p><a href="<?php echo home_url(); ?>/fukumaku_qa">腹膜透析Q&A</a></p>
                  <p><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></p>
                  <p><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></p>
                  <p><a href="<?php echo home_url(); ?>/glossary">用語集</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="article_wrap3">
        <div class="others_link">
          <a href="<?php echo home_url(); ?>/about" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/20.png" alt="「おうちで透析」について"></a>
          <a href="<?php echo home_url(); ?>/medical-info" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/21.png" alt="医療関係者の方へ"></a>
          <a href="<?php echo home_url(); ?>/hospital-list" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/22.png" alt="在宅腹膜透析実施病院リスト"></a>
        </div>
        <div class="site_map">
          <div class="first_user">
            <li class="first_user_title">■はじめての方へ</li>

            <li><a href="<?php echo home_url(); ?>/kayou">透析に通うのがつらいと思ったら</a></li>
            <li><a href="<?php echo home_url(); ?>/at-home">おうちでできる腹膜透析</a></li>
            <li><a href="<?php echo home_url(); ?>/basic-knowledge">腹膜透析の基礎知識</a></li>
          </div>
          <div class="detail">
            <li class="detail_title">■もっと詳しく知る</li>
            <li><a href="<?php echo home_url(); ?>/about">「おうちで透析」について</a></li>
            <li><a href="<?php echo home_url(); ?>/medical-info">医療関係者の方へ</a></li>
            <li><a href="<?php echo home_url(); ?>/hospital-list">在宅腹膜透析実施病院リスト</a></li>
          </div>
          <div class="article_category">
            <li class="category_title">■記事カテゴリ</li>
            <li><a href="<?php echo home_url(); ?>/hukumaku-qa">腹膜透析Q&A</a></li>
            <li><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></li>
            <li><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></li>
            <li><a href="<?php echo home_url(); ?>/glossary">用語集</a></li>
          </div>
        </div>
      </div>
    </div>


  </main>

</body>

<?php get_footer(); ?>