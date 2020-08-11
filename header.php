<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php wp_enqueue_script('jquery'); //jQueryの読み込み?>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>"
    rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/category.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/article.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/site_info.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/drawer.css" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>
    <?php wp_title( ' | ', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175153718-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175153718-1');
</script>

  <?php wp_head(); ?>
  <script type="text/javascript">
    jQuery(function($){
      var $dropdown = $('#js-dropdown');
      var DURATION = 200; //アニメーションの速さ

      function fadeOutMenu(){
        $dropdown.removeClass('is-active')
          .next('#js-dropdown-menu')
          .stop()
          .slideUp(DURATION);
      }

      //表示を切り替える
      function toggleMenu(){
        var $self = $(this); //thisにはクリックした時の要素が入る
        //要素が.is-activeを持っていない場合
        if(!$self.hasClass('is-active')){
          fadeOutMenu();
        }
        //クリックした要素を表示させる
        $self.toggleClass('is-active')
          .next('#js-dropdown-menu')
          .stop().slideToggle(DURATION);
      }

      $dropdown.on('click', toggleMenu);
    
      //別の場所をクリックすると閉じる処理
      $(document).on('click touchend', function(event) {
      if (!$(event.target).closest('body').length) {
        // ここに処理;
        fadeOutMenu();//関数呼びだし
      }
     });
  });


  // ハンバーガーメニュー
  jQuery(function($){
    ;(function($){
      var touch = false;
      $('#humberger').on('click touchstart',function(e){
          switch (e.type) {
              case 'touchstart':
                  drawerToggle();
                  touch = true;
                  return false;
              break;
              case 'click':
                  if(!touch)
                      drawerToggle();
                  return false;
              break;
          }
          function drawerToggle(){
              $('body').toggleClass('drawer-opened');
              touch = false;
          }
      })
      $('#overlay').on('click touchstart',function(){
          $('body').removeClass('drawer-opened');
      })
  })(jQuery);
});


  </script>
</head>









<!-- header -->
<header class="header">


  <div class="headerWrap">
    
    <h1 class="logo"><a href="<?php echo home_url(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="腹膜透析"></a></h1></li>
    <!-- pcーーー -->
    <div class="pc">
      <div class="nav">
        <a href="<?php echo home_url(); ?>/kayou" class="header_menu_btn nav_vartical_bar">透析に通うのがつらい</a>
        <a href="<?php echo home_url(); ?>/at-home" class="header_menu_btn nav_vartical_bar">おうちでできる腹膜透析</a>
        <a href="<?php echo home_url(); ?>/basic-knowledge" class="header_menu_btn">腹膜透析の基礎知識</a>
        <?php get_search_form(); ?>
        <a href="<?php echo home_url(); ?>/contact" class="header_contact"><img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="お問い合わせ"></a>
      </div>
    </div>
    

    <!-- spーーーーーーーー -->
    <div id="humberger" class="sp">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </div>
    <div id="drawernav" class="sp">
      <div class="container">
        <nav>
          <ul>
          </ul>
          <ul>
            <li><a href="<?php echo home_url(); ?>/kayou" class="header_menu_btn nav_vartical_bar">透析に通うのがつらい</a></li>
            <li><a href="<?php echo home_url(); ?>/at-home" class="header_menu_btn nav_vartical_bar">おうちでできる腹膜透析</a></li>
            <li><a href="<?php echo home_url(); ?>/basic-knowledge" class="header_menu_btn">腹膜透析の基礎知識</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </div>

  <div class="mainNav">
    <li class="header_bar">
    </li>
    <li class="header_bar2">
    </li>
  </div>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
</header>