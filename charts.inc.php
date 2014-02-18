<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-6 columns">
				<div class="panel">
					<p>5s circle</p>
					<script type="text/javascript">
						window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Gaming Consoles Sold in 2012"
      },
       data: [
      {
         type: "pie",
       showInLegend: true,
       dataPoints: [
       {  y: 4181563, legendText:"PS 3", indexLabel: "PlayStation 3" },
       {  y: 2175498, legendText:"Wii", indexLabel: "Wii" },
       {  y: 3125844, legendText:"Xbox", indexLabel: "Xbox 360" },
       {  y: 1176121, legendText:"DS" , indexLabel: "Nintendo DS"},
       {  y: 1727161, legendText:"PSP", indexLabel: "PSP" },
       {  y: 4303364, legendText:"3DS" , indexLabel: "Nintendo 3DS"},
       {  y: 1717786, legendText:"Vita" , indexLabel: "PS Vita"}
       ]
     }
     ]
   });

    chart.render();
  }
					</script>
					<div id="chartContainer" style="height: 300px; width: 100%;">
					</div>
					<a href="http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/pie/search_engine_share/">Chart Source</a>
				</div>
			</div>
			<div class="small-6 columns">
				<div class="panel">
					<p>Charts will go here</p>
					<p>Charts will go here</p>
					<p>Charts will go here</p>
					<p>Charts will go here</p>
					<p>Charts will go here</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<div class="panel">
					<p>24h stack chart</p>
					<script type="text/javascript">
						window.onload = function () {
							var chart = new CanvasJS.Chart("chart2Container",
							{
							title: {
								text: "24hr Global Mining"             
							},
							axisX:{      
								valueFormatString: "DDD",
								labelAngle: -40
							},
							legend: {
								verticalAlign: "bottom",
								horizontalAlign: "center"
							},
							toolTip: {
								content: function(e){
									var weekday =["-6","-5", "-4", "-3", "-2","-1","Today"];
									var  str1 = weekday[e.entries[0].dataPoint.x.getDay()] + "<br/>  <span style =' color:" + e.entries[0].dataSeries.color + "';>" +  e.entries[0].dataSeries.name + "</span>: <strong>"+ e.entries[0].dataPoint.y + " hrs</strong> <br/>" ; 
									return str1
								}
							},
							data: [
								{  
								name: "very distracting",
								showInLegend: true,
								legendMarkerType: "square",
								type: "stackedArea",
								color :"rgba(211,19,14,.8)",
								markerSize: 0,
								dataPoints: [
									{x: new Date(2013, 02 , 17) , y: 2.4  },
									{x: new Date(2013, 02 , 18) , y: .6  },
									{x: new Date(2013, 02 , 19) , y: .8  },
									{x: new Date(2013, 02 , 20) , y: 1.6  },
									{x: new Date(2013, 02 , 21) , y: 1.4  },
									{x: new Date(2013, 02 , 22) , y: 1.4  },
									{x: new Date(2013, 02 , 23) , y: 2.6  }
								]
								},
								{        
								name: "distracting",
								showInLegend: true,
								legendMarkerType: "square",
								type: "stackedArea",
								markerSize: 0,
								color :"rgba(95,53,87,.8)",
								dataPoints: [
									{x: new Date(2013, 02 , 17) , y: 3.3  },
									{x: new Date(2013, 02 , 18) , y: 1.6  },
									{x: new Date(2013, 02 , 19) , y: 2.1  },
									{x: new Date(2013, 02 , 20) , y: 1.6  },
									{x: new Date(2013, 02 , 21) , y: 1.4  },
									{x: new Date(2013, 02 , 22) , y: 1.7  },
									{x: new Date(2013, 02 , 23) , y: 4.6  }
								]
								},
            
								{  
								name: "productive",
								showInLegend: true,
								legendMarkerType: "square",
								type: "stackedArea",
								markerSize: 0,
								color: "rgba(60,84,151,.9)",
								dataPoints: [
									{x: new Date(2013, 02 , 17) , y: 2.4  },
									{x: new Date(2013, 02 , 18) , y:  2 },
									{x: new Date(2013, 02 , 19) , y: 2.8  },
									{x: new Date(2013, 02 , 20) , y: 1.6  },
									{x: new Date(2013, 02 , 21) , y: 1.4  },
									{x: new Date(2013, 02 , 22) , y: 1.4  },
									{x: new Date(2013, 02 , 23) , y: 1.6  }
								]
								},
								{  
								name: "very productive",
								showInLegend: true,
								legendMarkerType: "square",
								type: "stackedArea",
								markerSize: 0,
								color: "rgba(22,115,211,.9)",
								dataPoints: [
									{x: new Date(2013, 02 , 17) , y: .4  },
									{x: new Date(2013, 02 , 18) , y: 7 },
									{x: new Date(2013, 02 , 19) , y: 6.8  },
									{x: new Date(2013, 02 , 20) , y: 4.6  },
									{x: new Date(2013, 02 , 21) , y: 6.4  },
									{x: new Date(2013, 02 , 22) , y: 7.4  },
									{x: new Date(2013, 02 , 23) , y: 1.6  }
								]
								}
								]
							});
							chart.render();
						}
					</script>
					<div id="chart2Container" style="height: 300px; width: 100%;">
					</div>
					<a href="http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/area/productivity_by_day/">Chart Source</a>
				</div>
			</div>
		</div>
    </div>
</div>