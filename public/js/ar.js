var paintings = 
{
	"data": [{
		"name": "Spring in November",
		"link": "img/Pieces as JPEGS/1-min.jpg"
	}, {
		"name": "The Phantom",
		"link": "img/Pieces as JPEGS/2-min.jpg"
	}, {
		"name": "True Love",
		"link": "img/Pieces as JPEGS/5-min.jpg"
	}, {
		"name": "Hodgepodge in Space",
		"link": "img/Pieces as JPEGS/6-min.jpg"
	}, {
		"name": "Mishmash on the Beach",
		"link": "img/Pieces as JPEGS/7-min.jpg"
	}, {
		"name": "After the Rain",
		"link": "img/Pieces as JPEGS/8-min.jpg"
	}, {
		"name": "Skribble, Scrabble & Wine",
		"link": "img/Pieces as JPEGS/9-min.jpg"
	}, {
		"name": "Kerfuffle",
		"link": "img/Pieces as JPEGS/10-min.jpg"
	}, {
		"name": "The Mudslide",
		"link": "img/Pieces as JPEGS/11-min.jpg"
	}, {
		"name": "Spark",
		"link": "img/Pieces as JPEGS/12-min.jpg"
	}, {
		"name": "Camouflage",
		"link": "img/Pieces as JPEGS/13-min.jpg"
	}, {
		"name": "Crazy Blooms",
		"link": "img/Pieces as JPEGS/14-min.jpg"
	}, {
		"name": "Imagine",
		"link": "img/Pieces as JPEGS/15-min.jpg"
	}, {
		"name": "Garden Escape",
		"link": "img/Pieces as JPEGS/16-min.jpg"
	}, {
		"name": "It’s Unfinished",
		"link": "img/Pieces as JPEGS/17-min.jpg"
	}, {
		"name": "Light at End of the Tunnel",
		"link": "img/Pieces as JPEGS/18-min.jpg"
	}, {
		"name": "Child’s Play",
		"link": "img/Pieces as JPEGS/19-min.jpg"
	}, {
		"name": "Spring Forward",
		"link": "img/Pieces as JPEGS/20-min.jpg"
	}]
};

$(document).ready(function() {
    $("a-entity").first().attr("position").x = -60;
    $("a-entity").first().attr("position").y = -120;
    $("a-entity").first().attr("position").z = 0;
    //name
    $("#artname").text(paintings.data[0].name);
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