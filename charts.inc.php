<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-6 columns">
				<div class="panel">
					<p>5s circle</p>
					<p>Pie chart of all active Miners</p>
					<p>http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/pie/search_engine_share/</p>
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
					<p>This will be a stacked area chart.</p>
					<p>http://canvasjs.com/editor/?id=http://canvasjs.com/example/gallery/area/productivity_by_day/</p>
				</div>
			</div>
		</div>
    </div>
</div>