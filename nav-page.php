<?php 
// 子页面的站点标题、导航栏
?>

        <header class="print-nav-page">
            <a href="<?php $this->options->siteUrl(); ?>" class="print-nav-block-left">
                    <p class="print-site-name"><?php $this->options->title() ?></p>
                    <p class="print-site-desc"><?php $this->options->description() ?></p>
            </a>
        <ul class="list-inline print-nav print-nav-block-right">
            <li class="list-inline-item"><a<?php if ($this->is('index')) : ?> class="current" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('索引'); ?></a></li>
            
            <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
            <?php while ($pages->next()) : ?>
                <li class="list-inline-item"><a<?php if ($this->is('page', $pages->slug)) : ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </header>