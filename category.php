<?php
/*
 * Template Name: カテゴリ一覧
 */
?>

<?php get_header(); ?>

<main>
  <article>
    <div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="page_title pc">
          <div class="page_title_content">
            <h1>
              「おうちで透析」の記事
            </h1>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="在宅腹膜透析実施病院リスト">
        </div>
        <div class="page_title sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="在宅腹膜透析実施病院リスト">
          <div class="page_title_content">
            <h1>
              「おうちで透析」の記事
            </h1>
          </div>
        </div>
        
        <div class="container">
          <div class="article_wrap1">
            <div class="by_category" id="js-dropdown">
              <h2>
                カテゴリ別記事
                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
              </h2>
            </div>
            <div id="js-dropdown-menu">
              <!-- 腹膜透析QAーーーーーーーー -->
              <div class="category">
                <div class="category_top pink">
                  <div class="category_page_title">
                    <h3>腹膜透析Q&A</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="category_article pink_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="category_article pink_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="category_article pink_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                </div>
                <div class="more_btn pink">
                  <a href="<?php echo home_url(); ?>/qa">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>

              <!-- 患者さんの事例ーーーーーーーー -->
              <div class="category" >
                <div class="category_top">
                  <div class="category_page_title">
                    <h3>患者さんの事例</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="category_article">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="category_article">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="category_article">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                </div>
                <div class="more_btn">
                  <a href="<?php echo home_url(); ?>/patient-case">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>

              <!-- 動画で学ぶ腹膜透析ーーーーーーーー -->
              <div class="category" >
                <div class="category_top green">
                  <div class="category_page_title">
                    <h3>動画で学ぶ腹膜透析</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="category_article green_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="category_article green_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="category_article green_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                </div>
                <div class="more_btn green">
                  <a href="<?php echo home_url(); ?>/video">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>


              <!-- 用語集ーーーーーーーーーーーーー -->
              <div class="category" >
                <div class="category_top blue">
                  <div class="category_page_title">
                    <h3>用語集</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="category_article blue_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="category_article blue_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="category_article blue_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                </div>
                <div class="more_btn blue">
                  <a href="<?php echo home_url(); ?>/glossary">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p>まだ記事がありません</p>
      <?php endif; ?>
    </div>
  </article>
</main>



<?php get_footer(); ?>
