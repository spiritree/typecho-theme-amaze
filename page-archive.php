<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
	exit;
}
?>
<?php $this->need('header.php');?>
<!-- content start -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
            <article class="am-article blog-article-p">
            <div clss="post-archive" itemprop="articleBody">
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000'
							      )->to($archives);
$year   = 0;
$mon    = 0;
$i      = 0;
$j      = 0;
$i      = 0;
$output = '<div id="archives">';
while ($archives->next()):
	$year_tmp = date('Y', $archives->created);
	$mon_tmp  = date('m', $archives->created);
	$y        = $year;
	$m        = $mon;
	if ($mon != $mon_tmp && $mon > 0) {
		$output .= '</ul></li>';
	}

	if ($year != $year_tmp && $year > 0) {
		$output .= '</ul>';
	}

	if ($year != $year_tmp) {
		$output .= '</section>';
	}
	if ($mon != $mon_tmp) {
		$output .= '</section>';
	}
	if ($year != $year_tmp) {
		$year = $year_tmp;
		$output .= '<section id="year" style="overflow:hidden;">';
		$output .= '<h5>' . $year . '</h5>'; //输出年份
	}
	if ($mon != $mon_tmp) {
		$mon = $mon_tmp;
		$output .= '<section id="mon" style="overflow:hidden;">';
		$output .= '<span style="text-align:right;"><h6>' . date('F',
			    $archives->created) . '</h6></span>'; //输出月份
	}
	$output .= '<div class="arc-t"><div class="arc-tile"><small><a href="'
			     . $archives->permalink . '">' . $archives->title .
  '</a></small> <span class="arc-date">' . date('M j, Y', $archives->created) .
			     '<span></div></div>'; //输出文章日期和标题
endwhile;
echo $output;
?>
          </div>
        </article>

        <?php $this->need('commends.php');?>

        <hr>
    </div>
</div>
<!-- content end -->

<?php $this->need('footer.php');?>
