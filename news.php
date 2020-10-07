<?php
/*
 * Template Name: お知らせ一覧
 */
?>

<?php get_header(); ?>

<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        
        <h1>
          <span><?php the_title(); ?></span>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
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
      <div class="container">
        <?php get_template_part( 'partials/article', 'head' ); ?>
        <div class="article_wrap1">
          <div class="site_info_title">
            <h2><?php the_title(); ?></h2>
          </div>
          <h3 class="site_info_sub_title">
            NEWS
          </h3>
          <div class="site_info_cotent">
			  	<?php
                     $paged = get_query_var('paged')? get_query_var('paged') : 1;
                     $information= new WP_Query( array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
					          'cat' =>2,
                ));
          if ( $information ->have_posts() ) : ?>
            <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
			  <li>
              <p><?php the_time('Y.n.j'); ?></p>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php
		    endwhile;
        wp_reset_postdata(); ?>

      <?php else: ?>
      <p>まだ記事がありません</p>
      <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </article>
</main>

<?php get_footer(); ?>


<style>

.container .article_wrap1{
    padding-bottom: 200px;
    line-height: 28px;
  }

  .site_info_sub_title{
    text-align: center;
    color: #FF6A29;
    margin-top: 50px;
    letter-spacing: 0.2em;
  }


.site_info_cotent{
  margin-top: 70px;
  text-align: left;
}
.site_info_cotent li{
  display: flex;
  border-bottom: 1px solid #cbcbcb;
  padding: 20px;
}

.site_info_cotent p{
  width: 30%;
}

.site_info_cotent a{
  width: 70%;
  color: #666;
  text-decoration: none;
  display: block;
  text-align: justify;
}

@media screen and (max-width: 640px) {

  .page_title_content h1{
    width: 70%;
  }

  .site_info_sub_title{
    margin-top: 30px;
  }
  .site_info_cotent {
    margin-top: 10px;
    text-align: left;
  }

  .site_info_cotent li{
    display: block;
  }

  .site_info_cotent a{
    width: 100%;
    margin-top: 5px;
    letter-spacing: 0.1em;
    line-height: 1.5;
  }

}

</style>