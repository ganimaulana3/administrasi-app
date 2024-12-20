<div class="row d-print-none">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_absen'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil absen
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_gaji'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_absen'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil dihapus
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Detail Gaji Karyawan</h1>
				<a href="<?=base_url('gaji')?>" data-toggle="tooltip" data-placement="top" title="kembali" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2">
					Back <i class="ft-settings spinner"></i>
				</a>
			</div>
			<div class="card-body">
			
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<th style="width: 2%">No</th>
						<th>Nama Karyawan</th>
						<th style="text-align: center;">Alamat</th>
						<th>Jabatan</th>
						<th>Tanggal Bergabung</th>
						<th>Nomor HP/Email</th>
						<!--<th style="text-align: center; width: 10px;"><i class="ft-settings spinner"></i></th>-->
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($gaji as $key => $value):
						?>
						<tr>
							<td><?= $no ?>
							<a style="background:rgba(255,255,255,0.00);height: 20px; text-decoration: none; " href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i style="color:rgba(255,255,255,0.00);" class="ft-eye"></i>  </a>
							</td>
							<td><?= $value['karyawan_nama'] ?>
							<a style="color:rgba(255,255,255,0.00); height: 20px; text-decoration: none;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i class="ft-eye"></i></a>
							</td>
							<td><?= $value['karyawan_alamat'] ?>
							<a style="color:rgba(255,255,255,0.00); height: 20px; text-decoration: none;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i class="ft-eye"></i></a>
							</td>
							<td><?= $value['jabatan_nama'] ?>
							<a style="color:rgba(255,255,255,0.00); height: 20px; text-decoration: none;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i class="ft-eye"></i></a>
							</td>
							<td><?= date_indo($value['karyawan_tanggal_gabung']) ?>
							<a style="color:rgba(255,255,255,0.00); height: 20px; text-decoration: none;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i class="ft-eye"></i></a>
							</td>
							<td><?= $value['karyawan_nomor_hp'] ?>
							<a style="color:rgba(255,255,255,0.00); height: 20px; text-decoration: none;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Klik untuk melihat detail"><i class="ft-eye"></i></a>
							</td>
							<!--<td>
								<button style="background:rgba(255,255,255,0.00); height: 20px; border: hidden;" href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class=""
									 data-toggle="tooltip" data-placement="top"
									title="Lihat detail"><!--<i class="ft-eye"></i></button>

							</td>-->
						</tr>

						<?php
						$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
		<!--<div id="chart_div" style="width: 700px;">
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
