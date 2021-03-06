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
                    <p class="card-stats-title"><i class="mdi-action-event"></i> Jumlah Acara</p>
                    <h4 class="card-stats-number"><?php echo $jumlahAcara; ?></h4>
                    <!-- <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span> -->
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
                    <p class="card-stats-title"><i class="mdi-social-group-add"></i> Jumlah Pendonor</p>
                    <h4 class="card-stats-number"><?php echo $jumlahPendonor; ?></h4>
                    <!-- <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span> -->
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
                    <p class="card-stats-title"><i class="mdi-maps-location-history"></i> Jumlah Petugas</p>
                    <h4 class="card-stats-number"><?php echo $jumlahPetugas; ?></h4>
                    <!-- <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span> -->
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
                    <p class="card-stats-title"><i class="mdi-maps-local-drink"></i> Total Darah</p>
                    <h4 class="card-stats-number"><?php echo $jumlahDarah ?></h4>
                    <!-- <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span> -->
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
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
      <!--end container-->
    </section>
    <!-- END CONTENT -->
  </div>
  <!-- END WRAPPER -->
</div>
<!-- END MAIN --> 