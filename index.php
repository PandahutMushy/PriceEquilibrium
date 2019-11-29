<?php
/*!
 * Author: Fernando Ferraz
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

//Get wikipedia terms
$json = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles=Economic%20equilibrium');
$data = json_decode($json,true);
$epdescr = '<div class="wikitxt" style="display: inline-block;width: 85%;padding: 0 0 0 1em;text-align: justify;">'.$data['query']['pages'][227572]['extract'].'</div>';

$json = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles=Supply_(economics)');
$data = json_decode($json,true);
$sqdescr = '<div class="wikitxt" style="display: inline-block;width: 85%;padding: 0 0 0 1em;text-align: justify;">'.$data['query']['pages'][4780977]['extract'].'</div>';

$json = file_get_contents('https://en.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles=Demand');
$data = json_decode($json,true);
$dqdescr = '<div class="wikitxt" style="display: inline-block;width: 85%;padding: 0 0 0 1em;text-align: justify;">'.$data['query']['pages'][4780974]['extract'].'</div>';

?>

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
    <script type="text/javascript" src="includes/demochart-sel.js" id="chartselector"></script>
	<link rel="stylesheet" type="text/css" href="includes/css/stylesheet.css">
	
</head>

<body class="fixed-navigation mini-navbar skin-1 pace-done">    
        <div class="body-wrapper mt-4">
            <div class="container py-2" id="pagebody">     
            <h2>A Practical Explanation of the Equilibrium Price</h2>    
                 <ul class="description">
                    <li>The market is determined by supply and demand forces alone. By mapping out our supply and demand curves, we will often find that there is an inverse correlation between the two.</li>
                    <li>The graph below illustrates the way in which buyers and sellers respond to changes in the price during the lifecycle of a common, arbittrary product.</li>
                    <li>The interactions of buyers and sellers determine the changes in the price of our product.</li>
                    <li>The <a tabindex="1" data-toggle="collapse" href="#collapseWikiEP" role="button" aria-expanded="false" aria-controls="collapseWikiEP"><b>Equilibrium Price</b></a> is reached when the 
                    <a tabindex="2" data-toggle="collapse" href="#collapseWikiDQ" role="button" aria-expanded="false" aria-controls="collapseWikiDQ"><b>Demand Quantity (DQ)</b></a> is equivalent to the 
                    <a tabindex="3" data-toggle="collapse" href="#collapseWikiSQ" role="button" aria-expanded="false" aria-controls="collapseWikiSQ"><b>Supply Quantity (SQ)</b></a>. This is the point where the 
                    curves on the graph intersect.</li>
                </ul>
                <p>
            
                <div class="collapse" id="collapseWikiEP">
                <div class="card card-body wiki-body">
                    <div class="closewiki"><a data-toggle="collapse" href="#collapseWikiEP" role="button" aria-expanded="false" aria-controls="collapseWikiEP" data-toggle="tooltip" data-placement="top" title="Hide">X</a></div>
                    <div class="wikicontent">
                    <div class="wikilogo"></div>
                    <?php echo $epdescr;?>
                    </div>
                </div>
                </div>

                <div class="collapse" id="collapseWikiSQ">
                <div class="card card-body wiki-body">
                    <div class="closewiki"><a data-toggle="collapse" href="#collapseWikiSQ" role="button" aria-expanded="false" aria-controls="collapseWikiSQ" data-toggle="tooltip" data-placement="top" title="Hide">X</a></div>
                    <div class="closewiki"></div>
                    <div class="wikicontent">
                    <div class="wikilogo"></div>
                    <?php echo $sqdescr;?>
                    </div>
                </div>
                </div>

                <div class="collapse" id="collapseWikiDQ">
                <div class="card card-body wiki-body">
                    <div class="closewiki"><a data-toggle="collapse" href="#collapseWikiDQ" role="button" aria-expanded="false" aria-controls="collapseWikiDQ" data-toggle="tooltip" data-placement="top" title="Hide">X</a></div>
                    <div class="closewiki"></div>
                    <div class="wikicontent">
                    <div class="wikilogo"></div>
                    <?php echo $dqdescr;?>
                    </div>
                </div>
                </div>
                
                 <div class="py-4"><div id="chartContainer"></div>
                <div id="input" class="container pt-4">
                <ul>
                
                <!-- <li>
                    <form name="sdform" action="/index.php" method="POST">
                        <div class="section">
                            Select the the Supply & Demand values you wish to graph and refer to the text below:
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
                            Select the product price you wish to graph and refer to the text below:

                            <label class="label-inline" for="price1"><input tabindex="4" type="radio" id="price1" name="price" value=15/>$15</label>
                            <label class="label-inline" for="price2"><input tabindex="5" type="radio" id="price2" name="price" value=20/>$20</label>
                            <label class="label-inline" for="price3"><input tabindex="6" type="radio" id="price3" name="price" value=23/>EQP</label>
                            <label class="label-inline" for="price4"><input tabindex="7" type="radio" id="price4" name="price" value=30/>$30</label>
                            <label class="label-inline" for="price5"><input tabindex="8" type="radio" id="price5" name="price" value=35/>$35</label>

                        </div>
                        </div>
                        </form>
                    </li>
                </ul>
                </div>
                
                <ul class="description">
                <li>In the example above, <a tabindex="9" href="#" onHover='document.priceform.price[2].click();' onClick='document.priceform.price[2].click();'><b>$23</b></a> is the <b>Equilibrium Price</b> of our product. As such, the <b>Supply Quantity (SQ)</b> is equal to the <b>Demand Quantity (DQ)</b>. </li>
                <li>Throughout the lifecycle of a product, its  price is regulated by Supply and Demand forces until the <b>Equilibrium Price</b> is reached.</li>
                <li>When <b>SQ is higher than DQ</b>, a product's price tends to move <b>lower</b>.
                <li>Conversely, when <b>DQ is higher than SQ</b>, a product's price tends to move <b>higher</b>.                
                <li>At <a tabindex="10" href="#" onHover='document.priceform.price[3].click();' onClick='document.priceform.price[3].click();'><b>$30</b></a>, the <b>SQ</b> value of <b>25</b> is <i>above</i> the <b>DQ</b> value of <b>7</b>, which is indicative of a <b>falling</b> price. </li>               
                <li>At <a tabindex="11" href="#" onHover='document.priceform.price[0].click();' onClick='document.priceform.price[0].click();'><b>$15</b></a>, the <b>SQ</b> value of <b>7</b> is <i>below</i> the <b>DQ</b> value of <b>25</b>, which is indicative of an <b>increasing</b> price. </li>               
                <li>In this way, the market has a natural tendency to drive the price until <b>DQ = SQ</b> and <b>Equilibrium Price</b> is reached.</li>
            </ul>
        </div>
    </div>
</body>
</html>