<div id="footer">
		<a href="#home-link" class="home-link">&nbsp;</a>
		<div class="center clearfix">
				<div class="f-about">
					<h5 class="f-title">Little about us</h5>
					<p><b>Sed posuere</b> consectetur  est at. 
					Nulla vitae elit libero, a pharetra. 
					Lorem ipsum <b>dolor sit</b> amet, conse
					ctetuer adipiscing elit.</p>
					<h5 class="f-title">Socialize with us</h5>
					<div class="f-social">
						<a href="#" class="s-fb">&nbsp;</a>
						<a href="#" class="s-tw">&nbsp;</a>
						<a href="#" class="s-dribble">&nbsp;</a>
						<a href="#" class="s-digg">&nbsp;</a>
						<a href="#" class="s-mail">&nbsp;</a>
					</div>
				</div>

				<div class="f-archives">
					<h5 class="f-title">Our Archives</h5>
					<ul class="f-list">
							<li><a href="#">March 2015</a></li>
							<li><a href="#">February 2012</a></li>
							<li><a href="#">January 2012</a></li>
							<li><a href="#">December 2011</a></li>
						</ul>
				</div>
					<div class="f-populars">
						<h5 class="f-title">Popular Posts</h5>
							<div class="f-populars">
								<div class="s-products-item clearfix">
								<div class="s-products-img">
									<a href="#"><img src="/template/img/f-pop-img.png" alt="" /></a>
								</div>
								<div class="s-products-info">
									<h6><a href="#">Great Album</a></h6>
									<span class="commetns"><i class="f-comment"></i> 12 comments</span>
								</div>
							</div>

							<div class="s-products-item clearfix">
								<div class="s-products-img">
									<a href="#"><img src="/template/img/f-pop-img2.png" alt="" /></a>
								</div>
								<div class="s-products-info">
									<h6><a href="#">Great Album</a></h6>
									<span class="comments"><i class="f-comment"></i> 12 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="f-search">
						<h5 class="f-title">Search our Site</h5>
							<form action="#">
								<input type="text" class="f-search-inp" placeholder="Enter Search ..."/>
							</form>
						<h5 class="f-title">Tag Cloud</h5>
						<a href ="#"class="tags">Audio CD</a>
						<a href ="#"class="tags">Video</a>
						<a href ="#"class="tags">Playlist</a>
						<a href ="#"class="tags">Avantgarde</a>
						<a href ="#"class="tags">Melancholic</a>
					</div>
				</div>
				<div class="footer-buttom">
					<div class="center">
						<a href="$">Home</a>
						<a href="$">Portfolio</a>
						<a href="$">Sitemap</a>
						<a href="$">Contact</a>
						<p class="right">Forte And Piano@2015 by NoKolya | All Rights Reserved</p>
					</div>
				</div>
			</div>
			</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script type="text/javascript" src="/template/js/cusel-min-2.5.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic" rel="stylesheet" type="text/css">
		<script type="text/javascript">

			  $(function() {
			    $( "#slider-range" ).slider({
			      range: true,
			      min: 0,
			      max: 10000,
			      values: [ 0, 10000 ],
			      slide: function( event, ui ) {
			        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			      }
			    });
			    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			      " - $" + $( "#slider-range" ).slider( "values", 1 ) );


			 /* select style */
					var params = {
						changedEl: "select",
						visRows: 5,
						scrollArrows: true
						}
						cuSel(params);
			  });


	$(document).ready(function(){
		$('#login_btn').click(function(){
			$('#popup').show(300);
			$('#hover').show();
			$("html,body").css("overflow","hidden");
		});
		$('#reg_btn').click(function(){
			$('#popup_reg').show(300);
			$('#hover').show();
			$("html,body").css("overflow","hidden");
		});
		$('#hover').click(function(){
			$('#popup').hide();
			$('#popup_reg').hide();
			$('#hover').hide();
			$('body').css('overflow','auto');
		});
		
		$(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
		
	});

</script>
	</body>
</html>






