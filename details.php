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
       <li><a href="javascript:history.go(-1)">search</a></li>
       <li>Drug name</li>
     </ul>
   </div>
 </div>

<?php if (!empty($details)): ?>
<?php foreach ($details as $key => $value): ?>
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
                   <!-- <small>Primary care - Internist</small> -->
                   <h1><?php echo $value['title']; ?></h1>
                   <span class="rating">
                     <i class="icon_star voted"></i>
                     <i class="icon_star voted"></i>
                     <i class="icon_star voted"></i>
                     <i class="icon_star voted"></i>
                     <i class="icon_star"></i>
                     <small>(145)</small>

                   </span>
                   <?php if ($type == 'drug'): ?>
                     <ul class="">
                       <li class="btn_1" >
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
                       <li class="btn_1">
                         <div align="center">
                           <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/">
                               <input type="submit" name="submit" value="Purchase" style="
                                border: none;
                                border-radius: 0;
                                width: 100%;
                                height: 100%;
                                background-color: inherit;
                                color: #fff;
                                /* background: #e74e84; */
                                cursor: pointer;
                                display: block;
                                padding: 5px;
                               "/>
                               <input type="hidden" name="bid" value="219" />
                               <input type="hidden" name="currency" value="UGX" />
                               <input type="hidden" name="amount" value="20000" />
                               <input type="hidden" name="narrative" value="General Consultation " />
                               <input type="hidden" name="reference" value="generalConsultation" />
                               <input type="hidden" name="provider_reference_text" value="Consultation Payment" />
                               <input type="hidden" name="account" value="100712303477" />
                               <input type="hidden" name="return" value="https://tawk.to/chat/5e87beb935bcbb0c9aad9581/1e537j6jj" />
                               <input type="hidden" name="prefilled_payer_email_address" value="" />
                               <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
                               <input type="hidden" name="prefilled_payer_names" value="" />
                               <input type="hidden" name="abort_payment_url" value="" />
                           </form>
                       </div>
                       </li>
                     </ul>
                   <?php endif; ?>
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
           <iframe src="https://maps.google.com/maps?q=<?php echo $value['address']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
             style="border:0" allowfullscreen></iframe>
         </div>

       </aside>
     </div>
   </div>
   <?php endforeach; ?>
 <?php endif; ?>
<?php include_once "includes/foot.php"; ?>
