@extends('masterRCS')

@section('title', 'RCS Mājaslapa')

@section('content')
<p>Hello Chief from home for masterRCS blade</p>

<h5>Materialize slider</h5>
<div class="container">
    <div class="slider">
        <i id="prev" style='font-size:40px; color:whitesmoke' class='far'>&#xf359;</i>
        <i id="next" style='font-size:40px; color:whitesmoke' class='far'>&#xf35a;</i>        
        <ul class="slides center-align">
            <li>
            <img src="resources/galaDarbsRCS/natureSliderImgBig1.jpg">
            <div class="caption">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
            </li>
            <li>
            <img src="resources/galaDarbsRCS/natureSliderImgBig2.jpg">
            <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
            </li>
            <li>
            <img src="resources/galaDarbsRCS/natureSliderImgBig3.jpg">
            <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
            </li>
            <li>
            <img src="resources/galaDarbsRCS/natureSliderImgBig1.jpg">
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
            </li>
        </ul>
    </div>    
</div>


<h5>jQuery slider</h5>

    <div class="slider-container  animated-container">
        <div class="slider-outer">
            <i style='font-size:40px; color:whitesmoke' class='far prev'>&#xf359;</i>
            <div class="slider-inner">
                <img id="first-image" class="active-img" src="resources\galaDarbsRCS\natureSliderImg1.jpg" alt="">
                <img src="resources\galaDarbsRCS\natureSliderImg2.jpg" alt="">
                <img src="resources\galaDarbsRCS\natureSliderImg3.jpg" alt="">
                <img id="last-image" class="image" src="resources\galaDarbsRCS\natureSliderImg4.jpg" alt="">
            </div>
            <i style='font-size:40px; color:whitesmoke' class='far next'>&#xf35a;</i>
        </div>
    </div>

<h5>VanillaJS slider</h5>
<div class="center-align">
    <img class="vanilla-slider animated-container" name="slide" width="400" height="400" >
</div>




<div class="row">
    <div class="row home-cards">
        <h5 id="home-articles-title">3 raksti:</h5>
        <div class="col card horizontal small animated-container">
            <div class="card-image">
                <img src="resources/galaDarbsRCS/natureSliderImg1.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>I am a .</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
        <div class="col card horizontal small animated-container">
            <div class="card-image">
                <img src="resources/galaDarbsRCS/natureSliderImg2.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>I  a v.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
             </div>
        </div>
        <div class="col card horizontal small animated-container">
            <div class="card-image">
                <img src="resources/galaDarbsRCS/natureSliderImg3.jpg">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>I rd..</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection