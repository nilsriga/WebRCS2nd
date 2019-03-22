<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/d2.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
   <title>Document</title>
</head>
<body>
    <p>hello chief</p>

    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>
    <p>paragraph some loren isicitium kaska kasssa </p>

    <div class="div1">far</div>
    <div class="div2">out</div>
    <div class="div3">man</div>


    <button> Press me! </button>
    <h1>
        my name 
    </h1>
    <p>Hello Big Guy</p>

    <div id="divs">
        <p>Hello Big Guy</p>
    </div>

    <button onclick="colorChange()">Press Ye</button>

    <div class="block1">faa</div>
    <div class="block2">rma</div>



</body>

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/public/d3.js"></script>

<script>
var on = true;

function colorChange(){
    if (on) {
        $('#divs').css({'background': 'green'});
        on = false;
    } else {
        $('#divs').css({'background': 'red'});
        on = true;        
    }
};
</script>

<script>
 d3.select("button").on("click", function() {
    d3.selectAll("p").style("color", "blue")
 });

 d3.select("button").on("click", function() {
     d3.selectAll("h1").style("display", "block")
 })

</script>

</html>