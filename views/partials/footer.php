
    <footer id="footer" class="clear">
        <p class="fl_left">Copyright &copy; 2017 - Travel agency
    </footer>
<script>
    $(function(){
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            moveSlides: 1,
            slideMargin: 40,
            infiniteLoop: true,
            slideWidth: 660,
            minSlides: 3,
            maxSlides: 3,
            speed: 800,
        });

        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        });

        $(document).on('click', '.custom-menu .target', function (e) {
            $('.custom-menu').find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

