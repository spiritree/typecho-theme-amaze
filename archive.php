<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>


<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-12 am-u-sm-12">
        <h2 class="am-margin-top-lg"><?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?></h2>
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-lg-12 am-u-sm-12 blog-entry-text post-preview">
                <div class="topic-header">
                    <div class="pull-left">
                        <div class="blog-flex-center">
                            <div class="blog-flex0">
                                <img src="<?php $this->options->avatarUrl(); ?>" alt="" class="link avatar avatar-image">
                            </div>
                            <div class="author-lockup blog-flex1">
                                <a class="link" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                                <span class="in">in</span>
                                <span class="category-name">
                                    <?php $this->category('  '); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <span class="pull-right time pc_time"><?php $this->date('F j, Y'); ?></span>
                </div>
            <h1 class="post-index-title"><a target="_blank" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
            <div class="post-content-preview">
                <?php $this->excerpt(200, '...'); ?>
            </div>
            <div class="clearfix topic-footer">
                <span class="pull-left time mobile_time"><?php $this->date('F j, Y'); ?></span>
            </div>
        </article>
        <?php endwhile; ?>
        <?php else: ?>
            <article class="am-g blog-entry-article am-text-center">
                <?php _e('没有找到内容'); ?>
            </article>
        <?php endif; ?>
        <ul class="am-pagination">
            <?php $this->pageLink('&laquo; Prev','prev');?>
            <?php $this->pageLink('Next &raquo;','next');?>
        </ul>
    </div>
</div>
<!-- content end -->

<?php $this->need('footer.php'); ?>
