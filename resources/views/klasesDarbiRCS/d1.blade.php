<!DOCTYPE html>
<html lang="en">
<head>
    <meta char set="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{csrf_field()}}

    <title>Document</title>
</head>
<body>
    <p>hello chief</p>

    <form action="" method="POST">
        <div>
            <label for="username-id">Username:</label>
            <input type="text" id="username-id" value="some value" name="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password-id" placeholder="Ievadiet Paroli" name="username">
        </div>
        <div>
            <input type="hidden" name="agree" value="0">
            <input type="checkbox" id="agree" checked>
            <label for="agree">Agree with terms and coditions</label>
        </div>
        <div>
            <input type="radio" name="radio-izvele">
            <label>Radio 1</label>
            <input type="radio" name="radio-izvele">
            <label>Radio 2</label>
            <input type="radio" name="radio-izvele">
            <label>Radio 3</label>
            <input type="radio" name="radio-izvele">
            <label>Radio 4</label>
            <input type="radio" name="radio-izvele">
            <label>Radio 5</label>
            <input type="radio" name="radio-izvele">
            <label>Radio 6</label>
        </div>
        <div>
            <label for="coutnry">Country</label>
            <select name="country" id="country" multiple>
                <optgroup label="Baltija">
                <option value="1">Latvia</option>
                <option value="2">Lietuv</option>
                <option value="3">Igauni</option>
                </optgroup>
                <optgroup label="Citas">
                <option value="4">Franci</option>
                <option value="5" selected>Zviedr</option>
                <option value="6">Hallij</option>
                </optgroup>
            </select>
        </div>
        <div>
            <input type="submit" value="very valuable">
        </div>
        <label>Long Text</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </form>

    <table border="1">
        <tr>
            <td>item1</td>    
            <td>item2</td>    
            <td>item3</td>    
            <td>item4</td>    
            <td>item5</td>    
        </tr> 
        <tr>
            <td>item1</td>    
            <td>item2</td>    
            <td colspan="2">item3</td>    
            <td>item4</td>    
        </tr> 
        <tr>
            <td rowspan="2">item1</td>    
            <td>item2</td>    
            <td>item3</td>    
            <td>item4</td>    
            <td>item5</td>    
        </tr> 
        <tr>
            <td>item1</td>    
            <td>item3</td>    
            <td>item4</td>    
            <td>item5</td>    
        </tr>                                    
    </table>

    <dl>
        <dt>header1</dt>
        <dd>header2</dd>
        <dt>header1</dt>
        <dd>header2</dd>
        <dd>header2</dd>
        <dt>header1</dt>
        <dd>header2</dd>
        <dt>header1</dt>
        <dd>header2</dd>
        <dd>header2</dd>
        <dt>header1</dt>
    </dl>

    <ol start="4" type="a">
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
            <li>item 4</li>
        </ol>
    
    <ul type="square">
            <li>item 1</li>
                <ul>
                    <li>item 2</li>
                    <li>item 3</li>
                    <li>item 4</li>
                </ul>
            <li>item 2</li>
            <li>item 3</li>
            <li>item 4</li>
    </ul>
        

    <h1>First H1 Title</h1>
    <h2>First H2 Title</h2>
    <h3>First H3 Title</h3>
    <h4>First H4 Title</h4>
    <h5>First H5 Title</h5>
    <h6>First H6 Title</h6>
    <p>First paragraph</p>
    <p>Lorem ipsum dolor sit, amet consecteutur adispidjahch <sup>awpuefh weofiuh</sup> <sub>aweoiufh aoweiufh</sub>
        awoefiu haweofiu hawfoiuha wfoiuhawfoiuhsdofiuh sdfoiuhroiuh</p>
    <p>Lorem ipsum <b>dolor sit, amet consecteutur</b> adispidjahch STRONG <strong> weofiuh aweoiufh aoweiufh</strong>
        djsdifjaspodfihweu awpuefh weofiuh aweoiufh aoweiufh awoefiu haweofiu hawfoiuha wfoiuhawfoiuhsdofiuh
        sdfoiuhroiuh</p>
    Lorem ipsum dolor <i>amet consecteutur adispidjahch djsdifjaspodfihweu</i>, amet consecteutur adispidjahch
    djsdifjaspodfihweu awpuefh weofiuh aweoiufh aoweiufh awoefiu haweofiu hawfoiuha wfoiuhawfoiuhsdofiuh sdfoiuhroiuh
    <del>ipsum dolor sit </del>, amet consecteutur adispidjahch <em>djsdifjaspodfihweu awpuefh</em> weofiuh aweoiufh
    aoweiufh <u>awoefiu haweofiu hawfoiuha</u> wfoiuhawfoiuhsdofiuh sdfoiuhroiuh
    <strong><u><del><em> consecteutur adispidjahch</em></del></u></strong>

    <img src="https://i.ytimg.com/vi/taP4kOsYfoM/maxresdefault.jpg" alt="Amazing cat" width="100" height="100" vspace="50px" hspace= "50px">
    <a href="sub_folder/page2.html">Some Link <img src="https://i.ytimg.com/vi/taP4kOsYfoM/maxresdefault.jpg"
            alt="Amazing cat" width="100" height="100">
    </a>

    <div>foo</div>
    <div>foo</div>
    <div>foo</div>
    <div>foo</div>
    <div>foo</div>

    <span>bar</span>
    <span>bar</span>
    <span>bar</span>
    <span>bar</span>
    <span>bar</span>

</body>
</html>