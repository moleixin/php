<div class="page_num">
    <?php if ($paginator->first == $paginator->current) { ?>
        <a href="javascript:void(0);" class="disabled">&laquo; 上一页</a>
    <?php } else { ?>
        <a href="<?= \Marser\App\Helpers\PaginatorHelper::get_page_url($paginator->before) ?>" rel="prev">&laquo; 上一页</a>
    <?php } ?>
    <?php foreach ($pageNum as $page) { ?>
        <a href="<?= \Marser\App\Helpers\PaginatorHelper::get_page_url($page) ?>" <?php if ($paginator->current == $page) { ?>class="current"<?php } ?> rel="index">
            <?= $page ?>
        </a>
    <?php } ?>
    <?php if ($paginator->last == $paginator->current) { ?>
        <a href="javascript:void(0);" class="disabled">下一页 &raquo;</a>
    <?php } else { ?>
        <a href="<?= \Marser\App\Helpers\PaginatorHelper::get_page_url($paginator->next) ?>" rel="next">下一页 &raquo;</a>
    <?php } ?>
</div>