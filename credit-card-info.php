<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reinventing Step 3</title>
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
                	<img src="img/step3.jpg" alt="Step 3" />
                </div>
                <div class="orderSummary box">
                	<div class="head">
                    	<h2>Order Summary</h2>
                    </div>
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
                            <td><span id="total-s">$800</span></td>
                        </tr>
                    </table>
                </div> <!-- end .orderSummary -->
                <div class="ticket-Info">
                	<h2>Payment Information</h2>
                    <div class="ticket-info-con">
                    	<div class="attendee-info">
                        	<h3>Credit Card Information</h3>
                            <ul class="payment-info">
                            	<li><input type="text" class="inputBox iBlank" value="" id="creditName" name="creditName" placeholder="Name" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="CreditCardNumber" name="CreditCardNumber" placeholder="Credit Card Number" /></li>
                                <li>
                                	<div class="cardType">
                                    	<select>
                                        	<option value="0">Card Type</option>
                                        </select>
                                    </div>
                                    <div class="cvv2">
                                    	<input type="text" class="inputBox iBlank" value="" id="cvv2Number" name="cvv2Number" placeholder="CVV2 Number" />	
                                        <a href="#" class="whatCvv">?</a>
                                    </div>
                                    <div class="clearAll"></div>
                                </li>
                                <li>
                                    <select id="expireDate">
                                        <option value="0">Expire Date</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="ticket-btn-box">
                            <input type="button" class="btn-green btn-proceed" value="PROCEED" />
                            <input type="button" class="btn-green btn-back" value="BACK" />
                        </div>
                    </div> <!-- end .ticket-Info-con -->
                </div> <!-- end .ticket-Info -->
            </div> <!-- end #mainPanel -->
        </div> <!-- end #content -->
        <?php include('includes/footer.php') ?>
    </div> <!-- end #page -->
</div> <!-- end #wrap -->
