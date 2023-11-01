<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('nav-page.php'); ?>

<main>
    <article class="post mb-5" itemscope itemtype="http://schema.org/BlogPosting">
        <header>
            <h1 itemprop="name headline"><?php $this->title() ?></h1>
            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
        </header>

        <div itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

    <?php $this->need('comments.php'); ?>

</main><!-- end main-->

<?php $this->need('footer.php'); ?>
