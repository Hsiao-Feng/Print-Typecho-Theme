<?php
// 首页的站点标题、导航栏
?>
<header class="print-nav-index">

    <a href="<?php $this->options->siteUrl(); ?>">
        <p class="print-site-name">
            <?php if ($this->options->logoUrl) : ?>
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            <?php else : ?>
            <?php $this->options->title() ?>
            <?php endif; ?>
        </p>
        <p class="print-site-desc"><?php $this->options->description() ?></p>
    </a>
    <ul class="list-inline print-nav mt-4">
        <li class="list-inline-item">
            <a<?php if ($this->is('index')) : ?> class="current" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('索引'); ?></a>
        </li>

        <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
        <?php while ($pages->next()) : ?>
            <li class="list-inline-item">
                <a<?php if ($this->is('page', $pages->slug)) : ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</header>