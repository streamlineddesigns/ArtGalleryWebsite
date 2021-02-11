var paintings = 
{
	"data": [{
		"name": "test1",
		"link": "img/Pieces as JPEGS/1-min.jpg"
	}, {
		"name": "test2",
		"link": "img/Pieces as JPEGS/2-min.jpg"
	}, {
		"name": "test3",
		"link": "img/Pieces as JPEGS/3-min.jpg"
	}, {
		"name": "test4",
		"link": "img/Pieces as JPEGS/4-min.jpg"
	}, {
		"name": "test5",
		"link": "img/Pieces as JPEGS/5-min.jpg"
	}, {
		"name": "test6",
		"link": "img/Pieces as JPEGS/6-min.jpg"
	}, {
		"name": "test7",
		"link": "img/Pieces as JPEGS/7-min.jpg"
	}, {
		"name": "test8",
		"link": "img/Pieces as JPEGS/8-min.jpg"
	}, {
		"name": "test9",
		"link": "img/Pieces as JPEGS/9-min.jpg"
	}, {
		"name": "test10",
		"link": "img/Pieces as JPEGS/10-min.jpg"
	}, {
		"name": "test11",
		"link": "img/Pieces as JPEGS/11-min.jpg"
	}, {
		"name": "test12",
		"link": "img/Pieces as JPEGS/12-min.jpg"
	}, {
		"name": "test13",
		"link": "img/Pieces as JPEGS/13-min.jpg"
	}, {
		"name": "test14",
		"link": "img/Pieces as JPEGS/14-min.jpg"
	}, {
		"name": "test15",
		"link": "img/Pieces as JPEGS/15-min.jpg"
	}, {
		"name": "test16",
		"link": "img/Pieces as JPEGS/16-min.jpg"
	}, {
		"name": "test17",
		"link": "img/Pieces as JPEGS/17-min.jpg"
	}, {
		"name": "test18",
		"link": "img/Pieces as JPEGS/18-min.jpg"
	}, {
		"name": "test19",
		"link": "img/Pieces as JPEGS/19-min.jpg"
	}, {
		"name": "test20",
		"link": "img/Pieces as JPEGS/20-min.jpg"
	}]
};

$(document).ready(function() {
    $("a-entity").first().attr("position").x = -60;
    $("a-entity").first().attr("position").y = -120;
    $("a-entity").first().attr("position").z = 0;
    
    //navigation width
    $("#bottom-nav").css("width", screen.width);

    var pos = 0;

    //buttons
    $(".carousel-control-next").click(function() {
        if (pos + 1 >= paintings.data.length) {
            pos = 0;
        } else {
            pos += 1;
        }

        $("a-image").attr("src", paintings.data[pos].link);
        $("#artname").text(paintings.data[pos].name);
    });

    $(".carousel-control-prev").click(function() {
        if (pos - 1 < 0) {
            pos = paintings.data.length - 1;
        } else {
            pos -= 1;
        }

        $("a-image").attr("src", paintings.data[pos].link);
        $("#artname").text(paintings.data[pos].name);
    });
});