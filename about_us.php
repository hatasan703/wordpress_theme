<?php
/*
 * Template Name: 運営者情報
 */
?>

<?php get_header(); ?>
  <main>
    <article>
      <div class="page_title">
        <div class="page_title_content">
          <h1>
            <?php the_title(); ?>
          </h1>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/46.png" alt="サイトマップ">
      </div>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
          <div class="article_wrap1">
            <h2 class="site_info_title">
              <span><?php the_title(); ?></span><br>
              <img src="<?php echo get_template_directory_uri(); ?>/img/company_logo.png" alt="会社ロゴ">
              <p>法人名　一般社団法人リンクア</p>
            </h2>
            <h2 class="site_info_title company_margin">
              <span>会社概要</span>
            </h2>
            <div class="site_info_cotent">
              <li>
                <h3>法人名</h3>
                <p>一般社団法人リンクア</p>
              </li>
              <li>
                <h3>事業内容</h3>
                <p>
                  当法人は、新しい医療スタイルを構築し、医療分野の育成発展に貢献することを目的とし、その目的に資するため、次の事業を行っています。<br><br>
                  医療関連の各種研修・セミナー・イベントの企画・運営・管理業務<br>
                  医療関連の各種調査、情報の収集、処理および提供に関する業務<br>
                  医療分野におけるシステムの開発、助言、指導等<br>
                  医療分野の振興発展に資する業績等の表彰<br>
                  医療に関する試験の開催等の能力育成<br>
                  会報、雑誌、図書及び印刷物の刊行<br>
                  営業譲渡、資産売買、資本参加、業務提携、同盟および合併に関する斡旋ならびに仲介または紹介<br>
                  その他、当法人の目的を達成するために必要な事業<br>
                </p>
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
                <h3>本社所在地</h3>
                <p>東京都目黒区自由が丘1-13-4 シャイン自由が丘ビル4F</p>
              </li>
              <div class="contact_link">
                お問い合わせは
                <a href="<?php echo home_url(); ?>/">こちら</a>
              </div>
            </div>
          </div>
        </div>

      <div class="container">
        <div class="article_wrap3">
          <div class="site_map">
            <div class="first_user">
              <li class="first_user_title">■はじめての方へ</li>
              <ul class="detail_lists">
                <li><a href="<?php echo home_url(); ?>/kayou">透析に通うのがつらいと思ったら</a></li>
                <li><a href="<?php echo home_url(); ?>/at-home">おうちでできる腹膜透析</a></li>
                <li><a href="<?php echo home_url(); ?>/basic-knowledge">腹膜透析の基礎知識</a></li>
              </ul>
            </div>
            <div class="detail">
              <li class="detail_title">■もっと詳しく知る</li>
              <ul class="detail_lists">
                <li><a href="<?php echo home_url(); ?>/about">「おうちで透析」について</a></li>
                <li><a href="<?php echo home_url(); ?>/medical-info">医療関係者の方へ</a></li>
                <li><a href="<?php echo home_url(); ?>/hospital-list">在宅腹膜透析実施病院リスト</a></li>
              </ul>
            </div>
            <div class="article_category">
              <li class="category_title">■記事カテゴリ</li>
              <ul class="detail_lists">
                <li><a href="<?php echo home_url(); ?>/hukumaku-qa">腹膜透析Q&A</a></li>
                <li><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></li>
                <li><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></li>
                <li><a href="<?php echo home_url(); ?>/glossary">用語集</a></li>
              </ul>
            </div>
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
    padding: 80px 15%;
    background: #fff;
    line-height: 28px;
    margin-top: 0;
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
  padding: 20px;
}

.site_info_cotent h3{
  width: 30%;
}

.site_info_cotent p{
  width: 70%;
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
</style>