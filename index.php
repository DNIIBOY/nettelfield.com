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
						    	<!-- <li><a href="#elements">Elementer</a></li> -->
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
								<p>Jeg er en entusiastisk DJ, på 18 år, der har haft musik som interrese siden jeg var helt lille. Jeg har spillet som DJ i 4 år nu, og forstår hvad der skal til for at sætte en ordenlig fest i gang</p>
							</article>

						<!-- About -->
						<article id="book">
							<h2 class="major">Udlejning</h2>
							<p>Vælg en pakke her, eller <a href = "#contact">kontakt</a> mig,
								hvis du leder efter noget helt specielt til dit næste event.</p>
							<div>
								<button class="collapsible">Kombipakke 1</button>
								<div class="collapContent">
                                    <h1>homie</h1>
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

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h1>Heading Level 1</h1>
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="https://twitter.com/DNIIBOY" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/DanielNettelfield/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/dani959g/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="https://github.com/DNIIBOY" class="icon fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>
								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="field half first">
											<label for="demo-name">Name</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Hans Megamunk" />
										</div>
										<div class="field half">
											<label for="demo-email">Email</label>
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="Hans@Megafag.com" />
										</div>
										<div class="field">
											<label for="demo-category">Category</label>
											<div class="select-wrapper">
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Im bad can u help me?</option>
													<option value="1">I still have Heartstone...</option>
													<option value="1">I have uninstalled Heartstone and i still suck</option>
													<option value="1">Can i get even better?</option>
												</select>
											</div>
										</div>
										<div class="field half first">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="field half">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="field half first">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="field half">
											<input type="checkbox" id="demo-human" name="demo-human" unchecked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="field">
											<label for="demo-message">Message</label>
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

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
			<script src="https://smtpjs.com/v3/smtp.js"></script>
	</body>
</html>
