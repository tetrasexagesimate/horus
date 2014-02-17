<?php
require("config.inc.php");
require("func.inc.php");

$dbh = anubis_db_connect();
$config = get_config_data();

if (isset($_POST['savehostid']))
{
	$id = 0 + $_POST['savehostid'];
	$newname = $dbh->quote($_POST['macname']);
	$address = $dbh->quote($_POST['ipaddress']);
	$port = $dbh->quote($_POST['port']);
	$mhash = $dbh->quote($_POST['mhash']);

	if ($newname && $newname !== "" && $address && $address !== "") {
		$updq = "INSERT INTO hosts (name, address, port, mhash_desired) VALUES ($newname, $address, $port, $mhash)";
		$updr = $dbh->exec($updq);
		db_error();

		if ($updr > 0)
		{
			$askq = "SELECT id FROM hosts WHERE address = $address AND name = $newname";
			$askr = $dbh->query($askq);
			db_error();

			$idr = $askr->fetch(PDO::FETCH_ASSOC);
			$id = $idr['id'];

            $id = $dbh->quote($id);

            $host_data = get_host_data($id);
			db_error();
		}
	}
}

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

<div id="row">
	<?php include ('header.inc.php'); ?>
    
    <div id="row">
    	<div id="row">
        	<div id="row">
            	<h2>Add host</h2>              
				<?php
				if (isset($id)) 
				{
				if ($host_data)
				{
				echo "<b>Host has been added !</b><BR>";

				echo "<table id='rounded-corner' summary='HostSummary' align='center'>";
				echo create_host_header();
				echo get_host_status($host_data);
				echo "</table>";
  
				echo "<table id='rounded-corner' summary='PoolSummary' align='center'>";
				echo create_pool_header();
				echo process_pools_disp($host_data);
				echo "</table>";
  
				echo "<table id='rounded-corner' summary='DevsSummary' align='center'>";
				echo create_devs_header();
				echo process_devs_disp($host_data);
				echo "</table>";
				}
				}
				?>

				<form name=save action="addhost.php" method="post">
					<table id="savetable" align=center>
						<thead>
							<tr>
								<th scope="col" class="rounded-company">Name</th>
								<th scope="col" class="rounded-q1">IP / Hostname</th>
								<th scope="col" class="rounded-q1">Port</th>
								<th scope="col" class="rounded-q1"><?php if($Hash_Method=='scrypt'){echo "KH/s";}else{ echo "MH/s";}?> desired</th>
							</tr>
							<tr>
								<td align=center><input type="text" name="macname" value=""></td>
								<td align=center><input type="text" name="ipaddress" value=""></td>
								<td align=center><input type="text" name="port" value="4028"></td>
								<td align=center><input type="text" name="mhash" value=""></td>
							</tr>
							<tr>
								<td colspan=4 align=center><input type=hidden name="savehostid" value="<?php echo $id; ?>"><input type="submit" value="Save"></td>
							</tr>
						</thead>
					</table>
				</form>
				<p align=center>
				<b>Name:</b> You can enter any name you like.<BR>
				<b>IP/Hostname:</b> Enter the IP or Hostname of your cgminer cgapi enabled host. I.E. 10.10.1.10 or 192.168.1.10. You can also use FQDN so miner1.mynet.com i.e.<BR>
				<b>Port:</b> The port CGMINER is listening on (default 4028)<BR>
				<b><?php if($Hash_Method=='scrypt'){echo "KH/s";}else{ echo "MH/s";}?> desired:</b> If you already now how much <?php if($Hash_Method=='scrypt'){echo "KH/s";}else{ echo "MH/s";}?> your host will/should make, enter it here.<BR>
				<BR>
				You can change any value afterwards.<BR>
				</p>
			</div>
		</div>
	</div>
</div>
 
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        <?php include("footer.inc.php"); ?>
        <div class="cleaner"></div>
    </div>
</div> 
  
</body>
</html>
