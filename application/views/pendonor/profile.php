<div class="container">
  <div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <!-- <img class="activator" src="<?php echo base_url(); ?>assets/images/user-profile-bg.jpg" alt="user background">                     -->
      </div>
      <figure class="card-profile-image">
      </figure>
      <div class="card-content">
        <div class="row">        
          <div class="col s2 center-align">
            <img src="<?php echo base_url(); ?>assets/images/avatar_pendonor.png" height="120" width="120" alt="profile image" class="circle z-depth-2 responsive-img activator">
          </div>            
          <div class="col s3">                        
            <h4 class="card-title grey-text text-darken-4"><?php echo $this->session->userdata('username');; ?></h4>
            <p class="medium-small grey-text">Pendonor</p>                        
          </div>
          <div class="col s2 center-align">
            <h4 class="card-title grey-text text-darken-4">10+</h4>
            <p class="medium-small grey-text">Work Experience</p>                        
          </div>
          <div class="col s2 center-align">
            <h4 class="card-title grey-text text-darken-4">6</h4>
            <p class="medium-small grey-text">Completed Projects</p>                        
          </div>                    
          <div class="col s2 center-align">
            <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
            <p class="medium-small grey-text">Busness Profit</p>                        
          </div>                    
          <div class="col s1 right-align">
            <a class="btn-floating activator waves-effect waves-light darken-2 right">
              <i class="mdi-action-perm-identity"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="card-reveal">
        <p>
          <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
          <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
        </p>

        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>

        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
        <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
        <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
      </div>
    </div>
  </div>
  <div class="section">
    <div><h5>Daftar Acara Yang Diikuti</h5></div>
      <table>
        <thead>
          <tr>
            <th>Nama Acara</th>
            <th>Gambar</th>
            <th>Tanggal Acara</th>
            <th>Deskripsi</th>
            <th>Poin</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($acaraTerdaftar as $key => $value): ?>
          <tr>
            <td><?php echo $value->nama_acara; ?></td>
            <td><img src="<?php echo $value->gambar; ?>" alt="" heigth='200' width='200'></td>
            <td><?php echo $value->tanggal_acara; ?></td>
            <td><?php echo $value->deskripsi; ?></td>
            <td><?php echo $value->poin; ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
  </div>
</div>