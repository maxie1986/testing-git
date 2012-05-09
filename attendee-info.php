<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reinventing Step 2</title>
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
    	<div id="header">
        	<div id="logo">
            	<h1>
                	<span>re:inventing architecture 2012</span>
                	<img src="img/logo.jpg" alt="logo" />
                </h1>
            </div>
            <img src="img/mini-logos.jpg" id="miniLogo" alt="AIA" />
            <div id="address">
            	<b>South Atlanta Regional Conference</b><br />
                Septmber 19-22 <br />
                Atlanta, GA - Loews Altanta Hotel <br />
            </div>
        </div> <!-- end #header -->
        <div id="content">
        	<div id="infoPanel">
            	<div class="box reg-form">
                	<div class="head">
                    	<h2>Registration Form</h2>
                    </div>
                    <div class="box-con">
                    	<table border="0" cellpadding="0" cellspacing="0" class="regTable">
                        	<tr>
                            	<td class="sn">1</td>
                                <td class="ad">
                                	AIA Georgia 2012
                                    Annual Conference
                                    Registration
                                </td>
                                <td class="pr">$500.00</td>
                            </tr>
                            <tr class="total-tr">
                            	<td colspan="2" class="td-total">Total</td>
                                <td>
                                	<span id="total">$500.00</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="box-btn">
                    	<input type="button" value="View/Change" class="btn-view reg-btn" />
                        <input type="button" value="Checkout" class="btn-chk reg-btn" />
                    </div>
                </div> <!-- end .box -->
            	<div class="box map">
                	<div class="head">
                    	<h2>Map</h2>
                    </div>
                    <div class="box-con">
                    	<div id="gMap">
                    		<img src="img/map.jpg" alt="map" />
                            <p>
                                <b>Lowes Atlanta Hotel</b> <br />
                                1065 Peachtree Street NE <br />
                                Atlanta, Georgia, 30309
                            </p>
                        </div>
                    </div>
                </div> <!-- end .box -->
            	<div class="box">
                	<div class="head">
                    	<h2>Privacy policy</h2>
                    </div>
                </div> <!-- end .box -->
            </div> <!-- end #infoPanel -->
            <div id="mainPanel">
            	<div class="steps">
                	<img src="img/step2.jpg" alt="Step 1" />
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
                	<h2>Attendee Information</h2>
                    <div class="ticket-info-con">
                    	<div class="attendee-info">
                        	<h3>Billing Information</h3>
                            <ul class="att-inputs">
                            	<li><input type="text" class="inputBox iBlank" value="" id="fname" name="fname" placeholder="First Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="lname" name="lname" placeholder="Last Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="comname" name="comname" placeholder="Company Name" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address1" name="address1" placeholder="Address 1*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address2" name="address2" placeholder="Address 2*" /></li>
                            	<li>
                                    <div class="selectState inputState">
                                    	<select class="iBlank">
                                        	<option value="0">State*</option>
                                        </select>
                                    </div>
                                	<input type="text" class="inputBox iBlank inputCity" value="" id="city" name="city" placeholder="City*" />
                                </li>
                                <li><input type="text" class="inputBox iBlank inputPostcode" value="" id="postcode" name="postcode" placeholder="Postal Code*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="country" name="country" placeholder="Country*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="phone" name="phone" placeholder="Phone*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="email" name="email" placeholder="Email*" /></li>
                            </ul>
                            <h3>Save time on your next visit</h3>
                            <ul class="att-login-info">
                            	<li><input type="text" class="inputBox iBlank inputUser" value="" id="username" name="username" placeholder="Username" /></li>
                                <li class="PassLi">
                                	<div class="createPass">
                                    	<input type="text" class="inputBox iBlank inputPass" value="" id="password" name="password" placeholder="Create Password" />
                                    </div>
                                    <div class="confirmPass">
                                    	<input type="text" class="inputBox iBlank inputPass" value="" id="cpassword" name="cpassword" placeholder="Confirm Password" />
                                    </div>
                                    <p class="pass-req">
                                    	Minimum 4 characters. No spaces please
                                    </p>
                                </li>
                            </ul>
                            <div class="save-att">
                            	<input type="button" class="btn-save-att" value="Save" />
                            </div>
                        </div>
                    	<div class="attendee-info">
                        	<div class="take-bill-info-same">
                            	<label class="checkLabel">
                                	<input type="checkbox" class="checkBox" value="0" /> Use Billing Information
                                </label>
                            </div>
                        	<h3>Attendee 1</h3>
                            <ul class="att-inputs">
                            	<li><input type="text" class="inputBox iBlank" value="" id="fname" name="fname" placeholder="First Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="lname" name="lname" placeholder="Last Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="comname" name="comname" placeholder="Company Name" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address1" name="address1" placeholder="Address 1*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address2" name="address2" placeholder="Address 2*" /></li>
                            	<li>
                                    <div class="selectState inputState">
                                    	<select class="iBlank">
                                        	<option value="0">State*</option>
                                        </select>
                                    </div>
                                	<input type="text" class="inputBox iBlank inputCity" value="" id="city" name="city" placeholder="City*" />
                                </li>
                                <li><input type="text" class="inputBox iBlank inputPostcode" value="" id="postcode" name="postcode" placeholder="Postal Code*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="country" name="country" placeholder="Country*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="phone" name="phone" placeholder="Phone*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="email" name="email" placeholder="Email*" /></li>
                            </ul>
                            <div class="save-att">
                            	<input type="button" class="btn-save-att" value="Save" />
                            </div>
                        </div>
                    	<div class="attendee-info">
                        	<h3>Attendee 2</h3>
                            <ul class="att-inputs">
                            	<li><input type="text" class="inputBox iBlank" value="" id="fname" name="fname" placeholder="First Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="lname" name="lname" placeholder="Last Name*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="comname" name="comname" placeholder="Company Name" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address1" name="address1" placeholder="Address 1*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="address2" name="address2" placeholder="Address 2*" /></li>
                            	<li>
                                    <div class="selectState inputState">
                                    	<select class="iBlank">
                                        	<option value="0">State*</option>
                                        </select>
                                    </div>
                                	<input type="text" class="inputBox iBlank inputCity" value="" id="city" name="city" placeholder="City*" />
                                </li>
                                <li><input type="text" class="inputBox iBlank inputPostcode" value="" id="postcode" name="postcode" placeholder="Postal Code*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="country" name="country" placeholder="Country*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="phone" name="phone" placeholder="Phone*" /></li>
                                <li><input type="text" class="inputBox iBlank" value="" id="email" name="email" placeholder="Email*" /></li>
                            </ul>
                            <div class="save-att">
                            	<input type="button" class="btn-save-att" value="Save" />
                            </div>
                        </div>
                        <div class="ticket-btn-box">
                            <input type="button" class="btn-green btn-proceed" value="PROCEED" />
                            <input type="button" class="btn-green btn-back" value="BACK" />
                        </div>
                    </div> <!-- end .ticket-Info-con -->
                </div> <!-- end .ticket-Info -->
            </div> <!-- end #mainPanel -->
        </div> <!-- end #content -->
        <div id="footer">
        	<a href="#">My Account</a>| 
            <a href="#">AIA Georgia</a>| 
            <a href="#">Terms of Use</a>|
            <a href="#">Privacy Policy
        </div>  <!-- end #footer -->
    </div> <!-- end #page -->
</div> <!-- end #wrap -->
