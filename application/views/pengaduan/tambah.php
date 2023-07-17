<h1 class="mt-4"><?= $title ?></h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item active"><?= $breadcumb ?></li>
</ol>
<div class="card pt-4 pl-5 pr-5">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group row">
			<label  class="col-sm-3 col-form-label">Isi Laporan</label>
			<div class="col-sm-8">
				<textarea name="isi" class="form-control" id="editor" rows="4" required><?= set_value('tgl') ?></textarea>

				<small id="helpId" class="text-muted"><?php echo form_error('isi', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="foto" class="col-sm-3 col-form-label">Foto</label>
			<div class="col-sm-8">
				<input type="file" name="foto" id="foto" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('foto') ?>" required>
				<small id="helpId" class="text-muted"><?php echo form_error('foto', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<br>
		<div class="form-group row justify-content-center">
			<button type="reset" class="btn btn-danger mr-2">Reset</button>
			<a href="<?= base_url('pengaduan') ?>" class="btn btn-warning mr-2">Kembali</a>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
	ClassicEditor
		.create(document.querySelector('#editor'))
		.then(editor => {
			console.log('Editor berhasil diinisialisasi.', editor);
		})
		.catch(error => {
			console.error('Terjadi kesalahan saat menginisialisasi editor.', error);
		});
</script>
