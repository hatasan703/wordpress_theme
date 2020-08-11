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
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="container">
      <div class="article_wrap1">
        <div class="main_title pc">
          <p><span>おうちで透析は</span></p>
          <p><span>透析に通うのがつらくなってきたあなたのために</span></p>
          <p><span>「腹膜透析」の選択肢について情報提供をするサイトです。</span></p>
        </div>
        <div class="main_title sp">
          <p>
            <span>
              おうちで透析は
              透析に通うのがつらくなってきたあなたのために
              「腹膜透析」の選択肢について情報提供をするサイトです。
            </span>
          </p>
        </div>
        <div class="topic1">
          <span class="topic_title">透析に通うのがつらいと思ったら</span>
          <div class="topic_content">
            <img src="<?php echo get_template_directory_uri(); ?>/img/52.png" alt="車椅子">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/51.png" alt="握手">
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
          
          <div class="articles_wrap">
            <div class="articles">
              <div class="new">
                <span class="new_btn pc">カテゴリ</span>
                <span class="sp">記事カテゴリ</span>
              </div>
              <div class="article_list">
                <a href="<?php echo home_url(); ?>/qa" class="category_link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/qa.png" alt="イメージ">
                </a>
                <a href="<?php echo home_url(); ?>/patient-case" class="category_link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/case.png" alt="イメージ">
                </a>
                <a href="<?php echo home_url(); ?>/video" class="category_link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/video.png" alt="イメージ">
                </a>
                <a href="<?php echo home_url(); ?>/glossary" class="category_link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/glossary.png" alt="イメージ">
                </a>
              </div>
              <a href="<?php echo home_url(); ?>/category">
                <div class="category_list_btn">
                  カテゴリ別記事一覧
                </div>
              </a>
              </a>
              <div class="new">
                <span class="new_btn">新着記事</span>
              </div>
              <div class="article_list">
                <?php
                  $information= get_posts( array(
                  'posts_per_page' => 5
                  ));
                  if( $information):
                ?>
                <?php
                  foreach( $information as $post ):
                  setup_postdata( $post );
                ?>
                  <a href="<?php the_permalink(); ?>" class="top_article">
                  <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
                  <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
                            <p><?php the_title(); ?></p>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
                <?php else: ?>
                  <p>表示できる情報はありません。</p>
                <?php endif; ?>
                </div>
              <div class="new">
                <span class="new_btn">人気記事</span>
              </div>
              <div class="article_list">
              <?php wpp_get_mostpopular(
                array(
                  'stats_date' => 1,
                  'stats_date_format' => 'Y.m.d',
                  'range' => 'all',
                  'order_by' => 'views',
                  'post_type' => 'post',
                  'limit' => 6,
                  'stats_views' => 1,
                  'thumbnail_width' =>244,
                  'thumbnail_height' => 90,
                  'wpp_start' => '<ul class="blog_list">',
                  'wpp_end' => '</ul>',
                  'post_html' => 
                  '<li class="top_article">{thumb}
                  <time>{date}</time>
                  <p>{title}</p>
                  </li>'
                )
              );
              ?>
              </div>
            </div>

            <!-- <div class="sidebar">
              <div class="sidebar_content">
                <div class="new_article">■新着・人気の記事</div>
                  <p><a href="">新着記事</a></p>
                  <p><a href="">人気の記事</a></p>
                <div class="category">■カテゴリ</div>
                  <p><a href="<?php echo home_url(); ?>/qa">腹膜透析Q&A</a></p>
                  <p><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></p>
                  <p><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></p>
                  <p><a href="<?php echo home_url(); ?>/glossary">用語集</a></p>
              </div>
            </div> -->

          </div>        
        </div>
      </div>
    </div>

    <!-- <div class="container"> -->
      <div class="article_wrap1">
        <div class="sns_link">
          <a href="<?php echo home_url(); ?>/about" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></a>
          <a href="<?php echo home_url(); ?>/about" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter"></a>
          <a href="<?php echo home_url(); ?>/about" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube"></a>
        </div>
      </div>
    <!-- </div> -->

    <div class="container">
      <div class="article_wrap3">
        <div class="others_link">
          <a href="<?php echo home_url(); ?>/about" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/20.png" alt="「おうちで透析」について"></a>
          <a href="<?php echo home_url(); ?>/medical-info" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/21.png" alt="医療関係者の方へ"></a>
          <a href="<?php echo home_url(); ?>/hospital-list" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/22.png" alt="在宅腹膜透析実施病院リスト"></a>
        </div>
        <div class="site_map pc">
          <div class="first_user">
            <li class="first_user_title">■はじめての方へ</li>
            <ul class="detail_lists">
              <li><a href="<?php echo home_url(); ?>/kayou">透析に通うのがつらいと思ったら</a></li>
              <li><a href="<?php echo home_url(); ?>/at-home">おうちでできる腹膜透析</a></li>
              <li><a href="<?php echo home_url(); ?>/basic-knowledge">腹膜透析の基礎知識</a></li>
            </ul>
          </div>
          <div class="detail">
            <li class="detail_title">■もっと詳しく知る</li>
            <ul class="detail_lists">
              <li><a href="<?php echo home_url(); ?>/about">「おうちで透析」について</a></li>
              <li><a href="<?php echo home_url(); ?>/medical-info">医療関係者の方へ</a></li>
              <li><a href="<?php echo home_url(); ?>/hospital-list">在宅腹膜透析実施病院リスト</a></li>
            </ul>
          </div>
          <div class="article_category">
            <li class="category_title">■記事カテゴリ</li>
            <ul class="detail_lists">
              <li><a href="<?php echo home_url(); ?>/qa">腹膜透析Q&A</a></li>
              <li><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></li>
              <li><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></li>
              <li><a href="<?php echo home_url(); ?>/glossary">用語集</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </main>

</body>

<?php get_footer(); ?>