<?php get_header(); ?>
<main>
  <article>
    <div class="page_title pc">
      <div class="page_title_content">
        
        <h1>
          <span><?php the_title(); ?></span>
        </h1>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/30.png" alt="透析に通うのがツライと思ったら">
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
            <ul class="tag_list">
              
              <?php $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                  echo '<li class="tag"><a href="'. get_tag_link( $tag->term_id ) . '">#' . $tag->name . '</a></li>';}
                  }
              ?>
            </ul>
	            <div class="indi_article_title" id="top">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="posting_time">
              <time datetime="<?php the_time('Y.n.j'); ?>">
                <?php the_time('Y.n.j'); ?>
              </time>
            </div>

            <!-- 本文 -->
            <?php echo do_shortcode('[addtoany]'); ?>
            <div class="site_info_cotent">

            <!-- <div id="top" class="table_of_contents pc">
                <div class="table_of_contents_title">■目次
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <ul class="table_of_contents_lists">
                  <li><a href="#1">見出し１</a></li>
                  <li><a href="#2">見出し２</a></li>
                  <li><a href="#3">見出し３</a></li>
                </ul>
              </div>
              <div id="top_sp" class="table_of_contents sp">
                <div class="table_of_contents_title">■目次
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
                <ul class="table_of_contents_lists">
                  <li><a href="#1_sp">見出し１</a></li>
                  <li><a href="#2_sp">見出し２</a></li>
                  <li><a href="#3_sp">見出し３</a></li>
                </ul>
              </div>

              <h3>
              　<span id="1" class="article_item_title pc">見出し１</span>
              　<div id="1_sp" class="article_item_title sp">見出し1</div>
              </h3>
              <p class="single_article_text">テキスト</p> -->
              <?php the_content(); ?>
              

            </div>

            <div class="related_article">関連記事</div>
            <div class="category_articles">
              <?php
              $categories = wp_get_post_categories($post->ID, array('orderby'=>'rand')); // 複数カテゴリーを持つ場合ランダムで取得
              if ($categories) {
                $args = array(
                  'category__in' => array($categories[0]), // カテゴリーのIDで記事を取得
                  'post__not_in' => array($post->ID), // 表示している記事を除く
                  'showposts'=>3, // 取得記事数
                  'ignore_sticky_posts'=>1, // 取得した記事の何番目から表示するか
                  'orderby'=> 'DESC', // 記事をランダムで取得
                  'cat' => -2,
                ); 
                $my_query = new WP_Query($args); 
                if( $my_query->have_posts() ) { ?>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="category_article">
                  <?php get_template_part( 'template-parts/post/content', 'excerpt' ); ?>
                  <a href="<?php the_permalink() ?>" target="_self">
                      <time><?php the_modified_time('Y年n月j日'); ?></time>
                      <?php the_post_thumbnail('thumbnail'); ?>
                      <p><a href="<?php the_permalink() ?>" class="wpp-post-title" target="_self"><?php the_title(); ?></a></p>
                </div>
              <?php endwhile; } wp_reset_query(); } ?>
            </div>

			  
             <!-- 固定-->
             <?php get_template_part( 'partials/side', 'bar' ); ?>
            <!-- -------- --> 

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
  .tag_list{
    display: flex;
  }
  .tag_list .tag{
    background-color: #f44078;
    border-radius: 50px;
    padding: 0 15px;
    color: #fff;
    font-size: 12px;
    margin: 0 10px 10px 0;
    letter-spacing: 0.1em;
  }
  .tag_list .tag a{
    color: #fff;
    text-decoration: none;
  }

  .posting_time{
    text-align: right;
    color: #FF6A29;
    letter-spacing: 0.2em;
    margin-top: 10px;
  }
  .fixed_btn{
    right: -98px;
    bottom: 20px;
    z-index: 1;
  }
  .fixed_btn:hover{
    z-index: 1;
  }
  .indi_article_title{
    text-align: left;
    border: 3px solid #FF6A29;
    padding: 25px 10px;
    letter-spacing: 0.1em;
  }
  .container .article_wrap1{
    margin-top: 0;
    /* padding-right: 10%;
    padding-left: 10%; */
  }

  .site_info_cotent img{
    width: 70%;
    height: 70%;
    margin: 30px 0 70px;
  }
  .site_info_cotent p img{
    width: 70%;
    height: 70%;
    margin: 0px 0 70px;
  }

  .site_info_cotent{
    text-align: center;
  }

  .site_info_cotent p{
    margin: 40px 0;
    text-align: left;
    text-align: justify;
    letter-spacing: 0.15em;
  }

  .site_info_cotent h3{
    text-align: left;
  }
  .site_info_cotent h3 span{
    border-bottom: 2px solid #FF6A29;
    padding: 10px;
  }

  .site_info_cotent li p{
    margin: 40px 0 70px;
  }

  .related_article{
    border-bottom: 2px solid #FF6A29;
    padding: 10px;
    width: 80%;
    font-size: 18px;
    margin-top: 100px;
    letter-spacing: 0.15em;
  }
  .breadcrumbs {
    line-height: 2;
  }

  .table_of_contents_lists{

  }

  .category_article{
    height: 150px;
    width : 200px;
    margin: 30px 0;
    margin-right: 20px;
    border: solid 3px #FFA42C;
    position: relative;
  }

  .category_article img{
    height: 100px;
    width: 194px;
    object-fit: cover;
  }
  
  .category_articles time{
    padding: 0 2px;
  }


  @media screen and (max-width: 640px) {

    .site_info_cotent div {
      text-align: center;
    }

    .site_info_cotent p{
      margin-right: 10px;
      margin-left: 10px;
    }

    .container .article_wrap1{
      padding: 20px 5% 40px;
      background: #fff;
      line-height: 30px;
      margin-top: 0;
    }

    .related_article{
      width: 100%;
      text-align: left;
    }

    .breadcrumbs {
      line-height: 1.3;
    }
  }
</style>