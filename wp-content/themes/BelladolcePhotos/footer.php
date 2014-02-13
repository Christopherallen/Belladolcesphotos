		<div class="footer">		
			<?php wp_footer(); ?>
				<div class="social">
					<?php if(is_home()){ ?>
						<img class="profileImage" src="<?php bloginfo('template_url'); ?>/images/connie.png" alt="Connie Hardy" />
						<h3 class="name">Connie Hardy</h3>
						<p class="bio">Hello, my name is Connie Hardy. I am a photographer based in Tacoma, WA. My love of photography combined with my passion for nature and travel have brought me to this media. It is my visual voice from my heart and soul when words lack adequate description.</h1>
					<?php } ?>	
					<ul>
						<li><a class="icon facebook-circle" href="#"><span class="removeText">facebook</span></a></li>
						<li><a class="icon pintrest-circle" href="#"><span class="removeText">Pinterest</span></a></li>
						<li><a id="trigger-overlay" class="icon mail-circle" href="#"><span class="removeText">Contact</span></a></li>
					</ul>
				</div>
				<div class="copy">
					<p class="copywrite"><?php echo date('Y');?> &copy; Belladolces Photos All Rights Reserved | <a href="#">Terms of Services</a> | <a hef="#"> Privacy Policy</a></p>
				</div>
			</div>
			</div>
			<div class="overlay overlay-contentpush">
				<div class="row">
					<button type="button" class="overlay-close">x<span class="removeText">Close</span></button>
					<div class="contactBody">
						<div class="large-7 columns contactForm">
							<?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>
						</div>
						<div class="large-5 columns">
							<h4>Header</h4>
							<p class="contactContent">Hello, my name is Connie Hardy. I am a photographer based in Tacoma, WA. My love of photography combined with my passion for nature and travel have brought me to this media. It is my visual voice from my heart and soul when words lack adequate description.</p>
							<div class="small-6 columns first">
								<h5>Email:</h5>
								<p>connie@gmail.com</p>
							</div>
							<div class="small-6 columns">
								<h5>phone:</h5>
								<p>222-222-222</p>
							</div>
						</div>
				</div>
			</div>
			<script src="<?php bloginfo('template_url'); ?>/library/js/scripts.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/library/js/modernizr.custom.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/library/js/classie.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/library/js/overlay.js"></script>
	</body>
	

</html>