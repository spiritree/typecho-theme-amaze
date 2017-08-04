<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
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
    <!-- AmazeUI 3.0 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/amazeui.min.css'); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customui.min.css'); ?>">
    <!-- CodeHighlight -->
    <link href="https://cdn.bootcss.com/highlight.js/9.12.0/styles/atom-one-light.min.css" rel="stylesheet">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body id="blog">
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Spiritree Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="huxblog_navbar">
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a>
                    </li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li>
                        <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                    </li>
                    <?php endwhile; ?>          
                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

    <header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage();?>')">
    <div class="container">
        <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php $this->title() ?></h1>
                        <span class="meta">@<?php $this->author(); ?> &nbsp;<?php $this->date('F j, Y'); ?></span>
                        <div class="tags"><?php $this->category('  '); ?>&nbsp;</div>
                    </div>
                </div>
        </div>
    </div>
    </header>

    <!-- content start -->
    <div class="container">
    <div class="am-g am-g-fixed blog-fixed blog-content">
        <div class="am-u-lg-12 am-u-sm-12">
            <article class="am-article blog-article-p">
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

            <ul class="am-pagination blog-article-margin">
                <li class="am-pagination-prev"><?php $this->thePrev('%s',''); ?></li>
                <li class="am-pagination-next"><?php $this->theNext('%s',''); ?></li>
            </ul>

            <?php $this->need('comments.php'); ?>

            <hr>
        </div>

    </div>
    </div>
    <!-- content end -->
<?php $this->need('footer.php'); ?>