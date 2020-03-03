<div class="alert alert-success" style="display: none" id="add-summary-success-alert" role="alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong> Data Successfuly added.
</div>
<!-- Main content -->
<form enctype="multipart/form-data" name="form" role="form">
    <!-- Input Data  -->
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Calculation Form</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Discount Rate</label>
                        <input class="form-control" type="text" name="dr" id="dr">
                        <input class="form-control" type="hidden" name="id_summary" id="id_summary" value="<?php echo $id_summary?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Payment Amount Term</label>
                        <input class="form-control" type="text" name="pat" id="pat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Term of Payment</label>
                        <select class="form-control" name="top" id="top">
                            <option value="1">1 (Tahunan)</option>
                            <option value="2">2 (Semester)</option>
                            <option value="4">4 (Kuartal)</option>
                            <option value="12">12 (Bulanan)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Awal Bulan / Akhir Bulan</label>
                        <select class="form-control" name="awak" id="awak">
                            <option value="1">Awal Bulan</option>
                            <option value="0">Akhir Bulan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Frekuensi Pembayaran</label>
                        <input type="number" class="form-control" name="frekuensi" id="frekuensi">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Payment Date</label>
                        <input class="form-control" name="pd" type="date" id="pd">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Prepaid</label>
                        <input class="form-control" name="prepaid" type="text" id="prepaid">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            * Wajib diisi
        </div>
    </div>

    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Detail Contract Form</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Status PPN</label>
                        <select class="form-control" name="status_ppn" id="status_ppn">
                            <option value="0">Belum Termasuk PPN</option>
                            <option value="1">Sudah Termasuk PPN</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>PPN %</label>
                        <input class="form-control" type="text" name="ppn" id="ppn">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jumlah Unit</label>
                        <input class="form-control" type="text" name="jumlah_unit" id="jumlah_unit">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Satuan</label>
                        <input class="form-control" name="satuan" type="text" id="satuan">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            * Wajib diisi
        </div>
    </div>

    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Perpanjangan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nilai Asumsi Perpanjang</label>
                        <input class="form-control" type="text" name="nilai_asumsi_perpanjangan" id="nilai_asumsi_perpanjangan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Perpanjang</label>
                        <input class="form-control" type="date" name="tgl_perpanjangan" id="tgl_perpanjangan">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            * Wajib diisi
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <button type="submit" id="add_calculation" class="btn btn-block btn-info">Simpan</button>
        </div>
        <div class="col-md-2">
            <input type="cancel" class="btn btn-block btn-primary" value="Batalkan">
        </div>
    </div>
    <div class="col"></div>

</form>


<!-- Modal Alert Tambah Asset -->
<div class="modal fade" id="modal-alert-tambah-aset">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Aset</h4>
            </div>
            <div class="modal-body">
            <section class="content">
                <div class="container-fluid">
                    <strong>Anda telah berhasil menambahkan aset</strong></br>
                    <strong>Apakah ada penambahan aset dalam no kontrak "<?php echo $nomor_kontrak ?>" ?</strong></br></br>
                    <strong>WAJIB DI PILIH SALAH SATU ! ! !</strong>
                </div>
            </section>
            </div>
            <div class="modal-footer justify-content-between">
                <a href="<?php echo base_url('admin'); ?>">
                    <button type="button" class="btn btn-secondary">Tidak</button>
                </a>
                <a href="<?php echo base_url('admin/summary/'); echo $id_summary ?>">
                    <button type="button" class="btn btn-primary" id="tambah_aset">Iya</button>
                </a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Modal Alert Tambah Asset -->
<!-- /.content -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
            //Date range picker with time picker
        $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
            //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
<script type="text/javascript">
    function reverseNumber(input) {
        return [].map.call(input, function(x) {
            return x;
        }).reverse().join('');
    }

    function plainNumber(number) {
        return number.split('.').join('');
    }

    function splitInDots(input) {

        var value = input.value,
            plain = plainNumber(value),
            reversed = reverseNumber(plain),
            reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
            normal = reverseNumber(reversedWithDots);

        console.log(plain, reversed, reversedWithDots, normal);
        input.value = normal;
    }

    function oneDot(input) {
        var value = input.value,
            value = plainNumber(value);

        if (value.length > 3) {
            value = value.substring(0, value.length - 3) + '.' + value.substring(value.length - 3, value.length);
        }
        console.log(value);
        input.value = value;
    }
</script>