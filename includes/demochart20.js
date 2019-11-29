$(document).ready(function () {
	$('input[type=radio][name=price]').click(function() {
	var thisVal = parseInt(this.value, 10);
	
	if (thisVal > 90000 || thisVal === 50) {	
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
		type: "line",
		lineDashType: "dash",
		showInLegend: true,     
		toolTipContent : "Equilibrium Price: $50",
		axisYType: "secondary",
		axisYIndex: 1,
		name: "Equilibrium Price",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 50 },
			{ x: 40, y: 50 },
			{ x: 140, y: 50 }
		]
	},   
	{
		type: "spline",
        showInLegend: true,
        toolTipContent : "Demand Quantity (SQ): {x} <br/> Price: {y}",
		axisYIndex: 1, //Defaults to Zero
		name: "Demand Quantity",
		xValueFormatString: "####",
		dataPoints: [
			{ x: 1, y: 4 },
            { x: 40, y: 50 },      
			{ x: 125, y: 760 }
		]
	},
	{
		type: "spline",
        showInLegend: true,     
        toolTipContent : "Supply Quantity (DQ): {x} <br/> Price: {y}",
		axisYType: "secondary",
		axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
        name: "Supply Quantity",
		xValueFormatString: "####",
		dataPoints: [
            { x: 1, y: 760 },
            { x: 40, y: 50 },
			{ x: 125, y: 3.33 }
		]
	},
	{
		type: "spline",
        showInLegend: true,     
        toolTipContent : "Equilibrium Price: 40 ",
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
	}
	
	else if (thisVal < 50) {	
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
			type: "line",
			lineDashType: "dash",
			showInLegend: true,     
			toolTipContent : "Equilibrium Price: $50",
			axisYType: "secondary",
			axisYIndex: 1,
			name: "Equilibrium Price",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 1, y: 50 },
				{ x: 40, y: 50 },
				{ x: 140, y: 50 }
			]
		},   
		{
			type: "spline",
			showInLegend: true,
			toolTipContent : "Demand Quantity (DQ): {x} <br/> Price: {y}",
			axisYIndex: 1, //Defaults to Zero
			name: "Demand Quantity",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 0, y: 4 },
				{ x: (284-thisVal)/8.35, y: thisVal },	
				{ x: 40, y: 50 }, 
				{ x: 125, y: 760 }
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Supply Quantity (SQ): {x} <br/> Price: {y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Supply Quantity",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 0, y: 760 },	
				{ x: 40, y: 50 },
				{ x: 2.16 * thisVal, y: thisVal },	
				{ x: 125, y: 3.33 }
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Equilibrium Price: 40 ",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Equilibrium Price",
			xValueFormatString: "####",
			dataPoints: [
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Current Price: ${y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Current Price",
			xValueFormatString: "####",
			dataPoints: [
			]
		},
		{
			type: "line",
			lineDashType: "dash",
			showInLegend: true,     
			toolTipContent : "Current Price: ${y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Current Price",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 0, y: thisVal },
				{ x: 140, y: thisVal }
			]
		}
		]
		});
	
		chart.render();
		}
	else if (thisVal > 50) {	
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
			type: "line",
			lineDashType: "dash",
			showInLegend: true,     
			toolTipContent : "Equilibrium Price: $50",
			axisYType: "secondary",
			axisYIndex: 1,
			name: "Equilibrium Price",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 1, y: 50 },
				{ x: 40, y: 50 },
				{ x: 140, y: 50 }
			]
		},   
		{
			type: "spline",
			showInLegend: true,
			toolTipContent : "Demand Quantity (SQ): {x} <br/> Price: {y}",
			axisYIndex: 1, //Defaults to Zero
			name: "Demand Quantity",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 1, y: 4 },
				{ x: 40, y: 50 }, 
				{ x: 51, y: thisVal },
				{ x: 125, y: 760 }
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Supply Quantity (DQ): {x} <br/> Price: {y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Supply Quantity",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 1, y: 760 },
				{ x: (284-thisVal)/8.35, y: thisVal },
				{ x: 40, y: 50 },				
				{ x: 125, y: 3.33 }
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Equilibrium Price: 40 ",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Equilibrium Price",
			xValueFormatString: "####",
			dataPoints: [
			]
		},
		{
			type: "spline",
			showInLegend: true,     
			toolTipContent : "Selected Price: ${y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Selected Price",
			xValueFormatString: "####",
			dataPoints: [
			]
		},
		{
			type: "line",
			lineDashType: "dash",
			showInLegend: true,     
			toolTipContent : "Current Price: ${y}",
			axisYType: "secondary",
			axisYIndex: 1, //When axisYType is secondary, axisYIndex indexes to secondary Y axis & not to primary Y axis
			name: "Current Price",
			xValueFormatString: "####",
			dataPoints: [
				{ x: 1, y: thisVal },
				{ x: 140, y: thisVal }
			]
		}
		]
		});
	
		chart.render();
		}

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
});
});
