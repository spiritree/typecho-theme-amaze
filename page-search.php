<?php
/**
* Search
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container">
  <div class="row">
    <div class="am-u-lg-8 am-u-lg-offset-2 am-u-md-10 am-u-md-offset-1">
        <div class="search-page">
            <form id="search" class="search-form" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <span class="search-box clearfix">
                    <input type="text" id="input" class="input" name="s" required="true" placeholder="输入关键字搜索" maxlength="30" autocomplete="off">
                    <button type="submit" class="spsubmit"><i class="am-icon-search"></i></button>
                </span>
            </form>
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=count&ignoreZeroCount=1&desc=1&limit=50')->to($tags); ?>
            <div class="search-tags">
            <?php if($tags->have()): ?>
                <?php while ($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?>(<?php $tags->count(); ?>)</a>
                <?php endwhile; ?>
            <?php else: ?>
                <p> Nothing here ! </p>
            <?php endif; ?>
            <div class="search-tags-hr"></div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php $this->need('footer.php'); ?>