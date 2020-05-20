<?php include_once "includes/head.php";
include_once "includes/header.php";

$today = date('Y-m-d');
// start_session();
// echo $_SESSION["names"];ss

if(!isset($_SESSION["loggedin"])){
    header("Location: admin/index.php");
}
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
                        <ul class="cats" id="items">
                            
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
                    <div>
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
                                Number of Products purchased. <strong class="float-right" id="num">3</strong>
                            </li>
                            <li class="total">
                                Total <strong class="float-right"> <small>shs</small> <span id="total">0 </span></strong>
                            </li>
                        </ul>
                        <hr>
                        <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/">
                            <input type="submit" class="btn_1 full-width" name="submit" value="Check Out" />
                            <input type="hidden" name="bid" value="219" />
                            <input type="hidden" name="currency" value="UGX" />
                            <input type="hidden" name="amount" id='api_amount' value="" />
                            <input type="hidden" name="narrative" value="Purchasing medicine and or services" />
                            <input type="hidden" name="reference" value="Medicine Purchase" />
                            <input type="hidden" name="provider_reference_text" value="Payment For drugs" />
                            <input type="hidden" name="account" value="100712303477" />
                            <input type="hidden" name="return" value="https://tawk.to/chat/5e87beb935bcbb0c9aad9581/1e537j6jj" />
                            <input type="hidden" name="prefilled_payer_email_address" value="" />
                            <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
                            <input type="hidden" name="prefilled_payer_names" value="" />
                            <input type="hidden" name="abort_payment_url" value="" />
                        </form>
                    </div>
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /asdide -->
        </div>
        <!-- /row -->
    </div>


<script>
    var cart = JSON.parse(sessionStorage.getItem('cart'))
    var cartNum = document.getElementById('cart').innerHTML = cart.length;
    // console.log(cart);
    var prices = [];
    var total = 0;
    var cartItem = "";
    for(var i=0; i< cart.length; i++){
       var p = (parseInt(cart[i]['price']))
       prices.push(p)
       total += p
       
       cartItem += "<li>"+cart[i]['medicine']+ "<span> &nbsp; | &nbsp; " +cart[i]['price']+" shs </span></li>";

    }
    document.getElementById('total').innerHTML = total;
    document.getElementById('api_amount').value = total;
    document.getElementById('num').innerHTML = cart.length;
    document.getElementById('items').innerHTML = cartItem;
    
    console.log(prices, total)
</script>


    <?php include_once "includes/footer.php"; ?>