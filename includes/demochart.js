/*!
 * Author: Fernando Ferraz
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
window.onload = function () {
	$("a").hover( function() {
		this.click()
	}
	   );
	var chart = new CanvasJS.Chart("chartContainer",{         
        theme: "light2", // "light1", "light2", "dark1", "dark2"       
        exportEnabled: true,
        animationEnabled: true,
        animationDuration: 2000,
        title: {
            text: "Equilibrium Price Visualized",
			fontSize: 30
        },
		axisX:{
			valueFormatString: "####",
			interval: 10
		},
		axisY:[
		{
			title: "Price",
			logarithmic: false,
			lineColor: "#444444",
			titleFontColor: "#444444",
			labelFontColor: "#444444"
		}],

	data: [
	{
		type: "spline",
        showInLegend: true,
        toolTipContent : "Demand Quantity (DQ): {x} <br/> Price: {y}",
		axisYIndex: 1, //Defaults to Zero
		name: "Demand Quantity",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 40 },
			{ x: 40, y: 1 }
		]
	},
	{
		type: "spline",
        showInLegend: true,     
        toolTipContent : "Supply Quantity (SQ): {x} <br/> Price: {y}",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
        name: "Supply Quantity",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 10 },
			{ x: 40, y: 40 }
		]
	},
	{
		type: "line",
		lineDashType: "dash",
		showInLegend: true,     
		toolTipContent : "Equilibrium Price: $23",
		axisYIndex: 1,
		name: "Equilibrium Price",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 23 },
			{ x: 40, y: 23 }
		]
	},   
	{
		type: "spline",   
        toolTipContent : "Dummy",
		axisYType: "secondary",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
        name: "Dummy",
		xValueFormatString: "####",
		dataPoints: [
		]
	},
	{
		type: "line",
		lineDashType: "dash",
        toolTipContent : "Supply Quantity = Demand Quantity = 40",
		axisYType: "secondary",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
        name: "Supply Quantity",
		xValueFormatString: "####",
		dataPoints: [
            { x: 17, y: 40 },
            { x: 17, y: 1 }
		]
	}
	]
	});

	chart.render();

	// document.getElementByName('price').onchange(){

	// }


	function scriptRender(){
		chart.render();
	}

	function getChart(chartNum) {
        var curSrc = $("#chartselector").attr('src');
        if ( curSrc.includes('includes/') ) {
            $("#chartselector").attr('src', 'includes/' + chartNum + '.js');
            scriptRender();
            }
    //   if ( curSrc === 'http://example.com/williams.gif' ) {
    //       $(this).attr('src', 'http://example.com/brown.gif');
    //   }
            
        //$("#chartselector").
        }
}
