<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aaron &amp; Kelsea</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aaron and Kelsea's Wedding" />
        <meta name="keywords" content="Aaron, Yangello, Kelsea, Salvatore, Wedding" />
        <meta name="author" content="Aaron Yangello" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <!-- AddEvent script -->
        <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("April 25, 2020 18:00:00").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("num-days").innerHTML = days;
                document.getElementById("num-hours").innerHTML = hours;
                document.getElementById("num-min").innerHTML = minutes;
                document.getElementById("num-sec").innerHTML = seconds;

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("num-days").innerHTML = "00";
                    document.getElementById("num-hours").innerHTML = "00";
                    document.getElementById("num-min").innerHTML = "00";
                    document.getElementById("num-sec").innerHTML = "00";
                }
            }, 1000);
        </script>
        
        <!-- Favicon Stuff -->
        <link rel="apple-touch-icon" sizes="57x57" href="img/icon/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/icon/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icon/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icon/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icon/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icon/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/icon/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icon/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/icon/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/icon/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/icon/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/icon/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	
<!-- Navigation -->
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">Our Story</a></li>
						<li><a href="party.html">The Wedding Party</a></li>
						<li class="has-dropdown"><a href="gallery.html">Gallery</a></li>
						<li><a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1562771516832&key=GRP&app=resvlink">Book Your Stay</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<header id="home-header" class="fh5co-header fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Aaron &amp; Kelsea</h1>
							<h2>We Are Getting Married <br> <h4><em>...finally...</em></h4></h2>
							
							<div class="simply-countdown simply-countdown-one">
							    <div class="simply-countdown simply-countdown-one">
							        <div class="simply-section simply-days-section">
							            <div>
							                <span id="num-days" class="simply-amount"></span>
							                <span class="simply-word">days</span>
							             </div>
							         </div>
							         <div class="simply-section simply-hours-section">
							             <div>
							                 <span id="num-hours" class="simply-amount"></span>
							                 <span class="simply-word">hours</span>
							             </div>
							         </div>
							         <div class="simply-section simply-minutes-section">
							             <div>
							                 <span id="num-min" class="simply-amount"></span>
							                 <span class="simply-word">minutes</span>
							             </div>
							         </div>
							         <div class="simply-section simply-seconds-section">
							             <div>
							                 <span id="num-sec" class="simply-amount"></span>
							                 <span class="simply-word">seconds</span>
							             </div>
							         </div>
							     </div>
							</div>
							<!--<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>-->
							<!-- Button code -->
                            <div title="Add to Calendar" class="btn btn-default btn-sm addeventatc" data-styling="none" >
                                Save the Date!
                                <span class="start">04/25/2019 06:00 PM</span>
                                <span class="end">04/25/2019 11:30 PM</span>
                                <span class="timezone">America/New_York</span>
                                <span class="title">Aaron and Kelsea's Wedding</span>
                                <span class="location">Brigalias 396 Williamstown Rd, Sicklerville, NJ 08081</span>
                                <span class="organizer">Aaron Yangello</span>
                                <span class="organizer_email">ayangello@gmail.com</span>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>April 25th, 2020 Sicklerville, NJ</h3>
					<p>Come and celebrate with us!</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="img/Aaron.png" alt="Aaron Yangello" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Aaron Yangello</h3>
						<p>“I love you not only for what you are, but for what I am when I am with you.” <br> – Roy Croft</p>
						<!-- There are people out there who are waiting to meet you. Waiting to love you. You have to stick around for them. <br> -Benedict Smith -->
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="img/Kelsea.png" alt="Kelsea Salvatore" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Kelsea Salvatore</h3>
						<p>“You don’t marry someone you can live with, you marry the person who you cannot live without.” <br> ― Aleatha Romig</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Wedding Events-->
	<div id="event-banner" class="fh5co-event fh5co-bg" >
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" style="margin-bottom: 3em;">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Main Ceremony</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>6:00 PM</span>
										<span>6:30 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Saturday 25</span>
										<span>April, 2020</span>
									</div>
									<p>Come and celebrate with us at <a href="http://www.brigalias.com/ceremonies/">Brigalia's Chapel</a> in Sicklerville. Book your stay at the <a href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1562771516832&key=GRP&app=resvlink">Couryard Glassboro Rowan University</a> hotel, and get a 20% discount on the room!</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Reception</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>6:30 PM</span>
										<span>11:30 AM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Saturday 16</span>
										<span>May, 2020</span>
									</div>
                                    <p>Eat, drink, and be merry in <a href="http://www.brigalias.com/ballrooms/">Brigalia's Camelot Ballroom</a> as we dance the night away!</p>
                                    <p>What's the song that's guarenteed to get you on the dance floor?</p>
                                    <div id="fh5co-started" class="fh5co-bg" style="padding: 0 0;">
                                        <div class="row animate-box">
                                            <div class="col-md-10 col-md-offset-1">
                                                <form class="form-inline" action="./php/addsong.php" method="post">
                                                    <div class="form-group">
                                                        <input name="name" type="name" class="form-control" id="name" placeholder="Song Name">
                                                    </div>
                                                    <button type="submit" class="btn btn-default btn-block">Let's Dance</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Wedding Events-->
<!-- Footer and contact info -->
    <footer id="fh5co-footer" style="padding-top: 3em; padding-bottom: 3em;">
        <div class="container">
           <div class="fh5co-contact-info">
                <h3>Contact Information</h3>
                <hr>
                <ul>
                    <li class="address">1203 Hessian Ave. <br> National Park, NJ 08063</li>
                    <li class="phone"><a href="tel://8564691644">(856) 469 - 1644</a></li>
                    <li class="email"><a href="mailto:ayangello@gmail.com">ayangello@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </footer>
<!-- Footer and contact info -->

<!-- Friend Wishes --
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-1.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-2.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-3.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <!-- End Friend Wishes-->

	</div><!--End Page-->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
</html>

