<?php
/*
 * Template Name: 利用規約
 */
?>

<?php get_header(); ?>

<main>
  <article>
    <div class="page_title">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
    </div>
    <div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <div class="article_wrap2">
          <div class="site_info_title">
            <span><?php the_title(); ?></span>
          </div>
          <div class="site_info_cotent">
            <p>
              
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; else : ?>
        <p>まだ記事がありません</p>
      <?php endif; ?>
    </div>

    <div class="container">
      <div class="article_wrap3">
        <div class="site_map">
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
              <li><a href="<?php echo home_url(); ?>/hukumaku-qa">腹膜透析Q&A</a></li>
              <li><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></li>
              <li><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></li>
              <li><a href="<?php echo home_url(); ?>/glossary">用語集</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </article>
</main>

<?php get_footer(); ?>