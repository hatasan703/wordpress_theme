<?php
/**
 * Template Name: お問い合わせ
 **/
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="お問い合わせ">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="お問い合わせ">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
          <?php get_template_part( 'partials/article', 'head' ); ?>
          <div class="article_wrap1">
            <div class="site_info_title">
              <h2 class=""><?php the_title(); ?></h2>
            </div>

            <?php the_content(); ?>
            
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
  width: 60%;
  }
}



</style>