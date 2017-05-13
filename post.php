<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <!-- content srart -->
    <div class="am-g am-g-fixed blog-fixed blog-content">
        <div class="am-u-lg-12 am-u-sm-12">
            <article class="am-article blog-article-p">
                <div class="am-article-hd">
                    <h1 class="am-article-title blog-text-center"><?php $this->title() ?></h1>
                    <p class="am-article-meta blog-text-center">
                <span class="notepad-index-post-tags"><?php $this->category('  '); ?>&nbsp;
</span>                        
<span><a href="<?php $this->author->permalink(); ?>">@<?php $this->author(); ?> &nbsp;</a></span>-
                        <span><?php $this->date('F j, Y'); ?></span>
                    </p>
                </div>
                <div class="am-article-bd">
                    <?php $this->content(); ?>
                </div>
            </article>

            <div class="am-g blog-article-widget blog-article-margin">
                <div class="am-u-lg-6 am-u-md-7 am-u-sm-9 am-u-sm-centered blog-text-center">
                    <span class="am-icon-tags"> &nbsp;</span><?php _e('标签：'); ?> <?php $this->tags(', ', true, 'none'); ?>
                    <hr>
                    <?php if ($this->options->socialQQ): ?>
                        <a href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialWechat): ?>
                        <a href="<?php $this->options->socialWechat(); ?>"><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialGithub): ?>
                        <a href="<?php $this->options->socialGithub(); ?>"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialWeibo): ?>
                        <a href="<?php $this->options->socialWeibo(); ?>"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialTwitter): ?>
                        <a href="<?php $this->options->socialTwitter(); ?>"><span class="am-icon-twitter am-icon-fw blog-icon"></span></a>
                    <?php endif; ?>
                </div>
            </div>

            <hr>
            <div class="am-g blog-author blog-article-margin">
                <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
                    <img src="https://om4v1ul08.qnssl.com/avatar.jpg" alt="" class="blog-author-img am-circle">
                </div>
                <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
                    <h3><span><?php _e('作者'); ?> &nbsp;: &nbsp;</span><span class="blog-color"><?php $this->author(); ?></span></h3>
                    <p><?php $this->options->authorInfo(); ?></p>
                </div>
            </div>
            <hr>
            <ul class="am-pagination blog-article-margin">
                <li class="am-pagination-prev"><?php $this->thePrev('%s',''); ?></li>
                <li class="am-pagination-next"><?php $this->theNext('%s',''); ?></li>
            </ul>

            <?php $this->need('comments.php'); ?>

            <hr>
        </div>


    </div>
    <!-- content end -->
<?php $this->need('footer.php'); ?>