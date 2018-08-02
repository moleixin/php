<header class="header marauto">
    <span class="logo">
        <a href="<?= $siteUrl ?>" title="<?= $siteName ?>">
            <b class="bclass"><?= $siteName ?></b>
        </a>
        <i><?= $siteTitle ?></i>
    </span>
    <form role="search" method="get" id="searchform" action="/search.html">
        <span class="search">
            <input name="keyword" id="s" type="text" class="input" value="请输入关键词开始搜索吧" onclick="this.value = '';"
                   style="color:#999" onkeypress="javascript:if(event.keyCode == 13){query(this.value);}"
                   x-webkit-speech=""/>
            <button id="searchsubmit" class="btn">搜索</button>
        </span>
    </form>
    <div class="cls"></div>
</header>
<div class="nav marauto">
    <div class="tig">
        <a href="https://github.com/KevinJay/PhalconCMS" target="_blank">
            <span class="sub">
                <i class="fa fa-github icon-large" aria-hidden="true"></i>&nbsp;&nbsp;GitHub
            </span>
        </a>
        <a href="javascript:void(0);" id="add-weixin" rel="nofollow">
            <span class="sub">
                <i class="fa fa-weixin icon-large" aria-hidden="true"></i>&nbsp;&nbsp;加我微信
            </span>
        </a>
        <div class="gonggao">
            <ul id="g_box">
                <li>
                    <span class="gg_tx">
                        <i class="fa fa-volume-off icon-large" aria-hidden="true"></i> 广州PHP高端交流群：158587573
                    </span>
                </li>
                <li>
                    <span class="gg_tx">
                        <i class="fa fa-volume-off icon-large" aria-hidden="true"></i> Phalcon玩家群：150237524
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="navlist">
        <dl>
            <dt>
                <a href="https://github.com/KevinJay/marser-docs" title="Marser开发资料归档" target="_blank" class="nav_button">
                    <img src="<?= $this->url->getStatic('assets/image/dsj.gif') ?>">
                </a>
            </dt>
            <dd>DOCS</dd>
        </dl>
        <dl>
            <dt>
                <a href="https://github.com/KevinJay/marser-tools" title="Marser开发工具箱" target="_blank" class="nav_button">
                    <img src="<?= $this->url->getStatic('assets/image/tools.gif') ?>" width="45" height="45">
                </a>
            </dt>
            <dd>TOOLS</dd>
        </dl>
        <dl>
            <dt>
                <a href="javascript:void(0);" title="联系Marser" target="_self" class="nav_button" id="contact-me" rel="nofollow">
                    <img src="<?= $this->url->getStatic('assets/image/conc.gif') ?>" width="45" height="45">
                </a>
            </dt>
            <dd>CONTACT</dd>
        </dl>
        <dl>
            <dt>
                <a href="https://github.com/KevinJay" title="关于Marser" target="_blank" class="nav_button">
                    <img src="<?= $this->url->getStatic('assets/image/nav_1.gif') ?>" width="45" height="45">
                </a>
            </dt>
            <dd>ABOUT</dd>
        </dl>
        <div class="cls"></div>
    </div>
</div>

<nav class="navcon marauto">
    <div id="mobile_nav_btn">网站导航</div>
    <div class="menu-header">
        <ul id="menu-wplook-main-menu" class="menu">
            <?php if (!empty($menuList)) { ?>
                <?php $prevMenuId = ''; ?>
                <?php foreach ($menuList as $mk => $menu) { ?>
                    <?php if ($menu['parent_mid'] == 0 && $menu['leaf_node'] == 1) { ?>
                        <?php if ($prevMenuId != '' && $menuList[$prevMenuId]['parent_mid'] != 0) { ?>
                            </ul>
                        </li>
                        <?php } ?>
                        <li id="menu-item-<?= $menu['mid'] ?>" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-has-children menu-item-<?= $menu['mid'] ?>">
                            <a href=<?= $this->url->get($menu['menu_url'] . '.html') ?> rel="bookmark" title="<?= $menu['menu_name'] ?>"><?= $menu['menu_name'] ?></a>
                        </li>
                    <?php } else { ?>
                        <?php if ($menu['parent_mid'] == 0 && $menu['leaf_node'] == 0) { ?>
                            <?php if ($menuList[$prevMenuId]['parent_mid'] != 0) { ?>
                                    </ul>
                                </li>
                            <?php } ?>
                            <li id="menu-item-<?= $menu['mid'] ?>" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-has-children menu-item-<?= $menu['mid'] ?>">
                                <a href=<?= $this->url->get($menu['menu_url'] . '.html') ?> rel="bookmark" title="<?= $menu['menu_name'] ?>"><?= $menu['menu_name'] ?></a>
                                <ul class="sub-menu">
                        <?php } else { ?>
                            <li id="menu-item-<?= $menu['mid'] ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?= $menu['mid'] ?>">
                                <a href=<?= $this->url->get($menu['menu_url'] . '.html') ?> rel="bookmark" title="<?= $menu['menu_name'] ?>"><?= $menu['menu_name'] ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <?php $prevMenuId = $mk; ?>
                <?php } ?>
            <?php } ?>
            <div class="cls" style="clear:both;margin:0px;padding:0px;"></div>
        </ul>
    </div>
</nav>