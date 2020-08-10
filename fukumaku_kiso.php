<?php
/*
 * Template Name: 腹膜透析の基礎知識
 */
?>

<?php get_header(); ?>

<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/35.png" alt="腹膜透析の基礎知識">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/35.png" alt="腹膜透析の基礎知識">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <div class="article_wrap2">
          <div class="main_article_title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/42.png" alt="腹膜透析の基礎知識">
            <h2><?php the_title(); ?></h2>
          </div>
          <a href="#kiso_table_of_contents">
            <button class="fixed_btn">
              <i class="fa fa-arrow-up" aria-hidden="true"></i><br>
              TOPへ<br>
              戻る
            </button>
          </a>
          <?php the_content(); ?>
        </div>

      </div>
    <?php endwhile; else : ?>
      <p>まだ記事がありません</p>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>