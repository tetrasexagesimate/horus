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
<script src="js/vendor/modernizr.js"></script>
<script src="js/foundation.min.js"></script>

</head>

<body>
 
 <div class="row">
    <?php include ('headers.inc.php'); ?>
	  
<!-- End Header and Nav -->
<!-- Call to Action Panel -->


<!-- Nav Bar -->

<div class="row">
	<hr />
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
</div>

<!-- End Nav -->
 
<!-- Main Page Content and Sidebar -->

<div class="row">
  <!-- Tab Selector -->
	<div class="small-9 columns">
		<div class="row">
			<div class="small-12 columns">
				<dl class="tabs" data-tab>
					<dd class="active"><a href="#panel2-1">Miners</a></dd>
					<dd><a href="#panel2-2">Devices</a></dd>
					<dd><a href="#panel2-3">Charts</a></dd>
					<dd><a href="#panel2-4">Settings</a></dd>
				</dl>
				<div class="tabs-content">
					<div class="content active" id="panel2-3>
						<?php include ('charts.inc.php'); ?>
					</div>
					<div class="content" id="panel2-2">
						<?php include ('devices.inc.php'); ?>
					</div>
					<div class="content" id="panel2-1>
						<?php include ('miners.inc.php'); ?>
					</div>
					<div class="content" id="panel2-4">
						<?php include ('config3.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<!-- End Tab Selector -->
  
    <!-- Sidebar -->
 
    <aside class="small-3 columns">
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
			<a href="#" data-dropdown="drop" class="button dropdown">Action</a><br>
			<ul id="drop" data-dropdown-content class="f-dropdown">
				<li><a href="#" data-reveal-id="myModal0" data-reveal>Add a New Miner</a></li>
				<li><a href="#" data-reveal-id="myModal1" data-reveal>This is another</a></li>
				<li><a href="#" data-reveal-id="myModal2" data-reveal>Yet another</a></li>
				<li><a href="#" data-reveal-id="myModal3" data-reveal>Configuration</a></li>
				<li><a href="#" data-reveal-id="myModal4" data-reveal>FAQ</a></li>
				<li><a href="#" data-reveal-id="myModal5" data-reveal>Contact/Donate</a></li>
			</ul>			
		</div>
    </aside>
 
    <!-- End Sidebar -->
  </div>
 
 <div class="row">
    <div class="large-12 columns">
		<div class="panel">
			<?php include("footer.inc.php"); ?>
		</div>     
    </div>
</div>

  <!-- End Main Content and Sidebar -->
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
			
		</div>
                
		<div class="row">
			<div class="small-2 large-4 columns"></div>
				<div class="small-4 large-4 columns">
					<div class="button-bar">
						<ul class="button-group">
							<li><a href="addhost.php" class="small button">Add Host</a></li>
							<li><a href="allgpus.php" class="small button">Expand Hosts</a></li>
						</ul>
					</div>
				</div>
				<div class="small-6 large-4 columns"></div>
			</div>
		</div>
    </div>
</div>				



<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/fastclick.js"></script>
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
