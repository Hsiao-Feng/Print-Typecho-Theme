<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle([
        'category' => _t('分类 %s 下的文章'),
        'search'   => _t('包含关键字 %s 的文章'),
        'tag'      => _t('标签 %s 下的文章'),
        'author'   => _t('%s 发布的文章')
    ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <?php
        $printDesc = $this->options->description;
        if ($this->is('post') || $this->is('page')) {
            $printDesc = $this->description;
        }
    ?>
    
    <meta property="og:site_name" content="<?php $this->options->title(); ?>" />
    <meta property="og:image" content="<?php $this->options->social_img_url() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php $this->archiveTitle('','','') ?? $this->options->title(); ?>" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php $this->archiveTitle('','','') ?? $this->options->title(); ?>">
    <meta name="twitter:description" content="<?= $printDesc ?>">
    <meta name="twitter:image" content="<?php $this->options->social_img_url() ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&family=Noto+Serif+SC:wght@400;500;700&family=PT+Serif:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <?php //if (!empty($this->options->addonFunction) && in_array('MathJax', $this->options->addonFunction)): ?>
    <script>
        hljs.highlightAll();
        MathJax = {
        loader: {load: ["input/tex", "output/chtml"]},
        tex: {
            inlineMath: [['$', '$'], ['\\(', '\\)']]
        }
        };
    </script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <?php //endif; ?>
    <?php
        $this->header();
        echo "\n";
        echo $this->options->header_code;
    ?>

</head>
<body>
