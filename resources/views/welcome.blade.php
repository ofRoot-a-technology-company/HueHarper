<!DOCTYPE HTML>
<html>
	<head>
		<title>Hue Harper | A Fashion Design Company</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="Hue Harper is a bespoke fashion design company, with a focus on sustainable development.">
		<!-- <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}" /> -->
        <!-- TODO remove Temp route -->
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
		<!-- <noscript><link rel="stylesheet" href="{{ secure_asset('css/noscript.css') }}" /></noscript> -->
        <noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>

	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- NAV/Header -->
                @php $name='Welcome'; @endphp
                <div class="mb-3 pb-3">
                    <x-nav-bar :name="$name"/>
                </div>
				<!-- Banner -->
                <section id="banner" class="major mb-1 ">
                    <div class="container-fluid">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="inner">
                        <header class="major">
                            <h1 style="color:black;">HUE+HARPER</h1>
                        </header>
                        <div class="content">

                            <p>Discover the artistry of Hue Harper, meticulously creating custom fits and expertly handling alterations. Elevate your style with personalized garments tailored to perfection for a truly unique and distinctive wardrobe</p>
                            <ul class="actions">
                                <li><a href="#one" class="button next scrolly">Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

				<!-- Main -->
					<div id="main">
						<!-- One -->
                        <section id="one" class="tiles">
                            <article>
                                <header class="major">
                                    <h3><a href="/about" class="link" style="color:black;">About Us</a></h3>
                                    <p>Learn more about Hue Harper
                                    <a href="/how-it-works">click here to learn more</a>
                                    </p>
                                </header>
                            </article>
                            <article>
                                <span class="image">
                                    <!-- <img src="images/pic01.jpg" alt="" /> -->
                                </span>
                                <header class="major">
                                    <h3><a href="/pricing" class="link" style="color:black;">HOW MUCH DOES IT COST?</a></h3>
                                    <p>Transparent pricing
                                        <a href="/pricing">click here to learn more</a>
                                    </p>
                                </header>

                            </article>
                            <article>
                                <header class="major">
                                    <h3><a href="/services" class="link" style="color:black;">Services</a></h3>
                                    <p>Here's a list of our services, <a href="/services">click here to learn more</a></p>
                                </header>
                            </article>
                            <article>
                                <header class="major">
                                    <h3><a href="/process" class="link" style="color:black;">The Process</a></h3>
                                    <p>Heres what to expect during your stay at HUE HARPER
                                                <a href="/process">click here to learn more</a></p>
                                    </p>
                                </header>
                            </article>
                        </section>

						<!-- Two -->
                        <section id="two" class="inner" style="background-color: white !important; color: black !important;">
                        <div class="inner" style="background-color: white !important; color: black !important;">
                            <header class="major">
                                <h2 style="color: black !important; margin: -3%;">A Personal Experience at My Design Studio</h2>
                            </header>
                            <div class="content" style="color: black !important;">
                                <p style="color: black !important;">When they come and see me, it’s a personal experience, to see my work space,
                                    creativity. Being welcomed with a cup of tea, water. Everything is thoughtfully and thoroughly
                                    discussed, guiding them through the process for each visit.
                                </p>
                                <h2 style="color: black !important;">Our Journey Together</h2>
                                <ul>
                                    <li><strong style="color: black !important;">Design Consultation/Alteration/Revamping Consultation:</strong>
                                        We begin with an in-depth consultation to understand your vision and requirements.
                                    </li>
                                    <li><strong style="color: black !important;">Fittings:</strong>
                                        Precise fittings to ensure your garment fits perfectly, adjusting every detail to your comfort and style.
                                    </li>
                                    <li><strong style="color: black !important;">Final Fittings and Collection:</strong>
                                        The final stage where you try on your completed dress or clothing, ready to take home.
                                    </li>
                                    <li><strong style="color: black !important;">Continued Service:</strong>
                                        My commitment extends beyond the studio - I am here to offer my continued service until you walk down the aisle.
                                    </li>
                                </ul>
                        </div>
</div>


                <!-- Contact Areas -->
                <section id="three">
                    <div class="inner">
                        <header class="major">
                            <h1 style="color:black;">Connect with us</h1>
                        </header>
                        <div style="margin:-6.5%;">
                            <x-contact/>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <x-footer/>
			</div>

		<!-- Scripts -->
        <!-- <script src="{{ secure_asset('/js/jquery.min.js') }}"></script>
        <script src="{{ secure_asset('/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ secure_asset('/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ secure_asset('/js/browser.min.js') }}"></script>
        <script src="{{ secure_asset('/js/breakpoints.min.js') }}"></script>
        <script src="{{ secure_asset('/js/util.js') }}"></script>
        <script src="{{ secure_asset('/js/main.js') }}"></script> -->
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('/js/browser.min.js') }}"></script>
        <script src="{{ asset('/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('/js/util.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "name": "Hue Harper",
                "description": "Hue Harper is a bespoke fashion design company and tailoring service.",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "",
                    "addressLocality": "Houston",
                    "addressRegion": "Texas",
                    "postalCode": "77002",
                    "addressCountry": "United States"
                },
                "telephone": "1-757-748-0465",
                "email": "hueharper@gmail.com",
                "url": "http://www.hueharper.com",
                "sameAs": [
                    "https://www.facebook.com/lizzi.london/",
                    "https://www.instagram.com/lizzi_london?igsh=YmEzMnBhOXptc3ow/",
                ],
                "openingHours": [
                    "Mo-Su 09:00-17:00"
                ],
                "image": ""
            }
        </script>
	</body>
</html>
