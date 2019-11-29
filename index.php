<!DOCTYPE HTML>
<html lang="en-US">
<!-- Author: Fernando Ferraz
Date: Nove,ber 28 2019 -->

<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KeyPath Education Project: Price Equilibrium</title>

	<script type="text/javascript" src="includes/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="includes/bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
	<script type="text/javascript" src="includes/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="includes/demochart.js" id="chartselector"></script>
    <script type="text/javascript" src="includes/demochart20.js" id="chartselector"></script>
	<!-- <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/formstyle.css"> 
    priceequilibrium/-->    
</head>
 
<body class="fixed-navigation mini-navbar skin-1 pace-done">    

        <div class="body-wrapper mt-4" style="background-color: #f5f5f5;">
            <div class="container" style="background-color: #ffffff; -webkit-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75); box-shadow: 0px 0px 20px -16px rgba(0,0,0,0.75);">     
                 <p>The market is determined by supply and demand forces alone. By mapping out our supply and demand curves, we will often find that there is an inverse correlation between the two. Consider the following graph.</p>
                 <ol class="description">
                    <li>The graph below illustrates the way in which buyers and sellers respond to changes in the price during the lifecycle of a common, arbittrary product.</li>
                    <li>The interactions of buyers and sellers determine the changes in the price of our product.</li>
                    <li>The Equilibrium Price is reached when the demand quantity (DQ) is equivalent to the supply quantity (SQ). This is the point where the curves on the graph intersect.</li>
                </ol>
                 <div class="py-4"><div id="chartContainer" style="height: 20em; width: 100%;"></div>
                <div id="input" class="container pt-4">
                <ol>
                <!-- <li>
                    <form name="sdform" action="/index.php" method="POST">
                        <div class="section">
                            Supply & Demand Widget:
                            <input type="radio" selected tabindex="2" name="sdunits" value=1> 1 Unit
                            <input type="radio" tabindex="3" name="sdunits" id="20" value=20> 20 Units
                            <input type="radio" tabindex="4" name="sdunits" value=40> 40 Units
                            <input type="radio" tabindex="5" name="sdunits" value=60> 60 Units
                            <input type="radio" tabindex="6" name="sdunits" value=80> 80 Units
                            <input type="radio" tabindex="7" name="sdunits" value=100> 100 Units
                        </div>
                        </form>
                    </li> -->

                    <li><form name="priceform" action="/index.php" method="POST">
                        <div class="section">
                            Price for XYZ Widget:
                            <input type="radio" id="sel3" tabindex="3" name="price" id="20" value=25> $25
                            <input type="radio" id="sel4" tabindex="4" name="price" value=50> $50
                            <input type="radio" id="sel5" tabindex="7" name="price" value=100> $100
                            <input type="radio" id="sel6" tabindex="7" name="price" value=200> $200
                        </div>
                        </div>
                        </form>
                    </li>
                </ol>
                </div>
                
                <ol class="description">
                <li>In the example above, <a href="#" onClick='document.priceform.price[1].click();'><b>$50</b></a> is the Equilibrium Price of our product, as this is the price at which our Supply Quantity (SQ) is equal to is Demand Quantity (DQ). </li>
                <li>Just as sellers compete among each other, so do buyers. When a manufactured product is launched, its demand is often higher than its current supply. As more and more of these products are made, they price is regulated until an Equilibrium Point is reached between our Supply and Demand Quantities.</li>
                
                <li>An abundance of buyers incentivizes sellers to sell for a higher the price, and for buyers to outbid each other.</li>
                
                <li>If our Headphones are selling for <a href="#" onClick='document.priceform.price[2].click();'><b>$100</b></a>, we can see that the <b>SQ</b> value of <b>51</b> is above the <b>DQ</b> value of <b>22</b>, which is indicative of a falling price. </li>
                <li>Demand is waning, the price is still the same, and we have an inventory surplus. Not to be outdone by the competition, our prices are slashed and sales rise until the DQ = SQ once again.</li>                    
                
                <li>In this way, the market has a natural tendency to drive the price until DQ = SQ and Equilibrium Price is reached.</li>
                <li></li>
            </ol>
        </div>
    </div>
</body>
</html>
