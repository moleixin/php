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
            <script type="text/javascript">loading('33%', 350)</script>
            <div class="main">
                <?= $this->getContent() ?>
            </div>
            <script type="text/javascript">loading('55%', 350)</script>
            <aside id="primary" class="side" role="complementary">
                <?= $this->partial('public/right_sidebar') ?>
            </aside>
            <script type="text/javascript">loading('78%', 350)</script>
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
<?= $this->partial('public/layer') ?>
