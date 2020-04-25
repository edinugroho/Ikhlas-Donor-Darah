<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/') ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url('assets/') ?>css/nprogress.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/sweetalert2.css">

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" id="myForm" action="<?php echo base_url('login') ?>">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class="row">
              <div class="col s4">
                <input name="role" type="radio" value="pmi" id="pmi" />
                <label for="pmi">PMI</label>
              </div>
              <div class="col s4">
                <input name="role" type="radio" value="pendonor" id="pendonor" />
                <label for="pendonor">Pendonor</label>
              </div>
              <div class="col s4">
                <input name="role" type="radio" value="petugas" id="petugas" />
                <label for="petugas">Petugas</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='text' name='username' id='username' />
                <label for='text'>Username</label>
                <span class="helper-text red-text"><?php echo form_error('username'); ?></span>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input type='password' name='password' id='password' />
                <label for='password'>Password</label>
                <span class="helper-text red-text"><?php echo form_error('username'); ?></span>
              </div>
              <label style='float: right;'>
                <p>Belum memiliki akun ? | <a class='blue-text' href='<?php echo base_url('login/daftar') ?>'><b>Daftar</b></a></p>
              </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' id="login" name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
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
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/nprogress.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <?php echo $this->session->flashdata('notFound'); ?>
  <!-- <script>
    $(document).ready(function() {
      $('#login').click(function() {
        var role = $("input[name='role']:checked").val()
        var username = $("#username").val()
        var password = $("#password").val()
        $.ajax({
          url: '<?php echo base_url(''); ?>/login',
          type: 'post',
          dataType: 'text',
          data: {
            role: role,
            username: username,
            password: password
          },
          beforeSend : function() {
            NProgress.start();
          },
          complete : function() {
            NProgress.done();
          },
        })
        .done(function() {
          console.log('success');
        })
        .fail(function() {
          console.log("error");
        });
      });
    });
  </script> -->
</body>

</html>