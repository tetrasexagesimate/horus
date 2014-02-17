<?php
$pages = array("Home" => "index.php",
             "Accounts" => "accounts.php",
             "Configuration" => "config.php",
             "FAQ" => "faq.php",
             "Contact/Donate" => "contact.php");

$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<div class="contain-to-grid">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name"><h1><a href="#">Horus</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			</ul>

			<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li class="active"><a href="#">Right Button Active</a></li>
					<li class="has-dropdown">
						<a href="#">Right Button with Dropdown</a>
						<ul class="dropdown">
							<li><a href="#">First link in dropdown</a></li>
						</ul>
					</li>
			</ul>
			<!-- Left Nav Section -->
				<ul class="left">
					<li><a href="#">Click Here!</a></li>
				</ul>
			</section>
		</nav>
	</div>
<div id="templatemo_wrapper">	
<div id="templatemo_header">
    <div id="site_title"><h1><a href="index.php">Main</a></h1></div>

    <div id="templatemo_menu" class="ddsmoothmenu">
      <ul>
<?php
      foreach ($pages as $key => $value)
      {
        if  ($value == $page)
          $selected = "class='selected'";
        else
          $selected = "";

        echo "<li><a href='".$value."' ".$selected.">".$key."</a></li>";
      }
?>
    </ul>
    <br style="clear: left" />
  </div> <!-- end of templatemo_menu -->
        
</div> <!-- end of header -->

