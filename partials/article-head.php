<div class="change_size_container">

    <div class="change_font_size">
    <p class="change_text">文字サイズ</p>
    <p class="size-button small" data-font="12">小</p>
    <p class="size-button midium active" data-font="16">中</p>
    <p class="size-button large" data-font="20">大</p>
    </div>
    <!-- パンクズリスト -->
    <?php if(!is_home()) : ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <?php endif; ?>
    <!-- ーーーーーーーーー -->
</div>