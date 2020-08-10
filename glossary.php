<?php
/*
 * Template Name: 用語集
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
          <a href="<?php echo home_url(); ?>/category" class="back_btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            ひとつ戻る
          </a>
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