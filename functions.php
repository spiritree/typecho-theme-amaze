<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $backgroundImage = new Typecho_Widget_Helper_Form_Element_Text('backgroundImage', NULL, NULL, _t('背景图片地址'), _t('请输入 背景图片 地址'));
    $form->addInput($backgroundImage);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像地址'), _t('输入头像地址'));
    $form->addInput($avatarUrl);

    $socialQQ = new Typecho_Widget_Helper_Form_Element_Text('socialQQ', NULL, NULL, _t('QQ'), _t('请输入QQ号码'));
    $form->addInput($socialQQ);

    $socialWechat = new Typecho_Widget_Helper_Form_Element_Text('socialWechat', NULL, NULL, _t('微信'), _t('请输入微信二维码图片地址'));
    $form->addInput($socialWechat);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text('socialGithub', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($socialGithub);

    $socialTwitter = new Typecho_Widget_Helper_Form_Element_Text('socialTwitter', NULL, NULL, _t('Twitter'), _t('请输入 Twitter 地址'));
    $form->addInput($socialTwitter);

    $socialWeibo = new Typecho_Widget_Helper_Form_Element_Text('socialWeibo', NULL, NULL, _t('Weibo'), _t('请输入微博地址'));
    $form->addInput($socialWeibo);
}

