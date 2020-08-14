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
        <div class="page_title_border"></div>
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/53.png" alt="おうちでできる腹膜透析">
          </div>
          <button class="fixed_btn pc">
            <a href="#top">
              <img src="<?php echo get_template_directory_uri(); ?>/img/back_btn.png" alt="topへ戻る">
            </a>
          </button>
          <button class="fixed_btn sp">
            <a href="#top_sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/back_btn.png" alt="topへ戻る">
            </a>
          </button>

          <?php echo do_shortcode('[addtoany]'); ?>
          <?php the_content(); ?>
        <!-- <br><br><br><br>
        <div id="top" class="table_of_contents pc">
          <div class="table_of_contents_title">■目次
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </div>
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
            <li><a href="#kiso11">透析と新型コロナウイルス</a></li>
            <li><a href="#kiso12">透析医療機関は緊急事態が続いている</a></li>
            <li><a href="#kiso13">PDファースト</a></li>
            <li><a href="#kiso14">PDラスト</a></li>
            <li><a href="#kiso15">ハイブリット（血液・腹膜併用療法</a></li>
            <li><a href="#kiso16">透析患者数は約34万人</a></li>
            <li><a href="#kiso17">新規導入患者数と死亡数</a></li>
            <li><a href="#kiso18">透析の治療場所は外来・入院97％、在宅3％</a></li>
            <li><a href="#kiso19">夜間の透析患者</a></li>
          </ul>
        </div>
        <div id="top_sp" class="table_of_contents sp">
          <div class="table_of_contents_title">■目次
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </div>
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
            <li><a href="#kiso11_sp">透析と新型コロナウイルス</a></li>
            <li><a href="#kiso12_sp">透析医療機関は緊急事態が続いている</a></li>
            <li><a href="#kiso13_sp">PDファースト</a></li>
            <li><a href="#kiso14_sp">PDラスト</a></li>
            <li><a href="#kiso15_sp">ハイブリット（血液・腹膜併用療法</a></li>
            <li><a href="#kiso16_sp">透析患者数は約34万人</a></li>
            <li><a href="#kiso17_sp">新規導入患者数と死亡数</a></li>
            <li><a href="#kiso18_sp">透析の治療場所は外来・入院97％、在宅3％</a></li>
            <li><a href="#kiso19_sp">夜間の透析患者</a></li>
          </ul>
        </div>
          <div class="article_item">
            <h3>
              <span id="kiso1" class="article_item_title pc">腹膜透析とは</span>
              <p id="kiso1_sp" class="article_item_title sp">腹膜透析とは</p>
            </h3>
            <p class="article_text">「腹膜透析」とは、お腹の中に透析液を流し込み、一定時間貯めておくことで、
              体に不要な老廃物や余分な水分を、浸透圧効果を活用し、血液から「腹膜」を通して外に排出することで、
              血液をきれいにする治療方法です。
              「腹膜」とは、肝臓や胃、小腸、大腸などを覆っている膜で、腹膜は全体に毛細血管が網の目状に走っています。
              この腹膜をろ過フィルターのように利用します。
            </p>
            <p class="article_image"><img class="alignnone  wp-image-174" src="http://dev.local/wp-content/uploads/2020/08/36-1.png" alt="腎臓イラスト" width="701" height="354" /></p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso2" class="article_item_title pc">腎臓の働き、腎機能が低下すると…</span>
              <p id="kiso2_sp" class="article_item_title sp">腎臓の働き、腎機能が低下すると…</p>
            </h3>
            <p class="article_text">「腎臓」は体にとどまった老廃物を、尿を通して体外に排出する役割を持つ臓器です。
              その他にも、水分や電解質（ナトリウム、カリウム、リン他）などのからだの中でのバランスを整えたり、
              血圧を調節したり、ビタミンDをつくり（活性化）、骨を丈夫に保ったり、赤血球をつくる働きを助けたり、
              と様々な役割を担っています。
              この「腎臓」の機能がなんらかの理由で低下すると、老廃物や不要な水分が体内にとどまってしまいます。これを「尿毒症」と呼びます。
              この状態が続けば命の危険があります。そのため治療が必要になるのです。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso3" class="article_item_title pc">腎代替療法とは</span>
              <p id="kiso3_sp" class="article_item_title sp">腎代替療法とは</p>
            </h3>
            <p class="article_text">もし、腎臓の機能が10%を切ってしまうと、「腎不全」と診断され、「腎代替療法」という治療が必要になります。
              「腎代替療法」は大きく分けると、２つあります。「腎臓移植」と「人工透析」です。腎臓移植はドナーから腎臓を提供していただき、
              新たに健康な腎臓を交換することで、腎機能の改善を図る治療法です。
              一方、人工透析は、人工的に腎臓の機能を作り出すことで、腎機能の補完を行う治療法です。
            </p>
          </div>
          
          <div class="article_item">
            <h3>
              <span id="kiso4" class="article_item_title pc">腎臓移植の課題</span>
              <p id="kiso4_sp" class="article_item_title sp">腎臓移植の課題</p>
            </h3>
            <p class="article_text">「腎臓移植」は臓器を提供いただけるドナーが見つからなければ進みません。
              日本では脳死が認められていないなど、ドナーの数が決定的に少ないため、
              国内で腎移植がそれほど進んでいないのが現状です。腎臓移植を行うために、海外にで行うことも多くあります。
              したがって、腎移植を希望しても、ドナーが見つかるまでは、人工透析を行う必要があります。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso5" class="article_item_title pc">血液透析と腹膜透析</span>
              <p id="kiso5_sp" class="article_item_title sp">血液透析と腹膜透析</p>
            </h3>
            <p class="article_text">「人工透析」は大きく２つに分けられます。血液透析と腹膜透析です。
              「血液透析」は、ダイアライザーと呼ばれる人工的な機械を用いて、血液をきれいにする方法です。
              血液透析は通常、週3回通院し、一回につき4時間ほどの透析を受けます。
              機械が血液の中から不純物を除去します。
              透析を受けている間は、病院のベットでTVなどを見ながら過ごします。
              「腹膜透析」とは、お腹の中に透析液を流し込み、一定時間貯めておくことで、
              体に不要な老廃物や余分な水分を「腹膜」を通して外に排出することで、血液をきれいにする治療方法です。
              腹膜透析には、CAPD（持続携帯式腹膜透析）とAPD（自動腹膜透析）という二つの方法があります。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso6" class="article_item_title pc">CAPD（持続携帯式腹膜透析）</span>
              <p id="kiso6_sp" class="article_item_title sp">CAPD（持続携帯式腹膜透析）</p>
            </h3>
            <p class="article_text">「CAPD」の場合、朝昼晩、寝る前と毎日４回透析を行います。
              透析液を点滴の要領で体内に注入し、血液の中の不純物を排出していきます。
              透析をしている間は、ご自宅で自由に過ごすことが可能です。透析液などのパック交換は自ら行います。
            </p>
            <p class="article_image"><img class="alignnone  wp-image-175 image_37" src="http://dev.local/wp-content/uploads/2020/08/37-1.png" alt="CAPDイラスト" width="602" height="442" /></p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso7" class="article_item_title pc">APD（自動腹膜透析）</span>
              <p id="kiso7_sp" class="article_item_title sp">APD（自動腹膜透析）</p>
            </h3>
            <p class="article_text">「APD」の場合、毎日1回、一回につき7時間ほどの透析を行います。
              機械が自動でバック交換を行いますので、交換の手間はありません。
              主に治療は睡眠中に行いますが、日中に行うことも可能です。透析をしている間は、
              ご自宅で自由に過ごすことが可能です。
            </p>
            <p class="article_image"><img class="alignnone  wp-image-176 image_38" src="http://dev.local/wp-content/uploads/2020/08/38-1.png" alt="APDイラスト" width="394" height="348" /></p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso8" class="article_item_title pc">腹膜透析と生活</span>
              <p id="kiso8_sp" class="article_item_title sp">腹膜透析と生活</p>
            </h3>
            <p class="article_text">腹膜透析は医療機関に通わず、自宅で行える治療です。
            透析中も痛みなどはほとんどなく、両手が使えるため、普通に仕事をしたり、
            読書をしたりと自由に過ごすことが可能です。</p>
            <p class="article_image"><img class="alignnone  wp-image-172 image_34" src="http://dev.local/wp-content/uploads/2020/08/34-1.png" alt="CAPD/APD" width="588" height="370" /></p>
            <p class="article_text">患者さんのライフスタイルにあわせて、治療を方法が選べます。
              生活の質をQOLと呼びますが、QOLを下げずに透析をするために開発された仕組みです。
              自宅で自分の予定に合わせて透析を行うことが可能です。自らが行う方式ですので、
              旅行先や出張先でも行うことが可能です。
              医療機関の診察は月に一回程度です。診察もご自宅に来ていただけば、医療機関に行くことはありません。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso9" class="article_item_title pc">腹膜透析の手術</span>
              <p id="kiso9_sp" class="article_item_title sp">腹膜透析の手術</p>
            </h3>
            <p class="article_text">腹膜透析では、透析液を体内に流し込むために、
              お腹にカテーテルと呼ばれるチューブを入れるための手術が必要です。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso10" class="article_item_title pc">血液透析の手術</span>
              <p id="kiso10_sp" class="article_item_title sp">血液透析の手術</p>
            </h3>
            <p class="article_text">
              血液透析では、血液をダイアライザーに流し込むために、両腕にシャントと呼ばれる太い血管を作るための手術が必要です。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso11" class="article_item_title pc">透析と新型コロナウイルス</span>
              <p id="kiso11_sp" class="article_item_title sp">透析と新型コロナウイルス</p>
            </h3>
            <p class="article_text">透析患者は新型コロナウイルスにかかると、重症化する確率が高いとされ、政府も治療に際して、最新の注意を呼びかけています。
              ４月に厚生労働省が「新型コロナウイルス感染症に対応したがん患者・透析患者・障害児者・妊産婦・小児に係る医療提供体制について」の通知の中で、
              「透析患者が新型コロナウイルスに感染し、入院治療が必要となった場合や新型コロナウイルス感染症が重症化した場合を想定し、
              透析治療を行うことができる新型コロナウイルス感染症の入院患者、重症患者受入医療機関の設定を行うなど病床の確保に努めること」と、
              重症化リスクが高いとされる透析患者に対して、病床の確保を都道府県に要請しています。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso12" class="article_item_title pc">透析医療機関は緊急事態が続いている</span>
              <p id="kiso12_sp" class="article_item_title sp">透析医療機関は緊急事態が続いている</p>
            </h3>
            <p class="article_text">6月2日には、日本透析医学会、日本透析医会および日本腎臓学会は、
              「無症状の透析患者に対する SARS-CoV-2 の PCR 検査の適応基準」として、
              透析患者独自のルールを提案しています。そもそも透析患者は高齢者が多く、
              糖尿病や高血圧症など合併症を有する患者も多くいます。そのため、重症化するリスクが高いとされています。
              また、透析施設内で COVID-19の感染が発生した場合には、感染が拡大するのみならず、
              診療機能の抑制・停止に直結する可能性があるとしています。
              緊急事態宣言が解除され、経済再開が進んでいる中でも、透析医療の現場ではいまなお、緊急事態が続いているのです。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso13" class="article_item_title pc">PDファースト</span>
              <p id="kiso13_sp" class="article_item_title sp">PDファースト</p>
            </h3>
            <p class="article_text">「PDファースト」とは、透析治療が必要になった際に、「腹膜透析（PD）から始める」という選択をすることです。
              透析治療を腹膜透析から始めることで、透析開始後も血液透析（HD）に比べて長期間、
              尿が出ることが可能となり、残っている腎臓機能を保持できます。
              また、腹膜透析は自宅でできる透析なので、日常生活をしながら、治療を行うことができ、
              キャリアをあきらめなくても良いこともメリットです。
            </p>
          </div>


          <div class="article_item">
            <h3>
              <span id="kiso14" class="article_item_title pc">PDラスト</span>
              <p id="kiso14_sp" class="article_item_title sp">PDラスト</p>
            </h3>
            <p class="article_text">「PDラスト」とは、人生の終末期に「腹膜透析（PD）で終わる」という選択をすることです。
              血液透析を長く続けていると、心血管系の合併症（心筋梗塞や脳梗塞など）や血管の劣化などで血液透析を続けることが難しくなる、
              加齢に伴うADLの低下で通院治療が難しくなる、など血液透析を続けることが困難になる可能性があります。
              その場合に、腹膜透析に移行する選択肢があります。腹膜透析は、血液透析に比べて身体的負担が少なく、
              また自宅で日常生活をしながら治療を続けることが可能です。人生の最期を自宅で迎えるために、血液透析から腹膜透析に移行することが可能です。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso15" class="article_item_title pc">ハイブリット（血液・腹膜併用療法）</span>
              <p id="kiso15_sp" class="article_item_title sp">ハイブリット（血液・腹膜併用療法）</p>
            </h3>
            <p class="article_text">腹膜透析と血液透析を併用する「ハイブリット」と呼ばれる方法があります。
              腹膜透析を始めてしばらくすると、残った腎機能が低下して透析不足になる可能性があります。
              そうすると、体内の老廃物や過剰な水分が十分に排出できないため、腹膜透析の除去効率（きれいにする力）を上げていく必要があります。
              そこで、腹膜透析と血液透析併用することで、透析不足が解消できるのです。
              併用療法は、腹膜透析を週に５回行って、血液透析を週1回、残りの1日は何もしないという方法が一般的です。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso16" class="article_item_title pc">透析患者数は約34万人</span>
              <p id="kiso16_sp" class="article_item_title sp">透析患者数は約34万人</p>
            </h3>
            <p class="article_text">日本透析医学会の調査「わが国の慢性透析療法の現況」によると、
              2018年末の慢性透析療法を受けている患者総数は33万9841人で、
              人口100万人当たりの透析患者数2687人とされています。
              国民372.1人に1人が透析患者です。
              2018年の米国腎臓データシステム（United State Renal Data System： USRDS）によれば、
              日本の透析患者の有病率は台湾に次いで世界２位となっています。</p>
            <p class="article_image"><img class="alignnone  wp-image-178" src="http://dev.local/wp-content/uploads/2020/08/40-1.png" alt="透析患者数グラフ" width="495" height="338" /></p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso17" class="article_item_title pc">新規導入患者数と死亡数</span>
              <p id="kiso17_sp" class="article_item_title sp">新規導入患者数と死亡数</p>
            </h3>
            <div class="article_text">
                新規透析導入患者数は透析療法を受ける慢性腎臓病患者の罹病数（incidence）を表しています。
                この数は増減を繰り返しているものの、長い目でみると増加傾向にあります。
                2018年は40,468人で、2017年より491人減（1.2％減）であった。このうち HD等での導入は94.3％、PD での導入は5.7％であった。
                一方、各年の死亡患者数も年々増加傾向です。2018年の死亡患者数は33,863人で、前年と比べ1331人増（4.1％増）であった。
                一般的に、前年度の患者数に導入患者を加え、死亡患者を差し引いた数が当該年度の患者数と考えられる。
                しかし、移植による透析離脱患者が含まれないことや、導入患者数を過大評価したり死亡患者数を過小評価したりしている可能性があり、
                計算上の患者数と実際の患者数は一致しない。
              <p class="article_image image_41"><img class="alignnone  wp-image-179" src="http://dev.local/wp-content/uploads/2020/08/41-1.png" alt="新規導入患者数と死亡者数グラフ" width="398" height="347" /></p>
              <p class="notes">
                出典：一般社団法人日本透析医学会「わが国の慢性透析療法の現況」（2018年末時点）
              </p>
            </div>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso18" class="article_item_title pc">透析の治療場所は外来・入院97％、在宅3％</span>
              <p id="kiso18_sp" class="article_item_title sp">透析の治療場所は外来・入院97％、在宅3％</p>
            </h3>
            <p class="article_text">透析治療形態の割合では、血液透析（HD）が59.6％、血液透析濾過（HDF）が37.0％に対して、
            腹膜透析（PD）が2.8％、在宅血液透析（HHD）が0.2％となっています。
            医療機関等の施設で透析治療を行っている患者が97％、在宅で透析治療を行っている患者が3％で、
            この数字は先進諸国の中では最も低い部類に入るとされています。
            わが国は、様々な理由から、在宅での透析がほとんど進んでいないのが実態なのです。
            コロナ禍で多くの患者が外来受診を控え、入院治療から在宅に切り替える患者が増えている中、
            透析患者は医療機関に通わざるを得ない現状があるのです。
          </p>
          </div>

          <div class="article_item">
            <h3>
              <span id="kiso19" class="article_item_title pc">夜間の透析患者</span>
              <p id="kiso19_sp" class="article_item_title sp">夜間の透析患者</p>
            </h3>
            <p class="article_text">2018年の夜間透析患者数は 31,544人です。夜間透析患者数は 2014年調査までは41,000 ～42,000人で推移してきたが、
            2015年は33,370人と急激に減少した。これは2015年調査において、
            夜間透析患者の定義を「保険で認められる時間帯（午後 ５時以降開始もしくは午後9時以降終了）の透析です。」と追記したことが影響した可能性がある。
            2015年以降も少しずつ減少しており、2018年は2017年に比べて、372人減少しています。
          </p>
          </div> -->

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
