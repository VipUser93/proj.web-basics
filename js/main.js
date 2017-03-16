$(document).ready(function () {

    homeArticlesResize();

    $(window).on('load resize', function() {
        homeArticlesResize();
    });

    function homeArticlesResize() {
        var article_elem_w = $('.home-article-main').width();
        var article_elem_h = article_elem_w / 1.618;
        $('.hwc-intro').height(article_elem_h);
    }

});