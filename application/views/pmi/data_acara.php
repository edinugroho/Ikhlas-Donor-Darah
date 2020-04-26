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
              <h5 class="breadcrumbs-title">Data Acara Palang Merah Indonesia</h5>
              <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Acara</a></li>
                <li class="active">Data Acara Palang Merah Indonesia</li>
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
                    <h4 class="header">Data Acara Palang Merah Indonesia</h4>
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nama Acara</th>
                          <th>Gambar</th>
                          <th>Tanggal</th>
                          <th>Deskripsi</th>
                          <th>Poin</th>
                          <th>Penyelenggara</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>Nama Acara</th>
                          <th>Gambar</th>
                          <th>Tanggal</th>
                          <th>Deskripsi</th>
                          <th>Poin</th>
                          <th>Penyelenggara</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>

                      <tbody id="dataPmi">
                        <?php foreach ($acara as $key => $value): ?>
                          <tr>
                            <td><?php echo $value->nama_acara ?></td>
                            <td><img src="<?php echo base_url().$value->gambar; ?>" height="100" width="100" alt=""></td>
                            <td><?php echo $value->tanggal_acara ?></td>
                            <td><?php echo $value->deskripsi ?></td>
                            <td><?php echo $value->poin ?></td>
                            <td><?php echo $value->username ?></td>
                            <td>
                              <a class="btn waves-effect waves-light teal" type="submit" name="action">Edit</a>
                              <a class="btn waves-effect waves-light red darken-4" type="submit" name="action">Hapus</a>
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
<!-- END MAIN --> 
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