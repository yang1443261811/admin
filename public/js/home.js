//判断一个元素是不是另一个元素的子元素
jQuery.fn.isChildOf = function (b) {
    return (this.parents(b).length > 0);
};

//导航栏用户设置栏的显示或隐藏
document.onclick = function (e) {
    if ($(event.target).isChildOf('.dropdown')) {
        if ($('.dropdown').hasClass('open')) {
            $('.dropdown').removeClass('open');
        } else {
            $('.dropdown').addClass('open');
        }
    } else {
        $('.dropdown').removeClass('open');
    }
};


$('.navbar-toggle').click(function () {
    $('#app-navbar-collapse').toggle();
});


