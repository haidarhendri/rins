<div class="row-fluid">
	<div class="span12">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="icon-reorder"></i>Edit Album</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<div id="form_sample_2" class="form-horizontal">
				<div id="box" class="alert alert-success hide">
						Data Berhasil Diupdate
					</div>
					<div id="box_error" class="alert alert-error hide">
						Data Sudah Ada!
					</div>
					<input type="hidden" name="id_kategorigaleri" id="id_kategorigaleri" value="<?php echo $id_kategorigaleri;?>">

					<div class="control-group">
						<label class="control-label">Album</label>
						<div class="controls">
							<input type="text" name="nama_kategorigaleri" id="nama_kategorigaleri" class="span6 m-wrap" value="<?php echo $nama_kategorigaleri;?>"/>
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
						<a href="<?php echo base_url();?>adminweb/kategorigaleri" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#update").click(function(){
			var id_kategorigaleri = $("#id_kategorigaleri").val();
			var nama_kategorigaleri = $("#nama_kategorigaleri").val();
        $.ajax({
				type:"POST",
				url:"<?php echo base_url();?>adminweb/kategorigaleri_update",
				data:"id_kategorigaleri="+id_kategorigaleri+"&nama_kategorigaleri="+nama_kategorigaleri,
				success:function(data) {
					if (data=="1") {
						$("#box_error").show();
					}
					else {
						$("#box").show();
					}
				}
			});
		});
	});
</script>
