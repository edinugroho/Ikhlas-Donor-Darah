<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l9 s12">
          <h5 class="white-text">Tentang Ikhlas Donor</h5>
          <p class="grey-text text-lighten-4">Kami membangun teknologi yang dapat menyelamatkan nyawa orang lain. Kami membantu masyarakat dalam menjalankan gaya hidup sehat dan menyelamatkan nyawa orang lain melalui donor darah, dengan membangun teknologi yang mempermudah akses terhadap informasi terkait donor darah.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Partner</h5>
          <ul>
            <li><a class="white-text" href="http://www.pmi.or.id/">PMI</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery-1.11.2.min.js"></script>    
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/materialize.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/prism/prism.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/custom-script.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/data-tables/data-tables-script.js"></script> 
  <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/chartjs/chart-script.js"></script>
  <!-- <script src="js/init.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
    $(document).ready(function() {
      $(".dropdown-trigger").dropdown();
      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
          labels: ['A+', 'B+', 'O+', 'AB+'],
          datasets: [{
            label: 'Stok Darah',
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            data: [35, 30, 30, 132]
          }]
        },

        // Configuration options go here
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    });
  </script>
  </body>
</html>