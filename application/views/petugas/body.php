<!-- START MAIN -->
<div id="main">
  <!-- START WRAPPER -->
  <div class="loaded">
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
              <h5 class="breadcrumbs-title">Dashboard</h5>
              <ol class="breadcrumbs">
                <li><a href="#">Dashboard</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!--breadcrumbs end-->


      <!--start container-->
      <div class="container">
        <div class="section">
          <div id="card-stats">
            <div class="row">
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content  green white-text">
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                    <h4 class="card-stats-number">566</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                    </p>
                  </div>
                  <div class="card-action  green darken-2">
                    <div id="clients-bar" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content pink lighten-1 white-text">
                    <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                    <h4 class="card-stats-number">1806</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                    </p>
                  </div>
                  <div class="card-action  pink darken-2">
                    <div id="invoice-line" class="center-align"><canvas width="265" height="25" style="display: inline-block; width: 265px; height: 25px; vertical-align: top;"></canvas></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content blue-grey white-text">
                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                    <h4 class="card-stats-number">$806.52</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                    </p>
                  </div>
                  <div class="card-action blue-grey darken-2">
                    <div id="profit-tristate" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content purple white-text">
                    <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                    <h4 class="card-stats-number">$8990.63</h4>
                    <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                    </p>
                  </div>
                  <div class="card-action purple darken-2">
                    <div id="sales-compositebar" class="center-align"><canvas width="214" height="25" style="display: inline-block; width: 214px; height: 25px; vertical-align: top;"></canvas></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row">
            <div class="col s12 m12">
              <div class="card">
                <div class="card-content">
                  <div id="table-datatables">
                    <h4 class="header">Data Peserta Donor PMI</h4>
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nama Pendonor</th>
                          <th>Umur</th>
                          <th>No. HP</th>
                          <th>Nama Acara</th>
                          <th>Status</th>
                          <th>Tanggal Acara</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>Nama Pendonor</th>
                          <th>Umur</th>
                          <th>No. HP</th>
                          <th>Nama Acara</th>
                          <th>Status</th>
                          <th>Tanggal Acara</th>
                          <th></th>
                        </tr>
                      </tfoot>

                      <tbody id="dataPmi">
                        <?php foreach ($peserta as $key => $value): ?>
                          <tr>
                            <td><?php echo $value->nama_pendonor ?></td>
                            <td><?php echo $value->umur_pendonor ?></td>
                            <td><?php echo $value->no_hp ?></td>
                            <td><?php echo $value->nama_acara ?></td>
                            <td><?php echo $value->status ?></td>
                            <td><?php echo $value->tanggal_acara ?></td>
                            <td>
                              <a class="waves-effect waves-light btn modal-trigger teal" href="#modal<?php echo $value->id_pendonor.$value->id_acara ?>">Donor</a>
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
          <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
  </div>
  <!-- END WRAPPER -->
</div>
<?php foreach ($peserta as $key => $value): ?>
  <div id="modal<?php echo $value->id_pendonor.$value->id_acara; ?>" class="modal">
    <div class="modal-content">
      <h4>Pilih Golongan Darah </h4>
      <div class="row">
        <form class="col s12" method="post" action="<?php echo base_url('petugas/prosesDonor') ?>">
          <input type="hidden" value="<?php echo $value->id_pendonor ?>" name="id_pendonor">
          <input type="hidden" value="<?php echo $value->id_acara ?>" name="id_acara">
          <input type="hidden" value="<?php echo $this->session->userdata('id_petugas'); ?>" name="id_petugas">
          <div class="row">
            <div class="input-field col s3">
                <input class="with-gap" value="A" name="golongan_darah" type="radio" id="a<?php echo $value->id_pendonor.$value->id_acara; ?>">
                <label for="a<?php echo $value->id_pendonor.$value->id_acara; ?>">A</label>
            </div>
            <div class="input-field col s3">
                <input class="with-gap" value="B" name="golongan_darah" type="radio" id="b<?php echo $value->id_pendonor.$value->id_acara; ?>">
                <label for="b<?php echo $value->id_pendonor.$value->id_acara; ?>">B</label>
            </div>
            <div class="input-field col s3">
                <input class="with-gap" value="AB" name="golongan_darah" type="radio" id="ab<?php echo $value->id_pendonor.$value->id_acara; ?>">
                <label for="ab<?php echo $value->id_pendonor.$value->id_acara; ?>">AB</label>
            </div>
            <div class="input-field col s3">
                <input class="with-gap" value="O" name="golongan_darah" type="radio" id="o<?php echo $value->id_pendonor.$value->id_acara; ?>">
                <label for="o<?php echo $value->id_pendonor.$value->id_acara; ?>">O</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn cyan waves-effect waves-light teal" type="submit" name="action">Proses</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php endforeach ?>
<!-- END MAIN --> 