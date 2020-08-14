<?php get_header(); ?>
<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        <div class="page_title_border"></div>
        <h1>
          <span><?php the_title(); ?></span>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
      <div class="page_title_content">
        <h1>
        <?php the_title(); ?>
        </h1>
      </div>
    </div>
    <div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
          <div class="change_size_container">
            <div class="change_font_size">
              <p class="change_text">文字サイズ</p>
              <p class="size-button small" data-font="12">小</p>
              <p class="size-button midium active" data-font="16">中</p>
              <p class="size-button large" data-font="20">大</p>
            </div>
          </div>

          <div class="article_wrap1">
				<ul class="tag_list">
          <?php $postcat = get_the_category();
            if ($postcat) {
              foreach($postcat as $cat) {
              echo '<li class="tag"><a href="/' .$cat->name. '">#' . $cat->name . '</a></li>';}
              }
            ?>
          <?php $posttags = get_the_tags();
            if ($posttags) {
              foreach($posttags as $tag) {
              echo '<li class="tag"><a href="/' .$tag->name. '">#' . $tag->name . '</a></li>';}
              }
          ?>
		    </ul>
	            <div class="indi_article_title" id="top">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="posting_time">
              <time datetime="<?php the_time('Y.n.j'); ?>">
                <?php the_time('Y.n.j'); ?>
              </time>
            </div>

            <!-- 本文 -->
            <?php echo do_shortcode('[addtoany]'); ?>
            <div class="site_info_cotent">

              <!-- <h3>
                <span>「おうちで透析」を可能にするために</span>
              </h3>
              <p>
                「おうちで透析」は、自宅や職場、出張先、旅行先など「生活の場」で行うことのできる「透析治療」について、情報提供を行うサイトです。<br><br>
                わが国の透析治療を行う場所は、97％が医療機関で、在宅での治療はわずか３％にすぎません。先進諸国に比べても、在宅で透析を行う比率は極端に少ない現状があります。しかし何らかの事情で医療機関に通うことが負担になる場合、おうちで透析を行うことができたら負担が軽くなる、生活上の選択肢が増えるというケースもあります。そんな患者さんやご家族のために、おうちで透析が可能になる腹膜透析という手法について情報を提供していきます。
              </p>
              <img class="alignnone  wp-image-106 info_img" src="http://dev.local/wp-content/uploads/2020/08/48.png" alt="車椅子"> -->

              <?php the_content(); ?>
            </div>

            <div class="related_article">関連記事</div>
			          <div class="category_articles">
                  <?php
                  $categories = wp_get_post_categories($post->ID, array('orderby'=>'rand')); // 複数カテゴリーを持つ場合ランダムで取得
                  if ($categories) {
                    $args = array(
                      'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
                      'post__not_in' => array($post->ID), // 表示している記事を除く
                      'showposts'=>3, // 取得記事数
                      'ignore_sticky_posts'=>1, // 取得した記事の何番目から表示するか
                      'orderby'=> 'DESC', // 記事をランダムで取得
                      'cat' => -2,
                    ); 
                    $my_query = new WP_Query($args); 
                    if( $my_query->have_posts() ) { ?>
                  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                              <div class="category_article">
                                <?php get_template_part( 'template-parts/post/content', 'excerpt' ); ?>
                                <a href="<?php the_permalink() ?>" target="_self">
                                    <time><?php the_modified_time('Y年n月j日'); ?></time>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <p><a href="<?php the_permalink() ?>" class="wpp-post-title" target="_self"><?php the_title(); ?></a></p>
                              </div>
                  <?php endwhile; } wp_reset_query(); } ?>
			          </div>

			  
             <!-- 固定-->
             <div class="sidebar fixed pc">
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
            </div>
            <button class="fixed_btn">
              <a href="#top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/back_btn.png" alt="topへ戻る">
              </a>
            </button>
            <!-- -------- -->

          </div>
        </div>

      

      <?php endwhile; else : ?>
        <p>まだ記事がありません</p>
      <?php endif; ?>
    </div>
  </article>
</main>

<?php get_footer(); ?>



<style>
  .tag_list{
    display: flex;
  }
  .tag_list .tag{
    background-color: #f44078;
    border-radius: 50px;
    padding: 0 15px;
    color: #fff;
    font-size: 12px;
    margin: 0 10px 10px 0;
    letter-spacing: 0.1em;
  }
  .tag_list .tag a{
    color: #fff;
    text-decoration: none;
  }

  .posting_time{
    text-align: right;
    color: #FF6A29;
    letter-spacing: 0.2em;
    margin-top: 10px;
  }
  .fixed_btn{
    right: -98px;
    bottom: 10px;
    z-index: 1;
  }
  .fixed_btn:hover{
    z-index: 1;
  }
  .indi_article_title{
    text-align: left;
    border: 3px solid #FF6A29;
    padding: 25px 10px;
    letter-spacing: 0.1em;
  }
  .container .article_wrap1{
    margin-top: 0;
  }

  .site_info_cotent img{
    width: 70%;
    height: 70%;
    margin: 30px 0 70px;
  }
  .site_info_cotent p img{
    width: 70%;
    height: 70%;
    margin: 0px 0 70px;
  }

  .site_info_cotent{
    text-align: center;
  }

  .site_info_cotent p{
    margin: 40px 0;
    text-align: left;
    text-align: justify;
    letter-spacing: 0.15em;
  }

  .site_info_cotent h3{
    text-align: left;
  }
  .site_info_cotent h3 span{
    border-bottom: 2px solid #FF6A29;
    padding: 10px;
  }

  .site_info_cotent li p{
    margin: 40px 0 70px;
  }

  .related_article{
    border-bottom: 2px solid #FF6A29;
    padding: 10px;
    width: 80%;
    font-size: 18px;
    margin-top: 100px;
    letter-spacing: 0.15em;
  }

  @media screen and (max-width: 640px) {


    .container .article_wrap1{
      padding: 20px 5% 40px;
      background: #fff;
      line-height: 30px;
      margin-top: 0;
    }

    .related_article{
      width: 100%;
      text-align: left;
    }

    .breadcrumbs {
      line-height: 1.3;
    }
  }
</style>