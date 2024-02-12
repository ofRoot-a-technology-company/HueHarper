<style>
    .menu {
        margin-bottom: 20px; /* Adjust the value as needed */
    }
    </style>
<header id="header" class="alt">
    <a href="/" class="logo"><strong>Hue+Harper</strong>
    | {{ $name ?? '' }}
    </a>
    <nav>
        <a href="#menu">Menu</a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu" >
    <ul class="links">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/pricing">Pricing</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/process">The Process</a></li>
    </ul>
    <!-- TODO add these when working on admin area -->
    <!-- <ul class="actions stacked">
        <li><a href="#" class="button primary fit">Get Started</a></li>
        <li><a href="#" class="button fit">Log In</a></li>
    </ul> -->
</nav>
