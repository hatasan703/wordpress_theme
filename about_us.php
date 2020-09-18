<?php
/*
 * Template Name: 運営者情報
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
          <?php get_template_part( 'partials/article', 'head' ); ?>
          <div class="article_wrap1">
            <?php the_content(); ?>
            <!-- <div class="site_info_title">
              <h2>運営者情報</h2>
              <img class="alignnone wp-image-112" src="http://dev.local/wp-content/uploads/2020/08/company_logo.png" alt="会社ロゴ " width="291" height="56" />
              <p>法人名　一般社団法人リンクア</p>
            </div>
            <div class="site_info_title company_margin">
              <h2>会社概要</h2>
            </div>
            <div class="site_info_cotent">
              <li>
                <h3>法人名</h3>
                <p>一般社団法人リンクア</p>
              </li>
              <li>
                <h3 class="pc">事業内容</h3>
                <h3 class="sp">事業<br>内容</h3>
                <div class="business_content">
                  <p>当法人は、新しい医療スタイルを構築し、医療分野の育成発展に貢献することを目的とし、その目的に資するため、次の事業を行っています。</p>
                  <p>医療関連の各種研修・セミナー・イベントの企画・運営・管理業務</p>
                  <p>医療関連の各種調査、情報の収集、処理および提供に関する業務</p>
                  <p>医療分野におけるシステムの開発、助言、指導等</p>
                  <p>医療分野の振興発展に資する業績等の表彰</p>
                  <p>医療に関する試験の開催等の能力育成</p>
                  <p>会報、雑誌、図書及び印刷物の刊行</p>
                  <p>営業譲渡、資産売買、資本参加、業務提携、同盟および合併に関する斡旋ならびに仲介または紹介</p>
                  <p>その他、当法人の目的を達成するために必要な事業</p>
                  </div>
              </li>
              <li>
                <h3>代表者</h3>
                <p>代表理事　市川 匠</p>
              </li>
              <li>
                <h3>設立</h3>
                <p>2019年4月17日</p>
              </li>
              <li>
                <h3 class="pc">本社所在地</h3>
                <h3 class="sp">本社<br>所在地</h3>
                <p>東京都目黒区自由が丘1-13-4 シャイン自由が丘ビル4F</p>
              </li>
              <div class="contact_link">
                お問い合わせは
                <a href="<?php echo home_url(); ?>/">こちら</a>
              </div>
            </div> -->


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
    line-height: 28px;
  }

.company_margin{
  margin-top: 150px;
}
.site_info_title img{
  width: 250px;
  height: 50px;
  margin-top: 60px;
}

.site_info_title p{
  color: #666;
  margin-top: 60px;
}

.site_info_cotent{
  margin-top: 70px;
  text-align: left;
  text-align: justify;
}
.site_info_cotent li{
  display: flex;
  /* margin: 40px; */
  border-bottom: 1px solid #666;
  padding: 20px 10px;
}

.site_info_cotent h3{
  width: 30%;
}

.site_info_cotent p{
  width: 70%;
}
.business_content{
  width: 70%;
}

.business_content p{
  width: 100%;
}
.site_info_cotent .contact_link{
  text-align: center;
}

.contact_link{
  text-align: center;
  margin: 40px;
}

.contact_link a{
  text-decoration: none;
  color: #FF6A29;
}

@media screen and (max-width: 640px) {

  .site_info_title p{
    border: none;
  }
  .page_title_content h1{
     width: 60%;
    }

    .business_content p{
      letter-spacing: 0.15em;
    }
    
}
    
</style>