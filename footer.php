<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
<div class="blog-text-center">© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://spiritree.me" target="_blank">Amaze made by Spiritree</a>
</div>
</footer>



<!-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="<?php $this->options->themeUrl('js/jquery1.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/modernizr.min.js'); ?>
"></script>
<script src="<?php $this->options->themeUrl('js/amazeui.ie8polyfill.min.js'); ?>"></script>
<![endif]-->
<script src="<?php $this->options->themeUrl('js/amazeui.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/highlight.min.js'); ?>"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php $this->footer(); ?>
</body>
</html>
<!-->
