<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reinventing Step 5</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript">
	$(function(){
		$(".inputBox").each(function(){
			val= $(this).val();
			placeholder= $(this).attr("placeholder");
			if(val==""){
				$(this).addClass('iBlank').val(placeholder);
			}else if(val==placeholder){
				$(this).addClass('iBlank');
			}else{
				$(this).removeClass('iBlank')
			}
		});
		$(".inputBox").on('click',function(){
			val= $(this).val();
			placeholder= $(this).attr("placeholder");
			if(val==placeholder){
				$(this).val(' ').removeClass('iBlank').addClass('iActive');
			}else{
				$(this).removeClass('iBlank').addClass('iActive');
			}
		});
		$(".inputBox").on('blur',function(){
			val= $(this).val();
			placeholder= $(this).attr("placeholder");
			if(val==" " || val=="" ){
				$(this).addClass('iBlank').val(placeholder).removeClass('iActive');
			}else if(val==placeholder){
				$(this).addClass('iBlank').removeClass('iActive');
			}else{
				$(this).removeClass('iBlank').removeClass('iActive');
			}
		});
	});
</script>
</head>

<body>
<div id="wrap">
	<div id="page">
    	<?php include('includes/header.php') ?>
        <div id="content">
        	<?php include('includes/sidebar.php') ?>
            <div id="mainPanel">
            	<div class="steps">
                	<img src="img/step5.jpg" alt="Step 5" />
                </div>
                <div class="ticket-Info checkout checkoutConfirm">
                	<h2>Confirmation</h2>
                    <div class="ticket-info-con">
                    	<div class="orderConfirm">
                        	<h3>Thank you! </h3>
                            <p>
                                Your order has been submitted for processing successfully. <br  />
                                A confirmation/receipt email has been sent to your email address <br />
                                <span class="orderID">Order ID: 1234567</span>
                            </p>
                        </div>
                        <div class="orderSummary box">
                            <h3>Order Summary</h3>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <th class="Tqty">QTY</th>
                                    <th class="Tty">TICKET TYPE</th>
                                    <th class="Tpri">PRICE</th>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>AIA Georgia 2012 Annual Conference Golf Tournament</td>
                                    <td>$400</td>
                                </tr>
                                <tr class="total-tr">
                                    <td colspan="2" class="total-label">Total -</td>
                                    <td>
                                    	<span id="total-s">$800</span>
                                    </td>
                                </tr>
                            </table>
                        </div> <!-- end .orderSummary -->
                        
                        <div class="attendee-confirm">
                        	<h3>Attendee Information</h3>
                        	<div class="attendee-box">
                            	<h4>Attendee 1</h4>
                                <div class="saveInfo">
                                    Jane Doe <br />
                                    1234 Main Street Dr. <br />
                                    Anytown, USA 55555 <br />
                                    (123) 456-7890 <br />
                                    janedoe@email.com 
                                </div>
                            </div>
                        	<div class="attendee-box">
                            	<h4>Attendee 2</h4>
                                <div class="saveInfo">
                                    Jane Doe <br />
                                    1234 Main Street Dr. <br />
                                    Anytown, USA 55555 <br />
                                    (123) 456-7890 <br />
                                    janedoe@email.com 
                                </div>
                            </div>
                        </div>
                        <div class="attendee-confirm">
                        	<h3>Billing Info</h3>
                        	<div class="attendee-box">
                                <div class="saveInfo">
                                    Jane Doe <br />
                                    1234 Main Street Dr. <br />
                                    Anytown, USA 55555 <br />
                                    (123) 456-7890 <br />
                                    janedoe@email.com 
                                </div>
                            </div>
                        	<div class="attendee-box">
                                <div class="saveInfo">
                                    Visa <br />
									xxxx-xxxx-xxxx-7776   <br />
									15/15  
                                </div>
                            </div>
                        </div>
                        
                        <div class="orderTotal-box">
                        	<div class="orderTotal">
                            	Order Total  -  <span>$800</span>
                            </div>
                        </div>

                    </div> <!-- end .ticket-Info-con -->
                </div> <!-- end .ticket-Info -->
            </div> <!-- end #mainPanel -->
        </div> <!-- end #content -->
        <?php include('includes/footer.php') ?>
    </div> <!-- end #page -->
</div> <!-- end #wrap -->
