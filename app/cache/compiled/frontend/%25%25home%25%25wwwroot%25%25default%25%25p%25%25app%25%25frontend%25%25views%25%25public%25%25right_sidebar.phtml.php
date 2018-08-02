<ul class="xoxo">
    <?php if (!empty($recommendArticles)) { ?>
        <li id="advancedrandomposts-2" class="widget-container widget_advancedrandomposts">
            <h3 class="widget-title">推荐阅读</h3>
            <ul class="advanced-random-posts">
                <?php foreach ($recommendArticles as $rv) { ?>
                    <li>
                        <a href=<?= $this->url->get('article/' . $rv['aid'] . '.html') ?> title="<?= $rv['title'] ?>" rel="bookmark">
                            <?= $rv['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
    <?php if (!empty($categorysList)) { ?>
        <li id="linkcat-360" class="widget-container widget_links"><h3 class="widget-title">分类</h3>
            <ul class='xoxo blogroll'>
                <?php foreach ($categorysList as $clk => $clv) { ?>
                    <li>
                        <?php if (!empty($clv['slug'])) { ?>
                            <a href=<?= $this->url->get('category/' . $clv['slug'] . '.html') ?> rel="bookmark" title="<?= $clv['category_name'] ?>">
                                <?= $clv['category_name'] ?>
                            </a>
                        <?php } else { ?>
                            <a href=<?= $this->url->get('category/' . $clv['cid'] . '.html') ?> rel="bookmark" title="<?= $clv['category_name'] ?>">
                                <?= $clv['category_name'] ?>
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </li>
    <?php } ?>
    <?php if (!empty($tagsList)) { ?>
    <li id="tag_cloud-2" class="widget-container widget_tag_cloud">
        <h3 class="widget-title">标签</h3>
        <div class="tagcloud">
            <?php foreach ($tagsList as $tlk => $tlv) { ?>
                <?php if (!empty($tlv['slug'])) { ?>
                    <a href=<?= $this->url->get('tag/' . $tlv['slug'] . '.html') ?> class='tag-link-<?= $tlk ?>' title="<?= $tlv['tag_name'] ?>" rel="bookmark"><?= $tlv['tag_name'] ?></a>
                <?php } else { ?>
                    <a href=<?= $this->url->get('tag/' . $tlv['tid'] . '.html') ?> class='tag-link-<?= $tlk ?>' title="<?= $tlv['tag_name'] ?>" rel="bookmark"><?= $tlv['tag_name'] ?></a>
                <?php } ?>
            <?php } ?>
        </div>
    </li>
    <?php } ?>
<!--    <li id="linkcat-360" class="widget-container widget_links"><h3 class="widget-title">友情链接</h3>-->
<!--        <ul class='xoxo blogroll'>-->
<!--        </ul>-->
<!--    </li>-->
    <li id="siteinfowidget-2" class="widget-container widget_links">
        <h3 class="widget-title">站点统计</h3>
        <ul class="xoxo siteInfo">
            <li>文章总数：<?= $totalArticle ?>篇</li>
            <li>分类总数：<?= $totalCategory ?>个</li>
            <li>标签总数：<?= $totalTag ?>个</li>
        </ul>
    </li>
    <li id="text-5" class="widget-container widget_text">
        <div class="textwidget">
            <script type="text/javascript">
                /*300*250，创建于2013-9-11*/
            </script>
        </div>
    </li>
</ul>