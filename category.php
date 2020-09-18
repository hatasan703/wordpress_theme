  <?php
/*
 * Template Name: カテゴリ一覧
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
              <span><?php the_title(); ?></span>
            </h1>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="カテゴリ一覧">
        </div>
        <div class="page_title sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="カテゴリ一覧">
          <div class="page_title_content">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
        
        <div class="container">
          <?php get_template_part( 'partials/article', 'head' ); ?>
          <div class="article_wrap1">
            <div class="site_info_title">
              <h2 class=""><?php the_title(); ?></h2>
            </div>
              <!-- 腹膜透析QAーーーーーーーー -->
              <div class="category">
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
                            'posts_per_page' => 3,
                            'cat' =>6,
                        ));
                        if ( $information ->have_posts() ) : ?>
                          <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                                <div class="category_article pink_border">
                                <a href="<?php the_permalink(); ?>">
                                <time class="artcile_time" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y.n.j'); ?></time>
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
                <div class="more_btn pink">
                  <a href="<?php echo home_url(); ?>/qa">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>

              <!-- 患者さんの事例ーーーーーーーー -->
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
                              'posts_per_page' => 3,
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
                <div class="more_btn">
                  <a href="<?php echo home_url(); ?>/patient-case">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>

              <!-- 動画で学ぶ腹膜透析ーーーーーーーー -->
              <div class="category" >
                <div class="category_top green">
                  <div class="category_page_title">
                    <h3>動画で学ぶ腹膜透析</h3>
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
                      'posts_per_page' => 3,
                      'cat' =>3,
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
                <div class="more_btn green">
                  <a href="<?php echo home_url(); ?>/video">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>


              <!-- 用語集ーーーーーーーーーーーーー -->
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
                        'posts_per_page' => 3,
                        'cat' =>5,
                    ));
                      if ( $information ->have_posts() ) : ?>
                        <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                              <div class="category_article blue_border">
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
                <div class="more_btn blue">
                  <a href="<?php echo home_url(); ?>/glossary">もっと見る</a>
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
              </div>
              

          </div>
        </div>
    </div>
  </article>
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