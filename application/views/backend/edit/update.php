<div class="row d-print-none">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_karyawan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil ditambahkan
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_karyawan'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_karyawan'):
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
				<h1 style="text-align: center">Update Data Karyawan</h1>
				<!--<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2"
						data-toggle="modal" data-target="#bootstrap">
					<i class="ft-plus-circle"></i> Tambah data karyawan
				</button>
				<?php endif; ?>-->

				<!--<button title="klik untuk melihat detail" onclick="alert('klik kolom nama untuk melihat detail')" type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2">
					Detail <i class="ft-settings spinner"></i>
				</button>-->

				<a href="<?=base_url('edit')?>" data-toggle="tooltip" data-placement="top" title="kembali" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2">
					Back <i class="ft-settings spinner"></i>
				</a>
				

				<!--<a href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2"
									 data-toggle="tooltip" data-placement="top"
									title="Lihat detail"><i class="ft-eye"></i></a>-->

			</div>
			<hr>
			<div class="card-body">
			
				<table class="table table-bordered zero-configuration">
					<thead>
					<tr>
						<th style="width: 10px;">No</th>
						<th>Nama</th>
						<th style="text-align: center;">Alamat</th>
						<th>Nomor HP/Email</th>
						<th>Jabatan</th>
						<th>Tanggal Bergabung</th>
						<!--<td style="text-align: center;"><i class="ft-settings spinner"></i></td>-->
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($karyawan as $key => $value):
						?>
						<tr>
							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= $no ?>
							
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></button>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->
									

							</td>
							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= $value['karyawan_nama'] ?>
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></button>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->
							</td>
							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= $value['karyawan_alamat'] ?>
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></button>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->
							</td>

							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= $value['karyawan_nomor_hp'] ?>
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></button>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->
							</td>
							
							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= $value['jabatan_nama'] ?>
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></button>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->		
							</td>
							<td><div class="btn-group" title="klik untuk melihat detail" style="cursor: pointer;"><?= date_indo($value['karyawan_tanggal_gabung']) ?>
							<button style="color: white; background: rgba(255,255,255,0.00); border: hidden;" class="karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"
									title="klik untuk melihat detail"><!--<i class="ft-eye"></i>--></>
									
										<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>-->
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<!--<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<li style="position: relative; left: 20px; color: white;"
										class="karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></li>
									<?php endif;?>-->		
							</td>
							
							<!--<td>
								<button
									class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
									data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
									title="Lihat data"><i class="ft-eye"></i></button>
								<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
								<button
									class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
									data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
									title="Update data"><i class="ft-edit"></i></button>
								<button
									class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 karyawan-hapus"
									data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
									title="Hapus data"><i class="ft-trash"></i></button>
								<?php endif;?>

								<!--<div class="btn-group" style="cursor: pointer;">
								<li data-bs-toggle="dropdown" style="color: white; text-align: center;"
									
									title="klik untuk mengedit"><i class="ft-eye"></i></li>
									<ul class="dropdown-menu">
										<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>
									<?php endif;?>
									</ul>
								</div>

									<div id="hidebtn2">
									<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 karyawan-lihat"
										data-toggle="modal" data-target="#lihat" value="<?= $value['karyawan_id'] ?>"
										title="Lihat data"><i class="ft-eye"></i></button>
									<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>
									<?php endif;?>
									</div>
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
	</div>
</div>

<!-- Modal tambah -->
<div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah Data Karyawan</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('karyawan/tambah') ?>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Karyawan"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="tempat">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" id="tempat" placeholder="Tempat Lahir"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="tl">Tanggal Lahir</label>
					<div class='input-group'>
						<input type="date" class="form-control" name="tanggal_lahir" id="tl" placeholder="Tanggal Lahir"
							   autocomplete="off" required>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" required></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" required>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="jabatan">Jabatan</label>
					<select name="jabatan" id="basicSelect" class="form-control">
						<?php
						foreach ($jabatan as $key => $value):
							?>
							<option value="<?= $value['jabatan_id'] ?>"><?= $value['jabatan_nama'] ?></option>
						<?php
						endforeach;
						?>
					</select>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="nohp">Nomor HP/Email</label>
					<input type="text" class="form-control" id="nohp" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="norek">Nomor Rekening</label>
					<input type="number" class="form-control" id="norek" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off">
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>


