 
<html>

<head>
	<title>INSTINCT: Best Textile Company of Bangladesh</title>



	<link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<link rel="stylesheet" href="./css/styleComponents/_book.scss">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	
	<link rel="shortcut icon" type="image" href="./img/company-logo.png">


</head>
<body>


	<br><br><br><br><br>

	<div class="flip-book-menu text-center">
		<button class="btn btn-success"><a href="company_profile.php" style="color:white; text-decoration:none;"><i class="fa-solid fa-arrow-left"></i> Back</a></button>
	</div>

	<div class="book_wrapper">
		<a id="next_page_button"></a>
		<a id="prev_page_button"></a>

		<div id="mybook" style="display:none;">
			<div class="b-load">
				<div>
					<img src="images/banner-slider-image-2.jpg" alt=""/>
					<h1>About Us</h1>
					<p>Instinct Textile Ltd (ITL) is one of the leading Textile & Garments waste fabric recycler and Terry Towel manufacture in Bangladesh. It is also the biggest wiping Rag producer and exporter in the country.</p>
				</div>
				<div>
					<img src="images/banner-slider-image-3.jpg" alt="" />
					<h1>Our Team</h1>
					<p>The success story of ITL has been written day by day with the help of a bunch of sincere, honest dedicated and very hard working work force. Around 515 people are giving their heartiest effort and skills to keep ITL’s operation smooth .</p>
				</div>
				<div>
					<img src="images/banner-slider-image-4.jpg" alt="" />
					<h1>COMPETITIVE ADVANTAGE</h1>
					<p>ITL is associated with a large number of garments and textile industries along with a huge number of local waste fabric collectors and suppliers from all over the industrial zones (Gazipur Savar, Tongi, Narayongonj, Chittagonj) in Bangladesh</p>
				</div>
				<div>
					<img src="images/banner-slider-image-5.jpg" alt="" />
					<h1>Business Overview</h1>
					<p>Instinct Textile Ltd is Specialized and well experienced on Terry Products and Wiping Rags having a fairly good capacity of production of the products. It has been working for some of the biggest buyers in USA & Canada in a Large volume round the year as well as some Japanese buyers.</p>
				</div>
				<div>
					<img src="images/banner-slider-image-6.jpg" alt="" />
					<h1>Factory Details</h1>
					<p>The Terry towel factory of ITL is situated in Narshingdi. All of its weaving, dyeing, stitching & packing units are well equipped and compatible for huge production to handle very large volume of orders. </p>
				</div>
				<div>
					<img src="images/banner-slider-image-7.jpg" alt="" />
					<h1>How We Contribute</h1>
					<p>As a textile and garment waste recycler, ITL is continuously contributing to the environment to keep it clean and healthy for the future generation. A part from that, ITL always feels its responsibilities to the society. </p>
				</div>
				
			</div>
		</div>
	</div>



	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

	<script type="text/javascript">
		$(function() {
			var $mybook 		= $('#mybook');
			var $bttn_next		= $('#next_page_button');
			var $bttn_prev		= $('#prev_page_button');
			var $loading		= $('#loading');
			var $mybook_images	= $mybook.find('img');
			var cnt_images		= $mybook_images.length;
			var loaded			= 0;

			$mybook_images.each(function(){
				var $img 	= $(this);
				var source	= $img.attr('src');
				$('<img/>').load(function(){
					++loaded;
					if(loaded == cnt_images){
						$loading.hide();
						$bttn_next.show();
						$bttn_prev.show();
						$mybook.show().booklet({
								name:               null,                            //  
								width:              800,                             //  
								height:             500,                             //   
								speed:              600,                             //  
								direction:          'LTR',                           //  
								                           //  
								next:               $bttn_next,          			//  
								prev:               $bttn_prev,          			//  

							});
						Cufon.refresh();
					}
				}).attr('src',source);
			});

		});
	</script>

</body>

</html>