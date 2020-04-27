<div class="container">
	<form>
		<div class="input-field">
			<input id="search" type="text" placeholder="Search...">
		</div>
	</form>
	<div class="row">
		<?php foreach ($acara as $key => $value): ?>
		<div class="col s12 m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="<?php echo base_url().$value->gambar; ?>">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4"><?php echo $value->nama_acara; ?><i class="material-icons right">more_vert</i></span>
					<p><a href="<?php echo base_url('/pendonor/ikutiAcara/').$value->id_acara; ?>">Ikuti Acara</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"><?php echo $value->nama_acara; ?><i class="material-icons right">close</i></span>
					<p><?php echo $value->deskripsi; ?></p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>