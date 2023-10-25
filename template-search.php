<?php
/**
 * 搜索页面
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->need('nav-index.php');
?>

<main>

    <div class="error-page">
        <h2 class="post-title"><?php $this->archiveTitle(); ?></h2>
        <p><?php _e('查找文字、思绪、片段⋯⋯'); ?></p>

        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <p>
                <input type="text" id="s" name="s" class="text form-control" autofocus placeholder="<?php _e('输入关键字搜索'); ?>"/>
            </p>
            <p>
                <button type="submit" class="submit btn btn-outline-secondary"><?php _e('搜索'); ?></button>
            </p>
        </form>

    </div>

</main><!-- end #content-->
<?php $this->need('footer.php'); ?>
