<?php get_header(); ?>

<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
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

            <div class="tag_list">
              <li class="tag">#腹膜透析Q&A</li>
              <li class="tag">#通院</li>
              <li class="tag">#初心者</li>
            </div>
            <div class="indi_article_title" id="top">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="posting_time">
              <time datetime="<?php the_time('Y.n.j'); ?>">
                <?php the_time('Y.n.j'); ?>
              </time>
            </div>

            <!-- 本文 -->
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
            <a href="#top">
              <button class="fixed_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/back_btn.png" alt="topへ戻る">
              </button>
            </a>
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
  .container .change_size_container {
    padding: 50px 0 10px;
    background: #fff;
  }

  .tag_list{
    display: flex;
  }
  .tag_list .tag{
    background-color: #f44078;
    border-radius: 50px;
    padding: 0 10px;
    color: #fff;
    font-size: 12px;
    letter-spacing: 0.1em;
    margin: 0 10px 10px 0
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
    padding: 25px;
    letter-spacing: 0.15em;
  }
  .container .article_wrap1{
    padding: 0px 15% 80px;
    background: #fff;
    line-height: 30px;
    margin-top: 0;
  }

  .site_info_cotent img{
    width: 70%;
    height: 70%;
    margin: 30px 0 70px;
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

  @media screen and (max-width: 640px) {


    .container .article_wrap1{
      padding: 80px 5%;
      background: #fff;
      line-height: 30px;
      margin-top: 0;
    }
  }
</style>