<?php
/*
 * Template Name: 腹膜透析の基礎知識
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/35.png" alt="腹膜透析の基礎知識">
    </div>
    <div class="page_title sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/35.png" alt="腹膜透析の基礎知識">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/53.png" alt="おうちでできる腹膜透析">
          </div>
          <?php echo do_shortcode('[addtoany]'); ?>
          <?php the_content(); ?>
          <!-- <p>&nbsp;</p>
<div id="top" class="table_of_contents pc">
<div class="table_of_contents_title">■目次 <i class="fa fa-angle-down" aria-hidden="true"></i></div>
<ul class="table_of_contents_lists">
<li><a href="#kiso1">腹膜透析とは</a></li>
<li><a href="#kiso2">腎臓の働き、腎機能が低下すると…</a></li>
<li><a href="#kiso3">腎代替療法とは</a></li>
<li><a href="#kiso4">腎臓移植の課題</a></li>
<li><a href="#kiso5">血液透析と腹膜透析</a></li>
<li><a href="#kiso6">CAPD（持続携帯式腹膜透析</a></li>
<li><a href="#kiso7">APD（自動腹膜透析）</a></li>
<li><a href="#kiso8">腹膜透析と生活</a></li>
<li><a href="#kiso9">腹膜透析の手術</a></li>
<li><a href="#kiso10">血液透析の手術</a></li>
<li><a href="#kiso11">PDファースト</a></li>
<li><a href="#kiso12">PDラスト</a></li>
<li><a href="#kiso13">ハイブリット（血液・腹膜併用療法</a></li>
<li><a href="#kiso14">透析の治療場所は外来・入院97％、在宅3％</a></li>
</ul>
</div>
<div id="top_sp" class="table_of_contents sp">
<div class="table_of_contents_title">■目次 <i class="fa fa-angle-down" aria-hidden="true"></i></div>
<ul class="table_of_contents_lists">
<li><a href="#kiso1_sp">腹膜透析とは</a></li>
<li><a href="#kiso2_sp">腎臓の働き、腎機能が低下すると…</a></li>
<li><a href="#kiso3_sp">腎代替療法とは</a></li>
<li><a href="#kiso4_sp">腎臓移植の課題</a></li>
<li><a href="#kiso5_sp">血液透析と腹膜透析</a></li>
<li><a href="#kiso6_sp">CAPD（持続携帯式腹膜透析</a></li>
<li><a href="#kiso7_sp">APD（自動腹膜透析）</a></li>
<li><a href="#kiso8_sp">腹膜透析と生活</a></li>
<li><a href="#kiso9_sp">腹膜透析の手術</a></li>
<li><a href="#kiso10_sp">血液透析の手術</a></li>
<li><a href="#kiso11_sp">PDファースト</a></li>
<li><a href="#kiso12_sp">PDラスト</a></li>
<li><a href="#kiso13_sp">ハイブリット（血液・腹膜併用療法</a></li>
<li><a href="#kiso14_sp">透析の治療場所は外来・入院97％、在宅3％</a></li>
</ul>
</div>
<div class="article_item">
<h3><span id="kiso1" class="article_item_title pc">腹膜透析とは</span></h3>
<p id="kiso1_sp" class="article_item_title sp">腹膜透析とは</p>
<p class="article_text">「腹膜透析」とは、お腹の中に透析液を流し込み、一定時間貯めておくことで、 体に不要な老廃物や余分な水分を、「腹膜」を通して血液から外に排出することで、血液をきれいにする治療方法です。<br />「腹膜」とは、肝臓や胃、小腸、大腸などを覆っている膜で、腹膜は全体に毛細血管が網の目状に走っています。 この腹膜をろ過フィルターのように利用します。</p>
<p class="article_image"><img src="https://fukumakutouseki-staging.stg-s.snapup.jp/wp-content/uploads/2020/08/36-300x151.png" alt="" width="300" height="151" class="alignnone size-medium wp-image-253" /></p>
</div>
<div class="article_item">
<h3><span id="kiso2" class="article_item_title pc">腎臓の働き、腎機能が低下すると…</span></h3>
<p id="kiso2_sp" class="article_item_title sp">腎臓の働き、腎機能が低下すると…</p>
<p class="article_text">「腎臓」は体にとどまった老廃物を、尿を通して体外に排出する役割を持つ臓器です。 その他にも、体の中の水分や電解質（ナトリウム、カリウム、リン他）などのバランスを整えたり、 血圧を調節したり、ビタミンDをつくり（活性化）、骨を丈夫に保ったり、赤血球をつくる働きを助けたり、 と様々な役割を担っています。<br />この「腎臓」の機能がなんらかの理由で低下すると、老廃物や不要な水分が体内にとどまってしまいます。これを「尿毒症」と呼びます。 この状態が続けば命の危険があります。そのため治療が必要になるのです。</p>
</div>
<div class="article_item">
<h3><span id="kiso3" class="article_item_title pc">腎代替療法とは</span></h3>
<p id="kiso3_sp" class="article_item_title sp">腎代替療法とは</p>
<p class="article_text">もし、腎臓の機能が10%を切ってしまうと、「腎不全」と診断され、「腎代替療法」という治療が必要になります。 「腎代替療法」は大きく分けると、２つあります。「腎臓移植」と「人工透析」です。腎臓移植はドナーから腎臓を提供していただき、 新たに健康な腎臓を植えることで、腎機能の改善を図る治療法です。 一方、人工透析は、人工的に腎臓の機能を作り出すことで、腎機能の補完を行う治療法です。</p>
</div>
<div class="article_item">
<h3><span id="kiso4" class="article_item_title pc">腎臓移植の課題</span></h3>
<p id="kiso4_sp" class="article_item_title sp">腎臓移植の課題</p>
<p class="article_text">「腎臓移植」は臓器を提供いただけるドナーが見つからなければ進みません。 日本ではドナーの数が決定的に少ないため、 国内で腎移植がそれほど進んでいないのが現状です。腎臓移植を行うために、海外にで行うことも多くあります。 したがって、腎移植を希望しても、ドナーが見つかるまでは、人工透析を行う必要があります。</p>
</div>
<div class="article_item">
<h3><span id="kiso5" class="article_item_title pc">血液透析と腹膜透析</span></h3>
<p id="kiso5_sp" class="article_item_title sp">血液透析と腹膜透析</p>
<p class="article_text">「人工透析」は大きく２つに分けられます。血液透析と腹膜透析です。<br />「血液透析」は、ダイアライザーと呼ばれる人工的な機械を用いて、血液をきれいにする方法です。 血液透析は通常、週3回通院し、一回につき4時間ほどの透析を受けます。 機械が血液の中から不純物を除去します。 透析を受けている間は、病院で座った状態または寝た状態で過ごします。<br />「腹膜透析」とは、お腹の中に透析液を流し込み、一定時間貯めておくことで、 体に不要な老廃物や余分な水分を「腹膜」を通して外に排出することで、血液をきれいにする治療方法です。 腹膜透析には、CAPD（持続携帯式腹膜透析）とAPD（自動腹膜透析）、両方を合わせたCCPDなどの方法があります。</p>
</div>
<div class="article_item">
<h3><span id="kiso6" class="article_item_title pc">CAPD（持続携帯式腹膜透析）</span></h3>
<p id="kiso6_sp" class="article_item_title sp">CAPD（持続携帯式腹膜透析）</p>
<p class="article_text">「CAPD」の場合、朝昼晩、寝る前と毎日４回程度透析を行います。 透析液を点滴の要領で体内に注入し一定時間貯めることにより、血液の中の不純物を排出していきます。 透析をしている間は、自由に過ごすことが可能です。透析液が入ったバッグの交換は自ら行います。</p>
<p class="article_image"><img src="https://fukumakutouseki-staging.stg-s.snapup.jp/wp-content/uploads/2020/08/37-300x220.png" alt="" width="300" height="220" class="alignnone size-medium wp-image-254" /></p>
</div>
<div class="article_item">
<h3><span id="kiso7" class="article_item_title pc">APD（自動腹膜透析）</span></h3>
<p id="kiso7_sp" class="article_item_title sp">APD（自動腹膜透析）</p>
<p class="article_text">「APD」の場合、毎日1回、一回につき7時間ほどの透析を行います。 機械が自動でバッグ交換を行いますので、交換の手間はありません。 主に治療は睡眠中に行いますが、日中に行うことも可能です。透析をしている間は、 ご自宅で自由に過ごすことが可能です。</p>
<p class="article_image"><img src="https://fukumakutouseki-staging.stg-s.snapup.jp/wp-content/uploads/2020/08/38-300x265.png" alt="" width="300" height="265" class="alignnone size-medium wp-image-255" /></p>
</div>
<div class="article_item">
<h3><span id="kiso8" class="article_item_title pc">腹膜透析と生活</span></h3>
<p id="kiso8_sp" class="article_item_title sp">腹膜透析と生活</p>
<p class="article_text">腹膜透析は医療機関に頻繁に通わず、自宅で行える治療です。 透析中も痛みなどはほとんどなく、両手が使えるため、普通に仕事をしたり、 読書をしたりと自由に過ごすことが可能です。</p>
<p class="article_image"><img src="https://fukumakutouseki-staging.stg-s.snapup.jp/wp-content/uploads/2020/08/39-300x189.png" alt="CAPD/APDイラスト" width="300" height="189" class="alignnone size-medium wp-image-256" /></p>
<p class="article_text">患者さんのライフスタイルにあわせて、治療を方法が選べます。 生活の質をQOLと呼びますが、QOLを下げずに透析をするために開発された仕組みです。 自宅で自分の予定に合わせて透析を行うことが可能です。<br />自らが行う方式ですので、 旅行先や出張先でも行うことが可能です。 医療機関の診察は月に一回程度です。 高齢などで外来に行けない方は医師に自宅に来ていただければ、医療機関に行くことはありません。</p>
</div>
<div class="article_item">
<h3><span id="kiso9" class="article_item_title pc">腹膜透析の手術</span></h3>
<p id="kiso9_sp" class="article_item_title sp">腹膜透析の手術</p>
<p class="article_text">腹膜透析では、透析液を体内に流し込むために、 お腹にカテーテルと呼ばれるチューブを入れるための手術が必要です。</p>
</div>
<div class="article_item">
<h3><span id="kiso10" class="article_item_title pc">血液透析の手術</span></h3>
<p id="kiso10_sp" class="article_item_title sp">血液透析の手術</p>
<p class="article_text">血液透析では、血液を血管から取り出してダイアライザーに流し込むために、シャントと呼ばれる太い血管を作るための手術が必要です。</p>
</div>
<div class="article_item">
<h3><span id="kiso11" class="article_item_title pc">PDファースト</span></h3>
<p id="kiso11_sp" class="article_item_title sp">PDファースト</p>
<p class="article_text">「PDファースト」とは、透析治療が必要になった際に、「腹膜透析（PD）から始める」という選択をすることです。 透析治療を腹膜透析から始めることで、透析開始後も血液透析（HD）に比べて長期間、 尿が出ることが可能となり、残っている腎臓機能を保持できます。 また、腹膜透析は自宅でできる透析なので、日常生活をしながら、治療を行うことができ、 キャリアをあきらめなくても良いこともメリットです。</p>
</div>
<div class="article_item">
<h3><span id="kiso12" class="article_item_title pc">PDラスト</span></h3>
<p id="kiso12_sp" class="article_item_title sp">PDラスト</p>
<p class="article_text">「PDラスト」とは、人生の終末期に「腹膜透析（PD）で終わる」という選択をすることです。 透析を長く続けていると、心血管系の合併症（心筋梗塞、弁膜症、心不全や脳梗塞など）や血管の劣化などで血液透析を続けることが難しくなる、 加齢に伴うADLの低下で通院治療が難しくなる、など血液透析を続けることが困難になる可能性があります。 その場合に、腹膜透析に移行する選択肢があります。腹膜透析は、血液透析に比べて心血管系への負担が少なく、 また通院をせずに自宅で日常生活をしながら治療を続けることが可能です。 人生の最期を自宅で迎えるために、血液透析から腹膜透析に移行することが可能です。</p>
</div>
<div class="article_item">
<h3><span id="kiso13" class="article_item_title pc">ハイブリット（血液・腹膜併用療法）</span></h3>
<p id="kiso13_sp" class="article_item_title sp">ハイブリット（血液・腹膜併用療法）</p>
<p class="article_text">腹膜透析と血液透析を併用する「ハイブリット」と呼ばれる方法があります。 腹膜透析が長期になると腹膜機能が低下して透析不足になる可能性があります。 そうすると、体内の老廃物や過剰な水分が十分に排出できなくなります。 そこで、腹膜透析と血液透析併用することで、透析不足が解消できるのです。 併用療法は、腹膜透析を週に５回行って、血液透析を週1回、残りの1日は何もしないという方法が一般的です。</p>
</div>
<div class="article_item">
<h3><span id="kiso14" class="article_item_title pc">透析の治療場所は外来・入院97％、在宅3％</span></h3>
<p id="kiso14_sp" class="article_item_title sp">透析の治療場所は外来・入院97％、在宅3％</p>
<p class="article_text">透析治療形態の割合では、血液透析（HD）が59.6％、血液透析濾過（HDF）が37.0％に対して、 腹膜透析（PD）が2.8％、在宅血液透析（HHD）が0.2％となっています。 医療機関等の施設で透析治療を行っている患者が97％、在宅で透析治療を行っている患者が3％で、 この数字は先進諸国の中では最も低い部類に入るとされています。 わが国は、様々な理由から、在宅での透析がほとんど進んでいないのが実態なのです。 コロナ禍で多くの患者が外来受診を控え、入院治療から在宅に切り替える患者が増えている中、 透析患者は医療機関に通わざるを得ない現状があるのです。</p>
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
    .table_of_contents_lists{
      margin-right: 0;
      padding-right: 0;
    }
    .container .article_wrap1{
      padding-left: 7%;
      padding-right: 7%;
    }
  }

</style>
