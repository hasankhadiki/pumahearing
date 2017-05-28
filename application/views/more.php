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
      <a class="navbar-brand" href="#"><img style="height: 210%; margin-right: 10px; padding: 0;" src="<?php echo base_url("assets/img/logo.png"); ?>">
      </a>
      <a class="et-hero-tab" href="#tab-es6">Produk</a>
      <a class="et-hero-tab" href="<?php echo base_url(""); ?>">Kembali</a>
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
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/index.js"); ?>"></script>
</body>
</html>