<!-- START MAIN -->
<div id="main">
  <!-- START WRAPPER -->
  <div class="wrapper">
    <?php $this->load->view('pmi/sidebar'); ?>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <section id="content">

      <!--breadcrumbs start-->
      <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey hide-on-large-only">
          <i class="mdi-action-search active"></i>
          <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l12">
              <h5 class="breadcrumbs-title">Tambah Acara</h5>
              <ol class="breadcrumbs">
                <li><a href="<?php echo site_url('pmi') ?>">Dashboard</a></li>
                <li><a href="#">Acara</a></li>
                <li class="active">Tambah Acara</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!--breadcrumbs end-->


      <!--start container-->
      <div class="container">
          <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Form Tambah Acara</h4>
                    <div class="row">
                      <form class="col s12" action="<?php base_url('pmi/tambahAcara'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="namaAcara" name="namaAcara" type="text">
                            <label for="namaAcara">Nama Acara</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <div class="file-field input-field">
                              <div class="btn cyan">
                                <span>File</span>
                                <input name="gambar" type="file">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" name="tanggal" class="datepicker">
                            <label for="password">Tanggal Acara</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea id="alamat" name="deskripsi" class="materialize-textarea"></textarea>
                            <label for="alamat">Deskripsi</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama" name="poin" type="number">
                            <label for="nama">Poin</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button id="tambahPetugas" class="btn cyan waves-effect waves-light right" type="submit" name="action">Tambah
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
  </div>
  <!-- END WRAPPER -->
</div>
<!-- END MAIN --> 
<script>
  $('.datepicker').on('mousedown',function(event){
    event.preventDefault();
  });
</script>
<?php echo $this->session->userdata('message'); ?>