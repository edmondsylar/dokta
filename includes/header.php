<?php include_once "head.php"?>
<header class="header_sticky">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <h3><a href="index.php" title="Dokta">Dokta</a>
        </h3>
      </div>
      <nav class="col-lg-9 col-6">
          <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
        <ul id="top_access">
            <!-- this space is reserved for i don't know what -->
        </ul>
        <div class="main-menu">
          <ul>
            <li><a href="index.php">Home</a></li>

            <li class="submenu">
                <i class="icon-cart"></i> <span class="i-name">Cart <small id="cart">0</small></span><span class="i-code"></span>
                  <i class="icon-down-open-mini">
                </i>
              
              <ul>
                <li><a href="#0" onClick="maintain_cart_state()">View Cart</a></li>
                <li><a href="empty.php">Empty Cart</a></li>
              </ul>
            </li>

            <li class="submenu">
              <a href="#0" class="show-submenu">Profile<i class="icon-down-open-mini"></i></a>
              <ul>
                <li><a href="../admin/home.php">User Profile</a></li>
                 <?php if(!isset($_SESSION['loggedin'])): ?>
                 <li><a  href="./admin/">Login</a></li>
                <?php else: ?>
                <li><a  href="./backend/logout.php">logout</a></li>
                <?php endif;?>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /main-menu -->
      </nav>
    </div>
  </div>
  <!-- /container -->
</header>
<script>
  function maintain_cart_state(params) {
      var info = JSON.parse(sessionStorage.getItem('cart'))
      var cartNum = document.getElementById('cart').innerHTML = info.length;
      
      sessionStorage.setItem("cart", JSON.stringify(info));
      window.location.href="cart.php?";
  }
</script>