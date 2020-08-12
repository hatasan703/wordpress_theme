<?php
/*
 * Template Name: 用語集
 */
?>

<?php get_header(); ?>

<main>
  <article>
    <div>      
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
					        <?php
                     $paged = get_query_var('paged')? get_query_var('paged') : 1;
                     $information= new WP_Query( array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
					          'cat' =>1
                ));
          if ( $information ->have_posts() ) : ?>
            <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                  <div class="category_article blue_border">
                  <a href="<?php the_permalink(); ?>">
                  <time datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
                  <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
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