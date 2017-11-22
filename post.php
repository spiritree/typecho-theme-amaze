<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="https://cdn.bootcss.com"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- AmazeUI 3.0 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/amazeui.min.css'); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customui.min.css'); ?>">
    <!-- CodeHighlight -->
    <style>
    .hljs{display:block;overflow-x:auto;padding:0.5em;color:#383a42;background:#fafafa}.hljs-comment,.hljs-quote{color:#a0a1a7;}.hljs-doctag,.hljs-keyword,.hljs-formula{color:#a626a4}.hljs-section,.hljs-name,.hljs-selector-tag,.hljs-deletion,.hljs-subst{color:#e45649}.hljs-literal{color:#0184bb}.hljs-string,.hljs-regexp,.hljs-addition,.hljs-attribute,.hljs-meta-string{color:#50a14f}.hljs-built_in,.hljs-class .hljs-title{color:#c18401}.hljs-attr,.hljs-variable,.hljs-template-variable,.hljs-type,.hljs-selector-class,.hljs-selector-attr,.hljs-selector-pseudo,.hljs-number{color:#986801}.hljs-symbol,.hljs-bullet,.hljs-link,.hljs-meta,.hljs-selector-id,.hljs-title{color:#4078f2}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:bold}.hljs-link{text-decoration:underline}
    </style>
    <!-- FontAwesome -->
    <link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
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
            <a class="navbar-brand" href="/"><?php $this->options->title(); ?></a>
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
                    <?php if($this->options->searchPage): ?>
                    <li>
                        <a class="am-icon-search navbar-search" href="<?php $this->options->searchPage(); ?>"></a>
                    </li>
                    <?php endif;?>
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
                        <div class="tags post-tags"><?php $this->category('  '); ?>&nbsp;</div>
                    </div>
                </div>
        </div>
    </div>
    </header>

    <!-- content start -->
    <div class="container">
    <div class="am-g am-g-fixed blog-fixed">
        <div class="am-u-lg-12 am-u-sm-12">
            <article class="am-article blog-article-p article-trigger">
                <div id="post-content" class="am-article-bd">
                    <?php $this->content(); ?>
                </div>
            </article>
            <!-- <hr>
            <ul class="pager">
                <li class="previous"><?php $this->thePrev('%s',''); ?></li>
                <li class="next"><?php $this->theNext('%s',''); ?></li>
            </ul> -->
            <hr>
        </div>

    </div>
    </div>
    <?php $this->need('comments.php'); ?>
    <div id="directory-content" class="directory-content">
        <div id="directory"></div>
    </div>
    <!-- content end -->
<?php $this->need('footer.php'); ?>
<script src="https://cdn.bootcss.com/headroom/0.9.4/headroom.min.js"></script>
<script>
var postDirectoryBuild=function(){var b=function a(l,h){var k=[],e=typeof h==="object",g=typeof h==="string",j,f,d;for(f=0,d=l.length;f<d;f++){j=l[f];if((j.nodeType===1||j.nodeType===9)&&(!h||e&&h.test(j.tagName.toLowerCase())||g&&j.tagName.toLowerCase()===h)){k.push(j)}}return k},c=function(e,f,r){var n=[],m=[],h,p,d,j,l,s,o,g,k,q;h=(function(i,C,A){var w=b(i.childNodes,/^h\d$/),x=[],v=1,B=1,z=0,D=1,t="directory"+(Math.random()+"").replace(/\D/,""),B,y,u;while(w.length){u=w.shift();C.push(u.innerHTML);y=+u.tagName.match(/\d/)[0];if(y>v){x.push(1);B+=1}else{if(y===B||y>B&&y<=v){x.push(0);B=B}else{if(y<B){x.push(y-B);B=y}}}z+=x[x.length-1];v=y;u.id=u.id||(t+D++);A.push(u.id)}if(z!==0&&x[0]===1){x[0]=0}return x})(e,n,m);j=p=document.createElement("ul");q=document.createElement("span");q.style="color:#F38181;font-weight:600;";q.innerHTML="目录";p.appendChild(q);dirNum=[];for(g=0,k=h.length;g<k;g++){d=h[g];if(d===1){l=document.createElement("ul");if(!j.lastElementChild){j.appendChild(document.createElement("li"))}j.lastElementChild.appendChild(l);j=l;dirNum.push(0)}else{if(d<0){d*=2;while(d++){if(d%2){dirNum.pop()}j=j.parentNode}}}dirNum[dirNum.length-1]++;s=document.createElement("li");o=document.createElement("a");o.href="#"+m[g];o.innerHTML=!r?n[g]:dirNum.join(".")+" "+n[g];s.appendChild(o);j.appendChild(s)}f.appendChild(p)};c(document.getElementById("post-content"),document.getElementById("directory"),false)};postDirectoryBuild();
</script>
<script>
    var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 5,
    offset: 240,
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
</script>