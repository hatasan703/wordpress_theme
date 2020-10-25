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
              
              <h1>
                <span><?php the_title(); ?></span>
              </h1>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/29.png" alt="在宅腹膜透析実施病院リスト">
          </div>
          <div class="page_title sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/29.png" alt="在宅腹膜透析実施病院リスト">
            <div class="page_title_content">
              <h1>
                <?php the_title(); ?>
              </h1>
            </div>
          </div>
          <div class="container">
            <?php get_template_part( 'partials/article', 'head' ); ?>

            <div class="article_wrap1">
              <?php echo do_shortcode('[addtoany]'); ?>
              <?php the_content(); ?>
              
              <!-- <div class="article_title">
                在宅腹膜透析の実施病院リストです。<br>
                お住まいの地域をクリックしてください。
              </div>
              <div class="hospital_list_btn">
                <a href="#kanto">関東の病院</a>
                <a href="#kansai">関西の病院</a>
                <a href="#chugoku">中国･四国の病院</a>
                <a href="#tohoku">東北の病院</a>
                <a href="#chubu">中部の病院</a>
                <a href="#kyusyu">九州の病院</a>
              </div>
              <p><iframe src="https://www.google.com/maps/d/embed?mid=1qDqcw25luDCh9wWagRXWwV1MPTFZ3NCQ&amp;ll=35.73266560636017%2C139.8356544017517&amp;z=10"></iframe></p>
              <div class="hospital_list">
                <h2 class="hospital_area" id="kanto">関東の病院</h2>
                <div class="hospital_list">
                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">江戸川病院</p>
                      <p class="hospital_place">東京都</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒133-0052</p>
                        <p>
                          <a href="https://maps.google.com/?cid=14570491366904498745" taget="_blank">
                          東京都江戸川区東小岩２丁目24-18
                          <br>
                          </a>
                        </p>
                        <p>☎︎ 03-3673-1221</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            8:20-11:30<br>
                            12:00-16:30<br>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                <h2 class="hospital_area" id="kansai">関西の病院</h2>
                <div class="hospital_list">
                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">正木医院</p>
                      <p class="hospital_place">京都府</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒602-8384</p>
                        <p>
                          <a href="https://www.google.com/maps?ll=35.027959,135.735268&z=17&t=m&hl=ja&gl=JP&mapclient=embed&cid=6629965808113269162" taget="_blank">
                            京都府京都市上京区今小路通御前通西入紙屋川町８２６
                          </a>
                        </p>
                        <p>☎︎ 075-461-5947</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>木曜午後<br>土曜午後<br>日曜、祝日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            9:00-12:00<br>
                            18:30-20:30
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>

                <h2 class="hospital_area" id="kyusyu">九州の病院</h2>
                <div class="hospital_list">
                  <li>
                    <div class="hospital_top">
                      <p class="hospital_title">宮崎内科医院</p>
                      <p class="hospital_place">長崎県</p>
                    </div>
                    <div class="hospital_bottom">
                      <img class="alignnone  wp-image-166" src="http://dev.local/wp-content/uploads/2020/08/28-1.png" alt="病院" width="397" height="234" />
                      <div class="address">
                        <p>〒852-8042</p>
                        <p>
                          <a href="https://www.google.com/maps/place/%E6%9F%B4%E5%9E%A3%E5%8C%BB%E9%99%A2+%E8%87%AA%E7%94%B1%E3%81%8C%E4%B8%98/@35.6084183,139.6703683,17z/data=!3m1!5s0x6018f51f7c9536a1:0xd5948abf93fed8d4!4m12!1m6!3m5!1s0x0:0x85ffbb901c1de9a8!2z5p-05Z6j5Yy76ZmiIOiHqueUseOBjOS4mA!8m2!3d35.608113!4d139.670497!3m4!1s0x0:0x85ffbb901c1de9a8!8m2!3d35.608113!4d139.670497" taget="_blank">
                            長崎県長崎市白鳥町3-12
                          </a>
                        </p>
                        <p>☎︎ 095-845-0312</p>
                      </div>
                      <div class="time">
                        <div class="closed">
                          <p class="closed_title">休診日</p>
                          <p>日曜、祝日</p>
                        </div>
                        <div class="open">
                          <p class="open_title">営業<br>時間</p>
                          <p>
                            8:30-11:45<br>
                            13:45-5:45
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </div>
                
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
  </div>
</main>

<?php get_footer(); ?>

<style>
.sidebar_content p{
  font-size: 14px;
  padding: 23px 0 5px 5px;
}

  iframe{
    margin-top: 50px!important;
  }

  .container .article_wrap1{
    line-height: 1;
    padding-right: 8%;
    padding-left: 8%;
  }


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
    text-decoration: none;
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
    padding: 0 15px;
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
    /* height: 120px; */
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

  iframe{
    display: block;
    margin: 0 auto;
    width: 70%;
    height: 400px;
    margin-top: 30px;
  }



  @media screen and (max-width: 640px) {

    iframe{
    display: block;
    margin: 30px auto;
    width: 100%;
    height: 300px;
  }
    
    .container .article_wrap1{
      padding-left: 5%;
      padding-right: 5%;
    }

    .page_title_content h1{
      width: 100%;
      letter-spacing: 0.02em;
      /* padding-bottom: 40px; */
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
      padding: 10px 5px;
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