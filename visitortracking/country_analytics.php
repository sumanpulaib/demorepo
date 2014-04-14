<?php
include "header.php";
$country_name_input = $_GET['country'];

$(document).ready(function() {
    $('#example4').dataTable( {
	     "bStateSave": true,
         "sPaginationType": "full_numbers"
        //"bProcessing": true,
        //"bServerSide": true,
        //"sAjaxSource": "server_processing.php"
    } );
} );
</script>
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Home</a>
			<span>&gt;</span> Country Wise Reports
			<span>&gt;</span>
              Individual Country Reports
		</div>
		<!-- End Small Nav -->
               <br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div> 
			<?php
  

echo "<h2 style='font-size:24px;'>Detailed Reports For Country <span style='color:red;'> $country_name_input</span></h2><br>";
echo "<span style='font-size:14px;'>( Total Visit Count for the Country = <span style='color:red;'> $no_of_rows </span>)</span><br><br>";
echo "<table  id = 'example4' class='display'>";
echo "<thead><tr><th>Date&Time</th><th>IP</th><th>Country</th><th>City</th><th>Referer</th></tr></thead><tbody>";
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
