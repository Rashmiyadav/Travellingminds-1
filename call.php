
<!DOCTYPE HTML>
<html>

<?php
include('connection.php');
$c=$_POST['CITY'];
 	
$t1=mysql_fetch_array(mysql_query("SELECT RSPM FROM air8910 WHERE CITY='$c'"));
$t2=mysql_fetch_array(mysql_query("SELECT SO2 FROM air8910 WHERE CITY='$c'"));
$t3=mysql_fetch_array(mysql_query("SELECT NO2 FROM air8910  WHERE CITY='$c'"));



?>
<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>GRAPHICAL QUALITY MEASURE</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		
<script>
var v1=<?php echo $t1[0];?> 
var v2=<?php echo $t2[0];?> 
var v3=<?php echo $t3[0];?> 

</script>

<script type="text/javascript">	

$(function () {
    var chart;
    
    $(document).ready(function () {
    	
    	// Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'The quantity of air pollutants of "<?php echo $c;?>"  are as shown:'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 0
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'AIR QUALITY',
                data: [
                    ['RSPM',  v1],
                    ['SO2',   v2],
                    ['NO2',   v3]
                    
                ]
            }]
        });
    });
    
});
		</script>
	
	<body>

<script src="highcharts.js"></script>
<script src="exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

	</body>
</html>

