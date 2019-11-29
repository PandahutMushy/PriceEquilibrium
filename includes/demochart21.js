$(document).ready(function () {
	$('input[type=radio][name=price]').change(function() {
	var thisVal = this.value;

	var chart = new CanvasJS.Chart("chartContainer",{         
		theme: "light2", // "light1", "light2", "dark1", "dark2"       
		exportEnabled: true,
		animationEnabled: true,
		animationDuration: 2000,
		title: {
			text: "Equilibrium Price Visualized"
		},
		axisX:{
			valueFormatString: "####",
			interval: 10
		},
		axisY:[
		{
			title: "Price",
			logarithmic: true,
			lineColor: "#444444",
			titleFontColor: "#444444",
			labelFontColor: "#444444"
		}],
		axisY2:[
		{
			title: "Logarithmic Scale",
			logarithmic: true,
			interval: 1,
			lineColor: "#666666",
			titleFontColor: "#666666",
			labelFontColor: "#666666"
		}],

	data: [   
	{
		type: "spline",
		showInLegend: true,
		toolTipContent : "<br/> Supply Quantity (SQ): {x} <br/> Price: {y}",
		axisYIndex: 1, //Defaults to Zero
		name: "Supply Quantity",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 4 },
			{ x: -(2-thisVal)/6.096, y: thisVal },
			{ x: 40, y: 37.3 },      
			{ x: 125, y: 760 }
		]
	},
	{
		type: "spline",
		showInLegend: true,     
		toolTipContent : "<br/> Demand Quantity (DQ): {x} <br/> Price: {y}",
		axisYType: "secondary",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
		name: "Demmand Quantity",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 760 },
			{ x: thisVal, y: 512 },
			{ x: 40, y: 33.3 },
			{ x: 125, y: 3.33 }
		]
	},
	{
		type: "spline",
		showInLegend: true,     
		toolTipContent : "<br/> Equilibrium Price: 40 ",
		axisYType: "secondary",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
		name: "Equilibrium Price",
		xValueFormatString: "####",
		dataPoints: [
		]
	},
	]
	});

	chart.render();


});
});
