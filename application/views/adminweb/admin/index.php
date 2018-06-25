<div class="row-fluid">
	<div class="span12">
		<div class="portlet box blue">

			<div class="portlet-title">
				<div class="caption"><i class="icon-edit"></i>Admin</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>

			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
					</div>
					<?php
						if ($this->session->flashdata('message')){
							echo "<div class='alert alert-block alert-error show'>
								  <button type='button' class='close' data-dismiss='alert'>×</button>
									 <span>Admin Berhasil Dihapus</span>
									</div>";
						}
						else if($this->session->flashdata('berhasil')){
							echo "<div class='alert alert-block alert-success show'>
								  <button type='button' class='close' data-dismiss='alert'>×</button>
									 <span>Admin Berhasil Disimpan</span>
									</div>";
						}
						else if($this->session->flashdata('update')){
							echo "<div class='alert alert-block alert-success show'>
								  <button type='button' class='close' data-dismiss='alert'>×</button>
									 <span>Admin Berhasil Diupdate</span>
									</div>";
						}
						?>
				</div>

				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Username</th>
							<th>Password</th>
							<th>Phone</th>
							<th>Hak Akses</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no=1;
						if ($data_admin->num_rows()>0) {
							foreach ($data_admin->result_array() as $tampil) { ?>
						<tr >
							<td><?php echo $no;?></td>
							<td><?php echo $tampil['nama_admin'];?></td>
							<td><?php echo $tampil['email'];?></td>
							<td><?php echo $tampil['username'];?></td>
							<td>****************</td>
							<td><?php echo $tampil['phone'];?></td>
							<td><?php echo $tampil['hak_akses'];?></td>
						</tr>
						<?php
						$no++;
						}
						}

						else { ?>
						<tr>
							<td colspan="8">No Result Data</td>
						</tr>
						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
