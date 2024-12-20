<style type="text/css">
	.kotak {
		padding: 5px;
	}

	@page {
		size: A4;
		margin: 0;
	}

	@media print {
		body * {
			visibility: hidden;
		}

		.kotak, .kotak * {
			visibility: visible;
		}

		.kotak {
			z-index: 2;
			position: absolute;
			width: 100%;
			top: 0;
			left: 0;
		}
	}
</style>


<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<div class="card-header">
				<h1 style="text-align: center">Laporan</h1>
			</div>
			<div class="card-body">
				<div>
					<fieldset class="form-group floating-label-form-group">
						<div class="row">
							<div class="col-3">
								<label for="laporan-tahun">Tahun</label>
								<input type="text" id="laporan-tahun" class="form-control" value="<?=date('Y')?>">
							</div>
							<div class="col-7">
								<label for="laporan-bulan">Bulan</label>
								<select name="bulan" id="laporan-bulan" class="form-control">
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
							</div>
							<div class="col-2">
								<label for="laporan-btn-lihat" style="color: white">asdasd</label>
								<button class="btn btn-primary btn-block btn-bg-gradient-x-blue-cyan" id="laporan-btn-lihat">Lihat</button>
							</div>
						</div>
					</fieldset>
				</div>
				<hr>
				<div id="laporan" class="kotak">
					
				</div>
			</div>
		</div>
		<!--<button onclick="window.print('myChart');" class="btn btn-sm btn-primary btn-bg-gradient-x-purple-blue"><i class="fa fa-user"></i> Cetak</button>-->

		<!--<div style="width:700px;">

		<canvas id="myChart"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September'],
        datasets: [{
            label: 'grafik laporan gaji',
            data: [15, 19, 13, 17, 16, 9],
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

</script>
		</div>
		<div id="chart_div" style="position: relative; left: 107vh; bottom: 50vh;">
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
						'width':650,
						'height':500};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(data, options);
			}
			</script>
		</div>-->

	</div>
</div>
