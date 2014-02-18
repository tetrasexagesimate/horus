<div class="row">
	<div class="small-12 columns panel">
		<h2>FAQ</h2>
		<table id="rounded-corner" summary="Hostsummary">
			<thead>
				<tr>
					<th>Whats this ?</th>
				</tr>
				<tr>
					<td>Anubis is a web frontend for cgminer (<a href="https://bitcointalk.org/index.php?topic=28402.0">https://bitcointalk.org/index.php?topic=28402.0</a>) a bitcoin miner for windows/linux.
					Anubis "watches" your hosts by connecting to the API Port of cgminer.</td>
				</tr>
				<tr>
					<th>How Do I enable it ?</th>
				</tr>
				<tr>
					<td>The Connection is very simple, just add "--api-listen" (and "--api-network") to the cgminer command line and cgminer's api is enabled.
					After installing Anubis simply start by <a href="addhost.php">adding some hosts.</a></td>
				</tr>
				<tr>
					<th>Something is wrong/does not work as expected.</th>
				</tr>
				<tr>
					<td>Since we are in a very early development stage of Anubis there will surely be bugs. I'll start a git repo in short for Anubis and hope this wil speed bugfixes up a little. For the moment, keep checking <a href="https://bitcointalk.org/index.php?board=42.0">https://bitcointalk.org/index.php?board=42.0</a> for new messages and/or bugfixes concerning Anubis</td>
				</tr>
				<tr>
					<th>Installation ?</th>
				</tr>
				<tr>
					<td>All you need is a php/mysql enabled host. This host has to be able to reach your miners by network i.e. you should be able to ping your miners from the php/mysql enabled host. Simple copy all the Anubis files into a directory of your choice into your webserver root and call it there like: http://my.host.com/anubis i.e.<BR>
					<BR>
					Anubis will need a mysql user/password/database connection. Edit "config.inc.php" and change it to your needs. </td>
				</tr>
			</thead>
		</table>
	</div>
</div>