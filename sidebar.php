<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-u-lg-4 am-u-sm-10 am-u-lg-offset-0 am-u-sm-offset-0 sidebar-container">
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                分类列表
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li class="sidebar-list-item"><a href="{permalink}" title="{description}">{name}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                标签列表
            </span>
        </div>
        <div class="tags">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                归档列表
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li class="sidebar-list-item"><a href="{permalink}">{date}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                最新文章
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li class="sidebar-list-item"><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
        </div>
    </section>
</div>