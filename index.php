<?php
/**
 * 这是基于AmazeUI&Project-Pages的主题
 * 
 * @package Amaze Theme
 * @author Spiritree
 * @version 1.0
 * @link spiritree.me
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<!-- header end -->

<!-- content start -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        <?php while($this->next()): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-lg-12 am-u-sm-12 blog-entry-text">
                <span> <a href="<?php $this->author->permalink(); ?>">作者:<?php $this->author(); ?></a> &nbsp;</span>
                <span>时间:<?php $this->date('F j, Y'); ?></span>
                <div class="notepad-index-post-tags"><?php $this->category('  '); ?>&nbsp;</div>
                <h1><a target="_blank" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
            <div>
    		<?php $this->content(''); ?>
            <a href="<?php $this->permalink() ?>" class="blog-continue" target="_blank">继续阅读 »</a>
            </div>
              
            </div>
        </article>
        <?php endwhile; ?>
        <ul class="am-pagination">
            <?php $this->pageLink('&laquo; Prev','prev');?>
            <?php $this->pageLink('Next &raquo;','next');?>
        </ul>
    </div>
    <?php $this->need('sidebar.php'); ?>
</div>
<!-- content end -->

<!-- footer start -->
<?php $this->need('footer.php'); ?>
<!-- footer end -->