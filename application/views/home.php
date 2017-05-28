<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<!-- Set the viewport width to device width for mobile -->

<!DOCTYPE html>
<html>
<head>
	<title>Puma Hearing Aid</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />	
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css">
</head>
<body>

  <!-- Hero -->
  <section class="et-hero-tabs">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height: 100%; width: 100%;">
    <div class="item active">
      <img src="<?php echo base_url("assets/img/am.png"); ?>" alt="Interaccoustic Audiometer">
    <div class="carousel-caption">
        <h3><a data-toggle="modal" data-target="" style="text-decoration: none">Interaccoustic Audiometer</a></h3>
        <p>Alat tes pendengaran</p>
    </div>      
    </div>
	

    <div class="item">
      <img src="<?php echo base_url("assets/img/bte.png"); ?>" alt="BTE">
    <div class="carousel-caption">
        <h3><a data-toggle="modal" data-target="" style="text-decoration: none">BTE</a></h3>
        <p>Alat bantu dengar model di belakang telinga</p>
    </div>       
    </div>
    

    <div class="item">
      <img src="<?php echo base_url("assets/img/cic.png"); ?>" alt="CIC">
    <div class="carousel-caption">
        <h3><a data-toggle="modal" data-target="" style="text-decoration: none">CIC</a></h3>
        <p>Alat bantu dengar model di dalam lubang telinga</p>
    </div>       
    </div>
  </div>
</div>

	

    <div class="et-hero-tabs-container">
      <a class="et-hero-tab" href="#tab-es6">Produk</a>
      <a class="et-hero-tab" href="#tab-flexbox">Hearing Aid</a>
      
      <a class="navbar-brand" href=""><img style="height: 210%; margin-right: 10px; padding: 0;" src="<?php echo base_url("assets/img/logo.png"); ?>">
      </a>

      <a class="et-hero-tab" href="#tab-angular">Services</a>
      <a class="et-hero-tab" href="#tab-other">Kontak</a>
      <span class="et-hero-tab-slider"></span>
    </div>
  </section>


  <!-- Main -->
  <main class="et-main">

    <section class="et-slide" id="tab-es6">

	<?php $i=0;
            
