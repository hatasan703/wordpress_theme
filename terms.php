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
        <div class="page_title_border"></div>
        <h1>
          <span><?php the_title(); ?></span>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="利用規約">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="利用規約">
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


<style>

  @media screen and (max-width: 640px) {
    .page_title_content h1{
     width: 50%;
    }

  }
   
</style>