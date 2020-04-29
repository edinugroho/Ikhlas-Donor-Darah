<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
  <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
      <div class="row">
        <div class="col col s4 m4 l4">
          <img src="<?php echo base_url('assets/') ?>images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
        </div>
        <div class="col col s8 m8 l8">
          <ul id="profile-dropdown" class="dropdown-content">
            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
            </li>
            <li><a href="<?php echo base_url('petugas/logout'); ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
            </li>
          </ul>
          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('username'); ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
          <p class="user-roal">Petugas Pmi</p>
        </div>
      </div>
    </li>
    <li class="bold"><a href="<?php echo base_url('petugas'); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
    </li>
</ul>
<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
</aside>
    <!-- END LEFT SIDEBAR NAV-->