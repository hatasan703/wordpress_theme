<button class="fixed_btn" id="page_top">
  <a href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/img/back_btn.png" alt="topへ戻る">
  </a>
</button>


<script>
  jQuery(function($) {
    var pagetop = $('#page_top');   
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {  //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 300); //0.5秒かけてトップへ移動
        return false;
    });
});

</script>