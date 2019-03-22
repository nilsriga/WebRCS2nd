// console.log(window.innerHeight);


// piemers, ja tu leito onclick='' ieks html. sekojosa funkcija to nomaina.
// function changeParagraph() {
//     var el = document.getElementById('p1');
//     el.innerText = "another inner text has been changed";
//     var els = document.querySelectorAll('.changable-paragraph');
//     console.log(els);
//     for (var i = 0; i<els.length; i++) {
//         var el = els[i];
//         el.innerText = 'baz';
//     }
// }

document.querySelector('#btn1').addEventListener('click', function () {
    var el = document.getElementById('p1');
    el.innerText = "another inner text has been changed";
    var els = document.querySelectorAll('.changable-paragraph');
    console.log(els);
    for (var i = 0; i<els.length; i++) {
        var el = els[i];
        el.innerText = 'baz';
        // el.styles.color = 'red';
    }
});


// taisi sito parbaudod ar include, un ja kadu neincludo, tad viss break un nav. 

function checkAnagram (word1, word2) {
    // word.toLowerCase();
    var a = word1.toLowerCase().replace(/\s+/, "").split("");
    var b = word2.toLowerCase().replace(/\s+/, "").split("");
    console.log(a, b);

    var isAnagram = true;

    a.forEach(element => {
        if(!b.includes(element)) {
            isAnagram = false;
        }
    });

    if (!isAnagram) {
        return "is not an anagram!"
    } else {
        return "is an anagram!"
    }

    // if (a.includes(b)) {
    //     console.log("includes");
    // } else {
    //     console.log("doesn't")
    // }

    // var c = 0;
    // var answer = "";
    // for(var i = 0;i < a.length;i++){
    //     if(a[i] == a[a.length - i -1]) {
    //         c++;
    //     }
    // }
    // if (c == a.length) {
    //     console.log("is palindrome")
    // }
    // console.log(a.lenght)
    // // atstarpes vienalga. var buut atstarpes. bet sanaak ka abu vaardu simbolu daudzums ir vienaads
    
}

console.log(checkAnagram("Anna massu", "anna ussam"));


document.querySelector('#button1').addEventListener('click', function() {
   var el = document.getElementById('paragraph1');
   el.innerText = "Homework Done!";
});

var count = 0;

document.querySelector('#button2').addEventListener('click', function () {
    var el = document.getElementById('button2');
    count++;
    if (count == 1) {
        el.innerHTML = "homework";
    } else if (count == 2) {
        el.innerHTML = "is";
    } else if (count == 3) {
        el.innerHTML = "done";
        count = 0;
    }

})

$('#btn1').click(function() {
    var $el = $('.changable-paragraph')
        $el.text('PizzaHut')
        $el.css('color', 'red');
});

$('#btn2').click(function() {
    console.log($(this));
    var buttonThis = this;
    $('#p2').hide(2000, function() {
        console.log($(this))
        $(this).show(2000);
    })
})

$('#btn2').hover(function() {
    $('#p2').hide(100);
}, function () {
    $('#p2').show(100);
});

$('#rcs-link').click(function(event) {
    console.log('mama');

    var element = '<div class="rcs-lighbox"><img src="' + $(this).attr('href') + '"</div>'
    
    $('body').append(element);

    // event.preventDefault();
    // event.stopPropagation(); // shito var lietot, lai neizpildītos kkāsd links, kurš ir iekš diva, ja iekš diva ir jau links. Lai neuzspiežas abi, bet tikai iekšējais.
    return false;
});

$( function() {
    $( "#draggable" ).draggable({ revert: "invalid" });
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );


  $('#droppable').hover(function() {
    $('#droppable').css('background-color', 'red');
}, function () {
    $('#droppable').css('background-color', 'pink');
});