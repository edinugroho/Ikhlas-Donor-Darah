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
              <h5 class="breadcrumbs-title">Tambah PMI</h5>
              <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">PMI</a></li>
                <li class="active">Tambah PMI</li>
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
                    <h4 class="header2">Form Tambah PMI</h4>
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
                            <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
                            <label for="alamat">Alamat</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button id="tambahPmi" class="btn cyan waves-effect waves-light right" type="submit" name="action">Tambah
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
  $(document).ready(function() {
    $('#tambahPmi').click(function(event) {
      event.preventDefault()
      var username = $('#username').val()
      var password = $('#password').val()
      var confirmPassword = $('#confirmPassword').val()
      var alamat = $('#alamat').val()
      $.ajax({
        url: '<?php echo base_url('');?>pmi/tambahPmiAction',
        type: 'POST',
        dataType: 'json',
        data: {
          username: username,
          password: password,
          confirmPassword: confirmPassword,
          alamat: alamat
        },
      })
      .done(function(data) {
        if($.isEmptyObject(data.error)){
          $(".print-error-msg").css('display','none');
          alert(data.success);
        }else{
          $(".print-error-msg").css('display','block');
          $(".print-error-msg").html(data.error);
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