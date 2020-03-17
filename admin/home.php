<?php include_once "includes/head.php";
      include_once "includes/header.php";
?>

<?php
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("Location: index.php");
	}
?>

  <div class="">
    <div class="container margin_60_35">
      <p>You are logged in as a user. Check the <code>Menu</code> to add drugs and services to the system</p>
      <br><br>
    <h3 style="margin-left: auto; margin-right: auto; text-decoration: underline;">Dokta App!</h3>
    </div>
  </div>

<?php include_once "includes/foot.php"; ?>
