<!DOCTYPE HTML>
<html>
	<head>
		<title>The Process | HUE HARPER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="{{secure_asset('css/index.css') }}" /> -->
        <link rel="stylesheet" href="{{asset('css/index.css') }}" />
		<noscript><link rel="stylesheet" href="{{ secure_asset('css/noscript.css') }}" /></noscript>
        <style>
            h3 { margin-top: 5%; margin-bottom: -0.5%; }

            body {
                background-color: white; /* Correctly sets the background color of the body to white */
                color: black; /* Sets the default text color to black, if needed */
            }
            h1, h2, h3, strong {
                color:black;
            }
            .contact {
                background-color: black;
            }
            footer {
                background-color: white;
            }
        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

                <!-- NAV/Header -->
                @php $name='The Process'; @endphp
                <x-nav-bar :name="$name"/>


				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>The HUE HARPER Process</h1>
									</header>
                                    <!-- TODO Add image later -->
									<!-- <span class="image main"><img src="images/pic11.jpg" alt="" /></span> -->
                                    <h1>Welcome to My World of Fashion Design</h1>
        <p>With 16 years of experience in the industry, I've dedicated my life to creating extraordinary custom wedding and evening gowns. Each piece is a unique expression of art, crafted to perfection for your special moments.</p>

        <h2>Your Personalized Journey Begins Here</h2>
        <p>At the heart of my service is a deep commitment to providing a personal experience from start to finish. When you step into my world, you’re not just getting a dress; you’re embarking on a creative journey tailored just for you.</p>

        <h3 style="padding-bottom:5%;">Designing Your Dream Dress</h3>
        <p>As we talk, I’ll start sketching out ideas, transforming our conversation into visual representations. Once we agree on a design, a deposit sets the wheels in motion. I then carefully select fabrics and take your measurements, ensuring every detail aligns with your expectations.</p>

        <h3 style="padding-bottom:5%;">Crafting Perfection</h3>
        <p>The construction process is where the magic happens. Usually involving 2-3 fittings - sometimes more as needed - this phase is all about precision and adjustments. You're witnessing the birth of a masterpiece, a work of art that epitomizes elegance and individuality.</p>

        <h2>Alterations and Revamping</h2>
        <p>For those seeking alterations or a revamp of existing pieces, the process is equally attentive. After a quick consultation and an overview of the costs, we dive straight into making those critical adjustments.</p>

        <h2>Understanding and Fulfilling Your Desires</h2>
        <p>Being a designer to me means understanding each client's unique needs, their body shapes, and their aspirations. My role is to take away the stress, instilling trust in my craftsmanship to transform your vision into reality.</p>

        <h2>Passion for Design</h2>
        <p>Every project, big or small, is a journey I cherish. The joy and satisfaction of my clients are what drive my passion. Welcome to a place where your fashion dreams come to life, where every piece is a celebration of you.</p>
								</div>
							</section>
					</div>

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
            <script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
