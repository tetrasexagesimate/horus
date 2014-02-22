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
		<?php include ('headers.inc.php'); ?>
		<div class="row">
			
			<div id="myModal0" class="reveal-modal" data-reveal>
				<h5>Add a Miner</h5>
				<iframe name="inlineframe" src="addhost.mod.php" frameborder="0" scrolling="auto" width="100%" height="50%" marginwidth="5" marginheight="5" ></iframe>
				<a class="close-reveal-modal">&#215;</a>
			</div>
			<div id="myModal1" class="reveal-modal" data-reveal>
				<h2>Awesome. I have it.</h2>
				<p class="lead">Your couch.  It is mine.</p>
				<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
				<a class="close-reveal-modal">&#215;</a>
			</div>
			<div id="myModal2" class="reveal-modal" data-reveal>
				<?php include ('index.modal2.php'); ?>
				<!-- <div class="row">
				<h2>Awesome. I have it.</h2>
					<div class="small-12 columns panel">
					<h2>FAQ</h2>
						<div class="row">
							<div class="small-9 columns">
								<div class="row">
									<h5>Whats this ?</h5>
									<p>Horus is a web frontend for cgminer (<a href="https://bitcointalk.org/index.php?topic=28402.0">https://bitcointalk.org/index.php?topic=28402.0</a>) a bitcoin miner for windows/linux. Anubis "watches" your hosts by connecting to the API Port of cgminer.</p>
								</div>
								<div class="row">
									<h5>How Do I enable it ?</h5>
									<p>The Connection is very simple, just add "--api-listen" (and "--api-network") to the cgminer command line and cgminer's api is enabled. After installing Anubis simply start by <a href="addhost.php">adding some hosts.</p>
								</div>
								<div class="row">
									<h5>Something is wrong/does not work as expected.</h5>
									<p>Since we are in a very early development stage of Horus there will surely be bugs. I'll start a <a href="https://github.com/tetraseagesimate/Horus/">git repo</a> in short for Horus and hope this will speed bugfixes. For the moment, keep checking the git wiki for new messages and/or bugfixes concerning Horus</p>
								</div>
								<div class="row">
									<h5>Installation ?</h5>
									<p>All you need is a php/mysql enabled host. This host has to be able to reach your miners by network i.e. you should be able to ping your miners from the php/mysql enabled host. Simple copy all the Anubis files into a directory of your choice into your webserver root and call it there like: http://my.host.com/horus i.e.<BR>
									<BR>
									Horus will need a mysql user/password/database connection. Edit "config.inc.php" and change it to your needs. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="close-reveal-modal">&#215;</a> -->
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="small-3 columns panel">
			<p>Current BTC Price</p>
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
