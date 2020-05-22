<header class="header_sticky">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <h3><a href="index.php" title="Dokta">Dokta</a>
          <span>
          <?php if(!isset($_SESSION['loggedin'])): ?>
            <a style="font-size: 15px; color: #3F4079;" href="./admin/">Login</a>
          <?php else: ?>
            <a style="font-size: 15px; color: #3F4079;" href="./backend/logout.php">logout</a>
          <?php endif;?>
          </span>
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

            <li><a href="empty.php">Empty Cart</a></li>
            <li><a href="#0" onClick="maintain_cart_state()">
                <div title="Code: 0xede5" class="the-icons col-md-3 col-sm-3"><i class="icon-cart"></i> <span class="i-name">Cart <small id="cart">0</small></span><span class="i-code"></span></div>
              </a></li>
          </ul>
        </div>
        <!-- /main-menu -->
      </nav>
    </div>
  </div>
  <!-- /container -->
</header>