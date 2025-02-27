<div class="row">
	<div class="col-md-12">
		<div class="card">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_jabatan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil ditambahkan
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_jabatan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_jabatan'):
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
				<h1 style="text-align: center">Hapus Data Jabatan</h1>

				<a href="<?=base_url('jabatan/index2/')?>" data-toggle="tooltip" data-placement="top" title="" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2">
					Back <i class="ft-settings spinner"></i>
				</a>
				

				<!--<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2" data-toggle="modal" data-target="#tambah">
					<i class="ft-plus-circle"></i> Tambah jabatan
				</button>
				<?php endif?>-->

			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" >
					<thead>
					<tr>
						<th style="width: 10px;">No</th>
						<th>Jabatan</th>
						<th>Gaji perbulan</th>
						<!--<td style="text-align: center"><i class="ft-settings spinner"></i></td>-->
					</tr>
					</thead>
					<tbody>

					<?php
					$no = 1;
					foreach ($jabatan as $key=>$value):
					?>
					<tr>
						<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?=$no?>
						<button class="gaji-hapus" data-toggle="modal" style="color: white; background: rgba(255, 255, 255, 0.00); border: hidden; height: 30px;"
									title="Hapus data" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"><!--<i class="ft-eye"></i>--></button>
									<ul class="dropdown-menu">
										
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['jabatan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>-->
									<?php endif;?>
									</ul>

								
						</td>
						<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?=$value['jabatan_nama']?>
						<button class="gaji-hapus" data-toggle="modal" style="color: white; background: rgba(255, 255, 255, 0.00); width:100px; height: 30px;border: hidden;"
									title="Hapus data" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"><!--<i class="ft-eye"></i>--></button>
									<ul class="dropdown-menu">
										
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['jabatan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>-->
									<?php endif;?>
									</ul>

								
						</td>
						<td>Rp. <?=nominal($value['jabatan_gaji'])?><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;">
						<button class="gaji-hapus" data-toggle="modal" style="color: white; background: rgba(255, 255, 255, 0.00);  width:100px; height: 30px; border: hidden;"
									title="Hapus data" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"><!--<i class="ft-eye"></i>--></button>
									<ul class="dropdown-menu">
										
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['jabatan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>-->
									<?php endif;?>
									</ul>

								
						</td>
						<!--<td>
							<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
							<button class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit" data-toggle="modal" data-target="#ubah" value="<?=$value['jabatan_id']?>"><i class="ft-edit"></i></button>
							<button class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus" data-toggle="modal" data-target="#hapus" value="<?=$value['jabatan_id']?>"><i class="ft-trash"></i></button>
							<?php endif;?>
						</td>-->

						<!--<li data-bs-toggle="dropdown" style="color: white;"
									title="klik untuk melihat detail"><i class="ft-eye"></i></li>
									<ul class="dropdown-menu">
										
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 gaji-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['jabatan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 gaji-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['jabatan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>
									<?php endif;?>
									</ul>

								</div>-->

					</tr>
					<?php
					$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal tambah -->
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah Data Jabatan</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('jabatan/tambah')?>
				<div class="modal-body">
					<fieldset class="form-group floating-label-form-group">
						<label for="jabatan">Jabatan</label>
						<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" autocomplete="off" required>
					</fieldset>
					<fieldset class="form-group floating-label-form-group">
						<label for="gaji">Gaji</label>
						<input type="text" class="form-control" name="gaji" id="gaji" placeholder="Jumlah gaji" autocomplete="off" required>
					</fieldset>

				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
					<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
				</div>
			<?= form_close()?>
		</div>
	</div>
</div>

<!-- Modal ubah -->
<div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Ubah Data Jabatan</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('jabatan/update')?>
				<div class="modal-body" id="updateformgaji">

				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
					<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="update" value="Update">
				</div>
			<?= form_close()?>
		</div>
	</div>
</div>

<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Jabatan ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
					<div id="hapusgaji">

					</div>
				</div>
		</div>
	</div>
</div>
