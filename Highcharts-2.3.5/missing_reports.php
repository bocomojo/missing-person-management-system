<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Evacuee Needs Report Prior to Calamity'
            },
            xAxis: {
                categories: ['flood', 'wind storm/ storm surge', 'mudflow/ lahar', 'landslide']
            },
            tooltip: {
				  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
            },
            labels: {
                items: [{
                    html: 'Total fruit consumption',
                    style: {
                        left: '40px',
                        top: '8px',
                        color: 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'Resident (Male)',
                data: [<?php echo "3, 2, 1, 3"; ?>]
            }, {
                type: 'column',
                name: 'Resident (Female)',
                data: [2, 3, 5, 7]
            }, {
                type: 'column',
                name: 'Children (0-17 y/old)',
                data: [4, 3, 3, 9]
            },  {
                type: 'column',
                name: 'Adult (18-59 y/old)',
                data: [4, 3, 3, 9]
            },  {
                type: 'column',
                name: 'Senior Citizen (60 y/old - above)',
                data: [4, 3, 3, 9]
            },{
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Evacuee',
                data: [{
                    name: 'flood',
                    y: 13,
                    color: '#ff0000' // Jane's color
                }, {
                    name: 'wind storm/ storm surge',
                    y: 23,
                    color: '#00ff00' // John's color
                }, {
                    name: 'mudflow/ lahar',
                    y: 23,
                    color: '#0000ff' // John's color
                }, {
                    name: 'landslide',
                    y: 19,
                    color: '#000000' // Joe's color
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
    });
    
});
		</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
