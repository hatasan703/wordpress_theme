<?php
/*
 * Template Name: おうちでできる腹膜透析
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/32.png" alt="おうちでできる腹膜透析">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/32.png" alt="おうちでできる腹膜透析">
      <div class="page_title_content">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <?php get_template_part( 'partials/article', 'head' ); ?>
        <div class="article_wrap1">
          <div class="site_info_title">
            <h2 class=""><?php the_title(); ?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/55.png" alt="おうちでできる腹膜透析">
          </div>

          <?php echo do_shortcode('[addtoany]'); ?>
          <?php the_content(); ?>
          <!-- <p class="article_text">皆さんが「透析」と聞いて頭に浮かぶイメージとはどのようなものでしょうか。
            周囲に透析をされている方がいれば、ある程度はイメージができることでしょう。
            透析に対するイメージは「大変そう」という漠然な不安ではないでしょうか。
            それは知識が不足しているから起きる不安です。透析について学び正しい知識を得ることが大切です。
          </p>

          <div id="top" class="table_of_contents pc">
            <div class="table_of_contents_title">■目次
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
            <ul class="table_of_contents_lists">
              <li><a href="#home1">透析患者の数</a></li>
              <li><a href="#home2">なぜ、透析が必要なの？</a></li>
              <li><a href="#home3">どんな治療方法があるの</a></li>
              <li class="sub"><a href="#home4">血液透析とは</a></li>
              <li class="sub"><a href="#home5">腹膜透析とは</a></li>
              <li><a href="#home6">おうちでできる透析がある</a></li>
              <li><a href="#home7">新型コロナウイルス感染症と透析治療</a></li>
              <li><a href="#home8">ライフスタイルに合わせて治療方法を選べる時代</a></li>
              <li><a href="#home9">仕事をしながら治療ができる</a></li>
              <li><a href="#home10">治療法を選択する勇気</a></li>
            </ul>
          </div>
          <div id="top_sp" class="table_of_contents sp">
            <div class="table_of_contents_title">■目次
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
            <ul class="table_of_contents_lists">
              <li><a href="#home1_sp">透析患者の数</a></li>
              <li><a href="#home2_sp">なぜ、透析が必要なの？</a></li>
              <li><a href="#home3_sp">どんな治療方法があるの</a></li>
              <li class="sub"><a href="#home4_sp">血液透析とは</a></li>
              <li class="sub"><a href="#home5_sp">腹膜透析とは</a></li>
              <li><a href="#home6_sp">おうちでできる透析がある</a></li>
              <li><a href="#home7_sp">新型コロナウイルス感染症と透析治療</a></li>
              <li><a href="#home8_sp">ライフスタイルに合わせて治療方法を選べる時代</a></li>
              <li><a href="#home9_sp">仕事をしながら治療ができる</a></li>
              <li><a href="#home10_sp">治療法を選択する勇気</a></li>
            </ul>
          </div>
            <div class="article_item">
              <h3>
                <span id="home1" class="article_item_title pc">透析患者の数</span>
                <p id="home1_sp" class="article_item_title sp">透析患者の数</p>
              </h3>
              <p class="article_text">現在、我が国では約34万人（2018年末時点）の患者が透析治療を行っており、380人に１人の割合で透析患者がいる計算となります。
              人口あたりの透析患者数は台湾に次いで、世界で第二位です。<br>
              透析にいたる病気は「糖尿病（腎症）」が最も多く、糖尿病は生活習慣病の一つであり、
              健康管理をしっかりしておかないと誰にでも発症する可能性がある病気です。糖尿病になる原因は、
              肥満、運動不足、過度な飲酒、ストレスなど、素因は身近にあるものばかりです。</p>
              <p class="article_image"><img class="alignnone wp-image-171 image_33" src="http://dev.local/wp-content/uploads/2020/08/33-1.png" alt="患者数イラスト" width="489" height="212" /></p>
            </div>
            <div class="article_item">
              <h3>
                <span id="home2" class="article_item_title pc">なぜ、透析が必要なの？</span>
                <p id="home2_sp" class="article_item_title sp">なぜ、透析が必要なの？</p>
              </h3>
              <p class="article_text">そもそもなぜ、透析が必要なのでしょうか。透析は、病気により腎臓の機能が低下し、
              腎不全（正常の時の10%以下）になると必要になります。
              腎臓の役割は私たちの体内の老廃物を濾過して体の外に出すことです。
              その腎臓が機能しなくなると尿が出なくなり、体内に毒素（不純物）が留まる状態になります。
              これを「尿毒症」と言い、進行すると「めまいや嘔吐、頭痛、昏睡状態」と生命の危機に関わります。
              こうした状態を防ぐ処置として腎移植または人工透析が必要となるのです。
              中でも人工透析では余分な水分や老廃物を除去して体を正常な状態に保つのです。
              </p>

            </div>
            <div class="article_item">
              <h3>
                <span id="home3" class="article_item_title pc">どんな治療方法があるの</span>
                <p id="home3_sp" class="article_item_title sp">どんな治療方法があるの</p>
              </h3>
              <p class="article_text">
                医師から突然、「透析が必要」と告げられたら、誰もがどう受け止めたら良いのか途方に暮れることでしょう。
                まずは、どのような透析治療を選ぶかが大切です。透析治療は、大きく分けて
                <span>「血液透析（ＨＤ）」</span>と<span>「腹膜透析（ＰＤ）」</span>
                の二種類があります。
                それぞれの特徴を見てみましょう。
              </p>

              <h4 id="home4">
                <span class="article_item_title2">血液透析とは</span>
              </h4>
              <p class="article_text">
                「血液透析」は、ダイアライザー（血液をろ過する装置）という機械を用いて、
                血液自体をきれいにして体内に戻す方法です。この治療を行うためには、
                病院やクリニックなど透析施設に週3回程度通う必要があります。
                治療は、通常1回につき約4時間かかります。<br>
                血液透析は、医療機関で医療スタッフが行う治療です。
                また、患者の金銭的負担もほぼありません。ただし、食事や水分の制限、入浴の制限、週3回の通院があることで、
                日常生活のほとんどは治療と向き合うことになります。
              </p>

              <h4 id="home5">
                <span class="article_item_title2">腹膜透析とは</span>
              </h4>
              <p class="article_text">
                「腹膜透析」は、体内にある腹膜を用いて、余分な水分や老廃物を除去する治療です。
                腹膜とは肝臓や胃腸をおおっている膜のことで、この腹膜に囲まれた部分を「腹腔」（ふくくう）といい、
                腹腔に一定時間、透析液を貯めておくことで、血液を腹膜を介して濾過していきます。この治療は、自宅でほぼ毎日行います。
                医療機関への通院は月１回程度です。<br>

                腹膜透析にはいくつかの方法がありますが、「CAPD（連続携行式腹膜透析）」と「APD（自動腹膜透析）」の２つが代表的です。
                「CAPD」の場合、１日に数回、一回につき3時間ほどの透析液をお腹の中に貯めて透析を行います。医療上の必要性やライフスタイルに合わせて、
                １日あたりの回数や１回あたりのお腹に貯める時間を検討していくことが可能です。透析液をお腹に挿入されているチューブを通じて体内に注入し、
                血液中の余分な水分や老廃物を排出していきます。「APD」の場合、機械が自動でバッグ交換を行いますので、
                交換の手間はありません。透析をしている間は自宅で自由に過ごすことが可能です。
              </p>
              <p class="article_image">
                <img class="alignnone wp-image-172 image_34" src="http://dev.local/wp-content/uploads/2020/08/34-1.png" alt="CAPD/APD" width="607" height="382" />
              </p>

            </div>
            <div class="article_item">
              <h3>
                <span id="home6" class="article_item_title pc">おうちでできる透析がある</span>
                <p id="home6_sp" class="article_item_title sp">おうちでできる透析がある</p>
              </h3>
              <p class="article_text">
                腹膜透析は自宅でできる、つまり「おうちでできる透析治療」です。
                しかしながら、現在の透析を行う場所は、医療機関等の施設が「97％」、在宅が「3％」です。
                この数字は先進諸国の中では最も低い部類に入るとされています。わが国は、様々な理由から、
                在宅での透析がほとんど進んでいないのが現状です。<br><br>
                <span class="back_color">「おうちでできる透析」この選択肢があることを忘れないでください。</span>
              </p>

            </div>
            <div class="article_item">
              <h3>
                <span id="home7" class="article_item_title pc">新型コロナウイルス感染症と透析治療</span>
                <p id="home7_sp" class="article_item_title sp">新型コロナウイルス感染症と透析治療</p>
              </h3>
              <p class="article_text">
                「現在、「新型コロナウイルス感染症」が世界的に感染が拡大しています。
                このような感染症に対して透析患者は重症化リスクが高いとされています。
                患者は透析治療によって免疫力が低下しているため、重症化する可能性が高く、
                また透析施設では複数名の治療を同時に行うことから、密な空間で治療を行わなければなりません。
                透析はそのような状況下であるため、感染可能性が高く、またクラスターになるリスクが高いことから、
                新型コロナウイルスに対して、最も注意が必要な疾患とされています。もちろん医療現場では密の対策をしっかりととっていますが、そうはいっても不安を感じる方は多いでしょう。<br>
                新型コロナウイルスは、我々が当たり前と思っていることを、当たり前ではなくします。
                家族と一緒にいられる時間や、当たり前と思って過ごしている何気ない日常は、ある日突然に当たり前ではなくなるのです。<br>
                このようなコロナ禍においては、密を避け安全安心な治療を希望する方も増えています。
                自宅でできる腹膜透析や、通院回数が減らせる併用療法がその受け皿になっています。
              </p>

            </div>
            <div class="article_item">
              <h3>
                <span id="home8" class="article_item_title pc">ライフスタイルに合わせて治療方法を選べる時代</span>
                <p id="home8_sp" class="article_item_title sp">ライフスタイルに合わせて治療方法を選べる時代</p>
              </h3>
              <p class="article_text">
                ライフスタイルに合わせてご自身で治療方法を選択する時代がやってきました。
                働き盛りの年齢に、ご自身が透析が必要になった場合、どんな思いが脳裏に浮かぶでしょうか。
                透析治療をしながら、「家族を養っていけるのか」「子供を育てていけるのか」、きっと不安と絶望感に襲われることでしょう。
                キャリアをあきらめ、ライフスタイルを変えるという決断は、精神的に大きなものでしょう。
                まだ働きたい、人生を楽しみたいという気持ちはいきなり捨てられるものではありません。おうちで仕事をしながら治療ができるならば、
                一筋の希望の光が差し込むのではないでしょうか。<br>
                おうちで透析を是非お考えください。
                腹膜透析はライフスタイルやキャリアデザインを大幅に変えることなく生活の質（Q O L）を保ちながら生きていくために開発された仕組みです。
              </p>

            </div>
            <div class="article_item">
            <h3>
              <span id="home9" class="article_item_title pc">仕事をしながら治療ができる</span>
              <p id="home9_sp" class="article_item_title sp">仕事をしながら治療ができる</p>
            </h3>
            <p class="article_text">
              腹膜透析は、自らが透析治療を行うため、仕事もできます。出張もできます。
              家族旅行もできます。透析が必要になったからといって、人生を諦めなくても良いのです。
              きちんとした情報を得ることにより、あなたの今の生活をできる限り変えないで過ごすことが可能なのです。<br>
              最近では「ながら就業」も当たり前となってきました。癌をはじめとした長期に闘わなくてはならない病気でも、
              自身の納得のいくライフスタイルに合わせたものを選択することにより、仕事を続けることができるのです。
              実際、腹膜透析を選択したことで、今の働き方とほぼ変わることなく、仕事を続けている方もいらっしゃいます。
            </p>

            </div>
            <div class="article_item">
            <h3>
              <span id="home10" class="article_item_title pc">治療法を選択する勇気</span>
              <p id="home10_sp" class="article_item_title sp">治療法を選択する勇気</p>
            </h3>
            <p class="article_text">
              医師から透析の宣告を受けた際、「自ら治療法を選択する勇気」を持って頂きたいのです。
              勇気を持つためには、正しい情報を多く集めることや、それを冷静に判断できる状況、
              そして家族の理解と手助けが必要になります。
              未来への希望を捨てないためにも、治療法は患者自身が選ぶべきなのです。
              医療は出会いです。納得のいかないことや、不安でいっぱいのまま医師や周りの意見を受け入れるのではなく、
              自分が病気になった時にやるべきことは、まず何より情報を集めることです。
              将来、どのように過ごしていきたいかを見つめ直すことも大切です。<br>
              血液透析を選ぶことも、腹膜透析を選ぶことも、ご自身が納得される選択であれば問題はありません。
              かつては、医師から言われることは絶対的であると思われていました。
              今は違います。治療方法を自分で選択しましょう。
              医師には正しい状態とあなたのベストな治療法の選択肢を提案してもらいましょう。<br>
              透析治療が必要になったからといって、キャリアを、人生を、あきらめなくても良い時代が来ているのです。
            </p>
          </div> -->

          <!-- 固定-->
          <?php get_template_part( 'partials/side', 'bar' ); ?>
          <!-- -------- -->

        </div>

        
      </div>
    <?php endwhile; else : ?>
      <p>まだ記事がありません</p>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>


<style>
@media screen and (max-width: 640px) {
  #home7{
    padding: 15px 0;
    letter-spacing: 0.1em;
  }
}
</style>
