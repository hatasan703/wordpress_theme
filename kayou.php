<?php
/*
 * Template Name: 透析に通うのがつらいと思ったら
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="透析に通うのがツライと思ったら">
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <div class="article_wrap2">
          <div class="main_article_title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="透析に通うのがツライと思ったら">
            <h2><?php the_title(); ?></h2>
          </div>
          <a href="#kayou_table_of_contents">
            <button class="fixed_btn">
              <i class="fa fa-arrow-up" aria-hidden="true"></i><br>
              TOPへ<br>
              戻る
            </button>
          </a>
          <div class="article_text">
            <?php the_content(); ?>
          </div>
          <div class="table_of_contents" id="kayou_table_of_contents">
            <p>
              ■目次
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </p>
            <ul class="table_of_contents_lists">
              <li><a href="#kayou1">透析治療は様々な制限がある</a></li>
              <li><a href="#kayou2">「おうちで透析」という選択肢</a></li>
              <li><a href="#kayou3">血液透析と腹膜透析は併用できる</a></li>
              <li><a href="#kayou4">血液透析、腹膜透析、併用療法</a></li>
              <li><a href="#kayou5">「治療」の違い</a></li>
              <li><a href="#kayou6">「生活」の違い</a></li>
              <li><a href="#kayou7">「働く」ことは生きがいや希望につながる</a></li>
              <li><a href="#kayou8">生きるために透析をする</a></li>
              <li><a href="#kayou9">高齢のため、血液透析に通うのが難しくなったら</a></li>
              <li><a href="#kayou10">治療はひとりではできない、しっかりとコミュケーションをとること</a></li>
            </ul>
          </div>

          <div class="article_item">
            <h3>
              <span class="article_item_title" id="kayou1">透析治療は様々な制限がある</span>
            </h3>
            <p class="article_text">
              血液透析は、週の半分以上（基本は週３回）を透析治療に費やすことになります。
              これまで続けてきた仕事も、家族友人との遊びも、日々の食事も多くの制限があり、これまでの普通な生活が一変します。
              また、透析をする前と後の体調の不安定さが伴いますので、精神的にも大きな負担があることでしょう。
              この透析中心の生活を、ずっと続けていくと考えると、途方に暮れてしまいます。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span class="article_item_title" id="kayou2">「おうちで透析」という選択肢</span>
            </h3>
            <p class="article_text">
              もっと制限の少ない、ライフスタイルに合わせてできる透析治療はないものでしょうか。
              そう考えたなら、「おうちで透析」を一度、検討してみてください。<br>
              わが国は血液透析がメジャーな治療で、（おうちでできる）腹膜透析はマイナーな治療です。
              みんなが血液透析を選ぶから、疑わずに選んでいたのかもしれません。
              限られた時間に意思決定を迫られ、十分に話し合う時間もなく、また情報量の少なさから、
              自ら選択ができることをあきらめていたのかもしれません。<br>
              もし、これからも働きたい、会社を辞めたくない、自分の体の調子を見ながらできる限りのことをやっていきたい、
              ライフスタイルを変えたくないと考えるのなら選択肢の中に、おうちでできる「腹膜透析」を入れてみてください。
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou3">血液透析と腹膜透析は併用できる</span>
            </h3>
            <p class="article_text">
              血液透析と腹膜透析は併用することが可能です。
              たとえば、「腹膜透析を週５回自宅で行い、週１回だけ血液透析のために通院する。
              そして、週１回はお休みする」。この選択をすると、生活の幅は大きく広がります。
              腹膜透析は、自身のライフスタイルに合わせてオーダーメイドできる治療方法です。
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou4">血液透析、腹膜透析、併用療法</span>
            </h3>
            <div class="article_text">
              <p>
                血液透析、腹膜透析、併用療法、それぞれのメリットデメリットを知り、
                ご自身にあったものは何なのか、以下の表を参考にしてみてください。
              </p>
              <p class="notes">表：血液透析、腹膜透析、併用療法（治療）</p>
            </div>
            <p class="article_image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/43.png" alt="表">
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou5">「治療」の違い</span>
            </h3>
            <p class="article_text">
              「血液透析」は、通常は週３回、診療所や病院に通院して行う治療法です。
              それに対して、「腹膜透析」は自宅で自ら毎日行う治療法です。「併用療法（ハイブリット）」は、その両方を組み合わせた治療法です。
              どの透析療法も事前に「手術」が必要です。<br>
              血液透析は、両手にシャントと呼ばれる太い血管を作る手術を行います。
              一方、腹膜透析は透析液をお腹にいれるために、カテーテルと呼ばれるチューブをお腹に入れる手術を行います。<br>
              血液透析はダイアライザーと呼ばれる機器で血液を直接きれいにするため、治療効果としては腹膜透析より高いとされています。
              一方で、腹膜透析は自らの腹膜を使って血液をきれいにするため、血液透析に比べてゆっくりと行われます。
              そのため、腹膜透析は血液透析に比べて体への影響が少なく、血管や心臓への影響が少なく、
              また、残された腎臓の機能（残腎機能）を保護する効果も高いとされています。
              腹膜透析は、長く自ら尿を排出することが可能です。<br>
              血液透析は、医療機関で医療スタッフに治療自体はお任せできます。
              一方で、腹膜透析は自分や家族が透析液を交換するなど、自ら行う治療法ですので、全てお任せというわけにはいきません。
              効果の仕方や衛生管理の仕方を教えてもらって、自らが行う必要があります。<br>
              血液透析は、医療機関で医師や看護師の管理下で行われるため、何かトラブルがあってもその場で対応いただけるので安心です。
              一方、腹膜透析は自宅で行うので、「何かあったらどうしよう？」と不安に感じるかもしれません。
              政府の推進により、我が国では「在宅医療」が年々充実してきており、医師や訪問看護師が定期的に自宅に来てくれるようになりました。
              また、最近ではインターネットの発展により「遠隔監視（離れて患者の状態を見守る）」が可能になっており、
              トラブル時にも素早く対応できるようになっています。
              この遠隔監視は、腹膜透析で起きやすいとされる感染症に対しても効果があり、
              医師、看護師、介護士などが情報連携を行い、フォローする仕組みができています。<br>
              かつて腹膜透析で不安とされていた問題が、年々解消されているのです。
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou6">「生活」の違い</span>
            </h3>
            <div class="article_text">
              <p>生活の視点で、血液透析と腹膜透析の違いはどうでしょうか。</p>
              <p class="notes">表：血液透析、腹膜透析、併用療法（生活）</p>
              <p class="article_image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/44.png" alt="表">
            </p>
              <p>
                生活面では、仕事、食事制限、旅行、運動、入浴といずれも、腹膜透析は血液透析よりも制限が少ないとされています。
                腹膜透析は血液透析に比べて自宅で好きな時間でき、体への負担が少ないため、QOL（生活の質）が高いとされています。<br>
                血液透析と腹膜透析を組み合わせた併用療法を選ぶ方も増えています。これはハイブリットと呼ばれて、
                「治療効果の高い」血液透析のメリットと、「QOLの高い」腹膜透析のメリットを組み合わせた方法です。<br><br>
                このように、それぞれの療法について、治療面、生活面のメリットデメリットを踏まえて選択していただくと良いのですが、
                まずはご自身の年齢や何をしたいかを基準に考えて選択されると良いと思います。血液透析から腹膜透析へ移行する、
                腹膜透析から血液透析へ移行する、どちらも選択が可能です。主治医とよく相談して、最善の治療方法を選んでください。
                </p>
            </div>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou7">「働く」ことは生きがいや希望につながる</span>
            </h3>
            <p class="article_text">
              もし、透析治療を40代から始める必要となった場合、これから働ける時間はたくさんあります。
              働き続けなくてはならない理由もたくさんあります。
              働き続けることは、経済的な面はもちろんですが、生きがいや希望にもつながります。<br>
              いま、政府が進めている「働き方改革」は、残業の上限規制、有給休暇の取得、同一労働同一賃金など、
              様々ありますが、これまでなかなか進まなかった、働きたくても働けなかった方が「社会復帰をしやすい社会」を作ろうとする改革のことです。
              現在、新型コロナウイルスの感染拡大により、働く環境も大きく変わろうとしています。出勤を極力せずに、
              自宅でリモートワークを勧める会社がどんどん増えています。
              このような状況下で、「透析をしながら働くこと」に対して、職場の理解も進んでいくことでしょう。
              おうちで透析は、働きながら透析治療を行う上で最適です。<br>
              また、腹膜透析は出張も旅行も可能です。
              事前に関係者に連絡するなど、根回しは必要ですが、出張先、旅行先のホテルに透析液を届けてもらうことも可能です。
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou8">生きるために透析をする</span>
            </h3>
            <p class="article_text">
              本来は生きるために透析を選択しているはずです。
              しかしながら、つらい期間が続くと、つらいことが仕方のないと受け入れ、透析のために生きているような感覚になってきます。
              当たり前を変えるのはご自身であり、生き方を変えるのもご自身です。透析の治療法はいつでも変更が可能です。
              つらいと感じたら、治療法を変えてみてはいかがでしょうか。変えるという選択をすることで、いまより生活が楽になるかもしれません。
            </p>
          </div>

          <div class="article_item" >
            <h3>
              <span class="article_item_title" id="kayou9">高齢のため、血液透析に通うのが難しくなったら</span>
            </h3>
            <p class="article_text">
              長く血液透析を続け、年齢を重ねていくと、いずれ体力が落ち、歩くことも困難になっていきます。
              そうなると、血液透析に医療機関に通うのが難しくなっていきます。また、送迎してくれる家族も同じように高齢になっていきます。
              そうなると、入院での透析治療を行う必要が出てきます。「入院での透析」を選ぶか、「在宅での透析」を選ぶかは、ご自身の選択によります。<br>
              「限られた時間を家族といっしょに過ごしたい」「最期は自分の家で」と考えるならば、是非「おうちで透析」を選んでください。
              最期は患者さん自身のものだけではありません。見守る家族も家で看取ることができるということは、幸せなことなのです。
              入院患者の方の約８割が自分の家で死にたいと望むという事実が物語っています。<br>
              最期に見える景色が、家族の顔や安心できる家であることは、最高の幸せと言えるかもしれません。<br>
              生きることは死ぬことです。いつか来る最期を決めるのはご自身であり、家族なのです。
            </p>
          </div>

          <div class="article_item">
            <h3>
              <span class="article_item_title" id="kayou10">治療はひとりではできない、しっかりとコミュニケーションをとること</span>
            </h3>
            <p class="article_text">
              自らが幸せに過ごすためには、治療方法を選ぶことが大切です。
              しかしながら、自らが選んだ治療方法が家族に迷惑をかけるのではないかと恐れる気持ちはわかります。
              だからこそ、コミュニケーションを大事にしてください。<br>
              透析治療は一人ではできません。医師、看護師、家族、同僚、友達と一緒に進める必要があるのです。
              是非、話し合ってください。何でも言い合える関係性を構築することも、患者さんの未来を左右します。
              きちんと患者さんを理解して治療法や生活スタイルを提案してくれる医師であるかどうか、
              在宅を選んだ際に家族は協力してくれるか、何度も何度も繰り返し話し合ってください。<br><br>
              健康な時は死ぬことや、入院、自分が病気になることなど考えないものです。
              キャリアも、生き方も、楽しみも諦めない、そんな透析患者さんが増えることを切に願うとともに、
              そのことが実現できる医療体制の構築をお手伝いできればと思います。
            </p>
          </div>
        </div>

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
    <?php endwhile; else : ?>
      <p>まだ記事がありません</p>
    <?php endif; ?>
  </article>
</main>

<?php get_footer(); ?>