<!DOCTYPE HTML>
<html>
<head>
    <?= $this->partial('public/header') ?>
</head>
<body class="home blog">
<div class="loading"></div>
<div class="web_bod">
    <?= $this->partial('public/top_sidebar') ?>
    <section class="conter marauto">
        <div id="post-0" class="post error404 not-found">
            <div class="entry-content">
                <h1 class="entry-title">404 - 页面没找到</h1>
                <p>抱歉，您浏览的页面未找到。也许搜索能帮到您。</p>
                <form role="search" method="get" id="searchform" class="searchform" action="/search.html">
                    <div>
                        <label class="screen-reader-text" for="s">搜索：</label>
                        <input type="text" value="" name="keyword" id="s" autocomplete="off" >
                        <input type="submit" id="searchsubmit" value="搜索">
                    </div>
                </form>
            </div>
        </div>
        <div class="cls"></div>
    </section>
    <div class="cls"></div>
    <footer id="footer" role="contentinfo">
        <?= $this->partial('public/footer') ?>
    </footer>
</div>
</body>
</html>
<script type="text/javascript">loading('100%', 350)</script>
