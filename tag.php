<?php get_header(); ?>
<main>
    <article>
      <div>
          <div class="page_title pc">
            <div class="page_title_content">
            
              <h1>
                <span>#<?php echo get_tag(get_query_var('tag_id'))->name; ?></span>
              </h1>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="在宅腹膜透析実施病院リスト">
          </div>
          <div class="page_title sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="在宅腹膜透析実施病院リスト">
            <div class="page_title_content">
              <h1>
                #<?php echo get_tag(get_query_var('tag_id'))->name; ?>
              </h1>
            </div>
          </div>

          <div class="container">
            <?php get_template_part( 'partials/article', 'head' ); ?>
            <div class="article_wrap1">
              <div class="site_info_title">
                <h2 class="">#<?php echo get_tag(get_query_var('tag_id'))->name; ?></h2>
              </div>
              <?php echo do_shortcode('[addtoany]'); ?>
              <div class="category" >
                <div class="category_articles">

                  <?php
                    $tag_id = get_query_var('tag_id');
                    $paged = get_query_var('paged')? get_query_var('paged') : 1;
                    $information= new WP_Query( array(
                   'post_type' => 'post',
                   'paged' => $paged,
                   'post_status' => 'publish',
                   'posts_per_page' => 9,
                   'tag_id' => $tag_id,
                  ));
                if ( $information ->have_posts() ) : ?>
                  <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                    <div class="category_article green_border">
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