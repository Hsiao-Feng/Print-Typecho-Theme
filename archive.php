<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
    $this->need('header.php');
    $this->need('nav-index.php');
?>

<main>
    <h3 class="mb-3"><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h3>
    <?php if ($this->have()): ?>

        <div class="print-article-group">
        <?php while ($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <a href="<?php $this->permalink() ?>" class="print-article-info" itemprop="url">
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                    <h3 itemprop="name headline"><?php $this->title() ?></h3>
                </a>
                <?php $this->content(''); ?>
            </article>
        <?php endwhile; ?>
        </div>
    <?php else: ?>
        <article class="post">
            <p class="mb-5"><?php _e('没有找到内容'); ?></p>
        </article>
    <?php endif; ?>
<nav>
<?php $this->pageNav('«', '»', 3, '...',
    array('wrapTag' => 'ul',
    'wrapClass' => 'pagination justify-content-center',
    'itemTag' => 'li',
    'textTag' => 'span',
    'currentClass' => 'active',
    'prevClass' => 'page-link',
    'nextClass' => 'page-link')); ?>
</nav>
</main><!-- end #main -->

<?php $this->need('footer.php'); ?>

