<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #FFFFFF;">
    <img src="<?php echo base_url('assets/'); ?>/image/Logo.png" alt="PSAK73 Logo" class="brand-image"
         style="
          opacity: .8
         ">
         <br/>
    <span class="brand-text font-weight-light"></span>
  </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <h3 class="text-success"><i class="fas fa-user-circle"></i></h3>
            </div>
            <div class="info">
                <b class="d-block text-light"><?php echo $this->session->userdata('ses_nama');?></b>
            </div>
        </div>
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
                    <a href="<?php echo base_url('admin'); ?>" class="nav-link <?php if($title == 'List Kontrak'):?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            List Kontrak
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('schedule'); ?>" class="nav-link <?php if($title == 'List Schedule'):?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            List Schedule
                        </p>
                    </a>
                </li>
				<!-- <li class="nav-item">
                    <a href="<?php echo base_url('report'); ?>" class="nav-link <?php if($title == 'Report'):?> active <?php endif; ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Report
                        </p>
                    </a>
                </li> -->
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
