
<!DOCTYPE HTML>
<html>
<head>
	<title>Borrow Estimate - fundd</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <img src="images/logow2.png" height="125%">
            <nav id="nav">
                <ul>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">More</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php" class="button">Sign Out</a></li>
                </ul>
            </nav>
        </header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Borrow Estimate</h2>
						<p></p>
					</header>
					<div class="box">
						<h3>Based off of the information you provided, we can offer you an interest rate of 
                            <?php
    $credit_score = $_POST['creditscore'];
    if($credit_score > 800) 
        $apr = 3.2 + mt_rand(0, 100) * .001;
    else if($credit_score > 750)
        $apr = 3.4+ mt_rand(0, 100) * .001;
    else if($credit_score > 700)
        $apr = 3.6+ mt_rand(0, 100) * .001;
    else if($credit_score > 650)
        $apr = 3.8+ mt_rand(0, 100) * .001;
    else if($credit_score > 600)
        $apr = 4.2+ mt_rand(0, 100) * .001;
    else if ($credit_score > 550)
        $apr = 4.7+ mt_rand(0, 100) * .001;
    else if ($credit_score > 500)
        $apr = 5.0+ mt_rand(0, 100) * .001;
    else if ($credit_score > 450)
        $apr = 5.4+ mt_rand(0, 100) * .001;
    else if ($credit_score > 400)
        $apr = 5.7+ mt_rand(0, 100) * .001;
    else if ($credit_score >= 350)
        $apr = 6.9+ mt_rand(0, 100) * .001;
    echo $apr;
?> percent.</h3>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>