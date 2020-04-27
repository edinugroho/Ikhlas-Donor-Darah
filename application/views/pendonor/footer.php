<footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
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
  <?php echo $this->session->flashdata('message'); ?>
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