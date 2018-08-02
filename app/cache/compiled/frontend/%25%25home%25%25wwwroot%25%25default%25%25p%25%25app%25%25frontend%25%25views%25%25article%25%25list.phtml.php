<?php if (!empty($keyword)) { ?>
    <h1 class="page-title">包含关键字 <span><?= $keyword ?></span> 的文章</h1>
<?php } elseif (!empty($cid)) { ?>
    <h1 class="page-title">分类 <span><?= $categorysList[$cid]['category_name'] ?></span> 下的文章</h1>
<?php } elseif (!empty($tid)) { ?>
    <h1 class="page-title">标签 <span><?= $tagsList[$tid]['tag_name'] ?></span> 下的文章</h1>
<?php } else { ?>
    <?php if (!empty($topArticles)) { ?>
        <div class="top_box">
            <?php foreach ($topArticles as $tav) { ?>
                <div class="top_post">
                    <div class="title">置 顶</div>
                    <article class="ulist">
                        <h2>
                            <a href=<?= $this->url->get('article/' . $tav['aid'] . '.html') ?> title="<?= $tav['title'] ?>" rel="bookmark">
                                <i class="fa fa-eject icon-large" aria-hidden="true"></i><?= $tav['title'] ?>
                            </a>
                            <span><?= explode(' ', $tav['create_time'])[0] ?></span>
                        </h2>
                    </article>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
<?php } ?>
<?php if (!empty($articles)) { ?>
    <?php foreach ($articles as $article) { ?>
        <article class="post_box">
            <div class="c-top" id="post-4503">
                <?php $createTime = explode('-', explode(' ', $article['create_time'])[0]); ?>
                <div class="datetime"><?= $createTime[0] ?><br/><?= $createTime[1] ?>-<?= $createTime[2] ?></div>
                <header class="tit">
                    <h2 class="h1">
                        <a href=<?= $this->url->get('article/' . $article['aid'] . '.html') ?> title="<?= $article['title'] ?>" rel="bookmark">
                            <?= $article['title'] ?>
                        </a>
                        <?php if ($article['view_number'] > 10000) { ?>
                            <span class='title_hot'>HOT</span>
                        <?php } ?>
                    </h2>
                    <aside class="iititle">
                        <span>
                            <i class="fa fa-user icon-large" aria-hidden="true"></i>
                            <a href="javascript:void(0);" title="Marser" rel="author">Marser</a>
                        </span>
                        <span>
                            <?php if (!empty($article['categorys'])) { ?>
                                <i class="fa fa-folder-open icon-large" aria-hidden="true"></i>
                                <?php foreach ($article['categorys'] as $ck => $cv) { ?>
                                    <?php if ($ck == 0) { ?>
                                        <a href=<?= $this->url->get('category/' . $cv['cid'] . '.html') ?> title="<?= $cv['category_name'] ?>" rel="category tag">
                                            <?= $cv['category_name'] ?>
                                        </a>
                                    <?php } else { ?>
                                        ,<a href=<?= $this->url->get('category/' . $cv['cid'] . '.html') ?> title="<?= $cv['category_name'] ?>" rel="category tag">
                                            <?= $cv['category_name'] ?>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </span>
                        <span>
                            <i class="fa fa-eye icon-large" aria-hidden="true"></i> 围观<?= $article['view_number'] ?>次
                        </span>
                        <span>
                            <i class="fa fa-comment-o icon-large" aria-hidden="true"></i>
                            <a href="<?= $this->url->get('article/' . $article['aid'] . '.html#comments') ?>" target="_self">评论</a>
                        </span>
                        <span>
                            <i class="fa fa-clock-o icon-large" aria-hidden="true"></i> 最后更新：<?= $article['modify_time'] ?>
                        </span>
                    </aside>
                </header>
            </div>
            <div class="c-con">
                <div>
                    <?php if (!empty($article['head_image'])) { ?>
                        <img src="<?= $article['head_image'] ?>" alt="<?= $article['title'] ?>"/>
                    <?php } ?>
                    <?= $article['introduce'] ?>
                </div>
                <a href=<?= $this->url->get('article/' . $article['aid'] . '.html') ?> class="more-link" rel="contents" title="<?= $article['title'] ?>">
                    查看全文 >
                </a>
                <div class="cls"></div>
            </div>
            <div class="c-bot">
                <aside class="cb_bq">
                    <?php if (!empty($article['tags'])) { ?>
                        <i class="fa fa-tags icon-large"  aria-hidden="true"></i>
                        <?php foreach ($article['tags'] as $tk => $tv) { ?>
                            <?php if ($tk == 0) { ?>
                                <a href=<?= $this->url->get('tag/' . $tv['tid'] . '.html') ?> title="<?= $tv['tag_name'] ?>" rel="tag">
                                    <?= $tv['tag_name'] ?>
                                </a>
                            <?php } else { ?>
                                ，<a href=<?= $this->url->get('tag/' . $tv['tid'] . '.html') ?> title="<?= $tv['tag_name'] ?>" rel="tag">
                                    <?= $tv['tag_name'] ?>
                                </a>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </aside>
                <div class="cls"></div>
            </div>
        </article>
    <?php } ?>
    <div class="cls"></div>
<?php } ?>
<?= $this->partial('public/paginator') ?>