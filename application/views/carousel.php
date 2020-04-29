<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.css">

<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.js"></script>

<div class="slider fullscreen">
  <ul class="slides">
    <li>
      <img src="https://images.unsplash.com/photo-1495653797063-114787b77b23?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"> <!-- random image -->
      <div class="caption center-align">
        <h3>Ikhlas Donor</h3>
        <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quaerat ab magnam, error, ipsam, sequi explicabo blanditiis qui sunt perspiciatis quasi reprehenderit officia laborum, natus ullam iusto eaque nemo impedit.</h5>
      </div>
    </li>
    <li>
      <img src="https://images.unsplash.com/photo-1536856136534-bb679c52a9aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"> <!-- random image -->
      <div class="caption left-align">
        <h3>Ikhlas Donor</h3>
        <h5 class="light grey-text text-lighten-3">Cepat, Terpercaya, Berlisensi</h5>
      </div>
    </li>
    <li>
      <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"> <!-- random image -->
      <div class="caption right-align">
        <h3>Klik Mulai Untuk menggunakan Fitur</h3>
        <h5 class="light grey-text text-lighten-3">Mulai Aja dulu hehe</h5>
        <a href="<?php echo base_url('welcome/home') ?>" class="btn waves-effect waves-light" type="submit" name="action">Mulai</a>
      </div>
    </li>
  </ul>
</div>

<script>
	$(document).ready(function(){
		$('.slider').slider();
	});
</script>