foreach ($data as $x) { ?>
        <div class="col-md-6 product-holder">
		<form class="custom" onsubmit="return false" method="post" action="">
			<div class="product-item text-center">
				<a class="product-img" data-toggle="modal" data-target="#Product-Modal<?php echo $i; ?>">
					<img class="img-responsive" src="<?php echo $x['image']; ?>">
				</a>
				<h3 class="product-title">
					<?php echo $x['merk'];  ?>
				</h3>
				<div class="h4 product-price">
					<span><?php echo $x['model']; ?></span>
				</div>
				<div class="buttons-holder">
					<a class="btn btn-default" data-toggle="modal" data-target="#Product-Modal<?php echo $i; ?>" href=""><span class="glyphicon glyphicon-eye-open"></span></a>
				</div>
			</div>
		</form>
	</div> 
        
        <div id="Product-Modal<?php echo $i; ?>" class="modal fade" role="dialog">
	  	<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">DETAILS</h4>
		      </div>
		      <div class="modal-body">
				<div class="row">
					<div class="col-sm-6">	
						<a class="product-img" >
							<img class="img-responsive" src="<?php echo $x['image']; ?>" alt="ABD">
						</a>								
					</div>
					<div class="col-sm-6" style="text-align: left;">
					 <table style="width:100%">
						<tr>
							<td>Merk</td>
							<td>: <?php echo $x['merk']; ?></td>
						</tr>
						<tr>
							<td>Model</td>
							<td>: <?php echo $x['model']; ?></td>
						</tr>
						<tr>
							<td>Tipe</td>
							<td>: <?php echo $x['tipe']; ?></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>: <?php echo $x['deskripsi']; ?></td>
						</tr>					
					</table> 
					</div>
				</div>	        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
                <?php $i++; ?>
	  	</div>
	</div>
        
            <?php } ?>


	<!-- Modal -->
	
	
	</section>
	<div class="btn btn-default" style="text-align: center; border-radius: 0px !important; left: 50%" ><a href="<?php echo base_url("more"); ?>">See More</a></div>

    <section class="et-slide" id="tab-flexbox">
    <div style="margin-left: 20%; margin-right: 20%">
	    <h1 id="hasatu" style="color: #FFFFFF;font-weight: bolder; font-size: 5em">KENAPA ALAT BANTU DENGAR?</h1>
	    <hr>
	    <p style="font-size: 1.5em">Gangguan pendengaran dapat mempengaruhi banyak aspek kehidupan sehari-hari. Jika tidak segera ditangani dalam waktu lama, kualitas pendengaran, daya kognitif, gangguan ingatan, dan kesehatan secara menyeluruh dapat menurun. Disitulah dimana alat bantu dengar dapat membantu anda dalam mengatasi gangguan tersebut.</p>
	    <p style="font-size: 1.5em">Kami menyediakan berbagai macam merk dan model alat bantu dengar berkualitas yang bervariasi sesuai dengan umur, preferensi dan tingkat gangguan pendengaran anda.</p>
    </div>

    </section>

    <section class="et-slide" id="tab-angular">
    <div class="row">
	   		 <div class="col-md-6">
			<section class="feature left">
				<a href="#" class="image icon fa-signal"><img src="<?php echo base_url("assets/img/pic01.jpg"); ?>" alt="" /></a>
				<div class="content">
					<h3>Tes Audiometri</h3>
					<p>Merupakan pemeriksaan yang bertujuan untuk mengetahui tingkat atau ambang batas pendengaran seseorang dan juga jenis gangguan pendengaaran yang dialaminya (Jika ada)</p>
				</div>
			</section>
			<br>
    <div class="row">
	   		 <div class="col-md-12">
			<section class="feature left">
				<a href="#" class="image icon fa-signal"><img  src="<?php echo base_url("assets/img/pic02.jpg"); ?>" alt="" /></a>
				<div class="content">
					<h3>Penjualan ABD</h3>
					<p>Alat bantu dengar (ABD) merupakan suatu alat akustik listrik yang dapat digunakan oleh manusia dengan gangguan fungsi pendengaran pada telinga.</p>
				</div>	
			</section>  
			</div>
    </div>			
			</div>
		<div class="col-md-6">
			<section class="feature right">
				<a href="#" class="image icon fa-codel"><img src="<?php echo base_url("assets/img/pic02.jpg"); ?>" alt="" /></a>
				<div class="content">
					<h3>Medical Checkup Lainnya</h3>
					<p>Merupakan pemeriksaan organ telinga rutin yang didalamnya termasuk tes audiometri, spirometri, dan lain-lain</p>
				</div>
			</section>
			<br>
			<div>
			<section class="feature right">
				<a href="#" class="image icon fa-codel"><img src="<?php echo base_url("assets/img/pic01.jpg"); ?>" alt="" /></a>
				<div class="content">
					<h3>Maintenance</h3>
					<p>Merupakan suatu kegiatan yang diarahkan pada tujuan untuk menjamin kelangsungan fungsional dari alat bantu dengar anda.</p>
				</div>
			</section> 	
			</div>			
		</div>
    </div>

	</section>

	<section class="et-slide" id="tab-other">
		<div class="container">
			<div class="row-fluid">
		        <div class="col-md-8">
					<div id="map"></div>
					    <script>
					      function initMap() {
					        var uluru = {lat: -7.282352, lng: 112.732082};
					        var map = new google.maps.Map(document.getElementById('map'), {
					          zoom: 15,
					          center: uluru
					        });
					        var marker = new google.maps.Marker({
					          position: uluru,
					          map: map
					        });
					      }
					    </script>
					    <script async defer
					    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeEMML3hCPPMs3QS2src87yHYa-r8XQBY&callback=initMap">
					    </script>

		    	</div>
		    	
		      	<div class="col-md-4" style="color: white; text-align: left">
		    		<h2>Alamat</h2>
		    		<address>
		    			<strong>Puma Hearing Aid</strong><br>
		    			Jl. Raya Diponegoro No.161<br>
		    			Wonokromo<br>
		    			Surabaya<br>
		    			Indonesia<br>
		    			60241<br>
		    			<abbr title="Phone">P:</abbr> (031) 5677088
		    		</address>
		    	</div>
		    </div>
		</div>
	</section>
  </main>



<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/index.js"); ?>"></script>
</body>
</html>