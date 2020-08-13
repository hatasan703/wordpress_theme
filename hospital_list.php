<?php
/*
 * Template Name: 在宅腹膜透析実施病院リスト
 */
?>

<?php get_header(); ?>

<main>
  <!-- <div class="container"> -->
    <article>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="page_title pc">
            <div class="page_title_content">
              <div class="page_title_border"></div>
              <h1>
                <span><?php the_title(); ?></span>
              </h1>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/29.png" alt="在宅腹膜透析実施病院リスト">
          </div>
          <div class="page_title sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/29.png" alt="在宅腹膜透析実施病院リスト">
            <div class="page_title_content">
              <div class="page_title_border"></div>
              <h1>
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
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


            <?php echo do_shortcode('[addtoany]'); ?>
            <?php the_content(); ?>


              <!-- <div class="article_title">
                在宅腹膜透析の実施病院リストです。<br>
                お住まいの地域をクリックしてください。
              </div>
              <div class="hospital_list_btn">
                <a>関東の病院</a>
                <a>関西の病院</a>
                <a>中国･四国の病院</a>
                <a>東北の病院</a>
                <a>中部の病院</a>
                <a>九州の病院</a>
              </div>
              <div class="hospital_list">
                <h2 class="hospital_area">
                  関東の病院
                </h2>
                <div class="hospital_list">
                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">柴垣医院 自由が丘</p>
                      <p class="hospital_place">東京都</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒152-0035</p>
                        <p>
                          <a href="https://www.google.com/maps/place/%E6%9F%B4%E5%9E%A3%E5%8C%BB%E9%99%A2+%E8%87%AA%E7%94%B1%E3%81%8C%E4%B8%98/@35.6084183,139.6703683,17z/data=!3m1!5s0x6018f51f7c9536a1:0xd5948abf93fed8d4!4m12!1m6!3m5!1s0x0:0x85ffbb901c1de9a8!2z5p-05Z6j5Yy76ZmiIOiHqueUseOBjOS4mA!8m2!3d35.608113!4d139.670497!3m4!1s0x0:0x85ffbb901c1de9a8!8m2!3d35.608113!4d139.670497" taget="_blank">東京都目黒区自由が丘1-13-4<br>
                          シャイン自由が丘ビル２F
                          </a>
                        </p>
                        <p>☎︎ 03-3724-2626</p>
                        <p>jiyugaoka@sibagakiiin.com</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            12:30-16:45<br>
                            17:00-22:30
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">柴垣医院 自由が丘</p>
                      <p class="hospital_place">東京都</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒152-0035</p>
                        <p>
                          <a href="https://www.google.com/maps/place/%E6%9F%B4%E5%9E%A3%E5%8C%BB%E9%99%A2+%E8%87%AA%E7%94%B1%E3%81%8C%E4%B8%98/@35.6084183,139.6703683,17z/data=!3m1!5s0x6018f51f7c9536a1:0xd5948abf93fed8d4!4m12!1m6!3m5!1s0x0:0x85ffbb901c1de9a8!2z5p-05Z6j5Yy76ZmiIOiHqueUseOBjOS4mA!8m2!3d35.608113!4d139.670497!3m4!1s0x0:0x85ffbb901c1de9a8!8m2!3d35.608113!4d139.670497" taget="_blank">東京都目黒区自由が丘1-13-4<br>
                          シャイン自由が丘ビル２F
                          </a>
                        </p>
                        <p>☎︎ 03-3724-2626</p>
                        <p>jiyugaoka@sibagakiiin.com</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            12:30-16:45<br>
                            17:00-22:30
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <h2 class="hospital_area">
                  関西の病院
                </h2>
                <div class="hospital_list">
                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">柴垣医院 自由が丘</p>
                      <p class="hospital_place">大阪府</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒152-0035</p>
                        <p>
                          <a href="https://www.google.com/maps/place/%E6%9F%B4%E5%9E%A3%E5%8C%BB%E9%99%A2+%E8%87%AA%E7%94%B1%E3%81%8C%E4%B8%98/@35.6084183,139.6703683,17z/data=!3m1!5s0x6018f51f7c9536a1:0xd5948abf93fed8d4!4m12!1m6!3m5!1s0x0:0x85ffbb901c1de9a8!2z5p-05Z6j5Yy76ZmiIOiHqueUseOBjOS4mA!8m2!3d35.608113!4d139.670497!3m4!1s0x0:0x85ffbb901c1de9a8!8m2!3d35.608113!4d139.670497" taget="_blank">東京都目黒区自由が丘1-13-4<br>
                          シャイン自由が丘ビル２F
                          </a>
                        </p>
                        <p>☎︎ 03-3724-2626</p>
                        <p>jiyugaoka@sibagakiiin.com</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            12:30-16:45<br>
                            17:00-22:30
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">柴垣医院 自由が丘</p>
                      <p class="hospital_place">京都府</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒152-0035</p>
                        <p>
                          <a href="https://www.google.com/maps/place/%E6%9F%B4%E5%9E%A3%E5%8C%BB%E9%99%A2+%E8%87%AA%E7%94%B1%E3%81%8C%E4%B8%98/@35.6084183,139.6703683,17z/data=!3m1!5s0x6018f51f7c9536a1:0xd5948abf93fed8d4!4m12!1m6!3m5!1s0x0:0x85ffbb901c1de9a8!2z5p-05Z6j5Yy76ZmiIOiHqueUseOBjOS4mA!8m2!3d35.608113!4d139.670497!3m4!1s0x0:0x85ffbb901c1de9a8!8m2!3d35.608113!4d139.670497" taget="_blank">東京都目黒区自由が丘1-13-4<br>
                          シャイン自由が丘ビル２F
                          </a>
                        </p>
                        <p>☎︎ 03-3724-2626</p>
                        <p>jiyugaoka@sibagakiiin.com</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            12:30-16:45<br>
                            17:00-22:30
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
              </div> -->

            </div>
          </div>
        <?php endwhile; else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
      </div>
    </article>
  </div>
