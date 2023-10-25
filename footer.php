<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <footer role="contentinfo">
        <?php
            if($this->options->page_footer_code) echo $this->options->page_footer_code;
            else {
        ?>
        <p>由 <a href="https://typecho.org/">Typecho</a> 驱动，主题为<a href="https://hsiaofeng.com">筱枫</a>设计的 <a href="https://github.com/Hsiao-Feng/Print-Typecho-Theme">Print</a> 。</p>
        <p>&copy; <?= date('Y') ?> <?php $this->options->title(); ?></p>
        <?php } ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
        $this->footer();
        echo "\n";
        echo $this->options->html_footer_code;    
    ?>

</body>
</html>

