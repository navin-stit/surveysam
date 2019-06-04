<?php


include 'database.php';?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>USA Surveyz</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/icon-link.png">

<!-- Stylesheets -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Javascripts --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- modal popup start js--> 
	<script type="text/javascript">
                  window.onbeforeload = function () {
                          document.onkeydown = function (e) {
                              return (e.which || e.keyCode) != 116;
                          };
                      }
                      window.onload = function () {
                       //   jQuery('#myModal').modal('show');
                      };
						$( document ).ready(function() {
						  // Handler for .ready() called.
						  jQuery('#myModal').modal('show');
						});
	</script>
<!-- modal popup end js-->
<script>
		$(document).ready(function() {
			$(".remove_link").click(function() {
				var url = $(this).attr('id');
				window.open(url, '_blank');
			});
		});
</script>
</head>

<body>

<!-- Header -->
 
<div class="top-header">
	<span><a href="#"><img src="images/logo.png" class="img-responsive"></a></span>
    <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->
    <p style="margin: 0 0 2px;
    font-size: 15px;
    color: #004B8D">
	Share your opinion and get access to amazing deals!
	</p>
</div>			

<!-- modal popup start HTML-->
		<div style="background-size: 100% 100%; display: block;" class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body" style="padding-left:25px;padding-right:25px; padding-bottom:25px;">
                           <!--<img style="display:block;margin-left:auto;margin-right:auto;" src="/gift.png" class=""></td>-->
                          <!--
						  <script>var msg = '<font size = "3"><strong>Congratulations Amazon shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Amazon.</b><br><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script>
                          -->
                          <script>var msg = '<font size = "3"><strong>Congratulations Walgreens Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b>Walgreens.</b><br><div class="fb-wrapper" id="fb-wrapper" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong>$date</strong><br><br>';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script><font size="3"><strong>Congratulations <span class="amazon-color"> Sam's Club</span> Shopper!</strong></font><br><br>You have been chosen to participate in a short, anonymous survey regarding your experiences with <b><span class="amazon-color"> Sam's Club</span>.</b><br>
						  
						 <br>Once you have completed this quick survey, you will be offered a few exclusive rewards <strong>(valued at $50.00 or more)</strong> for providing us with valuable consumer data.<br><br>This survey is available today: <strong><span id="datetime"> May 3, 2019</strong><br><br>
                           <!--<p>Reference number: <strong style="background-color: yellow">37159</strong>.</p> 
                              -->
                           <!--<span id="timer_box">This offer will expire in the next 2 minutes: <span id="timer" style="background-color: yellow"></span> </span>-->
                           <p></p><!-- Audio -->
                              <button id="modalbutton" style="background: ;color: ;" type="button" class="btn-lg  btn-start" data-dismiss="modal" style="background: #E31836 !important;color: #fff !important;">Start Survey</button>
                        </div>
                           <!--
						   <script type="text/javascript">
                              $('.btn-start').on('click', function() {

                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                                  $('body').on('click', function() {
                                  document.getElementById('opening_audio').pause();
                                  return true;
                              });
                           </script>
                           -->
                     </div>
                  </div>
               </div>
			</div>
		</div>
<!-- modal popup end HTML-->			   

<!-- section -->
<section class="rooms mt50">
  <div class="container">
	<div class="row reviewboxbuttons">
		<div class="col-sm-12">
			<div id="1" style="display:block">
                <div class="question-count center_q">Question 1 of 7</div>
                <div class="question center_q">What is your gender?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Male<br></button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Female<br></button>	
			</div>
			
			<div id="2"  style="display:none">
                <div class="question-count center_q">Question 2 of 7</div>
                <div class="question center_q">Do you have the official Sam's Club app installed on your mobile phone?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Yes</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">No</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">I'm Not Sure</button>	
			</div>
			
			<div id="3"  style="display:none">
                <div class="question-count center_q">Question 3 of 7</div>
                <div class="question center_q">How close to your home is the nearestSam's Club Warehouse?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">0 - 5 Miles</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">6 - 10 Miles</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">11 - 25 Miles</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">26 - 50 Miles</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">51+ Miles</button>
                <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">I'm not Sure</button>
                
                
			</div>
			
			<div id="4"  style="display:none">
                <div class="question-count center_q">Question 4 of 7</div>
                <div class="question center_q">What do you think about the membership pricing at Sam's Club?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">It's way too high</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">It's a little too high</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">It's fairly priced</button>
                <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">It's a little underpriced</button>
                <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">It's way underpriced</button>
                <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">I'm not sure</button>
			</div>
			
			<div id="5"  style="display:none">
                <div class="question-count center_q">Question 5 of 7</div>
                <div class="question center_q">Do you usually get gas for your vehicle(s) at your local Sam's Club fuel center?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Yes</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">No</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">Sometimes</button>	
				
			</div>
			
			<div id="6"  style="display:none">
                <div class="question-count center_q">Question 6 of 7</div>
                <div class="question center_q">Customer satisfaction is extremely important to Sam's Club. How would you rate your satisfaction with Sam's Club overall?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">A- to A+</button>
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">B- to B+</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">C- to C+</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">D- to D+</button>
                <button id="q1a" type="button" class="sv_btn" onclick="goToNext(this);">F</button>
			</div>
			
		
			
			<div id="7"  style="display:none">
                <div class="question-count center_q">Question 7 of 7</div>
                <div class="question center_q">Do you follow Sam's Club on any social media websites, such as Facebook, Twitter, Instagram, or Pinterest?</div>
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">Yes</button>
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">No</button>	
				<button id="q1a" type="button" class="sv_btn" onclick="last(this);">I'm Not Sure</button>	
			</div>
			<div id="loading-img" style="display:none">
				<p><b>That's it, you're finished! Thank you for your participation.</b></p>
				<p>While we submit your answers, we are searching our inventory to see which products we can offer you as a <b>thank you</b> for completing the survey.</p>
				<img src="images/TaPz.gif" class="img-responsive" style="margin-bottom: 20px;">
			</div>
    </div>
			<!-- resulet -->
				<div id="results" style="display:none">
                     <br>
                     <div class="media well well-sm">


                        <div class="media-body">
                           
						   <script>var msg = '<font size = "5"><strong>Thank you for completing the Amazon survey!</strong></font><br><br>To show our appreciation for providing us with extremely valuable consumer data, you may now choose <b>(1)</b> of the following exclusive products below.<br><br>Please note that due to extremely HIGH demand, there is a limited supply of these rewards in stock.<br><div class="fb-wrapper" id="fb-wrapper2" style="width: 80vw; max-width:600px; overflow:hidden;display:none;"><br><div class="fb-like" data-href="https://www.facebook.com/facebook/" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-width="400" data-share="false"><\/div><\/div><br>Special offer available today: <strong>$date<\/strong><\/font><br><br>Coupon code:</strong> <span style="background-color: #FFFF00">"<strong>AMAZONSURVEY</strong>"</span> has been applied for reduced shipping costs.';var msg2 = msg.replace("$date",datehax());document.write(msg2);</script><font size="5"><strong>Thank you for completing the Sam's Club survey!</strong></font><br><br>To show our appreciation for providing us with extremely valuable consumer data, you may now choose <b>(1)</b> of the following exclusive products below.<br><br>Please note that due to extremely HIGH demand, there is a limited supply of these rewards in stock.<br>
						  
						 <br>Special offer available today: <strong><span id="datetime2"> March 26, 2019</strong><br><br>Coupon code: <span style="background-color: #FFFF00">"<strong>SAMS-SURVEY</strong>"</span> has been applied for reduced shipping costs.
                        </div>
                     </div>
                     <div id="offers">
                        <div class="row row-parent" id="owallwrapper">

                        <?php 
                                $products = mysqli_query($conn,"SELECT * FROM products") or die( mysqli_error($conn));
                               
                                if($products)
                                {
                                    while($row=mysqli_fetch_array($products,MYSQLI_ASSOC)) {
                            ?>
						 <div id="offer_main_div_1" class="col-md-12 item sex_female" data-name="female"> 
						 <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;">
							 
							<div class="col-md-3 text-center"> <br>
							 <?php
                                if($row['images'] != "")
                                    {                                               
                            ?>
							 <a href="<?php echo $row['url_1'];?>" target="_blank"><img id="offer_img_1" class="img-responsive" style="max-width: 130px; margin: 0 auto;" src="<?php echo $row['images'];?>" alt="..." onclick="ViewOffer_1();"></a> 
							 <div class="reviewitem" style="color:#164d96;"><img id="star_img_1" src="<?php echo $row['reviews'];?>" height="18" width="71" onclick="ViewOffer_1();"> <a id="offer_review_anchor_1" onclick="ViewOffer_1();">(<?php echo $row['review_users'];?>)</a></div> <br> 
							      <?php
                                          }
                                          elseif($row['images'] == "" || $row['images'] == NULL)
                                          {
                                             ?>
                                                <img src="images/products_image/default-product-img.jpg"
                                                    width="100px">
                                                <?php  
                                          }
                                          ?>
							 </div> 
							 <div class="col-md-5 text-center" style="color: black;"> <br> 
							 <strong><font size="3"><u><?php echo $row['product_name'];?></u></font></strong><br>
							 <b><?php echo $row['description'];?></b> 
							 <br> Regular Price: <strike> $<?php echo $row['product_price'];?></strike> <br> Your Price: <font color="#008000"><strong style="background-color: yellow;">$<?php echo $row['regular_price'];?>*</strong></font><br> Shipping: <strong>$<?php echo $row['shipping'];?></strong><br> Quantity Remaining: (<font color="#FF0000"><?php echo $row['quantity'];?></font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> 
							 </div> 
							 <div id="claim_btn_div_1" class="col-md-4 height:100%;">
							     <?php 
                                                if($row['img_popular'] != "")
                                                {
                                            ?>
                                            <img src="<?php echo $row['img_popular'];?>" class="img-responsive">
                                            <?php 
                                            }
                                            
                                            ?>
							      <a id="<?php echo $row['url_1'];?>"class="remove_link" target="_blank"><button id="claim_btn_1" onclick="ViewOffer_1();" style="cursor:pointer;font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:#004B8D ;color:#fff ;" class="text-center btn-lg click_claim_btn">Claim Reward →</button></a> 
							 </div>
						 </div> 
						 </div> 
                                    <?php 
                                            } 
                                    
                                        }
                                    ?>
						
						 <div id="offer_main_div_9" class="col-md-12 item sex_female" data-name="female" style="opacity: 0.45;"> <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;"> <div class="col-md-3 text-center"> <br><img id="offer_img_9" class="img-responsive" style="max-width: 130px; margin: 0 auto;" src="images/flash_new19_2.png" alt="..." onclick="ViewOffer_9();"> <div class="reviewitem" style="color:#164d96;"><img id="star_img_9" src="images/4-half-star.png" height="18" width="71" onclick="ViewOffer_9();"> <a id="offer_review_anchor_9" onclick="ViewOffer_9();">(429)</a></div> <br> </div> <div class="col-md-5 text-center" style="color: black;"> <br> <strong><font size="3"><u>#1 NAVY SEAL Tactical Flashlight©</u></font></strong><br><b>The world's brightest, most powerful &amp; reliable tactical LED flashlight!</b> <br> Regular Price: <strike> $139.95</strike> <br> Your Price: <font color="#008000"><strong style="background-color: yellow;">$0.00*</strong></font><br> Shipping: <strong>$4.95</strong><br> Quantity Remaining: (<font color="#FF0000">0</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> </div> <div id="claim_btn_div_9" class="col-md-4 height:100%;"><font color="red">**<b>Currently Out Of Stock**</b></font></div> </div> 
						
						
						<div id="offer_main_div_9" class="col-md-12 item sex_female" data-name="female" style="opacity: 0.45;"> <div class="row offer-row" style="padding: 12px;margin:5px; border: 1px solid #e3e3e3; border-radius: 3px; background-color:#F5F5F5;"> <div class="col-md-3 text-center"> <br><img id="offer_img_9" class="img-responsive" style="max-width: 130px; margin: 0 auto;" src="images/ecig_oos_1.png" alt="..." onclick="ViewOffer_9();"> <div class="reviewitem" style="color:#164d96;"><img id="star_img_9" src="images/4-half-star.png" height="18" width="71" onclick="ViewOffer_9();"> <a id="offer_review_anchor_9" onclick="ViewOffer_9();">(293)</a></div> <br> </div> <div class="col-md-5 text-center" style="color: black;"> <br> <strong><font size="3"><u>E-CIGS™ Pro Vapor</u></font></strong><br><b>Exclusive vape starter kit. Includes everything you need to quit cigarettes forever!</b> <br> Regular Price: <strike> $169.95</strike> <br> Your Price: <font color="#008000"><strong style="background-color: yellow;">$0.00*</strong></font><br> Shipping: <strong>$4.95</strong><br> Quantity Remaining: (<font color="#FF0000">0</font>)<br> <br> <span class=" quantity"> <span class="label label-danger">1</span> </span> </div> <div id="claim_btn_div_9" class="col-md-4 height:100%;"><font color="red">**<b>Currently Out Of Stock**</b></font></div> </div> 
						</div> 
					  </div>
                     </div>
                     <br>
                     <br>
                     <h4>How was your survey experience?</h4>
                     <ul class="list-group">
							                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/test_1.gif" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Sydney F.<span class="comment-time"><script>r_comment_date(1);</script>2 May, 2019 at 11:51 PM</span></p>
                              <p class="comment-body">I was just checking my e-mail on my phone and then saw the survey. I ended up choosing the CBD oil at the end. I have one friend who told me it helps his joint pain, and another who says it has really helped de-stress her. I think it might be the placebo effect, but it's still worth a shot right? Fingers crossed!</p>
                           </div>
                        </li>                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/test_2.gif" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Kathryn A.<span class="comment-time"><script>r_comment_date(1);</script>2 May, 2019 at 10:47 AM</span></p>
                              <p class="comment-body">My cousin told me about this "keto supplement" she's been taking that she's lost a ton of weight with, but it was too expensive for me to try on a single-mom budget. Then I randomly see it as an option on here, so I guess I'll take that as a sign from the universe lol. It must be really popular. I hope it works for me too! :)</p>
                           </div>
                        </li>                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/test_3.gif" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Noah O.<span class="comment-time"><script>r_comment_date(2);</script>1 May, 2019 at 3:39 pm</span></p>
                              <p class="comment-body">I took the survey about a week ago but am just now leaving my comment because I wanted to wait to see if I actually would receive anything for real. Well, I chose the skin cream and just got it in the mail. I gave it to my girlfriend and she loves it so far. Just wanted to share my experience. Thanks! -Tony</p>
                           </div>
                        </li>                        <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/f55.gif" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Adam W.<span class="comment-time"><script>r_comment_date(4);</script>29 April, 2019 at 8:08 PM</span></p>
                              <p class="comment-body">So let me just say....I got a text asking me to participate in this survey and I was extremely skeptical at first. I mean....who wouldn't be? I thought the products that would be offered to me would be trash but I selected the flashlight and waited to see if it would arrive. Well, this thing just got here and honestly as crazy as it sounds, this thing is AWESOME! I highly recommend this survey to everyone, and thank you for taking my opinion into consideration!</p>
                           </div>
                        </li>              			 <li class="media list-group-item2">
                           <img class="media-object pull-left" src="images/test_4.gif" alt="...">
                           <div class="media-body">
                              <p class="media-heading comment-name">Susan S.<span class="comment-time"><script>r_comment_date(5);</script>28 April, 2019 at 8:47 am</span></p>
                              <p class="comment-body">I was just doing some shopping online and got a notification for the survey. I figured I'd give it a shot. I received the uh... "male supplement" a few days later and gave it to my boyfriend. Let me just say...I am one happy lady!!!  ;-)</p>
                           </div>
                        </li>           
                        <li style="list-style: none">
                           <br>
                           <div id="confirmationbackground" class="well well-sm">
                              <div class="form-horizontal">
                                 <fieldset id="commmentform">
                                    <legend>Leave A Comment</legend>
                                    <!-- Name input-->
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="name">Your Name</label>
                                       <div class="col-md-6">
                                          <input id="name" name="name" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    <!-- Email input-->
                                    <!--
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="email">Your Email</label>
                                       <div class="col-md-6">
                                          <input id="email" name="email" placeholder="" class="form-control" type="text">
                                       </div>
                                    </div>
                                    -->
                                    <!-- Message body -->
                                    <div class="form-group">
                                       <label class="col-md-3 control-label" for="message">Your Comment</label>
                                       <div class="col-md-9">
                                          <textarea class="form-control" id="message" name="message" placeholder="" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
										<button id="commentbutton" style="font-size: 1.2em; color: black; margin:auto auto; width:100%; max-height:40px;background:; " class="text-center btn-lg click_claim_btn">Submit</button>
                                    </div>
                                    <script type="text/javascript">
                                      $('#commentbutton').click(function(){
                                        $('#commmentform').slideUp(1000, function(){
                                          $('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
                                          setTimeout(function(){
                                            $('#confirmationbackground').html('<div style="text-align:center"><font size="3">Your comment has been submitted and is pending approval from our spam-prevention team.</font></div>');
                                            $('#confirmationbackground').css("background-color","#87EA55");
                                          },2000)
                                        })
                                      })
                                    </script>
                                 </fieldset>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
			<!-- resulet -->
			
			
		</div>
	</div>
    <div class="row reviewbox">
      <!-- col-sm-12 -->
      <div class="col-sm-12">
	  <h1>User Comments</h1>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Taking these surveys is kinda fun!</div>
                    <span class="user_info">By Clay S.</span>
                    <p>I've got a boring office job, so sometimes I like to take these just for fun or when I need a break. I used to be in marketing, so I find this approach of gathering consumer data very interesting. It's obviously working though, so I would definitely recommend taking a few!
                    </p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Pretty easy...didn't take too long</div>
                    <span class="user_info">BY MICHELE R.</span>
                    <p>I don't usually take surveys online and I've never taken one like this before, but after answering the questions, I was very pleased with the offers I was presented with. I can't believe all I had to do was just share my honest opinion lol. I'm not sure if they'll be super happy with my responses but....whatever! :P
                    </p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">Great for my mom</div>
                    <span class="user_info">BY ELYSE R.</span>
                    <p>I'm still in college so I decided to give mine to my mom. They didn't really have anything else I wanted. But now she looks younger than me, haha! Just kidding! For real though she is really happy and definitely has a glow to her. Thanks a ton! xoxo
                    </p>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="review">
                <img src="images/big_4_half_star.png">            
                    <div class="rate4 review_title">I just got mine in the mail!</div>
                    <span class="user_info">BY SETH J.</span>
                    <p>Oh boy.....just got mine in the mail today. I am shocked how fast it got here. Can I take any more of these surveys? I took this one a few days ago from an email I got. I'll DEFINITELY be on the lookout for more! Thanks! -Seth
                    </p>
            </div>
		</div>
      </div>
    </div>
  </div>
</section>
<!-- section -->
<footer class="survey-container">
               <div id="terms">
                  <center>
                     <img src="images/f_guarantee.png" alt="guarantee" height="50" width="auto"> <img src="images/f_secure_1.png" alt="secureSiteLogo" height="50" width="auto">
                  </center>
                  <br>
					<font size="1.5">©2019 All Rights Reserved. <br>
					<br>THIS IS AN INDEPENDENT SURVEY. This website is not affiliated with or endorsed by  Sam's Club  and does not claim to represent or own any of the trademarks, tradenames or rights associated with any of the products which are the property of their respective owners who do not own, endorse, or promote globalsurveyscenter.com. All images on globalsurveyscenter.com are readily available in various places on the Internet and believed to be in public domain according to the U.S. Copyright Fair Use Act (title 17, U.S. Code).  *Free trial offers offered require shipping and handling fees. See manufacturer's site for details as terms vary with offers. See important terms and conditions regarding this survey, site and advertisement 
					<a href="terms-conditions.html" rel="nofollow" onclick="window.open('terms-conditions.html', 'Terms','width=550,height=500,scrollbars=yes,resizable=yes'); return false;">here.</a><br><br>
					*Risk-free trial. You will be billed an amount specified in the offer's T&amp;C after the trial period ends, unless you call to cancel.<br>This is an advertisement. The free trial offers available on this page pay this website for orders placed. Once you decide to select an offer, keep in mind you will be billed an amount described in the offer's terms &amp; conditions after the trial period ends unless you call to cancel. Depending on the offer, you may also be billed every 30 days for a new delivery of the product (you may cancel any time by calling the merchant).<br>  
					*Free trial offers require shipping and handling fees. See manufacturer's site for details as terms vary with offers.<br>
					</font>
			   </div>
              
</footer>

</body>

<script>
function goToNext(element){
	var currentQuestion=$(element).parent().attr('id');
	var nextQuestion=parseInt(currentQuestion)+1;
	jQuery('#'+currentQuestion).css("display","none");
	jQuery('#'+nextQuestion).css("display","block");
}
function last(element){
	var currentQuestion=$(element).parent().attr('id');
	jQuery('#'+currentQuestion).css("display","none");
	$('#loading-img').css("display","block");
	setTimeout(function(){ 
							$('#loading-img').css("display","none");
					}, 4000);
	setTimeout(function(){ 
							$('#results').css("display","block");
							$('.reviewbox').css("display","none");
							
					}, 4000);

}
</script>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script>
<script>
var dt = new Date();
document.getElementById("datetime2").innerHTML = dt.toLocaleDateString();
</script>

</html>