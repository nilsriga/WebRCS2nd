
<nav>
    <div class="nav-wrapper">
        <a href="/" class="brand-logo hide-on-small-and-down left">Logo</a>
        <ul id="nav-mobile" class="right">
            <li class="{{{ (Request::is('/') ? 'active' : '') }}}"><a href="/">Home</a></li>
            <li class="{{{ (Request::is('articles') ? 'active' : '') }}}"><a href="/articles">Articles</a></li>
            <li class="{{{ (Request::is('clicker') || Request::is('calculator') ? 'active' : '') }}}"><a class="dropdown-trigger" href="#!" data-target="dropdown1">Js things<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="{{{ (Request::is('chat') ? 'active' : '') }}}"><a href="/chat">Chat</a></li>
            <li class="{{{ (Request::is('register') ? 'active' : '') }}}"><a href="/register">Register</a></li>
            <li class="{{{ (Request::is('aboutUs') ? 'active' : '') }}}"><a href="/aboutUs">About Us</a></li>
        </ul>
    </div>
</nav>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="/clicker">Clicker</a></li>
    <li><a href="/calculator">Calculator</a></li>
</ul>