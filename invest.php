<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
 }  
 else  
 {  
      header("location:login.html");  
 }  
 ?> 
 
<html>
<head>
	<title>Invest - fundd</title>
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
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">More</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
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
						<h2>Invest</h2>
						<p>Our available investing opportunities.</p>
					</header>
						<!-- <h3>John Freeman - $10</h3>
						<p>Click here to find out more about investing in John.</p>
                        <form action="https://test.bitpay.com/checkout" method="post">
                            <input type="hidden" name="action" value="checkout" />
                            <input type="hidden" name="posData" value="" />
                            <input type="hidden" name="data" value="qbAfM+webtfbPR6Y7T0S7Vv/43J9mXh5y4Rr9QO677BRYXpJpCGKrt7MAX+d4Ke9SQ8VlLPYwpPawFAQ8kMfMNhSGcGdNHwmBltbXDKSVX+3tgumwnkKehVkNr0jX1nlO16vqkJbeYqSqVl/IX6QoQ==" />
                            <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 168px" alt="BitPay, the easy way to pay with bitcoins.">
                          </form>
                        <div class="row">
							<div class="row-6 row-12-mobilep">
								<h3>Jane Doe - $15</h3>
								<p>Click here to find out more about investing in Jane.</p>
                                <form action="https://test.bitpay.com/checkout" method="post">
                                    <input type="hidden" name="action" value="checkout" />
                                    <input type="hidden" name="posData" value="" />
                                    <input type="hidden" name="data" value="qbAfM+webtfbPR6Y7T0S7Vv/43J9mXh5y4Rr9QO677BRYXpJpCGKrt7MAX+d4Ke90Wc/uyonmhvkuPQ83AA7U1W39T5hObTRWLEmvS7lG79qaiKSB++mO3bpZPiYMCc8RGJIr6v+vXHxT2VbjPoM5g==" />
                                    <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 168px" alt="BitPay, the easy way to pay with bitcoins.">
                                  </form>
                            </div>
						</div>
                    </div> -->
                    
                    <div class="row">
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/john.jpg" height="350" width="150" alt="" /></span>
								<h3>John Freeman $10</h3>
                                <form action="https://test.bitpay.com/checkout" method="post">
                                    <input type="hidden" name="action" value="checkout" />
                                    <input type="hidden" name="posData" value="" />
                                    <input type="hidden" name="data" value="qbAfM+webtfbPR6Y7T0S7Vv/43J9mXh5y4Rr9QO677BRYXpJpCGKrt7MAX+d4Ke9SQ8VlLPYwpPawFAQ8kMfMNhSGcGdNHwmBltbXDKSVX+3tgumwnkKehVkNr0jX1nl5OYfh70e8Qn8fB/QJ371+JmIQaJlr6xUZrxghexuuutGEVKKam3i+YgM+34L8zu1VduhGZxqifAF54rKz1WIPQ==" />
                                    <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 168px" alt="BitPay, the easy way to pay with bitcoins.">
                                  </form>								<ul class="actions special">
									<li><a href="buy.html" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/jane.jpg"  height="350" width="150" alt="" /></span>
								<h3>Jane Doe $15</h3>
                                <form action="https://test.bitpay.com/checkout" method="post">
                                    <input type="hidden" name="action" value="checkout" />
                                    <input type="hidden" name="posData" value="" />
                                    <input type="hidden" name="data" value="qbAfM+webtfbPR6Y7T0S7Vv/43J9mXh5y4Rr9QO677BRYXpJpCGKrt7MAX+d4Ke90Wc/uyonmhvkuPQ83AA7U1W39T5hObTRWLEmvS7lG79qaiKSB++mO3bpZPiYMCc8SXpEn1mDg26Qs12l6BlTDYqV1Ya1fur368KwHVnJ8n6L+d40VJWU2EPPf3wqnwqusTeKPuMnObYYQlB0hcVFKw==" />
                                    <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 168px" alt="BitPay, the easy way to pay with bitcoins.">
                                  </form>								<ul class="actions special">
									<li><a href="buy.html" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
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