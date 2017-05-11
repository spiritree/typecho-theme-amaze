<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
<div class="blog-text-center">© <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://spiritree.me" target="_blank">Amaze made by Spiritree</a>
</div>
</footer>



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="https://cdn.staticfile.org/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js
"></script>
<script src="https://cdn.staticfile.org/amazeui/2.7.2/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="https://cdn.staticfile.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="https://cdn.staticfile.org/highlight.js/9.10.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php $this->footer(); ?>
</body>
</html>