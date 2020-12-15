$(document).ready(function() {
    var ctahref = $(".hero-cta-button").attr("href");
    $(".hero-cta-button").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(ctahref).offset().top - 75
        }, 1000);
    });
});