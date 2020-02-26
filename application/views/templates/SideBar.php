<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url('assets/AdminLTE'); ?>/dist/img/AdminLTELogo.png" alt="PSAK73 Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">PSAK73</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <!-- <li class="nav-item">
          <a href="input" class="nav-link <?php if($title == 'Input'):?> active <?php endif; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Input Data
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url('admin'); ?>" class="nav-link <?php if($title == 'Summary'):?> active <?php endif; ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Summary
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('user/management'); ?>" class="nav-link <?php if($title == 'User Management'):?> active <?php endif; ?>">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              User Management
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('log/out'); ?>" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Sign Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
    