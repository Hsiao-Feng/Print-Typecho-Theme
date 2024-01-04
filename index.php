<?php
/**
 * 追求印刷风格的 Typecho 主题。
 *
 * @package Typecho Print Theme
 * @author Hsiao Feng
 * @version 1.2.2
 * @link https://hsiaofeng.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->need('nav-index.php');
?>

<main>
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
    </div>
       
</main>

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
