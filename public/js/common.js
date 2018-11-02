/**
 * Created by BL on 2018/11/2.
 */

/**
 * 隐藏或显示导航栏
 */
$('.navbar-toggler').click(function () {
    $('#wrapper').toggleClass('toggled');
});

/**
 * 导航栏选中状态
 */
var current_uri = window.location.href;
var uri_map = ['users', 'articles', 'discussions', 'comments', 'files', 'tags', 'categories', 'links', 'visitors', 'system'];
$.each(uri_map, function (key, value) {
    if (current_uri.indexOf(value) != -1) {
        $('.sidebar-nav li a').removeClass('active');
        $('.sidebar-nav .nav-' + value + ' a').addClass('active');
    }
});
