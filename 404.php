<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php 
$this->need('header.php');
$this->need('nav-index.php');

?>

<main>

    <div class="error-page">
        <a href="https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Status/404" style="color: var(--black);"><h2 class="post-title">&raquo; 404 Not Found</h2></a>
        <p><?php _e('不幸地，你想查看的页面已被转移或删除了。搜索试试看: '); ?></p>
        <form method="post">
            <p><input type="text" name="s" class="text form-control" autofocus/></p>
            <p>
                <button type="submit" class="btn btn-outline-secondary"><?php _e('搜索'); ?></button>
            </p>
        </form>
    </div>

</main><!-- end #content-->
<?php $this->need('footer.php'); ?>
