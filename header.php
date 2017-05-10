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
    <!-- <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- CodeHighlight -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/highlight.js/9.10.0/styles/atom-one-light.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://om4v1ul08.qnssl.com/typecho/css/app.min.css">


    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>


 <!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <div class="hamburger hamburger--slider">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </div>
            <a class="navbar-brand" href="/">精神之树的博客</a>
        </div>

<script>
     var hamburger = document.querySelector(".hamburger");
     var body = document.body;
     var navbar = document.querySelector("#u-navbar");
     var collapse = document.querySelector(".navbar-collapse");
 
     var _u_nav_ = {
         close: function(){
             navbar.classList.remove("in");
             hamburger.classList.remove("is-active");
         },
         open: function(){
             navbar.classList.add("in");
             hamburger.classList.add("is-active");
         }
     }
 
     hamburger.addEventListener('click', function() {
 
         if (navbar.className.indexOf('in') >= 0) {
             _u_nav_.close();
         } else {
             _u_nav_.open();
         }
     });
 
     document.addEventListener('click', function(e){
         if(e.target.className.indexOf('hamburger') >= 0 ) return;
         _u_nav_.close();
     })
</script>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="u-navbar">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">主页</a>
                    </li>
                    
                    <li>
                        <a href="/start-page.html">关于我</a>
                    </li>
                    <li>
                        <form id="search-extend" action="./" role="search">
	                    <input type="search" name="s" placeholder="输入关键字搜索">
                        </form>
                    </li>

<li>
        <form class="am-topbar-form am-topbar-right am-form-inline" action="./" role="search">
            <div class="am-form-group">
                <input type="text" name="s" class="am-form-field am-input-sm" placeholder="输入关键字搜索">
            </div>
        </form>
</li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container -->
</nav>

<body id="blog">
<header class="intro-header" style="background-image: url('https://2a.zol-img.com.cn/product/139/954/ceMD6d5ZRFCJg.jpg')">
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
<hr>


<hr>
<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li <?php if($this->is('index')): ?>class="am-active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
                <li <?php if($this->is('page', $pages->slug)): ?>class="am-active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('RSS'); ?></a></li>
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" action="./" role="search">
            <div class="am-form-group">
                <input type="text" name="s" class="am-form-field am-input-sm" placeholder="<?php _e('输入关键字搜索'); ?>">
            </div>
        </form>
    </div>
</nav>
<hr>