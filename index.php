<?php
require("config.inc.php");
require("func.inc.php");

$dbh = anubis_db_connect();

$result = $dbh->query($show_tables);
db_error();

while ($row = $result->fetch(PDO::FETCH_NUM))
{
    if ($row[0] == "configuration")
    	$gotconfigtbl = 1;
    if ($row[0] == "hosts")
    	$gothoststbl = 1;    	
}

if (!isset($gotconfigtbl))
	include("configtbl.sql.php");

if (!isset($gothoststbl))
	include("hoststbl.sql.php");


$config = get_config_data();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Horus - Rule of All</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.css">

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/fastclick.js"></script>
<script src="js/vendor/modernizr.js"></script>
<script type="text/javascript" src="js/canvasjs.min.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/foundation/foundation.equalizer.js"></script>

</head>

<body>
 
	<div class="row">
		<div class="row">
			<div id="myModal0" class="reveal-modal" data-reveal>
				<h5>Add a Miner</h5>
				<?php include ('index.modal0.php'); ?>
			</div>
			<div id="myModal1" class="reveal-modal" data-reveal>
				<?php include ('index.modal1.php'); ?>
			</div>
			<div id="myModal2" class="reveal-modal" data-reveal>
				<?php include ('index.modal2.php'); ?>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="small-3 columns panel">
				<div id="btc-quote"></div>         
			</div>
			<div class="small-3 columns panel">
			<p>Current Ghs/BTC</p>
			</div>
			<div class="small-3 columns panel">
			<p>test3</p>
			</div>
			<div class="small-3 columns panel">
			<p>test4</p>
			</div>
		</div>
		<div class="row">
			<div class="small-9 columns panel">
				<div class="row">
					<div class="small-12 columns" >
						<dl class="tabs" data-tab>
							<dd class="active"><a href="#panel2-1">Charts</a></dd>
							<dd><a href="#panel2-2">Miners</a></dd>
						</dl>
						<div class="tabs-content">
							<div class="content active" id="panel2-1">
								<?php include ('charts.inc.php'); ?>
							</div>
							<div class="content" id="panel2-2">
								<?php include ('miners.inc.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
    		<div class="small-3 columns panel">
				<h5>Mining Farm</h5>
				<div class="panel">
					<h5>SHA-256 Hashrate</h5>
					<p>5s rate</p>
					<p>Avg</p>
				</div>
				<div class="panel">
					<h5>Scrypt Hashrate</h5>
					<p>5s rate</p>
					<p>Avg</p>
				</div>
				<div class="panel">
					<h5>x Miners</h5>
					<p>x Active (y devices)</p>
					<p>x Inactive (y devices)</p>
					<p>x Unavailable</p>
							
				</div>
				<div class="panel">
					<a href="#" class="button small" data-reveal-id="myModal0" data-reveal>Add a New Miner</a>
					<a href="#" class="button small" data-reveal-id="myModal1" data-reveal>Configuration</a>
					<a href="#" class="button small" data-reveal-id="myModal2" data-reveal>FAQ</a>
				</div>
			</div>
		</div>
		<?php
			$result = $dbh->query("SELECT * FROM hosts ORDER BY name ASC");
			if ($result)
				{
				echo "<table id='rounded-corner' summary='Hostsummary'>";
				echo create_host_header();
				while ($host_data = $result->fetch(PDO::FETCH_ASSOC))
				echo get_host_summary($host_data);
				echo create_totals();
				echo "</table>";
				}
			else 
				{echo "No Hosts found, you might like to <a href=\"addhost.php\">add a host</a> ?<BR>";}
		?>
		<div class="row">
			<div class="small-12 columns">
				<div class="small-12 columns">
					<div class="row">
						<div class="small-4 columns">
							<div class="button-bar">
								<ul class="button-group">
									<li><a href="addhost.php" class="small button">Add Host</a></li>
									<li><a href="allgpus.php" class="small button">Expand Hosts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>				

<div class="row">
    <div class="large-12 columns">
		<div class="panel">
			<?php include("footer.inc.php"); ?>
		</div>     
    </div>
</div>



<script>
$(document).foundation();
</script>

<script type="text/javascript" src="//cdn-gh.firebase.com/btcquote/embed.js"></script>

<script>
$(function() {
  setInterval(update, 5000);
});
function update() {
        $('#rounded-corner').load('refresh_hosts.php');
}
</script>
  
</body>
</html>
