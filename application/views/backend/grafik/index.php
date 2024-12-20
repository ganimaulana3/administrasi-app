<div class="row">
			<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div style="cursor: pointer;" class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Jumlah Karyawan</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('karyawan') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-users" style="color: white;font-size: 700%"></i></div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_karyawan ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Semua Karyawan</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div style="cursor: pointer;" class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Absen</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('absen') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-user-check" style="color: white;font-size: 700%"></i>
											</div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_absen ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Karyawan Absen Hari Ini
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="row">
					<div class="col-12">
						<div style="cursor: pointer;" class="card pull-up bg-gradient-directional-danger">
							<div class="card-header bg-hexagons-danger">
								<h4 class="card-title white">Pinjaman</h4>
								<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li>
											<a class="btn btn-sm btn-white danger box-shadow-1 round pull-right"
											   href="<?= base_url('pinjam') ?>">Lihat<i
													class="ft-arrow-right pl-1"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show bg-hexagons-danger">
								<div class="card-body">
									<div class="media d-flex">
										<div class="align-self-center width-100">
											<div><i class="ft-calendar" style="color: white;font-size: 700%"></i>
											</div>
										</div>
										<div class="media-body text-right mt-1">
											<h3 class="font-large-2 white"><?= $jumlah_pinjam ?></h3>
											<h6 class="mt-1"><span class="text-muted white">Jumlah Karyawan Yang Meminjam
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<h1 style="text-align:center; font-family:bold;">Laporan Grafik</h1>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="chart_div" style="width: 750px; height: 400px;"></div><script>
 google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable(
			[
          ['Month', 'Total Karyawan', 'Absen Hari Ini', 'Karyawan Normal', 'Karyawan Lembur', 'Total Pinjaman'],
          ['Mei',  12,      ,         8,             6,           4,      ],
          ['Juni',  12,      ,        8,             6,          4,      ],
          ['Juli',  10,      ,        3,             4,           7,      ],
          ['Agustus',  10,      ,        3,             4,           7,      ],
          ['September',  <?= $jumlah_karyawan ?>,  <?= $jumlah_absen ?>,   <?= $jumlah_normal ?>,  <?= $jumlah_lembur ?>,          <?= $jumlah_pinjam ?>,      ]
        ]);

        var options = {
          title : 'Grafik Laporan Puskodal Application',
          hAxis: {title: 'Bulan'},
          seriesType: 'bars',
          series: {5: {type: 'line'}},
		  'backgroundColor': 'none',
		  colors:['black', 'blue', 'pink', 'red', 'grey']
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>
</div>


<!--<div style="width:700px;">
<canvas id="myChart"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ['April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September'],
datasets: [{
	label: 'grafik laporan jumlah karyawan',
	backgroundColor: [
		'rgba(255, 99, 132)',
		'rgba(54, 162, 235)',
		'rgba(255, 206, 86)',
		'rgba(75, 192, 192)',
		'rgba(153, 102, 255)',
		'rgba(255, 159, 64)'
	],
	borderColor: [
		'rgba(255, 99, 132, 1)',
		'rgba(54, 162, 235, 1)',
		'rgba(255, 206, 86, 1)',
		'rgba(75, 192, 192, 1)',
		'rgba(153, 102, 255, 1)',
		'rgba(255, 159, 64, 1)'
	],
    data: [23, 17, 16, 20, 18, 10],
	borderWidth: 1
}]
},
options: {
scales: {
	y: {
		beginAtZero: true
	}
}
}
});

chart.render();
  	document.getElementById("printChart").addEventListener("click",function(){
    	chart.print();
    }); 
</script>
</div>-->
<!--<div id="chart_div" style="position: relative; left: 107vh; bottom: 50vh;">
<script type="text/javascript">

	// Load the Visualization API and the corechart package.
	google.charts.load('current', {'packages':['corechart']});

	// Set a callback to run when the Google Visualization API is loaded.
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
	['Total Karyawan', 6],
	['Karyawan Lembur', 3],
	['Sedang Diproses', 2],
	['Sudah Dibayar', 4]
	]);

	// Set chart options
	var options = {'title':'Grafik Gaji Karyawan',
				'width':550,
				'height':400,};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	chart.draw(data, options);
	}
	</script>
</div>-->

<!--<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "light2",
		title:{
			text: "Print Chart using print() method"              
		},
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "apple",  y: 10  },
				{ label: "orange", y: 15  },
				{ label: "banana", y: 25  },
				{ label: "mango",  y: 30  },
				{ label: "grape",  y: 28  }
			]
		}
		]
	});
  
	chart.render();
  	document.getElementById("printChart").addEventListener("click",function(){
    	chart.print();
    });  	
}
</script>-->

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart2" style="width:100%;max-width:600px; position: relative; left: 107vh; bottom: 47vh;"></canvas>

<script>
var xValues = ["Laki-Laki", "Perempuan", "Karyawan Lembur", "Pinjaman", "Total jabatan"];
var yValues = [6, 4, 3, 7, 6];
var barColors = [
  "#045cd6",
  "#b91d47",
  "#dade12",
  "#fc6e0f",
  "#1e7145",
  
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Grafik laporan Gaji Karyawan"
    }
  }
});
</script>-->



<div id="piechart" style="width:600px; height:55vh; position: relative; left: 107vh; bottom: 55vh;"></div>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {					  

        var data = google.visualization.arrayToDataTable(
			
		[
          ['Task', 'Hours per Day'],
          ['Total Karyawan',<?= $jumlah_karyawan ?>],
          ['Absen Hari Ini',<?= $jumlah_absen ?>],
          ['Karyawan Normal',<?= $jumlah_normal ?>],
          ['Karyawan Lembur',<?= $jumlah_lembur ?>],
          ['Total Pinjaman',<?= $jumlah_pinjam ?>],
		  
        ]);

		

        var options = {
          title: 'Grafik Laporan Puskodal Application',
		  'backgroundColor': 'none'
        };


        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


	<!--<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div id="container"></div>

<script>

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Laporan Puskodal Application'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
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
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Total Karyawan',
            y: <?= $jumlah_karyawan ?>,
            sliced: true,
            selected: true
        },  {
            name: 'Absen Hari Ini',
            y: <?= $jumlah_absen ?>
        },  {
            name: 'Karyawan Normal',
            y: <?= $jumlah_normal ?>
        }, {
            name: 'Karyawan Lembur',
            y: <?= $jumlah_lembur ?>
        }, {
            name: 'Total Pinjaman',
            y: <?= $jumlah_pinjam ?>
        }]
    }]
});

</script>-->
