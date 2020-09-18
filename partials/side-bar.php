<div class="sidebar fixed pc" id="pc-side-nav">
  <div class="sidebar_content">
  <div class="new_article">■新着・人気の記事</div>
    <p><a href="">新着記事</a></p>
    <p><a href="">人気の記事</a></p>
  <div class="category">■カテゴリ</div>
    <p><a href="<?php echo home_url(); ?>/qa">腹膜透析Q&A</a></p>
    <p><a href="<?php echo home_url(); ?>/patient-case">患者さんの事例</a></p>
    <p><a href="<?php echo home_url(); ?>/video">動画で学ぶ腹膜透析</a></p>
    <p><a href="<?php echo home_url(); ?>/glossary">用語集</a></p>
  </div>
</div>

<style>

  /* サイドバー */
.fixed{
  position: absolute;
  top: 335px;
  right: 3%;
  color: #FF6A29;
  border: solid 3px #FF6A29;
  background: #fff;
  box-shadow: 0 0 17px #d8d8d8;
}
.sidebar{
  width: 220px;
  border: solid 3px #FF6A29;
}

.sidebar_content{
  padding: 30px 0;
  color: #FF6A29;
  margin: 0 15%;
}

.new_article,
.category{
  font-size: 16px;
}
.new_article{
}
.category{
  margin-top: 30px;
}

.sidebar_content p{
  font-size: 14px;
  padding: 5px 0 5px 5px;
}

.sidebar_content p a{
  text-decoration: none;
  color: #666666;
  border-bottom: solid 1px #FF6A29;
  padding: 5px;
}

/* @media screen and (max-width: 1340px) {
  .fixed{
    position: fixed;
    bottom: 180px;
    right: 5px;
    color: #FF6A29;
    border: solid 3px #FF6A29;
    background: #fff;
    box-shadow: 0 0 17px #d8d8d8;
  }
} */
@media screen and (max-width: 1200px) {
  .sidebar{
    display: none;
  }
}


/* ------------------- */
.category {
  font-size: 16px!important;
}


.changed{
    position: fixed;
    /* bottom: 180px; */
    top: 100px;
    right: 3%;
    color: #FF6A29;
    border: solid 3px #FF6A29;
    background: #fff;
    box-shadow: 0 0 17px #d8d8d8;
  }

</style>


<script>
  
  jQuery(function($) {

    $(document).ready(function(){

      var main_area = $('.article_wrap1');
      var main_area_length = main_area.outerHeight(true);

      var pagetop = $('.sidebar');   
      $(window).scroll(function () {
          if ($(this).scrollTop() > main_area_length) {  //記事の長さ分スクロールしたらサイドバー非表示
              pagetop.fadeOut();
          } else {
              pagetop.fadeIn();
          }
      });

      $(window).scroll(function () {
          if ($(this).scrollTop() > 230) {  //230pxスクロールしたらサイドバーの位置を変更
            $(pagetop).addClass("changed");
          } else {
            $(pagetop).removeClass("changed");
          }
      });

    });
 
});

   

</script>