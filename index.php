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
  <main class="main" id="topp">
      <section>
        <h2 class="top_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/27.png" alt="トップ画像">
            <p class="fade_title animation1">もう病院に通えない。</p>
            <p class="fade_title animation2">どうすればいい？</p>
            <p class="fade_title animation3 pc">
              ・・・　・・<br>
              おうちで透析という選択肢
            </p>
            <p class="fade_title animation3 sp">
              ・・・　・・　　　　　　<br>
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
          <span class="topic_title pc">おうちでできる腹膜透析</span>
          <p class="topic_title sp">おうちでできる腹膜透析</p>
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
          <span class="topic_title pc">腹膜透析の基礎知識</span>
          <p class="topic_title sp">腹膜透析の基礎知識</p>
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
          <span class="topic_title pc">「おうちで透析」の記事</span>
          <p class="topic_title sp">「おうちで透析」の記事</p>
          
          <div class="articles_wrap">
            <div class="articles">
              <!-- <div class="new margin"> -->
                <!-- <span class="new_btn pc">カテゴリ</span> -->
                <span class="sp">記事カテゴリ</span>
              <!-- </div> -->
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
                <span class="topic_title pc">新着記事</span>
                <p class="topic_title sp">新着記事</p>
              </div>
              <div class="article_list">
                <!-- <?php
                  $information= get_posts( array(
                  'posts_per_page' => 6,
                  'category' => -2,
                  ));
                  if( $information):
                ?>
                <?php
                  foreach( $information as $post ):
                  setup_postdata( $post );
                ?>
                  <a href="<?php the_permalink(); ?>" class="top_article">
                  <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
					    <?php the_post_thumbnail('thumbnail'); ?>
					      <p><?php echo wp_trim_words( get_the_title(), 20 , '…' ); ?></p></a>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
                <?php else: ?>
                  <p>表示できる情報はありません。</p>
                <?php endif; ?>
               -->
          <!-- 仮で固定ページを置いてます---------------------------- -->
               <a href="/kayou" class="top_article">
                  <time datetime="">2020.9.1</time>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="">
                <p>透析に通うのがつらい</p>
              </a>
              <a href="/at-home" class="top_article">
                  <time datetime="">2020.9.1</time>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/52.png" alt="">
                <p>おうちでできる腹膜透析</p>
              </a>
              <a href="basic-knowlege" class="top_article">
                  <time datetime="">2020.9.1</time>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/42.png" alt="">
                <p>腹膜透析の基礎知識</p>
              </a>
          <!-- ーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

              </div>
              
              <div class="new">
                <span class="topic_title pc">人気記事</span>
                <p class="topic_title sp">人気記事</p>
              </div>
			                <div class="article_list">

                          <!-- <?php
                          $args = array(/* 配列に複数の引数を追加 */
                            'cat' => '-2',
                              'order' => 'DESC', /* 並び替えの順番 ASC：昇順、DESC：降順 */
                              'orderby' => 'meta_value_num',  /*カスタムフィールドの内容を数値として扱う */
                              'meta_key' => 'views',  /*カスタムフィールド名 */
                              'post_type' => 'post',   //投稿（ポスト）タイプ
                              'meta_value' => '1',  //カウント条件
                            'posts_per_page' => 6, /* 表示するページ数 */
                              'meta_compare' => '>=',
                          ); ?>
                          <?php query_posts( $args ); ?>
                          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                            <a href="<?php the_permalink(); ?>" class="top_article">
                                            <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                      <p><?php echo wp_trim_words( get_the_title(), 20 , '…' ); ?></p></a>
                          <?php endwhile; else: ?>
                          <p><?php _e('ありませんでした。'); ?></p>
                                  <?php endif; ?> -->


                                  <!-- 仮で固定ページを置いてます---------------------------- -->
                                    <a href="/kayou" class="top_article">
                                        <time datetime="">2020.9.1</time>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="">
                                      <p>透析に通うのがつらい</p>
                                    </a>
                                    <a href="/at-home" class="top_article">
                                        <time datetime="">2020.9.1</time>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/52.png" alt="">
                                      <p>おうちでできる腹膜透析</p>
                                    </a>
                                    <a href="basic-knowlege" class="top_article">
                                        <time datetime="">2020.9.1</time>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/42.png" alt="">
                                      <p>腹膜透析の基礎知識</p>
                                    </a>
                                <!-- ーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
                      </div>
              </div>

          </div>        
        </div>
      </div>
    </div>

  </main>

</body>

<?php get_footer(); ?>


<style>

.container .article_wrap1 {
  padding: 105px 10% 40px;
  margin: -2px 0 105px;
  line-height: 1;
}

.article_wrap2{
  padding-top: 120px;
  padding-bottom: 105px;
}


.sns_wrap{
  background: #fff;
  padding: 105px 0;
  margin-top: 0px;
}

.article_list{
  margin-top: 40px;
}

.container .article_wrap3{
  /* margin-bottom: 25px; */
}


@media screen and (max-width: 640px) {

  .article_wrap2{
    padding-top: 5px;
  }

  .container .article_wrap3{
    margin-bottom: 0;
  }
  .site_map{
    margin-bottom: 100px;
  }

  .container .article_wrap1 {
    padding: 80px 7%;
  }
}
</style>