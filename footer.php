<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
    <ul class="list-inline text-center">
	    <li>
            <a href="https://github.com/SpiriTree/typecho-theme-amaze" target="_blank">
            <span class="am-icon-btn am-icon-md am-icon-github"></span>
        </li>
    </ul>
    <div class="blog-text-center">© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://spiritree.me" target="_blank">Amaze made by Spiritree</a>
    </div>
</footer>
<script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js"></script>
<script src="<?php $this->options->themeUrl('js/navbar.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('pre code').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>
<?php $this->footer(); ?>
</body>
</html>