<!DOCTYPE HTML>
<html>
	<head>
        <title>Services | HUE HARPER</title>
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
            h1, h2, strong {
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
                @php $name='SERVICES'; @endphp
                <x-nav-bar :name="$name"/>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
                        <section id="one">
                            <div class="inner">
                                <header class="major">
                                    <h1>SERVICES</h1>
                                </header>
                                <ul>
                                    <li>Fashion Design Services</li>
                                    <li>Creative Direction for Fashion Projects</li>
                                    <li>Pattern Cutting and Garment Construction</li>
                                    <li>Event Production for Fashion Shows and Launches</li>
                                    <li>Styling Services</li>
                                    <li>Public Relations and Media Services</li>
                                    <li>Team Leadership and Project Coordination</li>
                                    <li>Brand Development Consulting</li>
                                    <li>Wardrobe Management</li>
                                    <li>Multitasking and Time Management Consulting</li>
                                    <li>Cultural and Global Fashion Consulting</li>
                                    <li>Networking and Relationship Building Workshops</li>
                                </ul>
                            </div>
                        </section>



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
            <script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
