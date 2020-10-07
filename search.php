<?php get_header(); ?>

<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        
        <h1>
          <span>検索結果</span>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
      <div class="page_title_content">
        
        <h1>
          <span>検索結果</span>
        </h1>
      </div>
    </div>
    
    <div class="container">
      <?php get_template_part( 'partials/article', 'head' ); ?>
      <div class="article_wrap2">

        <div class="site_info_title">
          <h2 class="">検索結果</h2>
        </div>
        <div class="search_query">
          "<?php the_search_query(); ?>" の検索結果
        </div>
        <div class="category_articles">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="category_article">
              <?php get_template_part( 'template-parts/post/content', 'excerpt' ); ?>
              <a href="<?php the_permalink() ?>" target="_self">
                  <time><?php the_modified_time('Y年n月j日'); ?></time>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p><a href="<?php the_permalink() ?>" class="wpp-post-title" target="_self"><?php the_title(); ?></a></p>
            </div>
        

          <?php endwhile; else: ?>
            <div class="col-full">
              <div class="wrap-col">
                <p>検索キーワードに該当する記事がありませんでした。</p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </article>
</main>







<?php get_footer(); ?>


<style>
  
  .search_query{
    margin: 20px 0;
    letter-spacing: 0.2em;
  }

</style>