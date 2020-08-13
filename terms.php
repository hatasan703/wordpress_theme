<?php
/*
 * Template Name: 利用規約
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
      </div>
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
        <div class="article_wrap1">
          <div class="site_info_title">
            <h2><?php the_title(); ?></h2>
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

  </article>
</main>

<?php get_footer(); ?>