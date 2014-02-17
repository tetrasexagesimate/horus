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
<script type="text/javascript" src="scripts/ddsmoothmenu.js">


/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


</head>
<body>
 
 <div class="row">
    <?php include ('header.inc.php'); ?>
	<div class="large-3 columns">
      <h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
    </div>
    <div class="large-9 columns">
      <ul class="right button-group">
      <li><a href="#" class="button">Link 1</a></li>
      <li><a href="#" class="button">Link 2</a></li>
      <li><a href="#" class="button">Link 3</a></li>
      <li><a href="#" class="button">Link 4</a></li>
      </ul>
     </div>
   </div>
  
<!-- End Header and Nav -->
 
<!-- First Band (Slider) -->
 
  <div class="row">
    <div class="large-12 columns">
    
	<div>
    	<div>
        	<div>
            	<h2>Hosts</h2>
				 <a href="allgpus.php">Expand all Hosts</a>
                <div>

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
				</div>

                <div class="row">
					<div class="small-3 small-centered columns">
						<a href="addhost.php" class="button radius">Add Host</a>
					</div>
				<table align=center>
					<tr>
						<td align=center>
							<a href="addhost.php"><img src="images/add.png" border=0></a>	
						</td>
						<td>Add host</td>
					</tr>
				</table>
				</div>
             </div>
		</div>
    </div>
	
	<div id="slider">
      <img src="http://placehold.it/1000x400&text=[ img 1 ]" />
    </div>
    
    <hr />
    </div>
  </div>
  
<!-- Three-up Content Blocks -->
 
  <div class="row">
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
    
    <div class="large-4 columns">
      <img src="http://placehold.it/400x300&text=[img]" />
      <h4>This is a content section.</h4>
      <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
    </div>
  
    </div>
    
<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">
    
      <div class="panel">
        <h4>Get in touch!</h4>
            
        <div class="row">
          <div class="large-9 columns">
            <p>We'd love to hear from you, you attractive person you.</p>
          </div>
          <div class="large-3 columns">
            <a href="#" class="radius button right">Contact Us</a>
          </div>
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
