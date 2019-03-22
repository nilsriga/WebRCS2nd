var btn = document.getElementById("btn");
var animalContainer = document.getElementById("animal-info");
var pageCounter = 1;

btn.addEventListener("click", function () {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + pageCounter + '.json')
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
        renderHTML(ourData);
    };
    ourRequest.send();
    pageCounter++;
    if (pageCounter > 3) {
        btn.setAttribute("disabled", "true");
        btn.innerText = "Nothing To Load";
    }
});

function renderHTML(data) {
    var htmlString = "";

    for (i = 0; i < data.length; i++) {
        htmlString += "<p><strong>" + data[i].name + "</strong> is a " + data[i].species + " that likes to eat ";

        for (ii = 0; ii < data[i].foods.likes.length; ii++) {
            if (ii == 0) {
                htmlString += " " + data[i].foods.likes[ii];

            } else {
                htmlString += " and " + data[i].foods.likes[ii];

            }
        }

        htmlString += ", but dislikes \n "

        for (ii = 0; ii < data[i].foods.dislikes.length; ii++) {
            if (ii == 0) {
                htmlString += " " + data[i].foods.dislikes[ii];

            } else {
                htmlString += " and " + data[i].foods.dislikes[ii];

            }
        }

        htmlString += ".</p>"
    };

    animalContainer.insertAdjacentHTML('beforeend', htmlString)
}


d3.select('#paragraph').style('display', 'none');

function makeRed() {
    var x = document.getElementById("paragraph");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

var color = true;
    d3.select('#color-button')
    .on('click', function() {
        if (color) {
            d3.select("#color-button").style("color", "blue");
            color = false;
        } else if (!color) {
            d3.select("#color-button").style("color", "black");
            color = true;                
        };
        d3.selectAll('li')
        .attr('class', 'hidden')
    });

    d3.selectAll(); // returns all elements matching criteria
