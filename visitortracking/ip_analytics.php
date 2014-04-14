<?php
include "header.php";
?>
<script>
$(document).ready(function() {
    $('#example3').dataTable( {
	     "bStateSave": true,
         "sPaginationType": "full_numbers"
    } );
    
    $('#example7').dataTable( {
	     "bStateSave": true,
         "sPaginationType": "full_numbers"
    } );
} );
</script>
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Home</a>
			<span>&gt;</span> IP-Address wise Reports
           <span>&gt;</span>
              Individual Ip-Address Reports
		</div>
		<!-- End Small Nav -->
               <br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div> 
			<?php
  echo "<h2 style='font-size:24px;'>Detailed Reports For <span style='color:red;'>$ip_address_input</span></h2><br>";
echo "<span style='font-size:14px;'>(Total Visit Count for the IP-Address =  <span style='color:red;'>$no_of_rows </span>) </span><br><br>";
echo "<table  id='example3' class='display'>";
echo "<thead><tr><th>Date&Time</th><th>Country</th><th>City</th><th>IP Address</th><th>Visited Page</th><th>Referer</th></tr></thead><tbody>";
echo "</tbody></table>";
?>
<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
    
    
	</div>
</div>
<!-- End Container -->			

<?php
include "footer.php";
?>

