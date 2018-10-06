(function ($) {
    $(function () {
        $('.sidebar-toggle').on('click', function () {
            if (Cookies.get('sidebar-toggle') == "false")
            {
                Cookies.set('sidebar-toggle', true);
            }
            else
            {
                Cookies.set('sidebar-toggle', false);
            }
        });
    });
})(jQuery);