<!-- Modal lihat -->
<div class="modal fade text-left" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Lihat Data Karyawan</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_nama">Nama</label>
					<input type="text" class="form-control" name="nama" id="lihat_nama" placeholder="Nama Karyawan"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tempat">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" id="lihat_tempat" value=""
						   placeholder="Tempat Lahir" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tl">Tanggal Lahir</label>
					<div class='input-group'>
						<input type="date" class="form-control" name="tanggal_lahir" id="lihat_tl"
							   placeholder="Tanggal Lahir" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_alamat">Alamat</label>
					<textarea class="form-control" id="lihat_alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" readonly></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="lihat_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_jabatan_karyawan">Jabatan</label>
					<input type="text" class="form-control" name="jabatan" id="lihat_jabatan_karyawan"
						   placeholder="Jabatan" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_gaji_pokok">Gaji Perhari</label>
					<input type="text" class="form-control" name="jabatan" id="lihat_gaji_pokok"
						   placeholder="Gaji pokok" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_nohp">Nomor HP/Email</label>
					<input type="text" class="form-control" id="lihat_nohp" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="lihat_norek">Nomor Rekening</label>
					<input type="number" class="form-control" id="lihat_norek" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
			</div>
		</div>
	</div>
</div>


<!-- Modal update -->
<div class="modal fade text-left" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Update Data Karyawan</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('karyawan/update') ?>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_nama">Nama</label>
					<input type="hidden" id="karyawan_id" name="id">
					<input type="text" class="form-control" name="nama" id="edit_nama" placeholder="Nama Karyawan"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tempat">Tempat Lahir</label>
					<input type="text" class="form-control" name="tempat_lahir" id="edit_tempat" placeholder="Tempat Lahir"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tl">Tanggal Lahir</label>
					<div class='input-group'>
						<input type="date" class="form-control" name="tanggal_lahir" id="edit_tl" placeholder="Tanggal Lahir"
							   autocomplete="off" required>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_alamat">Alamat</label>
					<textarea class="form-control" id="edit_alamat" rows="3" name="alamat" placeholder="Alamat"
							  autocomplete="off" required></textarea>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="edit_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" required>
						<div class="input-group-append">
							<span class="input-group-text">
								<span class="ft-calendar"></span>
							</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="jabatan">Jabatan</label>
					<select name="jabatan" id="jabatan" class="form-control">
						<?php
						foreach ($jabatan as $key => $value):
							?>
							<option value="<?= $value['jabatan_id'] ?>"><?= $value['jabatan_nama'] ?></option>
						<?php
						endforeach;
						?>
					</select>
				</fieldset>
				<!--<fieldset class="form-group floating-label-form-group">
					<label for="jabatan">Jabatan</label>
					<select name="jabatan" id="jabatan" class="select2 form-control" style="width: 100%">
						<?php
						foreach ($jabatan as $key => $value):
							?>
							<option value="<?= $value['jabatan_id'] ?>"><?= $value['jabatan_nama'] ?></option>
						<?php
						endforeach;
						?>
					</select>
				</fieldset>-->
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_nohp">Nomor HP/Email</label>
					<input type="text" class="form-control" id="edit_nohp" name="nomor_hp" placeholder="Nomor HP"
						   autocomplete="off" required>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="edit_norek">Nomor Rekening</label>
					<input type="number" class="form-control" id="edit_norek" name="nomor_rekening" placeholder="Nomor rekening boleh kosong"
						   autocomplete="off">
				</fieldset>
			</div>
			<div class="modal-footer">
			
			<!--<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>

			<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink karyawan-hapus" data-toggle="modal" data-target="#hapus" data-dismiss="modal"
					   value="Hapus">
					   <?php endif;?>-->

					   

				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="update" value="Update">

				<!--<button
					class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 karyawan-hapus"
					data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
					title="Hapus data"><i class="ft-trash"></i></button>-->
				
					<!--<?php if ($this->session->userdata('session_hak_akses') == 'manajer'):?>
									<button style="position: relative; left: 20px;"
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2 karyawan-edit"
										data-toggle="modal" data-target="#ubah" value="<?= $value['karyawan_id'] ?>"
										title="Update data"><i class="ft-edit"></i></button>
									<button style="position: relative; left: 20px;"
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 karyawan-hapus"
										data-toggle="modal" data-target="#hapus" value="<?= $value['karyawan_id'] ?>"
										title="Hapus data"><i class="ft-trash"></i></button>
									<?php endif;?>-->

						

			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>


<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Karyawan ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
				<div id="hapuskaryawan">

				</div>
			</div>
		</div>
	</div>
</div>
