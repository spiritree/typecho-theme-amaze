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
<script>hljs.initHighlightingOnLoad();</script>
<script>
    // Drop Bootstarp low-performance Navbar
    // Use customize navbar with high-quality material design animation
    // in high-perf jank-free CSS3 implementation
    var $body   = document.body;
    var $toggle = document.querySelector('.navbar-toggle');
    var $navbar = document.querySelector('#huxblog_navbar');
    var $collapse = document.querySelector('.navbar-collapse');

    var __HuxNav__ = {
        close: function(){
            $navbar.className = " ";
            // wait until animation end.
            setTimeout(function(){
                // prevent frequently toggle
                if($navbar.className.indexOf('in') < 0) {
                    $collapse.style.height = "0px"
                }
            },400)
        },
        open: function(){
            $collapse.style.height = "auto"
            $navbar.className += " in";
        }
    }

    // Bind Event
    $toggle.addEventListener('click', function(e){
        if ($navbar.className.indexOf('in') > 0) {
            __HuxNav__.close()
        }else{
            __HuxNav__.open()
        }
    })

    /**
     * Since Fastclick is used to delegate 'touchstart' globally
     * to hack 300ms delay in iOS by performing a fake 'click',
     * Using 'e.stopPropagation' to stop 'touchstart' event from 
     * $toggle/$collapse will break global delegation.
     * 
     * Instead, we use a 'e.target' filter to prevent handler
     * added to document close HuxNav.  
     *
     * Also, we use 'click' instead of 'touchstart' as compromise
     */
    document.addEventListener('click', function(e){
        if(e.target == $toggle) return;
        if(e.target.className == 'icon-bar') return;
        __HuxNav__.close();
    })
</script>
<?php $this->footer(); ?>
</body>
</html>
