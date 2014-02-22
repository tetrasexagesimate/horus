				<div class="row">
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
				<a class="close-reveal-modal">&#215;</a>