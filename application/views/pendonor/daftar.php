<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Ikhlas Donor Darah</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo base_url('assets/') ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/') ?>js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/') ?>css/custom/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/') ?>js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?php echo base_url('assets/') ?>js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/sweetalert2.css">
	<link href="<?php echo base_url('assets/') ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<div class="section"></div>
<main>
	<center>
		<div class="section"></div>
		
		<h5 class="indigo-text">Daftarkan Akunmu</h5>
		<div class="section"></div>

		<div class="container">
			<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

				<form class="col s12" id="formDaftar" method="post" action="<?php echo base_url('login/daftar') ?>">
					<div class='row'>
						<div class='col s12'>
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12">
							<input id="username" type="text" name="username">
							<label for="username" class="center-align">Username</label>
							<span class="helper-text red-text"><?php echo form_error('username'); ?></span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" name="email">
							<label for="email" class="center-align">Email</label>
							<span class="helper-text red-text"><?php echo form_error('email'); ?></span>							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="nama" type="text" name="nama">
							<label for="nama" class="center-align">Nama Lengkap</label>
							<span class="helper-text red-text"><?php echo form_error('nama'); ?></span>							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="umur" type="number" name="umur">
							<label for="umur" class="center-align">Umur</label>
							<span class="helper-text red-text"><?php echo form_error('umur'); ?></span>							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="no" type="number" name="nohp">
							<label for="nohp" class="center-align">Nomor Hp.</label>
							<span class="helper-text red-text"><?php echo form_error('nohp'); ?></span>							
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" name="alamat" class="materialize-textarea"></textarea>
							<label for="textarea1">Alamat</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="password" type="password" name="password">
							<label for="password">Password</label>
							<span class="helper-text red-text"><?php echo form_error('password'); ?></span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="password-again" type="password" name="confirmPassword">
							<label for="password-again">Password again</label>
							<span class="helper-text red-text"><?php echo form_error('confirmPassword'); ?></span>		
						</div>
						<label style='float: right;'>
							<p>Sudah Memiliki Akun ? | <a class='blue-text' href='<?php echo base_url('login') ?>'><b>Login</b></a></p>
						</label>
					</div>

					<br />
					<center>
						<div class='row'>
							<button type='submit' id="daftar" name='daftar' class='col s12 btn btn-large waves-effect indigo'>Daftar</button>
						</div>
					</center>
				</form>
			</div>
		</div>
	</center>

	<div class="section"></div>
	<div class="section"></div>
</main>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery-1.11.2.min.js"></script>    
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/materialize.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/prism/prism.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/custom-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php echo $this->session->flashdata('message'); ?>
</body>