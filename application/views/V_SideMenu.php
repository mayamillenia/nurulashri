<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Info Nurul Ashri</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bullhorn"></i>Info Kajian Muslim<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('KajianMuslim/Newest')?>">Upload Kajian Nurash</a></li>
          <li><a href="<?php echo base_url('KajianMuslim/Kajian')?>">Edit Kajian Nurash</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-calendar-check-o"></i>Event Nurash<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('EventNurash/Upload')?>">Upload Event Nurash</a></li>
          <li><a href="<?php echo base_url('EventNurash/Update')?>">Update Event Nurash</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Info Lain</h3>
    <ul class="nav side-menu">
     <li><a><i class="fa fa-shopping-cart"></i>Nurash Store<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="form.html">Update Nurash Store</a></li>
      </ul>
    </li>
    <li><a><i class=" fa fa-gift"></i>Infaq Dan Sedekah<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="e_commerce.html">Pemasukkan</a></li>
        <li><a href="projects.html">Pengeluaran</a></li>
      </ul>
    </li>
  </ul>
</div>

</div>
<!-- /sidebar menu -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url('assets/images/profil/man.png')?>" class="img_profil">
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="javascript:;">Profile</a></li>
            <li><a href="<?php echo base_url('logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('NurulAshri')?>">Visit Website Nurul Ashri</a>
        </li>

      </ul>
    </nav>
  </div>
</div>
        <!-- /top navigation -->