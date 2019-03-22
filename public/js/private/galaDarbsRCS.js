// // START OF drop down menu initialization
$(".dropdown-trigger").dropdown();

// // END OF drop down menu initiatialization
// //______________________________________________________


// //______________________________________________________
// // START OF tab initialization
var instance = M.Tabs.init();
console.log(instance);
// // END OF tab initialization
// //______________________________________________________

console.log(document.body.contains(document.getElementsByClassName('slider')));


// // START OF Materialize slider
// //______________________________________________________
console.log(document.getElementsByClassName('slider'))
if (document.getElementsByClassName('slider')==true) { 
document.addEventListener('DOMContentLoaded', function () {
	var elems = document.querySelectorAll('.slider');
	var instances = M.Slider.init(elems);
	console.log(instances[0]);
	document.getElementById('prev').addEventListener('click', function () {
		instances[0].prev();
	})
	document.getElementById('next').addEventListener('click', function () {
		instances[0].next();
	})
})};

// // END OF Materialize slider
// //______________________________________________________

// //______________________________________________________
// // START OF jQuery image slider

$(document).ready(function () {

	$('.next').on('click', function () {
		nextImg();
	});

	$('.prev').on('click', function () {
		prevImg()
	});

	setInterval("nextImg()", 3000);

});

function nextImg() {
	var currentImg = $('.active-img');
	var nextImg = currentImg.next();

	if (nextImg.length) {
		currentImg.removeClass('active-img').css('z-index', '1');
		nextImg.addClass('active-img').css('z-index', '2');
	} else {
		$('#first-image').addClass('active-img').css('z-index', '2');
	}
}

function prevImg() {
	var currentImg = $('.active-img');
	var prevImg = currentImg.prev();

	if (prevImg.length) {
		currentImg.removeClass('active-img').css('z-index', '1');
		prevImg.addClass('active-img').css('z-index', '2');
	} else {
		$('#last-image').addClass('active-img').css('z-index', '2');
	}
}

// // END OF jQuery image slider
//______________________________________________________


// //______________________________________________________
// // START OF vanillaJS image slider

if(document.getElementsByClassName('vanilla-slider') == true) {

var i = 0;
var images = [];
var time = 3000;

// add images here
images[0] = 'resources/galaDarbsRCS/natureSliderImg1.jpg'
images[1] = 'resources/galaDarbsRCS/natureSliderImg2.jpg'
images[2] = 'resources/galaDarbsRCS/natureSliderImg3.jpg'
images[3] = 'resources/galaDarbsRCS/natureSliderImg4.jpg'

function changeImg() {
	document.slide.src = images[i];

	if (i < images.length - 1) {
		i++;
	} else {
		i = 0
	}
	setTimeout("changeImg()", time);
};
changeImg();

}

// // END OF vanillaJS image slider
// //______________________________________________________