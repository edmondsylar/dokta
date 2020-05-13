<?php include_once "includes/head.php";
include_once "includes/header.php";

$today = date('Y-m-d');

?>
<div id="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#user">drugs</a></li>
            <li>checkout</li>
        </ul>
    </div>
</div>

<div class="container margin_60">
    <div class="row">
        <div class="col-xl-8 col-lg-8">
            <div class="box_general_3 cart">
                <div class="form_title">
                    <h3><strong>1</strong>Cart Info</h3>
                    <p>
                        Medicines Purchased
                    </p>
                </div>
                <div class="step">
                    <!-- list of the medicines purchased here -->
                    <div class="widget">
                        <ul class="comments-list">
                            <li> medicine one. </li>
                            <li> medicine one. </li>
                            <li> medicine one. </li>
                        <ul>
                    </div>

                    </div>
                    <hr>
                    <!--End step -->
                    <div id="policy">
                        <h4>Privacy policy</h4>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="policy_terms" id="policy_terms"> I accept terms and conditions and general policy.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <aside class="col-xl-4 col-lg-4" id="sidebar">
                <div class="box_general_3 booking">
                    <form>
                        <div class="title">
                            <h3>Medi-Cart</h3>
                        </div>
                        <div class="summary">
                            <ul>
                                <li>Date: <strong class="float-right"><?php echo $today; ?></strong></li>
                                <li>Time: <strong class="float-right"><?php echo date("h:i:sa"); ?></strong></li>
                            </ul>
                        </div>
                        <ul class="treatments checkout clearfix">
                            <li>
                                Number of Products purchased. <strong class="float-right">3</strong>
                            </li>
                            <li class="total">
                                Total <strong class="float-right">shs 110</strong>
                            </li>
                        </ul>
                        <hr>
                        <a href="confirm.html" class="btn_1 full-width">Confirm and pay</a>
                    </form>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /asdide -->
        </div>
        <!-- /row -->
    </div>



    <?php include_once "includes/footer.php"; ?>