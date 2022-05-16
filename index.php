<!DOCTYPE html>
<!--
	Daniel Nettelfields hjemmeside
-->
<html>
	<head>
		<title>DJ Daniel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/x-icon" href="images/logo.ico">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<img src="images/logo.ico" style="width:5.25rem; height:auto;">
						</div>
						<div class="content">
							<div class="inner">
								<h1>Daniel Nettelfield</h1>
								<p>DJ • Event • Lyd • Lys</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#portfolio">Portfolio</a></li>
								<li><a href="#about">Om mig</a></li>
								<li><a href="#book">Lej mig</a></li>
								<li><a href="#contact">Kontakt</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<!-- Work -->
							<article id="portfolio">
								<h3 class="major">Portfolio</h3>
								<p>Dette er en kort portfolio, som viser lidt af hvad jeg kan. Du kan kigge på lyd- og lyspakker
									<a href="#book">her</a>, og
									hvis du leder efter noget der ikke er i denne portfolio,
									så kan du bare <a href="#contact">kontakte</a> mig,
									og så finder vi sikkert en løsning!</p>
								<span class="image main"><img src="images/port2.jpg" title="Marts 2022" alt="Lyd, lys og vild fest!"/></span>
								<span class="image main"><img src="images/port6.jpg" title="November 2021" alt="Lyd, lys og vild fest!"/></span>
								<span class="image main"><img src="images/port5.jpg" title="November 2021" alt="Lyd, lys og vild fest!"/></span>
								<span class="image main"><img src="images/port4.jpg" title="November 2021" alt="Lyd, lys og vild fest!"/></span>
								<span class="image main"><img src="images/port3.jpg" title="November 2021" alt="Lyd, lys og vild fest!"/></span>
								<span class="image main"><img src="images/port1.jpg" title="December 2019" alt="Lyd, lys og vild fest!"/></span>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">Om mig</h2>
								<span class="image main"><img src="images/port7.jpg" alt="Grønt lys, flot mand" /></span>
								<p>Jeg er en entusiastisk DJ på 18 år, som har haft musik som interrese siden jeg var helt lille. Jeg har spillet som DJ i 4 år nu, og forstår hvad der skal til for at sætte en ordenlig fest i gang</p>
							</article>

						<!-- About -->
						<article id="book">
							<h2 class="major">Udlejning</h2>
							<p>Vælg en pakke her, eller <a href = "#contact">kontakt</a> mig,
								hvis du leder efter noget helt specielt til dit næste event.</p>
							<div>
							    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
                                <div id="demo" class="collapse">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
								<span class="image main"><img src="images/pic03.jpg" title="Kombipakke 1" alt="Højtalere og lys"/></span></div>
							<div>
								<h3>Kombipakke 2</h3>
								<span class="image main"><img src="images/pic03.jpg" title="Kombipakke 2" alt="Højtalere og lys"/></span>
							</div>
							<div>
								<h3>Lydpakke</h3>
								<span class="image main"><img src="images/pic03.jpg" title="Lydpakke" alt="Højtalere"/></span>
							</div>
							<div>
								<h3>Lyspakke 1</h3>
								<span class="image main"><img src="images/pic03.jpg" title="Lyspakke 1" alt="Lys"/></span>
							</div>
							<div>
								<h3>Lyspakke 2</h3>
								<span class="image main"><img src="images/pic03.jpg" title="Lyspakke 2" alt="Lys"/></span>
							</div>
						</article>

						<!-- Kontakt -->
							<article id="contact">
								<h2 class="major">Kontakt</h2>
								<p>Du kan enten kontakte mig i nedenstående formular eller på mail: <a href="mailto:daniel@nettelfield.com">daniel@nettelfield.com</a></p>
								<form method="post" name="contactform" id="contactform" action="">
									<div class="field half first">
										<label for="name">Navn</label>
										<input type="text" name="name" id="name" required/>
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" required/>
									</div>
									<div class="field">
										<label for="package">Lyd- og Lyspakke</label>
										<div class="select-wrapper">
											<select name="package" id="package">
												<option value="Andet">Andet</option>
												<option value="Lydpakke 1">Lydpakke 1</option>
												<option value="Lydpakke 2">Lydpakke 2</option>
												<option value="Lyspakke 1">Lyspakke 1</option>
												<option value="Lyspakke 2">Lyspakke 2</option>
												<option value="Kombipakke 1">Kombipakke 1</option>
												<option value="Kombipakke 2">Kombipakke 2</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Besked</label>
										<textarea name="message" id="message" rows="4" required></textarea>
									</div>
									<ul class="actions">
										<li><button type="submit" name="submit" id="contactSubmit" class="special">Send</button></li>
										<li><button type="reset" name="reset" id="contactReset">Reset</button></li>
									</ul>
								</form>
								<h3><?php include "sendmail.php"; ?></h3>
								<ul class="icons">
									<li><a href="https://twitter.com/DNIIBOY" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/DanielNettelfield" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/dani959g/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/DNIIBOY" target="_blank" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

						<!-- Email success -->
							<article id="MailSuccess">
								<h2 class="major">Kontakt</h2>
								<p>Du kan enten kontakte mig i nedenstående formular eller på mail: <a href="mailto:daniel@nettelfield.com">daniel@nettelfield.com</a></p>
								<h3>Din mail blev sendt, og du modtager en bekræftelse i din indbakke.</h3>
								<span class="image main"><img src="images/pic0.jpg" alt="Grønt flueben" /></span>
							</article>

						<!-- Email failed -->
							<article id="MailFail">
								<h2 class="major">Kontakt</h2>
								<p>Du kan enten kontakte mig i nedenstående formular eller på mail: <a href="mailto:daniel@nettelfield.com">daniel@nettelfield.com</a></p>
								<h3>Din mail blev desværre ikke sendt. Prøv igen ellers send mig en mail på <a href="mailto:daniel@nettelfield.com">daniel@nettelfield.com</a></h3>
								<span class="image main"><img src="images/pic0.jpg" alt="Rødt kryds" /></span>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Daniel Nettelfield. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
