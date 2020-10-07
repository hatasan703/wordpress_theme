<?php
/*
 * Template Name: 腹膜透析Q&A
 */
?>

<?php get_header(); ?>

<main>
    <article>
      <div>
          <div class="page_title pc">
            <div class="page_title_content">
              
              <h1>
                <span>「おうちで透析」の記事</span>
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
            <?php get_template_part( 'partials/article', 'head' ); ?>
            <div class="article_wrap1">
              <a href="<?php echo home_url(); ?>/category" class="back_btn">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                ひとつ戻る
              </a>
              <div class="category" >
                <div class="category_top pink">
                  <div class="category_page_title">
                    <h3>腹膜透析Q&A</h3>
                    <p>ここに簡単なテキストが入ります。</p>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/31.png" alt="体温計">
                </div>
                <div class="category_articles">
					        <?php
                     $paged = get_query_var('paged')? get_query_var('paged') : 1;
                     $information= new WP_Query( array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
					          'cat' =>6,
                  ));
                    if ( $information ->have_posts() ) : ?>
                      <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                            <div class="category_article pink_border">
                            <a href="<?php the_permalink(); ?>">
                            <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p><?php the_title(); ?></p>
                            </a>
                            </div>
                      <?php
                    endwhile;
                    wp_reset_postdata(); ?>

                  <?php else: ?>
                  <p>まだ記事がありません</p>
                  <?php endif; ?>
                </div>
                <?php 		 
                    if( function_exists('wp_pagenavi') ) {
                          wp_pagenavi(array('query' => $information));
                  } 
                ?>
              </div>
            </div>
          </div>
      </div>
    </article>
  </div>
</main>

<?php get_footer(); ?>


<style>

.container .article_wrap1{
    padding-right: 10%;
    padding-left: 10%;
  }
@media screen and (max-width: 640px) {
  .container .article_wrap1{
    padding-right: 5%;
    padding-left: 5%;
  }
}

</style>