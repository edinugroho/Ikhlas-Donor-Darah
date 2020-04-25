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
              <h5 class="breadcrumbs-title">Tambah Petugas</h5>
              <ol class="breadcrumbs">
                <li><a href="<?php echo site_url('pmi') ?>">Dashboard</a></li>
                <li><a href="#">Petugas</a></li>
                <li class="active">Tambah Petugas</li>
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
                    <h4 class="header2">Form Tambah Petugas</h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="username" name="username" type="text">
                            <label for="first_name">Username</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" name="password" type="password">
                            <label for="password">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="confirmPassword" name="confirmPassword" type="password">
                            <label for="confirmPassword">Confirm Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama" name="nama" type="text">
                            <label for="nama">Nama Petugas</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button id="tambahPetugas" class="btn cyan waves-effect waves-light right" type="submit" name="action">Tambah
                                <i class="mdi-content-send right"></i>
                              </button>
                              <div class="print-error-msg"></div>
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
  $(document).ready(function() {
    $('#tambahPetugas').click(function(event) {
      event.preventDefault()
      var username = $('#username').val()
      var password = $('#password').val()
      var nama = $('#nama').val()
      var confirmPassword = $('#confirmPassword').val()
      $.ajax({
        url: '<?php echo base_url('');?>pmi/tambahPetugasAction',
        type: 'POST',
        dataType: 'json',
        data: {
          username: username,
          password: password,
          confirmPassword: confirmPassword,
          nama: nama
        },
      })
      .done(function(data) {
        if($.isEmptyObject(data.error)){
          // $(".print-error-msg").css('display','none');
          // alert(data.success);
          Swal.fire({
            title: 'Selamat !',
            text: data.success,
            icon: 'success',
            showConfirmButton : false
          })
        }else{
          // $(".print-error-msg").css('display','block');
          // $(".print-error-msg").html(data.error);
          Swal.fire({
            title: 'Error !',
            text: data.error,
            icon: 'error',
            showConfirmButton : false
          })
        }
        console.log(data);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
    });
  });
</script>