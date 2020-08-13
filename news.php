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
        <div class="page_title_border"></div>
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
          <h3 class="site_info_sub_title">
            NEWS
          </h3>
          <div class="site_info_cotent">
            <li>
              <p>2020.08.01</p>
              <a href="<?php echo home_url(); ?>/">「おうちで透析」を公開しました</a>
            </li>
            <li>
              <p>2020.08.01</p>
              <a href="<?php echo home_url(); ?>/">「おうちで透析」Twitterアカウントを開設しました</a>
            </li>
            <li>
              <p>2020.08.01</p>
              <a href="<?php echo home_url(); ?>/">「おうちで透析」Facebookアカウントを開設しました</a>
            </li>
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

.container .article_wrap1{
    padding: 0 15% 200px;
    background: #fff;
    line-height: 28px;
    margin-top: 0;
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
  .container .article_wrap1 {
    padding: 80px 5%;
  }

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