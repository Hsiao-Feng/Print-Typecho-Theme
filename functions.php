
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 可以使用 LOGO 作为主页标题。留空则使用站点名称文字作为主页标题。')
    );

    $form->addInput($logoUrl);

    $social_img_url = new \Typecho\Widget\Helper\Form\Element\Text(
        'social_img_url',
        null,
        null,
        _t('社交媒体图片地址'),
        _t('在这里填入一个图片 URL 地址, 可以用于在社交媒体中连接预览时的图片展示。')
    );

    $form->addInput($social_img_url);

    /*
    $addonFunction = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'addonFunction',
        [
            'MathJax'    => _t('MathJax（<a href="https://www.mathjax.org">介绍</a>）')
        ],
        ['MathJax'],
        _t('附加功能')
    );

    $form->addInput($addonFunction->multiMode());
    */

    $header_code = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'header_code',
        null,
        null,
        _t('<code>&lt;head&gt;</code> 标签附加内容'),
        _t('可以填入任意 HTML 内容，将被追加至 <code>&lt;head&gt;</code> 内末尾。')
    );

    $form->addInput($header_code);


    $page_footer_code = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'page_footer_code',
        null,
        null,
        _t('自定义页脚 <code>&lt;footer&gt;</code> 标签内容'),
        _t('可以填入任意 HTML 内容，将覆盖页脚 <code>&lt;footer&gt;</code> 中的信息，留白则使用默认效果。推荐使用 <code>&lt;p&gt;</code> 标签。')
    );

    $form->addInput($page_footer_code);


    $html_footer_code = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'html_footer_code',
        null,
        null,
        _t('<code>&lt;body&gt;</code> 标签附加内容'),
        _t('可以填入任意 HTML 内容，将被追加至 <code>&lt;body&gt;</code> 内末尾。')
    );

    $form->addInput($html_footer_code);


    $comment_add_code = new \Typecho\Widget\Helper\Form\Element\Textarea(
        'comment_add_code',
        null,
        null,
        _t('用户评论框和提交按钮之间的附加代码'),
        _t('可以填入任意 HTML 内容，将被追加至评论框和提交按钮之间。')
    );

    $form->addInput($comment_add_code);
    
}

/*
function themeFields($layout)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点LOGO地址'),
        _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO')
    );
    $layout->addItem($logoUrl);
}
*/
