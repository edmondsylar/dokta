<?php include_once "includes/head.php";
	  include_once "includes/header.php";
	  include_once "./backend/config.php";

	  $drugs = $cur->getDrugs();
?>

<?php
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("Location: index.php");
	}
?>
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-8">
        	<div class="row">
			<?php for ($i=0; $i < 4 ; $i++) { ?>
            		<div class="col-md-6">
  						<div class="box_list wow fadeIn">
  							<a href="#0" class="wish_bt"></a>
  							<figure>
  								<a href="#0"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
  									<div class="preview"><span>Read more</span></div>
  								</a>
  							</figure>
  							<div class="wrapper">
  								<small>Psicologist</small>
  								<h3>Dr. Sickman</h3>

  								<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
  								
  								<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
  							</div>
  							<ul>
  								<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>View on map</a></li>
  								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
  								<li><a disabled href="#0">Edit</a></li>
  							</ul>
              		</div>
            </div>
          <?php } ?>
		  <!-- end the for loop from here. -->
		  <nav aria-label="" class="add_top_20">
					<ul class="pagination pagination-sm">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
        </div>
      </div>
      <aside class="col-lg-4" id="sidebar">
		<div id="map_listing" class="normal_list">
		</div>
	</aside>
    </div>
  </div>

<?php //include_once "includes/foot.php"; ?>
