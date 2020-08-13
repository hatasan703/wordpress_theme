<?php
/*
 * Template Name: サイトマップ
 */
?>

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
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
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
          <div class="site_info_title">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="site_info_cotent">
            <div class="top_page_link">
              <a href="<?php echo home_url(); ?>/home">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="腹膜透析">
                <p>TOPページ</p>
              </a>
            </div>
            <div class="sitemap_link">
              <li>■初めての方へ
                <p><a href="<?php echo home_url(); ?>/kayou">透析に通うのつらいと思ったら</a></p>
                <p><a href="<?php echo home_url(); ?>/at-home">おうちでできる腹膜透析</a></p>
                <p><a href="<?php echo home_url(); ?>/basic-knowledge">腹膜透析の基礎知識</a></p>
              </li>
              <li class="center">■もっと詳しく知る
                <p><a href="<?php echo home_url(); ?>/about">「おうちで透析」について</a></p>
                <p><a href="<?php echo home_url(); ?>/medical-info">医療関係者の方へ</a></p>
                <p><a href="<?php echo home_url(); ?>/hospital-list">在宅腹膜透析実施病院リスト</a></p>
              </li>
              <li>■記事カテゴリ
                <p><a href="<?php echo home_url(); ?>/qa">腹膜透析Q&A</a></p>
                <p><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></p>
                <p><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></p>
                <p><a href="<?php echo home_url(); ?>/glossary">用語集</a></p>
              </li>
              <li class="center">■サイト情報
                <p><a href="<?php echo home_url(); ?>/terms">利用規約</a></p>
                <p><a href="<?php echo home_url(); ?>/privacy-policy">プライバシーポリシー</a></p>
                <p><a href="<?php echo home_url(); ?>/about-us">運営者情報</a></p>
              </li>
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
  .container .article_wrap1{
    padding: 80px 18%;
    background: #F9F7F4;
  }

  @media screen and (max-width: 640px) {
    .container .article_wrap1 {
      padding: 80px 5%;
    }

    .site_info_title span {
      padding: 15px 20%;
    }

    .sitemap_link{
      display: block;
      text-align: left;
      line-height: 1;
    }
    .sitemap_link li{
      width: 100%;
      font-size: 16px;
      margin: 80px 0 80px 30px;
    }

    .sitemap_link .center{
    text-align: left;
  }
  
    .sitemap_link .center p{
      text-align: left;
      margin-left: 20px;
    }

    .page_title_content h1{
     width: 70%;
    }



  }
</style>