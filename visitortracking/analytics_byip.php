<?phpinclude "header.php";$friendlyIps = getFriendlyIP();$sql = "SELECT vi.ip_address,count(vi.id) AS clicks FROM visitors_info as vi WHERE vi.geo_info_status = 1 AND vi.ip_address NOT IN (" . $friendlyIps . ") GROUP BY vi.ip_address ORDER BY clicks DESC";try {	$stmt = $dbcon->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));	$stmt->execute();	}catch (PDOException $e){	print $e->getMessage();}?><!-- Container --><div id="container">	<div class="shell">				<!-- Small Nav -->		<div class="small-nav">			<a href="#">Home</a>			<span>&gt;</span>               Ip address wise visitors count		</div>		<!-- End Small Nav -->               <br />		<!-- Main -->		<div id="main">			<div class="cl">&nbsp;</div>															<!-- Table -->					<div class="table">															<!-- Box Head -->					<div class="box-head" style="width:770px;">						<h2 class="left">IP wise Reports</h2>					<!--	<div class="right">							<label>search articles</label>							<input type="text" class="field small-field" />							<input type="submit" class="button" value="search" />						</div> -->					</div>					<!-- End Box Head -->						<table width="80%" border="0" cellspacing="0" cellpadding="0"><?php//echo "<table  class='gridtable'>";echo "<thead><tr><th>IP Address</th><th>Clicks</th><th>View Details</th></tr></thead><tbody>";if($stmt->rowCount() > 0){	$analyticsData = $stmt->fetchALL(PDO::FETCH_ASSOC);	foreach($analyticsData as $aData){		echo "<tr><td>".$aData['ip_address']."</td>";		echo "<td>".$aData['clicks']."</td>";		echo "<td><a href='ip_analytics.php?ip_address=".$aData['ip_address']."' target='_blank'>View Details</td></td></tr>";	}}else{	echo "<tr><td colspan='6' class='dataTables_empty'>No analytics found</td></tr>";} echo "</tbody></table>";?></div><!-- Table --><div class="cl">&nbsp;</div>					</div>		<!-- Main -->	</div></div><!-- End Container --><?phpinclude "footer.php";?>