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
	<!-- <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/formstyle.css"> 
    priceequilibrium/-->
    <script type="text/javascript">
    function getChart(chartNum) {
        var curSrc = $('#chartselector').attr('src');
  if ( curSrc === 'demochart.js' && chartNum >= 0 ) {
      $('#chartselector').attr('src', 'demochart' + chartNum + '.js');
  }
//   if ( curSrc === 'http://example.com/williams.gif' ) {
//       $(this).attr('src', 'http://example.com/brown.gif');
//   }
        
        //$('#chartselector').
}
 
    </script>
</head>
 
<body class="fixed-navigation mini-navbar skin-1 pace-done">

    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="includes/demochart.js" id="chartselector"></script>
    

        <div class="body-wrapper my-4">
            <div class="container">     
                 <p>The market is determined by supply and demand forces alone. By mapping out our supply and demand curves, we will often find that there is an inverse correlation between the two. Consider the following graph.</p>
                <div class="py-4"><div id="chartContainer" style="height: 20em; width: 100%;"></div>
                <div id="input" class="container py-4">
                <form action="/index.php" method="POST">
                        <div class="section">
                            Price for XYZ Widget:
                            <input type="radio" selected tabindex="2" name="price" value=1 onClick="getChart(1);"> $1
                            <input type="radio" tabindex="3" name="price" value=20 onClick="getChart(20);"> $20
                            <input type="radio" tabindex="4" name="price" value=40 onClick="getChart(40);"> $40
                            <input type="radio" tabindex="5" name="price" value=60 onClick="getChart(60);"> $60
                            <input type="radio" tabindex="6" name="price" value=80 onClick="getChart(80);"> $80
                            <input type="radio" tabindex="7" name="price" value=100 onClick="getChart(100);"> $100
                        </div>
                        <input id="calculate" type="button" tabindex="8" value="Calculate">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
        <div class="body-wrapper my-4">
            <div class="container">                
                <ol id="description">
                <li>The above graph shows the way in which buyers and sellers respond to changes in the price during the lifecycle of a common, arbittrary product.</li>

                <li>The interactions of buyers and sellers determine the changes in the price of our product.</li>

                <li>The Equilibrium Price is reached when the demand quantity (DQ) is equivalent to the supply quantity (SQ). This is the point where the curves on the graph intersect.</li>
                <li>In the example above, the price of $40 is the Equilibrium Price of our product, as we can see that its supply quantity (SQ) is equal to is demand quantity (DQ). </li>
                <li>Just as sellers compete among each other, so do buyers. When a manufactured product is first launched or when its supply becomes antiquated amd limited, its price often rises due to highest-bid competition among buyers.</li>
                
                <li>Highly-valued items are often sought-after, and an abundance of buyers incentivize sellers to higher the price</li>
                
                <li>If our Headphones are selling for $100, we can see that the SQ is above the DQ. Sales are slower than before, and we have an inventory surplus.</li>

                <li>Not to be outdone by the competition, our prices are slashed and sales rise until the DQ = SQ once again.</li>                    
                
                <li> The price will then rise until DQ = SQ and QP is reached</li>
                <li></li>
            </ol>
        </div>
    </div>
</body>
</html>
