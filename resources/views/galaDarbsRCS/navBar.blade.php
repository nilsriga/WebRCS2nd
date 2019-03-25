{{-- <div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
    </ul>
</div> --}}


<div class="navbar-fixed">
    <nav class="sidenav-trigger">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo hide-on-small-and-down">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="/">Home</a></li>
                <li class="{{{ (Request::is('articles') ? 'active' : '') }}}"><a href="/articles">Articles</a></li>
                <li class="{{{ (Request::is('clicker') || Request::is('calculator') ? 'active' : '') }}}"><a class="dropdown-trigger" href="#!" data-target="dropdown1">Js things<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="{{{ (Request::is('chat') ? 'active' : '') }}}"><a href="/chat">Chat</a></li>
                <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="/register">Register</a></li>
                <li class="{{{ (Request::is('aboutUs') ? 'active' : '') }}}"><a href="/aboutUs">About Us</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="/clicker">Clicker</a></li>
    <li><a href="/calculator">Calculator</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="/clicker">Clicker</a></li>
    <li><a href="/calculator">Calculator</a></li>
</ul>

<ul class="sidenav" id="mobile-demo">
    <li><a href="/articles">Home</a></li>
    <li><a href="badges.html">Articles</a></li>
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Js things<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="/chat">Chat</a></li>
    <li><a href="/register">Register</a></li>
    <li><a href="/aboutUs">About Us</a></li>
</ul>