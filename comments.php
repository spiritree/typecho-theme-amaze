<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    $depth = $comments->levels +1;
    if ($comments->url) {
        $author = '<a href="' . $comments->url . '"target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($depth > 1 && $depth < 3) {
    echo ' comment-child ';
    $comments->levelsAlt('comment-level-odd', ' comment-level-even');
}
else if( $depth > 2){
    echo ' comment-child2';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
}
else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
?>">
    <div id="<?php $comments->theId(); ?>">
        <?php
            $host = 'https://secure.gravatar.com';
            $url = '/avatar/';
            $size = '80';
            $default = 'mm';
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=' . $default;
        ?>
        <div class="comment-view" onclick="">
            <div class="comment-header">
                <img class="avatar" src="<?php echo $avatar ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
                <span class="comment-author<?php echo $commentClass; ?>"><?php echo $author; ?></span>
            </div>
            <div class="comment-content">
                <span class="comment-author-at"><?php getCommentAt($comments->coid); ?></span> <?php $comments->content(); ?></p>
            </div>
            <div class="comment-meta">
                <time class="comment-time"><?php $comments->date('M j, Y'); ?></time>
                <span class="comment-reply"><?php $comments->reply('Reply'); ?></span>
            </div>
        </div>
    </div>
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
</li>
<?php } ?>

<div id="<?php $this->respondId(); ?>" class="comment-container">
    <div id="comments" class="clearfix">
        <?php $this->comments()->to($comments); ?>
        <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
        
            <h3 id="response"><?php _e('添加新评论'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if($this->user->hasLogin()): ?>
                <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>
                <div class="am-g">
                    <span class="am-u-lg-4 comment-input">
                        <label for="author" class="required"><?php _e('称呼'); ?></label>
                        <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
                    </span>
                    <span class="am-u-lg-4">
                        <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                        <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </span>
                    <span class="am-u-lg-4 comment-input">
                        <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                        <input type="url" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                    </span>
                </div>
                <?php endif; ?>
                <p>
                    <label for="textarea" class="required"><?php _e('内容'); ?></label>
                    <textarea rows="8" cols="32" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                </p>
                <p>
                    <button type="submit" class="submit am-btn am-btn-primary"><?php _e('提交评论'); ?></button>
                </p>
            </form>
        </div>
        <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
        <?php endif; ?>

        <?php if ($comments->have()): ?>

        <?php $comments->listComments(); ?>

        <div class="lists-navigator clearfix">
            <?php $comments->pageNav('←','→','2','...'); ?>
        </div>

        <?php endif; ?>
    </div>
</div>