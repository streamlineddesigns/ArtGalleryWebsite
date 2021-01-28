$(document).ready(function() {
    var ctahref = $(".hero-cta-button").attr("href");
    $(".hero-cta-button").click(function() {
        if (screen.width < 993) {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(ctahref).offset().top - 75
            }, 1000);
        } else {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(ctahref).offset().top
            }, 1000);
        }
    });
});