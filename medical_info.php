<?php
/*
 * Template Name: 医療関係者の方へ
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="透析に通うのがツライと思ったら">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="透析に通うのがツライと思ったら">
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
            <div class="site_info_title" id="top">
              <h2><?php the_title(); ?></h2>
            </div>

            <?php echo do_shortcode('[addtoany]'); ?>
            <?php the_content(); ?>

            <!-- <div class="site_info_cotent">
              <p>
              この度は、「おうちで透析」にお越しいただき誠にありがとうございます。
              当サイトの運営方針について紹介いたします。
              </p>
              <li>
                <h3>
                  <span id="" class="article_item_title pc">サイトの運営</span>
                  <p id="" class="article_item_title sp">サイトの運営</p>
                </h3>
                <p class="margin0">
                  当サイトおよび関連SNSの運営は、<a href="https://linqua.jp/message/">一般社団法人リンクア</a>が行っております。同法人は、
                  「医療者同士」「医療者と非医療者」「医療とシステム」などが繋がることで、より良い社会循環が図れると考え、
                  情報循環を促進する為の媒体になることを目的に設立されました。シームレスな情報の共有や相互理解によってチーム医療を促進し、
                  またシステム間連携や既存システムを利用した新たなイノベーションによって医療現場における非効率性を排除することで、
                  すべての関係者が受益者となるようなシナジーを起こせると考えています。
                </p>
                <img class="alignnone  wp-image-192" src="http://dev.local/wp-content/uploads/2020/08/company_logo-1.png" alt="会社ロゴ" width="394" height="76" />

              </li>
              <li>
                <h3>
                  <span id="" class="article_item_title pc">サイトの監修</span>
                  <p id="" class="article_item_title sp">サイトの監修</p>
                </h3>
                <p>
                  当サイトおよび関連SNSの監修は、一般社団法人リンクアの理事でもある「<a href="https://www.shibagaki-zaitaku.com/">医療法人社団明洋会</a>」様にお願いしております。
                  同法人は、40年以上の歴史を持つ血液透析（HD）の診療所と、腹膜透析（PD）を専門的に行う在宅療養支援診療所の両者を組み合わせて、
                  「100人いれば100通りの透析医療」の考えのもと運営している法人です。
                </p>
              </li>
              <li>
                <h3>
                  <span id="" class="article_item_title pc">サイトの目的</span>
                  <p id="" class="article_item_title sp">サイトの目的</p>
                </h3>
                <p class="margin0">
                  当サイトおよび関連SNSの目的は、わが国は先進諸国に比べ大きく後れを取っている腹膜透析（PD）について、
                  「在宅でできる透析医療＝おうちで透析」と位置付け、患者様やそのご家族に対して情報提供、普及啓蒙を促すものです。
                  当サイトは医療関係者向けに、透析治療を医学的見地で説明するものではありません。あくまで、患者様とそのご家族の立場に立ち、
                  簡単でわかりやすい言葉で、「透析治療」について説明を行うものです。その関係上、医療関係者や専門家の観点から不十分な部分や、
                  言葉不足の箇所があることをご了承ください。
                </p>
                <img class="alignnone wp-image-185 purpose" src="http://dev.local/wp-content/uploads/2020/08/47-1.png" alt="" width="461" height="307" />
              </li>
              <li>
                <h3>
                  <span id="" class="article_item_title pc">サイトのスタンス</span>
                  <p id="" class="article_item_title sp">サイトのスタンス</p>
                </h3>
                <p>
                  当サイトおよび関連SNSのスタンスは、数多ある透析治療の中から「治療法を選択するのは患者様本人だ」と考えています。
                  患者様が置かれている状況は様々であり、個々の状況に応じて、治療選択が異なることは重々承知しています。
                  そのような中で、我が国は急速に超高齢社会が進んでおり、透析患者の高齢化も深刻な問題になってきています。
                  通院するのが難しくなった透析患者に対して、入院透析と在宅透析という２つの選択肢を伝えることで、
                  患者様とそのご家族のACPの一助になればと考えております。そのようなスタンスに共鳴いただけるならば、
                  ご支援、応援のほどよろしくお願いします。
                  <br><br>
                  ※ACP・・・Advance Care Planningの略。
                  <br><br>
                  また、医療は「情報の非対称性」が多く発生する産業であり、医療側と患者側の情報格差が存在するという事実があります。
                  この情報格差が縮まり、医療者と患者が同じ机で話し合える環境が作れればと考えています。
                  そのため、私どもの情報に不足、誤解があっては、その目的達成は難しいと考えます。
                  そのようなスタンスから、当サイトを開かれたメディアにするため、皆様からの健全なご指摘、ご意見を歓迎いたします。
                  患者様やその家族に対して、「治療選択」そしてその後の「透析ライフ」がより良いものになるよう、頂戴したご意見を参考に、
                  当サイトを改善・改良していきたいと考えます。
                </p>
              </li>
              <li>
                <h3>
                  <span id="" class="article_item_title pc">仲間を募集しています！</span>
                  <p id="" class="article_item_title sp">仲間を募集しています！</p>
                </h3>
                <p>
                  当サイトは、全国の腹膜透析を実施する病院、クリニックとともに、「腹膜透析（PD）」をわが国に広めたいと考えています。
                  今後、全国の腹膜透析（PD）を実施する病院、クリニックを、患者様やそのご家族に紹介するページを用意する予定です。
                  私どもの取組みに共感いただけるならば、是非ご連絡いただきますようよろしくお願いいたします。
                  <br><br><br>
                  （掲載依頼・お問合せ先）<br>
                    メール：info@linqua.jp<br>
                    〒152-0035　東京都目黒区自由が丘1-13-4 シャイン自由が丘ビル4F<br>
                    一般社団法人リンクア<br>
                </p>
              </li>
            </div> -->
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

.container .article_wrap1{
    line-height: 30px;
  }

  .site_info_cotent li img{
    width: 250px;
    height: 50px;
    margin: 30px 0 70px;
  }

  .site_info_cotent li .purpose{
    height: 80%;
    width: 80%;
  }
  .site_info_cotent li .info_img{
    width: 70%;
    height: 70%;
    margin: 30px 0 70px;
  }

  .site_info_cotent{
    text-align: center;
  }

  .site_info_cotent p{
    margin: 0 0 40px;
    text-align: left;
    text-align: justify;
  }
  .site_info_cotent .margin0{
    margin-bottom: 0;
  }

  .site_info_cotent li span{
    border-bottom: 2px solid #FF6A29;
    padding: 10px;
  }


  .site_info_cotent li p{
    margin: 40px 0 70px;
  }


  .site_info_cotent li p img{
    display: block;
    margin: 30px auto 100px;
  }

  @media screen and (max-width: 640px) {
    .container .article_wrap1{
      padding-right: 7%;
      padding-left: 7%;
    }
    .page_title_content h1{
     width: 80%;
    }
    .site_info_cotent li p{
      text-align: center;
    }
    .article_item_title{
      padding: 5px;
    }
  }
</style>