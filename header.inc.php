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
					<li class="has-dropdown">
					<a href="#">Menu</a>
					<ul class="dropdown">
						<li><a href="accounts.php">Accounts</a></li>
						<li><a href="config.php">Configuration</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="contact.php">Contact/Donate</a></li>
					</ul>
				</li>
			</ul>
			<!-- Left Nav Section -->
				<ul class="left">
				</ul>
			</section>
		</nav>
	</div>

<div id="templatemo_wrapper">	
      
</div> --> <!-- end of header -->

