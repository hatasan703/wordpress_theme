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

.sidebar_content p{
  font-size: 14px;
  /* padding: 20px 0 5px 5px; */
}
.category {
  font-size: 16px!important;
}
.sidebar {
    margin-left: 103%;
}

</style>


<script>
  
  jQuery(function($) {


      var main_area = $('.article_wrap1');
      var main_area_length = main_area.outerHeight(true);

      var pagetop = $('.sidebar');   
      $(window).scroll(function () {
          if ($(this).scrollTop() > main_area_length) {  //500pxスクロールしたら表示
              pagetop.fadeOut();
          } else {
              pagetop.fadeIn();
          }
      });
    

 
});

   

</script>