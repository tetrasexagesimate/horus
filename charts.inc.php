<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-6 columns">
				<div class="panel">
					<p>5s circle</p>
					<a href="http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/pie/search_engine_share/">Chart Source</a>
					<script type="text/javascript">
						window.onload = function () {
							var chart = new CanvasJS.Chart("chartContainer",
							{
								title:{
									text: "Desktop Search Engine Market Share, Dec-2012"
								},
								legend:{
									verticalAlign: "center",
									horizontalAlign: "left",
									fontSize: 20,
									fontFamily: "Helvetica"        
								},
								theme: "theme2",
								data: [
								{        
									type: "pie",       
									indexLabelFontFamily: "Garamond",       
									indexLabelFontSize: 20,
									startAngle:-20,      
									showInLegend: true,
									toolTipContent:"{label}",
									dataPoints: [
									{  y: 83.24, legendText:"Google", label: "Google 83.3%" },
									{  y: 8.16, legendText:"Yahoo!", label: "Yahoo! 8.16%" },
									{  y: 4.67, legendText:"Bing", label: "Bing 4.67%" },
									{  y: 1.67, legendText:"Baidu" , label: "Baidu 1.67%"},       
									{  y: 0.98, legendText:"Others" , label: "Others .98%"}
									]
								}
								]
							});

						chart.render();
						}
					</script>
					<div id="chartContainer" style="height: 300px; width: 100%;">
					</div>
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
					<a href="http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/area/productivity_by_day/">Chart Source</a>
					<script type="text/javascript">
						window.onload = function () {
							var chart = new CanvasJS.Chart("chart2Container",
							{
							title: {
								text: "Productivity by Day"             
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
									var weekday =["Sun","Mon", "Tue", "Wed", "Thu","Fri","Sat"];
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
				</div>
			</div>
		</div>
    </div>
</div>