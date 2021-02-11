$(document).ready(function() {
    $("a-entity").first().attr("position").x = -60;
    $("a-entity").first().attr("position").y = -120;
    $("a-entity").first().attr("position").z = 0;
    
    //navigation width
    $("#bottom-nav").css("width", screen.width);

    //buttons
    $(".carousel-control-next").click(function() {
        $("a-image").attr("src", "img/Pieces as JPEGS/1-min.jpg");
    });

    $(".carousel-control-prev").click(function() {
        $("a-image").attr("src", "img/Pieces as JPEGS/2-min.jpg");
    });
});