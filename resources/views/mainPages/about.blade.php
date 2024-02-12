<!DOCTYPE HTML>
<html>
	<head>
    <title>About Us | HUE HARPER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="{{secure_asset('css/index.css') }}" /> -->
        <link rel="stylesheet" href="{{asset('css/index.css') }}" />
		<noscript><link rel="stylesheet" href="{{ secure_asset('css/noscript.css') }}" /></noscript>
        <style>
            body {
                background-color: white; /* Correctly sets the background color of the body to white */
                color: black; /* Sets the default text color to black, if needed */
            }
            h1 {
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
                @php $name='About Us'; @endphp
                <x-nav-bar :name="$name"/>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1 style="color:black;">About HUE HARPER</h1>
									</header>
									<!-- <span class="image main"><img src="images/pic11.jpg" alt="" /></span> -->
									<p>Welcome to Hue Harper, a sanctuary of bespoke fashion and artisanal craftsmanship. At Hue Harper, we don't just create clothing; we craft stories, encapsulate emotions, and build wardrobes that resonate with the unique essence of every individual client. </p>
                                    <h1>Our Journey</h1>
									<p>Founded on the principles of creativity, innovation, and exceptional artistry, Hue Harper began as a dream to transform the landscape of fashion design. With a deep-rooted passion for bespoke creations, our journey has been one of relentless dedication to mastering the art of custom clothing. From the first stitch to the final reveal, each piece is a testament to our commitment to quality and elegance.
</p>
                                    <h1 >What We Do</h1>
									<p>At Hue Harper, we specialize in creating custom clothing and dresses that are as unique as our clients. Our team of skilled designers and artisans work closely with each client, ensuring that every garment is a reflection of their personal style and preferences. We believe that fashion is not just about wearing clothes; it's about expressing one's identity
</p>
<h1>Our Expertise

</h1>
									<p>Our expertise lies in fashion design, pattern cutting, garment construction, and styling. Our creative director, with years of experience in high-profile fashion events and productions, leads our team with a vision that is both avant-garde and deeply respectful of classic styles. This fusion of contemporary and timeless aesthetics is evident in every piece we create.
</p>
<!-- The Hue Harper Experience Section -->
<h1>The Hue Harper Experience</h1>
<p>The Hue Harper experience is more than just bespoke tailoring; it's a journey into the world of personalized fashion. We provide a collaborative environment where ideas can flourish, and creativity knows no bounds. Our clients are involved in every step of the design process, from selecting fabrics to fine-tuning designs, ensuring that the end product is nothing short of perfection.</p>

<!-- Our Commitment to Sustainability Section -->
<h1>Our Commitment to Sustainability</h1>
<p>As a forward-thinking fashion design company, we are committed to sustainable practices. We source eco-friendly materials and employ methods that minimize our environmental impact, ensuring that our fashion footprint is as stylish as it is sustainable.</p>

<!-- Join the Hue Harper Family Section -->
<h1>Join the Hue Harper Family</h1>
<p>We invite you to experience the magic of custom fashion. Whether you're looking for a one-of-a-kind dress for a special occasion or a bespoke suit that exudes confidence and style, Hue Harper is here to bring your vision to life. Join us on this exquisite journey of fashion, craftsmanship, and unparalleled service.</p>

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
