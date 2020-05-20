<?php
// importing the necessary files
include_once "backend/config.php";
include_once "includes/head.php";
include_once "includes/header.php";

$cur = new AppInit();
if (!isset($_GET['search'])) {
  header("Location: index.php");
}

$drugs = $cur->search_drug($_GET['search']);
$services = $cur->search_service($_GET['search']);

$_SESSION['cart'] = array();

?>
<script src="includes/functions.js">
  // sessionStorage.setItem('cart', [])
</script>
<div id="results">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4><strong>Showing results for </strong> <i><?php echo $_GET['search'] ?></i> </h4>
      </div>
      <div class="col-md-6">
        <div class="search_bar_list">

          <form action="backend/search.php" method="post">
            <input type="text" name="search" class="form-control" value="<?php echo $_GET['search'] ?>" placeholder="search.....">
            <input type="submit" value="Search">
          </form>

        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>


<div class="filters_listing">
  <div class="container">
    <ul class="clearfix">
      <li>
        <h6>Type</h6>
        <div class="switch-field">
          <input type="radio" id="all" name="type_patient" value="all" checked>
          <label for="all">All</label>
          <input type="radio" id="doctors" name="type_patient" value="doctors">
        </div>
      </li>
      <li>
        <h6>Sort by</h6>
        <select name="orderby" class="selectbox">
          <option value="Closest">Drugs</option>
          <option value="Best rated">services</option>
        </select>
      </li>
    </ul>
  </div>
  <!-- /container -->
</div>

<div class="container margin_60_35">

  <div class="row">
    <div class="col-lg-7">

      <?php if (!empty($drugs)) : ?>
        <?php foreach ($drugs as $key => $value) : ?>
          <?php $image = base64_encode($value['image']); ?>
          <div class="strip_list wow fadeIn">
            <a href="#0" style="
              float: right;
              /* color: black; */
            " onClick="addtoCart('<?php echo $value['title'] ?>', '<?php echo $value['price'] ?>', '<?php echo $value['id'] ?>')">
              <i class="icon-cart"></i> <span class="i-name" id="<?php echo $value['id'] ?>">Add to Cart</span><span class="i-code"></span>
            </a>
            <figure>
              <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt=""></a>
            </figure>
            <small>Drug</small>
            <h3><?php echo $value['title'] ?></h3>
            <p><?php echo $value['address'] ?></p>
            <p><?php echo $value['price'] ?> | shs</p>
            <ul>
              <li><a href="#" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
              <li>
                <a href="#" target="_blank">Directions</a></li>
              <li><a href="details.php?id=<?php echo $value['id'] ?>&type=drug">review</a></li>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>No record matched your search for $_GET['search']</p>
      <?php endif; ?>

      <?php if (!empty($services)) : ?>
        <?php foreach ($services as $key => $value) : ?>
          <?php $image = base64_encode($value['image']); ?>
          <div class="strip_list wow fadeIn">
            <a href="#0" style="
              float: right
            " onClick="addtoCart('<?php echo $value['title'] ?>', '<?php echo $value['price'] ?>', '<?php echo $value['id'] ?>')">
              <i class="icon-cart"></i> <span class="i-name" id="<?php echo $value['id'] ?>">Add to Cart</span><span class="i-code"></span>
            </a>
            <figure>
              <a href="#"><img src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" alt=""></a>
            </figure>
            <small>Service</small>
            <h3><?php echo $value['title'] ?></h3>
            <p><?php echo $value['address'] ?></p>
            <!-- <span class="rating">
             <i class="icon_star voted"></i><i class="icon_star voted"></i>
             <i class="icon_star voted"></i><i class="icon_star"></i>
             <i class="icon_star"></i>
           </span> -->
            <ul>
              <li><a href="#" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">View on Map</a></li>
              <li>
                <a href="#" target="_blank">Directions</a></li>
              <li><a href="details.php?id=<?php echo $value['id'] ?>&type=service">review</a></li>
            </ul>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>No record matched your search for $_GET['search']</p>
      <?php endif; ?>

      <nav aria-label="" class="add_top_20">
        <ul class="pagination pagination-sm">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">pages</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>


<?php include_once "includes/footer.php"; ?>