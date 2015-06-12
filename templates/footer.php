</div>
<?php if($settings->get('footer')=='yes'): ?>
<div class="container">
    <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright  &copy; <?= $settings->get('site_name').' '.date('Y') ?>
                        <?php if(!empty($settings->get('custom_footer'))):echo ' | '.$settings->get('custom_footer');endif; ?>
                    </p>
                </div>
            </div>
        </footer>
</div>
<?php endif; ?>
<script src="<?= $settings->get('url') ?>js/jquery.js"></script><script src="<?= $settings->get('url') ?>js/bootstrap.js"></script>
    <script>
    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script></body></html>