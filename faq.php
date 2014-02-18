<div class="row">
	<div class="small-12 columns panel">
		<h2>FAQ</h2>
		<div class="row">
			<div class="small-9 columns">
				<div class="row">
					<p>Whats this ?</p>
					<p>Anubis is a web frontend for cgminer (<a href="https://bitcointalk.org/index.php?topic=28402.0">https://bitcointalk.org/index.php?topic=28402.0</a>) a bitcoin miner for windows/linux. Anubis "watches" your hosts by connecting to the API Port of cgminer.</p>
				</div>
				<div class="row">
					<p>How Do I enable it ?</p>
					<p>The Connection is very simple, just add "--api-listen" (and "--api-network") to the cgminer command line and cgminer's api is enabled. After installing Anubis simply start by <a href="addhost.php">adding some hosts.</p>
				</div>
				<div class="row">
					<p>Something is wrong/does not work as expected.</p>
					<p>Since we are in a very early development stage of Anubis there will surely be bugs. I'll start a git repo in short for Anubis and hope this wil speed bugfixes up a little. For the moment, keep checking <a href="https://bitcointalk.org/index.php?board=42.0">https://bitcointalk.org/index.php?board=42.0</a> for new messages and/or bugfixes concerning Anubis</p>
				</div>
				<div class="row">
					<p>Installation ?</p>
					<p>All you need is a php/mysql enabled host. This host has to be able to reach your miners by network i.e. you should be able to ping your miners from the php/mysql enabled host. Simple copy all the Anubis files into a directory of your choice into your webserver root and call it there like: http://my.host.com/anubis i.e.<BR>
					<BR>
					Anubis will need a mysql user/password/database connection. Edit "config.inc.php" and change it to your needs. </p>
				</div>
			</div>
		</div>
	</div>
</div>