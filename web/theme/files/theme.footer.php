<!--Import jQuery before materialize.js-->
<script src="<?=APP_PATH?>web/theme/js/jquery/jquery.min.js" type="text/javascript"></script>
<script src="<?=APP_PATH?>web/theme/js/materialize.min.js" type="text/javascript"></script>

<!--Import Validation -->
<script src="<?=APP_PATH?>web/theme/js/parsley.min.js" type="text/javascript"></script>

<!--Import b0nzai settings-->
<script>var app_root = '<?=APP_PATH?>';</script>
<script src="<?=APP_PATH?>web/<?=CURRENT_PATH?>/b0.geralConfig.js"></script>

<script>
    $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({
            fullWidth: true
        });
    });
</script>

</body>
</html>