<?php
$pages = array("Home" => "index.php",
             "Accounts" => "accounts.php",
             "Configuration" => "config.php",
             "FAQ" => "faq.php",
             "Contact/Donate" => "contact.php");

$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<div class="contian-to-grid">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name"><h1><a href="#"></a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			</ul>

			<section class="top-bar-section">
			<!-- Right Nav Section -->

			<!-- Left Nav Section -->
				<ul class="left">
					<li><a href="#">Click Here!</a></li>
				</ul>
			</section>
		</nav>
	</div>
	
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

