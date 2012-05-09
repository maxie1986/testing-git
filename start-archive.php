<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reinventing</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript">
	$(function(){
		$('.data-regType').on('click',function(){
			$(this).parent().parent().find(".moreInfo").toggle();
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
                    <br>
                    <div>
                    <p>We value our customers and their privacy. This information is used by our staff for contacting and identifying customers and their needs. We will not give, sell, rent, or loan any personally identifiable information to any third party, unless we are legally required to do so or you authorize us to do so.</p>
					<br>
					<p>This website takes every precaution to protect our users' information. When users submit sensitive information via the website, your information is protected both online and off-line. When our registration/order form asks users to enter sensitive information (such as credit card number), that information is encrypted and protected. </p>
                    </div>
                </div> <!-- end .box -->
            </div> <!-- end #infoPanel -->
            <div id="mainPanel">
            	<div class="steps">
                	<img src="img/step1.jpg" alt="Step 1" />
                </div>
                <div class="ticket-Info">
                	<h2>Ticket Information</h2>
                    <div class="ticket-info-con">
                    	<p class="indicate">
                        	*Click on title for more information
                        </p>
                        <form action="#">
                        	<ul class="ticket-info-list">
                            	<li class="list-header">
	                                <div class="list-row ">
                                        <div class="data-regType">Registration Type</div>
                                        <div class="data-pri">Price</div>
                                    </div>
                                </li>
                            	<li class="list-data">
                                	<div class="list-row">
                                       
                                        <div class="data-regType">AIA Georgia 2012 Annual Conference Preconference Workshop</div>
                                        <div class="data-pri">$500</div>
                                        <br class="clearAll" />
                                    </div>
                                    <div class="clearAll"></div>
                                    <div class="moreInfo">
                                    	<b class="more-arr"></b>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            	<td class="m-left">Stock:</td>
                                                <td class="m-right">Still available</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Price Change Date:</td>
                                                <td class="m-right">Registration fees increase at midnight on 8/31/2012. See the information section below for changes.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Cancellation Policy:</td>
                                                <td class="m-right">Full refunds less a $100 fee will be made for  cancellation requests received in writing before 10/3/2011. No refunds for requests received after 10/3/2011. Refunds will be processed via original payment method within 6-8 weeks after conference. </td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Pre-Registration Close:</td>
                                                <td class="m-right">After October 7, registrations will be handled onsite and a $25 processing fee will apply.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Additional Information:</td>
                                                <td class="m-right">Please see the information section at the bottom of the page for additional information about registration. All links below open new windows  to prevent loss of registration data.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Refer a Friend:</td>
                                                <td class="m-right">There is a referral option at the bottom of this page.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            	<li class="list-data">
                                	<div class="list-row">
                                        
                                        <div class="data-regType">AIA Georgia 2012 Annual Conference Golf Tournament</div>
                                        <div class="data-pri">$400</div>
                                    </div>
                                    <div class="moreInfo">
                                    	<b class="more-arr"></b>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            	<td class="m-left">Stock:</td>
                                                <td class="m-right">Still available</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Price Change Date:</td>
                                                <td class="m-right">Registration fees increase at midnight on 8/31/2012. See the information section below for changes.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Cancellation Policy:</td>
                                                <td class="m-right">Full refunds less a $100 fee will be made for  cancellation requests received in writing before 10/3/2011. No refunds for requests received after 10/3/2011. Refunds will be processed via original payment method within 6-8 weeks after conference. </td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Pre-Registration Close:</td>
                                                <td class="m-right">After October 7, registrations will be handled onsite and a $25 processing fee will apply.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Additional Information:</td>
                                                <td class="m-right">Please see the information section at the bottom of the page for additional information about registration. All links below open new windows  to prevent loss of registration data.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Refer a Friend:</td>
                                                <td class="m-right">There is a referral option at the bottom of this page.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            	<li class="list-data">
                                	<div class="list-row">
                                        
                                        <div class="data-regType">AIA Georgia 2012 Annual Conference Registration</div>
                                        <div class="data-pri">$400</div>
                                    </div>
									<div class="moreInfo">
                                    	<b class="more-arr"></b>
                                    	<table border="0" cellpadding="0" cellspacing="0">
                                        	<tr>
                                            	<td class="m-left">Stock:</td>
                                                <td class="m-right">Still available</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Price Change Date:</td>
                                                <td class="m-right">Registration fees increase at midnight on 8/31/2012. See the information section below for changes.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Cancellation Policy:</td>
                                                <td class="m-right">Full refunds less a $100 fee will be made for  cancellation requests received in writing before 10/3/2011. No refunds for requests received after 10/3/2011. Refunds will be processed via original payment method within 6-8 weeks after conference. </td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Pre-Registration Close:</td>
                                                <td class="m-right">After October 7, registrations will be handled onsite and a $25 processing fee will apply.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Additional Information:</td>
                                                <td class="m-right">Please see the information section at the bottom of the page for additional information about registration. All links below open new windows  to prevent loss of registration data.</td>
                                            </tr>
                                        	<tr>
                                            	<td class="m-left">Refer a Friend:</td>
                                                <td class="m-right">There is a referral option at the bottom of this page.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                            <div class="ticket-btn-box">
                            	<input type="button" class="btn-green btn-order" value="ORDER NOW" />
                            </div>
                        </form>
                    </div>
                </div>
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

</body>
</html>
