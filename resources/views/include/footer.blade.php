<!-- Footer Start -->
		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="item">
							<ul>
								<li><a href=""><i class="fa fa-facebook"></i></a></li><li><a href=""><i class="fa fa-twitter"></i></a></li><li><a href=""><i class="fa fa-pinterest"></i></a></li><li><a href=""><i class="fa fa-youtube"></i></a></li><li><a href=""><i class="fa fa-flickr"></i></a></li>							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 address">
						<p>
							Address: Shatarkul, Badda, Dhaka-1212. Bangladesh.<br>
							Email: info@diu.com<br>
							Phone: +88-019-39851060<br>
							Fax: +88-02-55040898<br>
						</p>
					</div>
					<div class="col-md-12 copyright">
						<p>
							Copyright diu © 2019. All Rights Reserved.						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer End -->

		<a href="#" class="scrollup">
			<i class="fa fa-angle-up"></i>
		</a>

	</div>


	<!-- Scripts -->
  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/hoverIntent.js"></script>
  <script src="assets/js/superfish.js"></script>
	<script src="assets/js/jquery.slicknav.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/owl.animate.js"></script>
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<script src="assets/js/jquery.mixitup.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/modernizr.min.js"></script>
  <script src="assets/js/custom.js"></script>

	<script type="text/javascript">
		getresult("getresult.html");
		function getresult(url) {
			$.ajax({
				url: url,
				type: "GET",
				data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val()},
				beforeSend: function(){$("#overlay").show();},
				success: function(data){
					$("#pagination-result").html(data);
					setInterval(function() {$("#overlay").hide(); },500);
				},
				error: function()
				{}
		   });
		}
	</script>

</body>

<!-- Mirrored from demosly.com/xicia/ebook/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2019 14:39:48 GMT -->
</html>
