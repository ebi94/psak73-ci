<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PSAK73 |
        <?php echo $title; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE'); ?>/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      </nav> -->
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php $this->load->view('templates/SideBar'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item active">
                                        <?php echo $title; ?>
                                    </li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <?php $this->load->view($view); ?>
                    </div>
                    <!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <footer class="main-footer">
                <small>Copyright &copy; 2020. All rights reserved.</small>
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 0.1
                </div>
            </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/sparklines/sparkline.js"></script>
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/toastr/toastr.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE'); ?>/dist/js/demo.js"></script>
    <script>
        // USER MANAGEMENT
        $("#user-success-alert").hide();
        $("#user-delete-alert").hide();
        fill_datatable_user();

        function fill_datatable_user() {
            $('#user_list').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "scrollX": true,
                "scrollY": true,
                "ajax": {
                    url: "<?php echo base_url('user/management/list') ?>",
                    type: "GET",
                },
            });
        }

        // SUMMARY MANAGEMENT
        fill_datatable_summary();

        function fill_datatable_summary() {
            $('#user_list').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "scrollX": true,
                "scrollY": true,
                "ajax": {
                    url: "<?php echo base_url('user/admin') ?>",
                    type: "GET",
                },
            });
        }

        //Add User
        $('#add_user').on('click', function() {
            var email = $('#Auth_email').val();
            var password = $('#Auth_password').val();
            var name = $('#Auth_name').val();
            var level = $('#Auth_level').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('user/management/add')?>",
                dataType: "JSON",
                data: {
                    auth_email: email,
                    auth_password: password,
                    auth_name: name,
                    auth_level: level
                },
                success: function(data) {
                    $('[name="auth_email"]').val("");
                    $('[name="auth_password"]').val("");
                    $('[name="auth_name"]').val("");
                    $('[name="auth_level"]').val("");
                    $('#addUserModal').modal('hide');
                    $('#user_list').DataTable().destroy();
                    fill_datatable_user();
                    $("#user-success-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#user-success-alert").slideUp(500);
                    });
                }
            });
            return false;
        });

        // Delete User
        $('#show_data_user').on('click', '.item_user_delete', function() {
            var id_user = $('user_id');

            $('#deleteUserModal').modal('show');
            $('[name="id_user_delete"]').val(id_user);
        });

        //delete record to database
        $('#btn_user_delete').on('click', function() {
            var id_user = $('#id_user_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('user/management/delete')?>",
                dataType: "JSON",
                data: {
                    auth_id: id_user
                },
                success: function(data) {
                    $('[name="id_user_delete"]').val("");
                    $('#deleteUserModal').modal('hide');
                    $('#user_list').DataTable().destroy();
                    fill_datatable_user();
                    $("#user-delete-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#user-delete-alert").slideUp(500);
                    });
                }
            });
            return false;
        });
        // END USER MANAGEMENT

        // ABM SUMMARY MANAGEMENT
        //Add Summary
        $('#add_summary').on('click', function() {
            var namapt = $('#namapt').val();
            var nomorkontrak = $('#nomorkontrak').val();
            var vendor = $('#vendor').val();
            var jenissewa = $('#jenissewa').val();
            var nsa = $('#nsa').val();
            var nsb = $('#nsb').val();
            var nsc1 = $('#nsc1').val();
            var nsc2 = $('#nsc2').val();
            var nsd1 = $('#nsd1').val();
            var nsd2 = $('#nsd2').val();
            var is1 = $('#is1').val();
            var is2 = $('#is2').val();
            var is3 = $('#is3').val();
            var is4 = $('#is4').val();
            var is5 = $('#is5').val();
            var is6 = $('#is6').val();
            var is7 = $('#is7').val();
            var komponen = $('#komponen').val();
            var lokasi = $('#lokasi').val();
            var startdate = $('#startdate').val();
            var enddate = $('#enddate').val();
            var nilaikontrak = $('nilaikontrak').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/do/add')?>",
                dataType: "JSON",
                data: {
                    summary_namapt: namapt,
                    summary_nomorkontrak: nomorkontrak,
                    summary_vendor: vendor,
                    summary_jenissewa: jenissewa,
                    summary_nsa: nsa,
                    summary_nsb: nsb,
                    summary_nsc1: nsc1,
                    summary_nsc2: nsc2,
                    summary_nsd1: nsd1,
                    summary_nsd2: nsd2,
                    summary_is1: is1,
                    summary_is2: is2,
                    summary_is3: is3,
                    summary_is4: is4,
                    summary_is5: is5,
                    summary_is6: is6,
                    summary_is7: is7,
                    summary_komponen: komponen,
                    summary_lokasi: lokasi,
                    summary_startdate: startdate,
                    summary_enddate: enddate,
                    summary_nilaikontrak: nilaikontrak
                },
                success: function(data) {
                    // fill_datatable_summary();
                    $("#add-summary-success-alert").fadeTo(2000, 500).slideUp(500, function() {
                        $("#add-summary-success-alert").slideUp(500).show();
                    });
                },

            });
            return false;
        });
        // END SUMMARY MANAGEMENT
        // START CALCULATION MANAGEMENT
        //Add Calculation
        $('#add_summary_disc').on('click', function() {
            var discountrate = $('#discountrate').val();
            var top = $('#top').val();
            var pat = $('#pat').val();
            var paymentdate = $('#paymentdate').val();
            var awak = $('#awak').val();
            $.ajax({
              alert('ók');
                type: "POST",
                url: "<?php echo site_url('admin/do/adddisc')?>",
                dataType: "JSON",
                data: {
                    calculation_discountrate: discountrate,
                    calculation_top: top,
                    calculation_pat: pat,
                    calculation_paymentdate: paymentdate,
                    calculation_awak: awak
                },
                success: function(data) {
                    // $("#add-summary-disc-success-alert").fadeTo(2000, 500).slideUp(500, function() {
                    //     $("#add-summary-disc-success-alert").slideUp(500).show();
                    // });
                    alert('success');
                },

            });
            return false;
        });

        // END CALCULATION MANAGEMENT
    </script>
</body>

</html>