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
        <div class="page_title">
          <div class="page_title_content">
            <h1>
              「おうちで透析」の記事
            </h1>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="在宅腹膜透析実施病院リスト">
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
              <div class="category" >
                <div class="category_top pink">
                  <div class="category_title">
                    <h3>腹膜透析Q&A</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="article pink_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="article pink_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="article pink_border">
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

              <div class="category" >
                <div class="category_top">
                  <div class="category_title">
                    <h3>患者さんの事例</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="article">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="article">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="article">
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

              <div class="category" >
                <div class="category_top green">
                  <div class="category_title">
                    <h3>動画で学ぶ腹膜透析</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="article green_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="article green_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="article green_border">
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
            

              <div class="category" >
                <div class="category_top blue">
                  <div class="category_title">
                    <h3>用語集</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
                  <div class="article blue_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入りますここにテキストが入ります</p>
                  </div>
                  <div class="article blue_border">
                    <time datetime="2020-07-29T10:00">2020.07.29</time>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="体温計">
                    <p>ここにテキストが入ります</p>
                  </div>
                  <div class="article blue_border">
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


<style>
  .by_category{
    color: #fff;
    padding: 50px 0;
    font-weight: bold;
    letter-spacing: 0.2em;
    cursor: pointer;
  }
  .by_category h2{
    background: #FF6A29;
    padding: 20px 30px;
  }
  .by_category:hover{
    opacity: 0.8;
  }

  .fa-chevron-circle-down{
    margin-left: 75%;
    font-size: 20px;
  }

  /* メインコンテンツ */

  .category_top{
    background: #FFA42C;
    display: flex;
    color: #fff;
    letter-spacing: 0.2em;
    padding: 5px;
    font-weight: bold;
    height: 180px;
  }
  .category_title{
    width: 50%;
    padding: 70px 20px;
  }
  .category_title h3{
    border-bottom: solid 2px #fff;
    padding-bottom: 10px;
    font-size: 18px;
  }
  .category_title p{
    margin-top: 10px;
    font-size: 14px;
  }

  .category_top img{
    width: 50%;
    object-fit: cover;
  }

  .category_articles{
    display: flex;
    justify-content: space-between;
  }

  .article{
    height: 180px;
    width : 250px;
    margin: 30px 0;
    border: solid 3px #FFA42C;
    position: relative;
  }

  time{
    position: absolute;/*絶対配置*/
    color: white;/*文字は白に*/
    top: 0;
    left: 0;
    background: #FFA42C;
    padding: 5px 10px;
    font-size: 14px;
    letter-spacing: 0.1em;
  }
  .article img{
    height: 120px;
    width: 244px;
    object-fit: cover;
  }
  .article p{
    height: 60px;
    padding: 10px 15px;
  }

  .more_btn{
    text-align: center;
    color: #fff;
    background: #FFA42C;
    margin-left: 67%;
    margin-bottom: 100px;
    padding: 20px 30px;
    display: flex;
  }
  .more_btn:hover{opacity: 0.8;}
  .more_btn a{
    padding: 0 25%;
    color: #fff;
    text-decoration: none;
  }
  .fa-angle-right{
    color: #fff;
  }

  /* 記事カラー */
  .pink,
  .pink_border time{background: #f44078;}
  .pink_border{border: solid 3px #f44078;}

  .green,
  .green_border time{background: #33d3a9;}
  .green_border{border: solid 3px #33d3a9;}

  .blue,
  .blue_border time{background: #1eafd1;}
  .blue_border{border: solid 3px #1eafd1;}




  /* ドロップダウン */

  #js-dropdown-menu{
    margin: auto;
    overflow: hidden;
    width: 100%;
    display: none;
  }
