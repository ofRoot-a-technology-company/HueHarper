<!DOCTYPE HTML>
<html>
	<head>
        <title>Our Pricing | HUE HARPER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}" /> -->
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <noscript<link rel="stylesheet" href="{{ secure_asset('css/noscript.css') }}" /></noscript>
        <style>
            body {
                background-color: white; /* Correctly sets the background color of the body to white */
                color: black; /* Sets the default text color to black, if needed */
            }
            h1, h2, h3, strong {
                color:black;
            }
            .contact {
                background-color: white;
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
                @php $name='Pricing'; @endphp
                <x-nav-bar :name="$name"/>


				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>OUR PRICING</h1>
									</header>
                                    <!-- TODO add image later -->
									<span class="image main"><img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZhc2hpb258ZW58MHx8MHx8fDA%3D" alt="" /></span>
                                    <h2>HOW MUCH DOES IT COST?</h2>
									<p>At, HUE HARPER we understand that each piece of custom fashion design is a unique blend of artistry and craftsmanship. The cost of creating a custom garment varies based on several factors, ensuring that you receive a piece that is not only exquisite but also reflects your personal style and needs. Here's how we determine the cost for our clients:</p>
                                    <ul>
                                        <li><strong>Material Quality and Cost:</strong>
                                            The choice of fabrics, trims, and embellishments plays a significant role.
                                            We source only the finest materials to meet your specific design requirements,
                                            with prices reflecting the quality and rarity of these selections.
                                        </li>
                                        <li><strong>Design Complexity:</strong>
                                            The intricacy of your design directly impacts the cost.
                                            More complex designs demand more time, skill, and intricate construction techniques,
                                             which are factored into the pricing.
                                        </li>
                                        <li><strong>Labor and Expertise:</strong>
                                            Our team of skilled artisans dedicates hours of meticulous
                                            work to create your garment. Labor costs are calculated based on the
                                             time spent and the level of expertise required for your unique design.
                                        </li>
                                        <li><strong>Operational Overheads:</strong>
                                            Running a state-of-the-art design studio involves various
                                             overheads, including equipment, utilities, and space. A portion of these operational
                                             costs is included in our pricing to maintain the highest standards of service.
                                        </li>
                                        <li><strong>Prototyping and Fittings:</strong>
                                            To ensure perfection in every stitch, we create prototypes and conduct fittings.
                                            This essential phase of the design process guarantees a flawless fit and finish.
                                        </li>
                                        <li><strong>Urgency of the Request:</strong>
                                          Need your garment in a hurry? We offer expedited services for time-sensitive requests,
                                          which may incur an additional charge.
                                        </li>
                                        <li><strong>Designer's Reputation and Experience:</strong>
                                            Our reputation for excellence and years of experience in fashion design are reflected in our pricing,
                                            ensuring that you receive unparalleled craftsmanship and service.
                                        </li>
                                        <li><strong>Market Rates and Competitiveness:</strong>
                                            We continually monitor the market to ensure our prices are competitive,
                                            fair, and reflect the exceptional quality of our work.
                                        </li>
                                    </ul>

                                    <h2>Getting a Quote</h2>
                                     <p>To receive a personalized quote for your custom garment, please <a href="mailto:hueharper@gmail.com
                                ?subject=Estimate%20Request&body=I%20would%20like%20to%20request%20a%20free%20quote"
                            >contact us</a> for an initial consultation.
                                         During this session, we will discuss your vision, materials, design, and timeframe. Based on this,
                                         we will provide you with a detailed estimate that encompasses all aspects of creating your bespoke piece.
                                     </p>

                                   <h2>Your Investment in Quality</h2>
                                    <p>Investing in a custom garment from HUE HARPER
                                        means investing in a piece of art crafted just for you. Our commitment to quality,
                                        sustainability, and customer satisfaction ensures that
                                        your garment is not just a purchase but a timeless addition to your wardrobe.
                                    </p>
									<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
									<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p> -->
								</div>
							</section>

					</div>

				<!-- Contact-->
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
        <!-- Contact Areas -->


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
