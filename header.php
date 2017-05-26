<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
      <!-- AmazeUI -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/amazeui/2.7.2/css/amazeui.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customui.min.css'); ?>">
    <!-- CodeHighlight -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/highlight.js/9.10.0/styles/atom-one-light.min.css">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body id="blog">

<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li class="am-active"><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
<div class="am-topbar-form am-topbar-right am-form-inline am-fr">
<div class="am-form-group">
                        <form id="search-extend" action="./" role="search">
	                    <input type="search" name="s" placeholder="输入关键字搜索">
                        </form>
</div>
</div>
    </div>
</nav>

<header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage(); ?>')">
    <div class="am-g">
            <div class="am-u-lg-8 am-u-lg-offset-2 am-u-md-10 am-u-md-offset-1">
                <div class="site-heading">
                    <h1>精神之树的博客</h1>
                    <!-- <hr class="small"> -->
                    <span class="subheading">Welcome to my blog</span>
                </div>
            </div>
    </div>
</header>