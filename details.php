<?php
include_once "includes/head.php";
include_once "includes/header.php";
include_once "backend/config.php";
$cur = new AppInit();
$details = $cur->product($_GET['id'], $_GET['type']);
$type = $_GET['type'];
?>
<div id="breadcrumb">
  <div class="container">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li onclick="back()"><a href="#0">search</a></li>
      <li>Drug name</li>
    </ul>
  </div>
</div>

<?php if (!empty($details)) : ?>
  <?php foreach ($details as $key => $value) : ?>
    <?php $image = base64_encode($value['image']); ?>

    <div class="container margin_60">
      <div class="row">
        <div class="col-xl-8 col-lg-8">
          <nav id="secondary_nav">
            <div class="container">
              <ul class="clearfix">
                <li><a href="#section_1" class="active">General <?php echo $_GET['type'] ?> info</a></li>
                <li></a></li>
                <li></li>
              </ul>
            </div>
          </nav>
          <div id="section_1">
            <div class="box_general_3">
              <div class="profile">
                <div class="row">
                  <div class="col-lg-5 col-md-4">
                    <figure>
                      <img src="data:image/jpg;charset=utf8;base64,<?php echo $image; ?>" class="img-fluid">
                    </figure>
                  </div>
                  <div class="col-lg-7 col-md-8">
                    <h1><?php echo $value['title']; ?></h1>

                    <ul class="contacts">
                      <li>
                        <h6>Address</h6>
                        <?php echo $value['address']; ?>

                      </li>
                      <li>
                        <h6>Phone</h6>
                        None Listed
                      </li>
                    </ul>
                    <?php if ($type == 'drug') : ?>
                      <ul class="">
                        <li class="btn_1">
                          <span style="
                          border: none;
                          width: 100%;
                          height: 100%;
                          background-color: inherit;
                          color: #fff;
                          /* background: #e74e84; */
                          cursor: pointer;
                          display: block;
                          padding: 5px;
                         ">
                            shs | <?php echo $value['price']; ?>
                          </span>

                        </li>
                        <li  style="
                            float: right;
                            cursor: pointer;
                          " onClick="addtoCart('<?php echo $value['title'] ?>', '<?php echo $value['price'] ?>', '<?php echo $value['id'] ?>')">
                          <i class="icon-cart"></i> <span class="i-name" id="<?php echo $value['id'] ?>">Add to Cart</span>

                        </li>
                      </ul>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <hr>
              <!-- /profile -->
              <div class="indent_title_in">
                <i class="pe-7s-user"></i>
                <h3>Professional statement</h3>
                <p>General <?php echo $_GET['type'] ?> Description</p>
              </div>
              <div class="wrapper_indent">
                <p>
                  <?php echo $value['description']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-xl-4 col-lg-4" id="sidebar">
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://maps.google.com/maps?q=<?php echo $value['address']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

              Locations here
        </aside>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

<?php include_once "includes/footer.php"; ?>
<script>
  // alert('loaded!')
    var info = JSON.parse(sessionStorage.getItem('cart'))
    var cartNum = document.getElementById('cart').innerHTML = info.length;

    function addtoCart(med, price, id){
        var pro = { medicine: med, price: price, id: id }
        info.push(pro);
        document.getElementById(id).innerHTML = 'remove';
        document.getElementById('cart').innerHTML = info.length;
        
        console.log(info, info.length);
    }
    function back(){
          sessionStorage.setItem("cart", JSON.stringify(info));
          window.history.back();
      }
</script>