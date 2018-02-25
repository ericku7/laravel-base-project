	<footer class="footer">
		<div class="container">
			<div class="row footer-cols">
				<div class="col-md-3">
					<h2 class="footer-list-title">Corporate</h2>
					<ul>
						<li><a href="#" class="footer-link">Carrers</a></li>
						<li><a href="#" class="footer-link">Policies</a></li>
						<li><a href="#" class="footer-link">Swiftrend cards</a></li>
						<li><a href="#" class="footer-link">Terms & conditions</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h2 class="footer-list-title">Customers</h2>
					<ul>
						<li><a href="#" class="footer-link">Faq's</a></li>
						<li><a href="#" class="footer-link">Help</a></li>
						<li><a href="#" class="footer-link">Shipping</a></li>
						<li><a href="#" class="footer-link">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h2 class="footer-list-title">Follow us</h2>
					<ul>
						<li>
							<a href="#" class="footer-link">
								<i class="ti ti-facebook"></i>&nbsp;&nbsp;Facebook
							</a>
						</li>
						<li>
							<a href="#" class="footer-link">
								<i class="ti ti-twitter"></i>&nbsp;&nbsp;Twitter
							</a>
						</li>
						<li>
							<a href="#" class="footer-link">
								<i class="ti ti-instagram"></i>&nbsp;&nbsp;Instagram
							</a>
						</li>
						<li>
							<a href="#" class="footer-link">
								<i class="ti ti-linkedin"></i>&nbsp;&nbsp;Linkedin
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h2 class="footer-list-title">Swiftrend Member</h2>
					<p class="newsletter">
						Sign up for Swiftrend News and get a special 
						WELCOME OFFER within a Week 
					</p>
					<form method="post" action="">
						<div class="input-group">
							<input type="text" name="newsletter-mail" class="newsletter-input form-control" placeholder="Enter your email">
							<span class="input-group-addon btn btn-danger">
								<i class="ti ti-shift-right"></i>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p class="text-center">Copyrights &copy; {{ date('Y') }}
			{{ config('app.name') }}</p>
		</div>
	</footer>
<!-- Bootstrap core JavaScript -->
    <script src="./assets/front/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/front/js/letter_initial.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(e){
		    $('.search-panel .dropdown-menu').find('a').click(function(e) {
				e.preventDefault();
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
			});
		});
    </script>
  </script>
  </body>
</html>
