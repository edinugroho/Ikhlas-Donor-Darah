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
              <h5 class="breadcrumbs-title">Data Petugas</h5>
              <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Petugas</a></li>
                <li class="active">Data Petugas</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!--breadcrumbs end-->


      <!--start container-->
      <div class="container">
        <div class="section">

          <!--DataTables example-->
          <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-content">
                  <div id="table-datatables">
                    <h4 class="header">Data Petugas</h4>
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Nama Pentugas</th>
                          <th>aksi</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>Username</th>
                          <th>Nama Pentugas</th>
                          <th>aksi</th>
                        </tr>
                      </tfoot>

                      <tbody id="dataPmi">
                        <?php foreach ($petugas as $key => $value): ?>
                          <tr>
                            <td><?php echo $value->username ?></td>
                            <td><?php echo $value->nama_petugas ?></td>
                            <td>
                              <a class="waves-effect waves-light btn modal-trigger teal" href="#modal<?php echo $value->id_petugas?>">Edit</a>
                              <a href="<?php echo base_url('pmi/hapusPetugas/').$value->id_petugas; ?>" class="btn waves-effect waves-light red darken-4">Hapus</a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>
            </div>
          </div>

          <br>
          <div class="divider"></div> 


        </div>
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
  </div>
  <!-- END WRAPPER -->
</div>
<!-- modal -->

<!-- Modal Structure -->
<?php foreach ($petugas as $key => $value): ?>
  <div id="modal<?php echo $value->id_petugas; ?>" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <div class="row">
        <form class="col s12" method="post" action="<?php echo base_url('pmi/editPetugas') ?>">
          <div class="row">
            <div class="input-field col s12">
              <input value="<?php echo $value->id_petugas; ?>" name="idPetugas" type="hidden">
              <input id="username" value="<?php echo $value->username; ?>" name="username" type="text">
              <label for="first_name">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="nama" value="<?php echo $value->nama_petugas; ?>" name="nama" type="text">
              <label for="nama">Nama Petugas</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php endforeach ?>
<!-- modal -->
<!-- END MAIN -->
<?php echo $this->session->flashdata('message');; ?>
<script>
  // $(document).ready(function() {
  //   tapilDataPmi()
  //   function tapilDataPmi () {
  //     $.ajax({
  //       url: '<?php echo base_url('') ?>pmi/getDataPmi',
  //       type: 'ajax',
  //       dataType: 'json',
  //       success: function(data) {
  //         var html = ''
  //         var i
  //         for (i = 0; i < data.length; i++) {
  //           html += '<tr>'+
  //           '<td>'+data[i].username+'</td>'+
  //           '<td>'+data[i].alamat+'</td>'+
  //           '<td>'+data[i].alamat+'</td>'+
  //           '<td>'+data[i].alamat+'</td>'+
  //           '</tr>';
  //         }
  //         $('#dataPmi').html(html);
  //       }
  //     })
  //     .done(function() {
  //       console.log("success");
  //     })
  //     .fail(function() {
  //       console.log("error");
  //     })
  //     .always(function() {
  //       console.log("complete");
  //     });
  //   }
  // });
</script>