</main>

<?php get_footer(); ?>

<style>

  /* --------メインコンテンツ */
  .article_wrap1{
    margin-top: 0;
  }
  .article_title{
    text-align: center;
    font-size: 16px;
    letter-spacing: 0.2em;
    line-height: 2em;
    color: #666666;
    padding: 50px 100px;
  }

  .hospital_list_btn{
    display:flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .hospital_list_btn a{
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background: #FFA42C;
    border: solid 1px #FFA42C;
    border-radius: 50px;
    width: 220px;
    padding: 20px 0;
    margin: 10px 20px;
    text-align: center;
    letter-spacing: 0.2em;
    box-shadow: 0 0 3px gray;
  }

  .hospital_list_btn a:hover{
    background: #FF6A29;
    cursor: pointer;
  }

  .hospital_area{  
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background: #FF6A29;
    border: solid 1px #FFA42C;
    border-radius: 50px;
    width: 220px;
    padding: 15px;
    margin: 100px 20px 10px 0;
    text-align: center;
    letter-spacing: 0.2em;
  }

  .hospital_list li{
    padding: 0 20px;
  }
  .hospital_top{
    display: flex;
    font-weight: bold;
    border-bottom: solid 2px #FF6A29;
    padding-bottom: 10px;
    padding-top: 50px;
  }
  .hospital_title{
    width: 50%;
    letter-spacing: 0.2em;
    padding-left: 10px;
  }
  .hospital_place{
    width: 50%;
    text-align: right;
    padding-right: 10px;
  }

  .hospital_bottom{
    display: flex;
    /* justify-content: space-around; */
  }

  .hospital_bottom img{
    height: 120px;
    width: 200px;
    margin: 20px 30px 10px 0;
  }
  .address{
    margin:20px 0;
    width:calc(100% / 3) ; 
  }
  .address p{
    font-size: 14px;
    padding:5px;
    letter-spacing: 0.1em;
  }

  .time{
    margin: 20px 0 16px 60px;
    border: solid 1px #FF6A29;
    width:calc(100% / 3) ; 
    font-size: 14px;
    height: 120px;
    width: 200px;
  }
  .time li{margin: 20px 0;}
  .closed,
  .open{
    display: flex;
    padding: 15px;
  }
  .closed{
    padding-bottom: 5px;
    margin-top:10px;}
  .open{
    padding-top: 5px;
    margin-bottom:10px;
  }
  .closed p,
  .open p{
    padding: 5px;
  }
  .closed_title,
  .open_title{
    background: #FF6A29;
    color: #fff;
    width: 60px;
    margin-right: 5px;
    text-align: center;
  }



  @media screen and (max-width: 640px) {
    


    .page_title_content h1{
      width: 70%;
      padding-bottom: 40px;
    }

    .page_title_border {
      margin-top: 40px;
    }
  
    .article_title{
      padding: 0 5% 20px;
      font-size: 14px;
      letter-spacing: 0.1em;
    }

    .hospital {
      padding: 0 5%;
    }

    .hospital_list_btn a {
      width: 45%;
      margin: 5px auto;
      padding: 20px 5px 20px 0;
      font-size: 14px;
    }

    .hospital_area {
      margin: 100px auto 10px auto;
      padding: 20px;
      width: 90%;
    }

    .hospital_title {
      width: 70%;
      padding-left: 0;
      text-align: left;
    }
    .hospital_place {
      width: 30%;
    }

    .hospital_bottom{
      display: block;
    }

    .hospital_bottom img{
      height: 80%;
      width:  100%;
      margin: 20px 30px 10px 0;
    }
    .address{
      width: 100%;
      text-align: left;
    }
    .time {
      margin: 0;
      height: 150px;
      width: 100%;
      padding: 20px;
    }
    .time .closed,
    .time .open{
      margin: 0;
      padding: 10px;
    }
  }
</style>