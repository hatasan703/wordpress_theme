<?php
/*
 * Template Name: 患者さんの事例 
 */
?>

<?php get_header(); ?>

<main>
    <article>
      <div>
          <div class="page_title pc">
            <div class="page_title_content">
              <div class="page_title_border"></div>
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
            <div class="change_size_container">
              <!-- パンクズリスト -->
              <?php if(!is_home()) : ?>
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                  <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
              <?php endif; ?>
              <!-- ーーーーーーーーー -->
              <div class="change_font_size">
                <p class="change_text">文字サイズ</p>
                <p class="size-button small" data-font="12">小</p>
                <p class="size-button midium active" data-font="16">中</p>
                <p class="size-button large" data-font="20">大</p>
              </div>
            </div>
            <div class="article_wrap1">
              <a href="<?php echo home_url(); ?>/category" class="back_btn">
                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                ひとつ戻る
              </a>
              <div class="category" >
                <div class="category_top">
                  <div class="category_page_title">
                  <h3>患者さんの事例</h3>
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
					          'cat' =>4,
                ));
          if ( $information ->have_posts() ) : ?>
            <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                  <div class="category_article">
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