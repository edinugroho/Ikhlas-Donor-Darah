<div class="container">
  <div class="section">

    <!--DataTables example-->
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <div class="card-content">
            <div id="table-datatables">
              <h4 class="header">UNIT TRANSFUSI DARAH | PALANG MERAH INDONESIA</h4>
              <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                <thead>
                  <tr>
                    <th>Pmi</th>
                    <th>Alamat</th>
                  </tr>
                </thead>

                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                  </tr>
                </tfoot>

                <tbody>
                  <?php foreach ($pmi as $key => $value): ?>
                  <tr>
                    <td><?php echo $value->username; ?></td>
                    <td><?php echo $value->alamat_pmi; ?></td>
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