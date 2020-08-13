<?php
/*
 * Template Name: プライバシーポリシー
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
            <h2 class=""><?php the_title(); ?></h2>
          </div>

          <?php the_content(); ?>
          <!-- <div class="site_info_cotent">
            <div class="privacy_text">
              <p class="privacy_text_sub">
                一般社団法人リンクア（以下，「当社」といいます。）は，
                本ウェブサイト上で提供するサービス（以下,「本サイト」といいます。）における，ユーザーの個人情報の取扱いについて，
                以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
              </p>
              <div class="privacy_title">１. 個人情報</div>
              <p>                
                「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，
                生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，
                連絡先その他の記述等により特定の個人を識別できる情報を指します。
              </p>

              <div class="privacy_title">２. 個人情報の収集方法</div>
              <p>
                当社は，ユーザーから住所・氏名・電話番号・Eメールアドレスなどの情報を収集することがあります。
              </p>

              <div class="privacy_title pc">３. 個人情報を収集・利用する目的</div>
              <div class="privacy_title sp">３. 個人情報を収集<br>　利用する目的</div>
              <p>
                当社が個人情報を収集・利用する目的は，以下のとおりです。<br><br>
                当社サービスの提供・運営のため<br>
                ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）<br>
                ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため<br>
                メンテナンス，重要なお知らせなど必要に応じたご連絡のため<br>
                利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため<br>
                上記の利用目的に付随する目的<br>
              </p>

              <div class="privacy_title">４. 利用目的の変更</div>

              <p>
                当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br>
                利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。<br>
              </p>
              

              <div class="privacy_title">５. 個人情報の第三者提供</div>
              <p>
                当社は，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>
              </p>
              

              <div class="privacy_title">６. 個人情報の開示・修正・削除</div>
              <p>
                当社は，本人から個人情報の開示・修正・削除を求められたときは，本人であることを確認の上，遅滞なくこれを開示・修正・削除します。ただし，次のいずれかに該当する場合はこれに応じない場合もあり、応じない決定をした場合には，その旨を遅滞なく通知します。<br>
                本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>
                当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
                その他法令に違反することとなる場合<br>
                前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示・修正・削除いたしません。<br>
              </p>
              
              <div class="privacy_title">７. プライバシーポリシーの変更</div>
              <p>
                本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br>
                当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。<br>
              </p>
              
              <div class="privacy_title">８. お問い合わせ窓口</div>
              <p>
                本ポリシーに関するお問い合わせは，お問い合わせフォームよりお願いします。<br>
              </p>
              
              <div class="privacy_title">９. 制定日、改定日</div>
              <p class="privacy_date">
                2020年8月1日　制定<br>
              </p>
            
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
    line-height: 23px;
  }

  .privacy_text p{
    margin: 20px 30px 60px;
    font-size: 14px;
    text-align: justify;
  }

  .privacy_text .privacy_text_sub{
    font-size: 14px;
    margin: 0 0 40px;
  }

  .privacy_text .privacy_title{
    font-size: 16px;
  }

  .container .article_wrap2{
    padding: 80px 13%;
    background: #F9F7F4;
  }

  @media screen and (max-width: 640px) {

    .privacy_text .privacy_title{
      letter-spacing: 0.1em;
    }
    .privacy_text p{
      letter-spacing: 0.15em;
    }
    .site_info_cotent {
      margin-top: 60px;
    }

    .privacy_text p {
      margin: 20px 0 60px;
    }
    .privacy_text .privacy_date{
      text-align: center;
    }


  }
</style>
