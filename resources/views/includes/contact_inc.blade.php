<section class="contact_us_section">
	<div class="container">
		<div class="row slim_section">
			<div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
				<h5>Contact Us</h5>
				<h2 ng-bind-html="includes.global.one[0]['contact-slim']['collections']['title']['en']"></h2>
			</div>
			<div class="col-md-8 wow fadeInUp" data-wow-delay="0.3s">				
				<p ng-bind-html="includes.global.one[0]['contact-slim']['collections']['description']['en']"></p>
			</div>
		</div>
		<div class="row wow fadeInUp" data-wow-delay="0.4s">
			<div class="col-md-5">
				<img src="/img/Group 1231.png" alt="">
                <p ng-bind-html="includes.global.one[0]['contact-informations']['collections']['details']['en']"></p>
			</div>
			<div class="col-md-7">
        		<form name="sentMessage" id="contactForm" class="sub_secti_last">
					<div class="row">
							<input type="text" name="name" id="" placeholder="Full Name" required>
							<input type="email" name="email" id="" placeholder="Email" required>
							<input type="phone" name="phone" id="" placeholder="Phone" required>
							<textarea id="" placeholder="Message" name="message"></textarea>
							<div class="col-md-12 no_padding">
								<button type="submit" class="default_button">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>