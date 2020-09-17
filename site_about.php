<?php
/*
 * Template Name: 「おうちで透析」について
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
          <div class="change_size_container">
            <!-- パンクズリスト -->
            <?php if(!is_home()) : ?>
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                  {
                      bcn_display();
                  }?>
              </div>
            <?php endif; ?>
            <!-- ーーーーーーーーー -->
            <div class="change_font_size">
              <p class="change_text">文字サイズ</p>
              <p class="size-button small" data-font="12">小</p>
              <p class="size-button midium active" data-font="16">中</p>
              <p class="size-button large" data-font="20">大</p>
            </div>
          </div>
          <div class="article_wrap1">
              <div class="site_info_title" id="top">
                <h2><?php the_title(); ?></h2>
              </div>

              <?php echo do_shortcode('[addtoany]'); ?>
              <?php the_content(); ?>

              <!-- <div class="site_info_cotent">
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">「おうちで透析」を可能にするために</span>
                    <p id="" class="article_item_title sp">「おうちで透析」を可能にするために</p>
                  </h3>
                  <p class="margin0">
                    「おうちで透析」は、自宅や職場、出張先、旅行先など「生活の場」で行うことのできる「透析治療」について、情報提供を行うサイトです。<br><br>
                    わが国の透析治療を行う場所は、97％が医療機関で、在宅での治療はわずか３％にすぎません。先進諸国に比べても、在宅で透析を行う比率は極端に少ない現状があります。しかし何らかの事情で医療機関に通うことが負担になる場合、おうちで透析を行うことができたら負担が軽くなる、生活上の選択肢が増えるというケースもあります。そんな患者さんやご家族のために、おうちで透析が可能になる腹膜透析という手法について情報を提供していきます。
                  </p>
                  <img class="alignnone  wp-image-106 info_img" src="http://dev.local/wp-content/uploads/2020/08/48.png" alt="車椅子" width="536" height="357" />
                </li>
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">腹膜透析に移行するためのハードルは様々</span>
                    <p id="" class="article_item_title sp">腹膜透析に移行するためのハードルは様々</p>
                  </h3>
                  <p>
                    実際に、「おうちで透析」を実現するためには、多くのハードルが存在します。自分や家族が毎日、
                    透析バッグを交換しなくてはいけないこと。透析を行う場所の衛生管理を徹底しないといけないこと。
                    腹膜炎など感染症の予防をしなくてはいけないこと、など。家族に迷惑をかけると遠慮して、
                    腹膜透析（PD)を選べないと考える人もいるでしょう。
                    ひとそれぞれ置かれた環境は異なります。<br><br>
                    ただ、「おうちで透析」という選択肢があることを知ってほしいのです。
                    メリットもデメリットもちゃんと考えて、選択してほしいのです。
                    自分の人生を良いものにするためには、家族と友人と医師と医療従事者としっかり話し合って、自らが決めて欲しいのです。
                    情報が足りないから、時間が足りないから、環境が許さないから、といって人生をあきらめないでください。
                    透析の治療方法の変更は、いつでも可能です。血液透析（HD）から始めて腹膜透析（PD)で終わっても、血液透析（HD）と腹膜透析（PD)を組み合わせて併用しても。
                    透析になっても人生をよりよく過ごしてほしいから、最善の方法を選んでほしいのです。<br><br>
                    そんな想いから当サイト「おうちで透析」に情報をアップしていきたいと思っています。
                  </p>
                </li>
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">高齢化により通院での透析が</span>
                    <p id="" class="article_item_title sp">高齢化により通院での透析が</p>
                  </h3>
                  <p class="margin0">
                    わが国では超高齢社会が急速に進んでいます。
                    2018年現在、高齢化率は28.1％で、2030年には31.2％に達すると予想されています。
                    先進諸国と比較しても、例のないスピードで進んでいます。
                    透析患者も歳を取ります。高齢化の進展とともに、徐々に体力が落ち、通院が困難になる時が来ます。
                    その時に選択肢として、生活の場でできる透析治療を知っていただきたいのです。
                    通院での透析が難しくなり、「入院」での透析を選ぶ、「在宅」での透析を選ぶ、この２つの選択ができる社会が必要ではないでしょうか。
                  </p>
                  <img class="alignnone  wp-image-187 info_img" src="http://dev.local/wp-content/uploads/2020/08/49-1.png" alt="車椅子" width="548" height="365" />
                </li>
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">診療報酬改定・介護保険制度とのかかわり</span>
                    <p id="" class="article_item_title sp">診療報酬改定・介護保険制度とのかかわり</p>
                  </h3>
                  
                  <p>
                    政府は2018年の診療報酬改定で、腹膜透析（PD)や腎移植を推進するために、腎不全患者に対して、
                    患者に合わせて様々な選択肢があると説明することを要件化しました。
                    2020年改定では、血液透析（HD）と腹膜透析（PD)を別々の医療機関で行っても、
                    それぞれ点数が算定できるようになりました（改定前は同一施設での併用のみ認められていました）。
                    今後増えるであろう、通院が難しい透析患者に対して、「おうちで透析」が選択肢になるように整備を行っているのです。
                    <br><br>
                    在宅医療は、2000年に介護保険制度ができ、2006年には在宅療養支援診療所・病院が創設され、
                    毎年在宅医療サービスを提供する医療機関が増えています。政府はその集大成として、
                    2025年に地域包括ケアシステムの完成を目指しています。この地域包括ケアシステムは、
                    「住み慣れた生活の場で、生涯生きていけるための医療と介護の体制整備」のことです。
                    ここでいう生活の場とは、病院ではなく、自宅や高齢者施設を指しています。
                    <br><br>
                    わが国の医療は、長らく「社会的入院」が問題になってきました。社会的入院とは、
                    入院治療が終わり、退院できる状態になっても自宅に戻れず、病院に入院し続けなくてはならない現実です。
                    退院できない理由は、自宅で世話をする人がいなかったり、住環境がととのっていなかったり、と様々です。
                    これを個人の問題と考えるのではなく、社会の問題と考え、地域で医療、介護、生活に関するサービスを整備することで、
                    自宅に帰れる社会を作ろうとしているのです。
                  </p>
                </li>
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">新型コロナウィルス流行とおうちで透析</span>
                    <p id="" class="article_item_title sp">新型コロナウィルス流行とおうちで透析</p>
                  </h3>
                
                  <p>
                    新型コロナウイルスは、生活の在り方を変えようとしています。
                    通勤、通学、旅行、出張など、移動が前提とされた従来の生活は感染リスクが高いとされています。
                    コロナ禍での生活は、テレワーク、ステイホーム、オンライン学習、ネットショッピングなど、
                    できるだけ外出しない生活が必要とされています。この生活がいつまで続くかはわかりません。新しい薬ができるまで、
                    新しいワクチンができるまで、それがいつになるかはわかりません。ただ一つ分かっているのは、
                    新型コロナウイルスと共存する「ウィズコロナ」の状況にあるという事実です。
                    <br><br>
                    ウィズコロナ社会では、病院や診療所の受診方法も一変しました。
                    病院は新型コロナウイルスの感染を防ぐために入院患者への面会を禁止し、診療所では感染を恐れた患者が来なくなり、
                    「閑散としている待合室」が見受けられます。感染リスクを考える患者は、できるだけ医療機関に行かないようにと、
                    電話診療やオンライン診療、そして在宅での診療を希望するケースも増えているのです。
                  </p>
                </li>
                <li>
                  <h3>
                    <span id="" class="article_item_title pc">自宅で最期を迎えるための選択肢</span>
                    <p id="" class="article_item_title sp">自宅で最期を迎えるための選択肢</p>
                  </h3>
                  <p class="margin0">
                    誰もがいずれ迎える「最期」について、いまはACP（アドバンス・ケア・プランニング）という考え方が大切になっています。
                    ACPとは、患者・家族・医療と介護の従事者の話し合いを通じて、患者の価値観を明らかにし、
                    これからの治療・ケアの目標や選好を明確にするプロセスのことです。
                    厚生労働省の調査「人生の最終段階における医療に関する意識調査報告書」によると、
                    調査対象者の約７割の患者は「自宅で最後を迎えたい」と考えています。現実は、看取りの場所が自宅となったのは、わずか１割ほどです。
                    この現実を踏まえて、自宅で最期を迎えるための準備を、本人、家族、医療従事者が一緒に考える時代が来ているのです。
                    まだ元気なうちに、人生の最期をどうするか。いまは「終活」という言葉があるように、悔いのない人生を送りたいから、
                    安心した最期を迎えたいからこそ、人生の最期をしっかり描いてほしいのです。
                    <br><br>
                    「PDラスト」という言葉があります。
                    PDラストとは、人生の最期を腹膜透析（PD)を選択することで、
                    「おうちで透析」が可能になるという考え方です。従来の終末期の透析のイメージは、
                    人里離れた病院で透析治療を受け、医療従事者に看取られるというものでした。
                    これからは、「住み慣れた自宅で腹膜透析（PD)を行い、家族に看取られる」という選択肢を考えていただきたいのです。
                    <br><br>
                    
                    なお、当サイトの情報はすべて医療関係者の監修を経て掲載しています。
                    「おうちで透析」は当サイトのほかツイッター（Twitter）やフェイスブック（Facebook）、
                    ユーチューブ（Youtube）などのソーシャルメディアを活用して腹膜透析の正しい情報を広めていきます。
                    それらSNSの情報も同様に医療関係者の監修を経ています。
                  </p>
                  <img class="alignnone  wp-image-188 info_img" src="http://dev.local/wp-content/uploads/2020/08/50-1.png" alt="メモ" width="445" height="297" />
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
  .site_info_cotent li .info_img{
    width: 70%;
    height: 70%;
    margin: 30px 0 100px;
  }
  .site_info_cotent li p img{
    width: 70%;
    height: 70%;
    margin: 30px 0 100px;
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

  @media screen and (max-width: 640px) {
    .container .article_wrap1{
      padding-right: 7%;
      padding-left: 7%;
    }
    .site_info_cotent li p{
      text-align: center;
    }

  }
  
</style>

