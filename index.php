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
    <?php include ('header.inc.php'); ?>
	  
<!-- End Header and Nav -->
<!-- Three-up Content Blocks -->
<div class="row">
	<div class="small-4 columns">
		<img src="http://placehold.it/400x300&text=[img]" />
		<h4>This is a content section.</h4>
		<p>Bacon</p>
	</div>
    <div class="small-4 columns">
		<img src="http://placehold.it/400x300&text=[img]" />
		<h4>This is a content section.</h4>
		<p>Bacon</p>
    </div>
    <div class="small-4 columns">
		<img src="http://placehold.it/400x300&text=[img]" />
		<h4>This is a content section.</h4>
		<p>Bacon</p>
    </div>
</div>
 
<!-- First Band (Slider) -->
 
 <div class="row">
    <div class="small-12 columns">
       	<div class="small-12 columns">
			<?php
					$result = $dbh->query("SELECT * FROM hosts ORDER BY name ASC");
				if ($result)
					{
					echo "<table width: 100%;>";
					echo create_host_header();
				while ($host_data = $result->fetch(PDO::FETCH_ASSOC))
					echo get_host_summary($host_data);
					echo create_totals();
				echo "</table>";
					}
				else 
					{echo "No Hosts found, you might like to <a href=\"addhost.php\">add a host</a> ?<BR>";}
				?>
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
  

    
<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">
		<div class="panel">
			<?php include("footer.inc.php"); ?>
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
